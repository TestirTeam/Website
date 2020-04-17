<?php
$db = new PDO("mysql:host=localhost;dbname=bdd_testir;port=3309", "root", "root");

if(isset($_POST['formInscr']))/* detection si le bouton est pressé*/
{
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
        $reqpseudo= $db->prepare('SELECT * FROM client WHERE pseudo= ?');
        $reqpseudo->execute(array($pseudo));
        $pseudoexist=$reqpseudo->rowCount();

        if(isset($_POST['condition'])) {
            if ($pseudoexist == 0) {

                if ($prenomlen <= 50 || $nomlen <= 50) {

                    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                        $reqmail = $db->prepare('SELECT * FROM client WHERE email="' . $mail . '"');
                        $reqmail->execute();
                        $mailexist = $reqmail->rowCount();

                        if ($mailexist == 0) {

                            if ($mdp == $mdpc) {
                                $reponse = $db->prepare("INSERT INTO client(pseudo,nom,prenom,age,date,pays,adresse,sexe,email,mdp) 
                                                                        values ('$pseudo','$nom', '$prenom','$age','$date','$pays','$adrs','$sexe','$mail','$mdp')");
                                $reponse->execute();
                                $error = 'Votre compte a été crée !';
                                header('Location: http://http://localhost/WebsiteTestir/Website/Dynamique/PageAccueil.php');

                            } else {
                                $error = "Vos mots de passes ne correspondent pas !";
                            }
                        } else {
                            $error = 'le mail entré existe déjà !';
                        }

                    } else {
                        $error = "Veuillez entrer un mail valide !";
                    }

                } else {
                    $error = "Votre nom ou prenom doit contenir moin de 50 caracteres !";
                }
            } else {
                $error = "Le pseudo existe deja !";
            }
        }else{
            $error="Veuillez accepter les conditions d'utilisation !";
        }
    }else{
        $error="Tous les champs doivent etre completer !";

    }

}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="AccueilCSSInscr.css">
    <title>Testir</title>
</head>
<body>


<scroll-page id="page-1">
    <div id="background"></div>
    <div id="inscrblanc">
        <h1 class="titreInscr">Inscription</h1>
        <?php
        if(isset($error)){
            echo $error;
        }
        ?>
        <form method="post" action="">
            <h3>Pseudo</h3>
            <input type="text" id="pseudo" name="pseudo">
            <h3>Nom</h3>
            <input type="text" id="nom" name="nom">
            <h3>Prénom</h3>
            <input type="text" id="prenom" name="prenom">
            <div id="dateage">
                <h3>Age  :</h3>
                <input type="text" id="age" name="age">
                <h3>Date de Naissance : </h3>
                <input type="date" id="daten" name="daten">
            </div>
            <h3>Pays</h3>
            <input type="text" id="pays" name="pays">
            <h3>Adresse et code postal</h3>
            <input type="text" id="adrs" name="adrs">
            <h3>sexe</h3>
            <select id="sexe" name="sexe">
                <option value="man">Homme<option/>
                <option value="woman">Femme<option/>
                <select/>
            <h3>Email</h3>
            <input type="text" id="mail" name="mail">
            <h3>Mot de passe</h3>
            <input type="password" id="mdp" name="mdp">
            <h3>Confirmer mot de passe</h3>
            <input type="password" id="mdpc" name="mdpc">
            <div class="resterCo">
                <input type="checkbox" id="resterco" name="Rester Connecté" size="20">
                <label for="resterco">Recevoir par email les newsletter de Testir</label>
            </div>
            <div class="resterCo">
            <input type="checkbox" id="condition" name="condition" size="20">
            <label for="resterco2">J'ai lu et j'accepte les conditions d'utilisations</label>
            </div>
            <input type=submit class="buttonInscr" name="formInscr">
        </form>


    </div>


    <div id="inscr"></div>

    <div class="header">
        <a href="../statique/PageAccueil.html#page-1" class="logo">
            <div class="igloo">
                <img src="../Images/Logo%20Testir.png" alt="" id="imgTestirHeaderLogo"/>
                <img src="../Images/TesTirBlanc....png" alt="" id="imgTestirHeader"/>
            </div>
        </a>
        <div class="header-right">
            <a href="../statique/PageAccueil.html#page-1">Accueil</a>
            <a href="../statique/PageAccueil.html#page-2">Notre Start-up</a>
            <a href="../statique/PageAccueil.html#page-3">Nos Services</a>
            <a href=AccueilCO.php>Connexion</a>
            <a href=AccueilCO.php>Inscription</a>
        </div>
    </div>

</scroll-page>





</body>
</html>