<?php
require("models/userinscription.php");

function checkInscription($db){
    /*concatenation de condition pour eviter les mails similaire , valider en manquant des champs etc*/
    if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND!empty($_POST['mail'])
        AND!empty($_POST['mdp']) AND!empty($_POST['mdpc']))
    {
        /* recuperation du formulaire*/
        $pseudo=htmlspecialchars($_POST['pseudo']);
        $nom=htmlspecialchars($_POST['nom']);
        $prenom=htmlspecialchars($_POST['prenom']);
        $age=intval($_POST['age']);
        $date=$_POST['daten'];
        $pays=htmlspecialchars($_POST['pays']);
        $adrs=htmlspecialchars($_POST['adrs']);
        $mail=htmlspecialchars(($_POST['mail']));
        $sexe=$_POST['sexe'];
        $mdp=sha1($_POST['mdp']);
        $mdpc=sha1($_POST['mdpc']);


        $nomlen=strlen($nom);
        $prenomlen=strlen($prenom);
        /*on verifie que le pseudo n'est pas present deja dans la base de données */
        $reqpseudo= selectUserPseudo($db,$pseudo);
        $pseudoexist=$reqpseudo->rowCount();

        if(isset($_POST['condition'])) {
            if ($pseudoexist == 0) {

                if ($prenomlen <= 50 || $nomlen <= 50) {

                    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                        $reqmail = selectUserMail($db,$mail);
                        $mailexist = $reqmail->rowCount();

                        if ($mailexist == 0) {

                            if ($mdp == $mdpc) {
                                $reponse = insertUserInfo($db,$pseudo,$nom, $prenom,$age,$date,$pays,$adrs,$sexe,$mail,$mdp);
                                header('Location: http://localhost/WebsiteTestir/Website/MVC/index.php');
                                 return $error = 'Votre compte a été crée !';


                            } else {
                                return $error = "Vos mots de passes ne correspondent pas !";
                            }
                        } else {
                            return $error = 'le mail entré existe déjà !';
                        }

                    } else {
                        return $error = "Veuillez entrer un mail valide !";
                    }

                } else {
                    return $error = "Votre nom ou prenom doit contenir moin de 50 caracteres !";
                }
            } else {
                return $error = "Le pseudo existe deja !";
            }
        }else{
            return $error="Veuillez accepter les conditions d'utilisation !";
        }
    }else{
        return $error="Tous les champs doivent etre completer !";

    }

}

?>