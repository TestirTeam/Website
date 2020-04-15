<?php
//Session qui recupère les infos de l'user connecté
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="AccueilCSS.css">
    <title>Testir</title>
</head>
<body>


<scroll-page id="page-1">

    <div id="background">

    </div>
    <div id="MsgBienvenu">
        <div id="bvnTestir">
            <h1 id="bvnsur" style="font-size: 30px">Bienvenue sur</h1>
            <img src="../Images/TesTirBlanc....png" alt="" id="imgTestirMsg"/>
        </div>
        <h2>Pour améliorer vos performances </h2>
        <h2 id="detir">de tirs, rejoignez-nous!</h2>
    </div>
    <div>
        <img src="../Images/serviceUP.png" alt="" id="imgserviceUP" />
    </div>

    <div class="header">
        <a href="#page-3" class="logo">
            <div class="igloo">
                <img src="../Images/Logo%20Testir.png" alt="" id="imgTestirHeaderLogo"/>
                <img src="../Images/TesTirBlanc....png" alt="" id="imgTestirHeader"/>
            </div>
        </a>
        <div class="header-right">
            <a href="#page-1">Accueil</a>
            <a href="#page-2">Notre Start-up</a>
            <a href="#page-3">Nos Services</a>
            <!-- Si on detecte une variable mail dans la session c'est qu'il y a connexion-->
            <?php  if(isset($_SESSION['mail'])):     ?>
                <!-- On change le header en consequences -->
                <a href=monProfil.php>Mon Profil</a>
                <a href=deconnexion.php id="deco" >Déconnexion</a>

            <?php  else:     ?>
                <!-- Sinon on laisse la possibilité de se connecter-->
                <a href=AccueilCO.php>Connexion</a>
                <a href=AccueilInscr.php>Inscription</a>
            <?php  endif;    ?>
        </div>
    </div>





</scroll-page>
<scroll-page id="page-2">

    <div>
        <img src="../Images/Notre%20start-up.png" alt="" id="imgnotrestart" />
    </div>
    <div>
        <img src="../Images/serviceDOWN.png" alt="" id="imgserviceDOWN" />
    </div>

</scroll-page>
<scroll-page id="page-3">
    <div class="nosclients">
        <img src="../Images/nosclients.png" alt="" id="imgnosclients" />
    </div>
    <div id="footer">
        <div class="logoreseau">
            <img src="../Images/Logo_Reseau.png" alt="" id="imgReseauFoot"/>
        </div>
        <div class="traitFoot"></div>
    </div>
</scroll-page>




</body>
</html>
