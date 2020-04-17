<?php
/* on vide la session puis on la detruit*/
session_start();
$_SESSION=array();
session_destroy();
header('Location: http://localhost/WebsiteTestir/Website/Dynamique/PageAccueil.php#page-1');

?>
