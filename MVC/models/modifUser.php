<?php

function modifInDb($db,$inputname,$dbvalue,$userfetch){
    if(isset($_POST[$inputname]) AND !empty($_POST[$inputname]) AND $_POST[$inputname] != $userfetch[$dbvalue]) {
        $newvalue = htmlspecialchars($_POST[$inputname]);
        $insertvalue = $db->prepare("UPDATE client SET".$dbvalue." = ? WHERE id_client = ?");
        $insertvalue->execute(array($newvalue, $_SESSION['id']));
        header('Location: monProfil');
    }
}
?>