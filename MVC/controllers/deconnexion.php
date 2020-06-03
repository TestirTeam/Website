<?php
session_start();
$_SESSION=array();
session_destroy();
header('Location: https://testir-website.herokuapp.com/MVC/index.php');

?>