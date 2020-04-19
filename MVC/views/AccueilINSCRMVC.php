<?php
require("controllers/Inscription.php");
require ("models/connexiondb.php");

if(isset($_POST['formInscr']))/* detection si le bouton est pressé*/
{
    $response =checkInscription($db);

}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheetMVC/AccueilCSSInscr.css">
    <title>Testir</title>
</head>
<body>


<scroll-page id="page-1">
    <div id="background"></div>
    <div id="inscrblanc">
        <h1 class="titreInscr">Inscription</h1>
        <?php
        if(isset($response)){
            echo $response;
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

    <?php require("header.php")?>

</scroll-page>





</body>
</html>