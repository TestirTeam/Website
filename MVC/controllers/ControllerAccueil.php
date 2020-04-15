<?php
class ControllerAccueil{
    private $_usermanager;
    private $_view;

    public function __construct($url)
    {
        if(isset($url) && count($url)>1){
            throw new \mysql_xdevapi\Exception('Page Introuvable');

        }else{
            $this->user();
        }
    }

    private function user()
    {
        $this->_usermanager= new UserManager;
        $user=$this->_usermanager->getUser();
        require_once('Website/MVC/views/viewAccueil.php');
    }
}
