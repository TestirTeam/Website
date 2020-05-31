<?php

require("models/userconnexion.php");

function checkConnection($db){
        $mailpseuco=htmlspecialchars($_POST['mailpseuco']);
        $mdpco=sha1($_POST['mdpco']);

        //Concatenation de condition pour verifier que tout est correct
        if(!empty($_POST['mailpseuco']) AND !empty($_POST['mdpco'])){


            $requserm= selectUserCo($db,$mailpseuco,$mdpco);
            $usermexist= $requserm->rowCount();
            /* Pour utiliser le pseudo comme moyen de connection
            $requserp= $db->prepare('SELECT * FROM client WHERE pseudo= ? AND mdp= ?');
            $requserp->execute(array($mailpseuco,$mdpco));
            $userpexist=$requserp->rowCount();*/

            if($usermexist==1 /*or $userpexist==1*/){
                $userinfo=$requserm->fetch();//Recuperation des infos de l'user correspondant si la connexion est un succes
                $_SESSION["pseudo"]=$userinfo['pseudo'];
                $_SESSION['admin']=$userinfo['admin'];
                $_SESSION["id"]=$userinfo['id_client'];
                $_SESSION["nom"]=$userinfo['nom'];
                $_SESSION["prenom"]=$userinfo['prenom'];
                $_SESSION["age"]=$userinfo['age'];
                $_SESSION["date"]=$userinfo['date'];
                $_SESSION["pays"]=$userinfo['pays'];
                $_SESSION["adrs"]=$userinfo['adresse'];
                $_SESSION["sexe"]=$userinfo['sexe'];
                $_SESSION["mail"]=$mailpseuco;

                header('Location: http://localhost/WebsiteTestir/Website/MVC/');
                return $error="Vous etes connecté !";


            }else{

                return $error="Mauvais mail ou mot de passe !";
            }
        }else{

            return $error="Veuillez completer les champs !";
        }
}
?>