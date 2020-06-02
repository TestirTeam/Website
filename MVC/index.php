<?php
session_start();

$url='';
if(isset($_GET['url'])){
    $url=explode('/',$_GET['url']);

}

if($url==''){
    require('views/AccueilMVCV2.php');
}elseif($url[0]=='connexion' AND empty($url[1]) AND empty($_SESSION['mail'])){
    require ('views/AccueilCOMVC.php');


}elseif ($url[0]=='inscription'AND empty($url[1])){

    require ('views/AccueilINSCRMVC.php');

}elseif ($url[0]=='deconnexion'AND empty($url[1])AND isset($_SESSION['mail'])){

    require ('controllers/deconnexion.php');

}elseif ($url[0]=='monProfil'AND empty($url[1])AND isset($_SESSION['mail'])){

    require ('views/profil_user.php');

}elseif ($url[0]=='modifUser'AND empty($url[1])AND isset($_SESSION['mail'])){

    require('views/modif_user.php');

}elseif ($url[0]=='muSecu'AND empty($url[1])AND isset($_SESSION['mail'])){

    require('views/mu_securite.php');

}elseif ($url[0]=='muParam'AND empty($url[1])AND isset($_SESSION['mail'])){

    require('views/mu_parametre.php');


}elseif ($url[0]=='choix-test'AND empty($url[1])AND isset($_SESSION['mail'])){

    require('views/choix_tests.php');


}elseif ($url[0]=='test-son'AND empty($url[1])AND isset($_SESSION['mail'])){

    require('views/test_son.php');

}elseif ($url[0]=='test-cardiaque'AND empty($url[1])AND isset($_SESSION['mail'])){

    require('views/test_cardiaque.php');

}elseif ($url[0]=='test-temp'AND empty($url[1])AND isset($_SESSION['mail'])){

    require('views/test_temp.php');

}elseif ($url[0]=='test-vue'AND empty($url[1])AND isset($_SESSION['mail'])){

    require('views/test_vue.php');

}elseif ($url[0]=='formulaire-aide'AND empty($url[1])AND isset($_SESSION['mail'])){

    require('views/formulaireAide.php');

}elseif ($url[0]=='messagerie-envoi'AND empty($url[1])AND isset($_SESSION['mail'])){

    require('views/envoi.php');

}elseif ($url[0]=='messagerie-reception'AND empty($url[1])AND isset($_SESSION['mail'])){

    require('views/reception.php');

}elseif ($url[0]=='lectureMsg'AND empty($url[1])AND isset($_SESSION['mail'])){

    require('views/lecture.php');

}elseif ($url[0]=='supprimer'AND empty($url[1])AND isset($_SESSION['mail'])) {

    require('controllers/supprimerMsg.php');

}elseif ($url[0]=='administrateur'AND empty($url[1])AND isset($_SESSION['mail'])) {

    require('views/Admin/Testir_Accueil_administrateur.php');

}elseif ($url[0]=='formulaire-test'AND empty($url[1])AND isset($_SESSION['mail'])) {

    require('views/vue_test_personnalite.php');

}elseif ($url[0]=='profilExam'AND empty($url[1])AND isset($_SESSION['mail'])) {

    require('views/profil_exam.php');

}elseif ($url[0]=='wait-test'AND empty($url[1])AND isset($_SESSION['mail'])) {

    require('views/attente_formulaire.php');

}else{
    require('views/404error.php');
}







?>

