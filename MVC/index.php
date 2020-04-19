<?php
session_start();

$url='';
if(isset($_GET['url'])){
    $url=explode('/',$_GET['url']);

}

if($url==''){
    require('views/AccueilMVC.php');
}elseif($url[0]=='connexion' AND empty($url[1]) AND session_status()==2){
    require ('views/AccueilCOMVC.php');


}elseif ($url[0]=='inscription'AND empty($url[1])){

    require ('views/AccueilINSCRMVC.php');

}elseif ($url[0]=='deconnexion'AND empty($url[1])){

    require ('controllers/deconnexion.php');

}elseif ($url[0]=='monProfil'AND empty($url[1])){

    require ('views/profil_user.php');

}elseif ($url[0]=='modifUser'AND empty($url[1])){

    require('views/modif_user.php');

}elseif ($url[0]=='muSecu'AND empty($url[1])){

    require('views/mu_securite.php');

}elseif ($url[0]=='muParam'AND empty($url[1])){

    require('views/mu_parametre.php');

}else{
    require('views/404error.php');
}







?>

