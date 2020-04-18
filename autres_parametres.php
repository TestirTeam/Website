<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Style_parametre_con.css" />
    <title>Autres paramètres</title>
    <script src="https://kit.fontawesome.com/205308e2d5.js" crossorigin="anonymous"></script>
</head>

<body>

<?php
require('connexion.php');
?>

<div class="header">
    <a href="#default" class="logo">
        <div class="igloo">
            <img src="Images/Logo%20Testir.png" alt="" id="imgTestirHeaderLogo"/>
            <img src="Images/TesTirBlanc....png" alt="" id="imgTestirHeader"/>
        </div>

    </a>
    <div class="header-right">
        <a class="active" href="Dynamique/PageAccueil.php#page-1">Accueil</a>
        <a href="Dynamique/PageAccueil.php#page-2">Notre Start-up</a>
        <a href="Dynamique/PageAccueil.php#page-3">Nos Services</a>

        <!-- Si on detecte une variable mail dans la session c'est qu'il y a connexion-->
        <?php  if(isset($_SESSION['mail'])):     ?>
            <!-- On change le header en consequences -->
            <a href="Dynamique/FelixCompte/Profil_Utilisateur.php">Mon Profil</a>
            <a href="Dynamique/deconnexion.php" id="deco" >Déconnexion</a>

        <?php  else:     ?>
            <!-- Sinon on laisse la possibilité de se connecter-->
            <a href="Dynamique/AccueilCO.php">Connexion</a>
            <a href="Dynamique/AccueilInscr.php">Inscription</a>
        <?php  endif;    ?>

    </div>
</div>

<div class="row">

    <div class="colonne gauche">
        <div class="profil-header">
            <div class="profil-img">
                <img src="Images/photo_profil.png" alt="Photo de profil" width="150" height="150" />
            </div>
            <div class="profil-nom">
                <h2><?php echo $_SESSION["pseudo"];?></h2>
            </div>
        </div>

        <div class="menu">
            <p class="p1"><i class="fas fa-user"></i>
                <a href="modif_utilisateur.php" target="_top">Informations de l'utilisateur</a> <br> </p>
            <p> <i class="fas fa-unlock-alt"></i>
                <a href="parametre_con_secu.php" target="_top">Paramètres de connexion et sécurité</a> <br> </p>
            <p><i class="fas fa-cog"></i>
                <a href="autres_parametres.php" target="_top">Autres paramètres</a> <br> </p>
        </div>
    </div>
    <div class="colonne droite">

        <div class="titre">
            <h1>Autres paramètres</h1>
        </div>

        <div class="informations">
            <a id="cgu" href="CGU" target="_top">Voir les conditions d'utilisation</a>

        </div>
    </div>
</div>
</body>

</html>