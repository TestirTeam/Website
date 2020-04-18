<?php
/* on vide la session puis on la detruit*/
session_start();
$_SESSION=array();
session_destroy();
header('Location: http://localhost:63342/Testir/Website/Dynamique/PageAccueil.php');

?>
