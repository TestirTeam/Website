<?php
/* on vide la session puis on la detruit*/
session_start();
$_SESSION=array();
session_destroy();
header('Location: http://localhost:63342/WebsiteTestir/Dynamique/PageAccueil.php?_ijt=cm5k50v2klbijrp8tn0a1nhtkl');

?>
