<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheetMVC/mu_parametre.css" />
    <title>Autres paramètres</title>
    <script src="https://kit.fontawesome.com/205308e2d5.js" crossorigin="anonymous"></script>
</head>

<body>

<?php
require('models/connexiondb.php');
?>

<?php require('header.php'); ?>

<div class="row">

    <div class="colonne gauche">
        <div class="profil-header">
            <div class="profil-img">
                <img src="../Images/photoProfil.png" alt="Photo de profil" width="150" height="150" />
            </div>
            <div class="profil-nom">
                <h2><?php echo $_SESSION["pseudo"];?></h2>
            </div>
        </div>

        <div class="menu">
            <p class="p1"><i class="fas fa-user"></i>
                <a href="modifUser" target="_top">Informations de l'utilisateur</a> <br> </p>
            <p> <i class="fas fa-unlock-alt"></i>
                <a href="muSecu" target="_top">Paramètres de connexion et sécurité</a> <br> </p>
            <p><i class="fas fa-cog"></i>
                <a href="muParam" target="_top">Autres paramètres</a> <br> </p>
        </div>
    </div>
    <div class="colonne droite">

        <div class="titre">
            <h1>Autres paramètres</h1>
        </div>

        <div class="informations">
            <a id="cgu" href="mention" target="_top">Voir les conditions d'utilisation</a>

        </div>
    </div>
</div>
</body>

</html>