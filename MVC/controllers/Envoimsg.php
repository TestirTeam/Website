<?php

require("models/boiteEnvoi.php");

    if (isset($_POST['envoi_btn'])) {
        if (isset($_POST['message'], $_POST['destinataire'],$_POST['objet'])
            AND !empty($_POST['message']) AND !empty($_POST['destinataire']) AND !empty($_POST['objet'])) {
            $destinataire = htmlspecialchars($_POST['destinataire']);
            $message = htmlspecialchars($_POST['message']);
            $objet = htmlspecialchars($_POST['objet']);

            if(isset($_POST['id_desti']) and !empty($_POST['id_desti'])){
                $r=htmlspecialchars($_POST['id_desti']);
            }


            /* 0 la reponses retourner par le tableau*/
            $id_desti = selectDestinataire($db,$destinataire)[0];

            /* 1 la valeur du rowcount retourner par le tableau*/
            if(selectDestinataire($db,$destinataire)[1]==1){
                $id_desti = $id_desti->fetch();
                $id_desti = $id_desti['id_client'];
                $ins = insertMsg($db,$id_desti,$message,$objet);
                $error = "message envoyé !";
            }else{
                $error="Utilisateur inexistant !";
            }


        } else {
            $error = "Veuillez completer les champs";
        }

    }
    $destinataire = showUserList($db);



?>