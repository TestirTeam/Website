<?php
require ("models/connexiondb.php");


if(isset($_SESSION['id']) and !empty($_SESSION['id'])) {
    if(isset($_POST['idmsg']) and !empty($_POST['idmsg'])) {
        require("models/boiteReception.php");
        $id_msg = intval($_POST['idmsg']);
        $msg = supprimerMsg($db, $id_msg);
        header('Location:messagerie-reception');

    }
}
    ?>