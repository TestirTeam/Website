<?php
Class Router {
    private $_ctrl;
    private $_view;

    public function routeReq(){
        try {
            //CHARGEMENT AUTOMATIQUE DES CLASSES
            spl_autoload_register(function ($class){
                require_once("Website/MVC/models/".$class.".php");
            });
            $url='';
            if(isset($_GET['url']))
            {
                $url=explode('/',filter_var($_GET['url'],FILTER_SANITIZE_URL));
                $controller=ucfirst((strtolower($url[0])));
                $controllerClasse= "Controller".$controller;
                $controllerFile ="Website/MVC/controllers/".$controller.".php";
                if(file_exists($controllerFile)){
                    require_once($controllerFile);
                    $this->_ctrl=new $controllerClasse($url);
                }else{
                    throw new Exception('Page Introuvable ZEBI !');
                }
            }else{
                require_once("Website/MVC/controllers/ControllerAccueil.php");
                $this->_ctrl=new ControllerAccueil($url);

            }

        }catch (Exception $e){
            $errorMsg=$e->getMessage();
            require_once('Website/MVC/views/viewError.php');

        }
    }
}