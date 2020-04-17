<?php
session_start();
$db = new PDO("mysql:host=localhost;dbname=bdd_testir;port=3309", "root", "root");

if (!empty($_GET['page']) AND is_file('controllers/'.$_GET['page'].'.php')){

    include('controllers/'.$_GET['page'].'.php');

    } else{
        require('views/AccueilMVC.php');

    }


?>