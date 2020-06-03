<?php
session_start();

$url='';
if(isset($_GET['url'])){
    $url=explode('/',$_GET['url']);

}

if($url==''){
    require('views/AccueilMVCV2.php');
}elseif($url[0]=='connexion' AND empty($url[1]) AND empty($_SESSION['mail'])){
    require('views/AccueilCOMVC.php');


}elseif ($url[0]=='inscription'AND empty($url[1])){

    require('views/AccueilINSCRMVC.php');

}elseif ($url[0]=='deconnexion'AND empty($url[1])AND isset($_SESSION['mail'])){

    require('controllers/deconnexion.php');

}elseif ($url[0]=='monProfil'AND empty($url[1])AND isset($_SESSION['mail'])){

    require('views/profil_user.php');

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

}elseif ($url[0]=='FAQ'AND empty($url[1])AND isset($_SESSION['mail'])){

    require('views/faq.php');

}elseif ($url[0]=='messagerie-envoi'AND empty($url[1])AND isset($_SESSION['mail'])){

    require('views/envoi.php');

}elseif ($url[0]=='messagerie-reception'AND empty($url[1])AND isset($_SESSION['mail'])){

    require('views/reception.php');

}elseif ($url[0]=='lectureMsg'AND empty($url[1])AND isset($_SESSION['mail'])){

    require('views/lecture.php');

}elseif ($url[0]=='supprimer'AND empty($url[1])AND isset($_SESSION['mail'])) {

    require('controllers/supprimerMsg.php');

}elseif ($url[0]=='formulaire-test'AND empty($url[1])AND isset($_SESSION['mail'])) {

    require('views/vue_test_personnalite.php');

}elseif ($url[0]=='profilExam'AND empty($url[1])AND isset($_SESSION['mail'])) {

    require('views/profil_exam.php');

}elseif ($url[0]=='wait-test'AND empty($url[1])AND isset($_SESSION['mail'])) {

    require('views/attente_formulaire.php');

}elseif ($url[0]=='mail'AND empty($url[1])AND isset($_SESSION['mail'])) {

    require('views/mail.php');

}elseif ($url[0]=='mention'AND empty($url[1])AND isset($_SESSION['mail'])) {

    require('views/mentions.php');

}elseif ($url[0]=='Testir_Accueil_administrateur'AND empty($url[1])AND isset($_SESSION['mail'])) {

    require('views/Testir_Accueil_administrateur.php');

}elseif ($url[0]=='Testir_Accueil_Annonce_administrateur'AND empty($url[1])AND isset($_SESSION['mail'])) {

    require('views/Testir_Accueil_Annonce_administrateur.php');

}elseif ($url[0]=='Testir_Capteurs_administrateur'AND empty($url[1])AND isset($_SESSION['mail'])) {

    require('views/Testir_Capteurs_administrateur.php');

}elseif ($url[0]=='Testir_Capteurs_Ajouter_administrateur'AND empty($url[1])AND isset($_SESSION['mail'])) {

    require('views/Testir_Capteurs_Ajouter_administrateur.php');

}elseif ($url[0]=='Testir_Capteurs_Consulter_administrateur'AND empty($url[1])AND isset($_SESSION['mail'])) {

    require('views/Testir_Capteurs_Consulter_administrateur.php');

}elseif ($url[0]=='Testir_Capteurs_Modifier_administrateur'AND empty($url[1])AND isset($_SESSION['mail'])) {

    require('views/Testir_Capteurs_Modifier_administrateur.php');

}elseif ($url[0]=='Testir_Capteurs_Supprimer_administrateur'AND empty($url[1])AND isset($_SESSION['mail'])) {

    require('views/Testir_Capteurs_Supprimer_administrateur.php');

}elseif ($url[0]=='Testir_Information_administrateur'AND empty($url[1])AND isset($_SESSION['mail'])) {

    require('views/Testir_Information_administrateur.php');

}elseif ($url[0]=='Testir_Information_CGU_administrateur'AND empty($url[1])AND isset($_SESSION['mail'])) {

    require('views/Testir_Information_CGU_administrateur.php');

}elseif ($url[0]=='Testir_Information_FAQ_administrateur'AND empty($url[1])AND isset($_SESSION['mail'])) {

    require('views/Testir_Information_FAQ_administrateur.php');

}elseif ($url[0]=='Testir_Information_MentionLegales_administrateur'AND empty($url[1])AND isset($_SESSION['mail'])) {

    require('views/Testir_Information_MentionLegales_administrateur.php');

}elseif ($url[0]=='Testir_Messagerie_administrateur'AND empty($url[1])AND isset($_SESSION['mail'])) {

    require('views/Testir_Messagerie_administrateur.php');

}elseif ($url[0]=='Testir_Messagerie_Nouveau_administrateur'AND empty($url[1])AND isset($_SESSION['mail'])) {

    require('views/Testir_Messagerie_Nouveau_administrateur.php');

}elseif ($url[0]=='Testir_Utilisateurs_administrateur'AND empty($url[1])AND isset($_SESSION['mail'])) {

    require('views/Testir_Utilisateurs_administrateur.php');

}else{
    require('views/404error.php');
}







?>

