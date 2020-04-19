<?php
?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="stylesheetMVC/header.css">
</head>
<div class="header">
    <a href="#page-3" class="logo">
        <div class="igloo">
            <img src="../Images/Logo%20Testir.png" alt="" id="imgTestirHeaderLogo"/>
            <img src="../Images/TesTirBlanc....png" alt="" id="imgTestirHeader"/>
        </div>
    </a>
    <div class="header-right">
        <a href="index.php">Accueil</a>
        <a href="index.php#page-2">Notre Start-up</a>
        <a href="index.php#page-3">Nos Services</a>
        <!-- Si on detecte une variable mail dans la session c'est qu'il y a connexion-->
        <?php  if(isset($_SESSION['mail'])):     ?>
            <!-- On change le header en consequences -->
            <a href=monProfil>Mon Profil</a>
            <a href=deconnexion>Déconnexion</a>

        <?php  else:     ?>
            <!-- Sinon on laisse la possibilité de se connecter-->
            <a href=connexion>Connexion</a>
            <a href=inscription>Inscription</a>
        <?php  endif;    ?>
    </div>
</div>
</html>
