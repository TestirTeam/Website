<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Paramètres de connexion et sécurité</title>
    <link rel="stylesheet" href="stylesheetMVC/mu_parametre.css" />
    <script src="https://kit.fontawesome.com/205308e2d5.js" crossorigin="anonymous"></script>
</head>

<body>

<?php
require('models/connexiondb.php');
?>

<?php require('header.php') ?>

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
                <a href="../index.php" target="_top">Informations de l'utilisateur</a> <br> </p>
            <p> <i class="fas fa-unlock-alt"></i>
                <a href="../index.php" target="_top">Paramètres de connexion et sécurité</a> <br> </p>
            <p><i class="fas fa-cog"></i>
                <a href="../index.php" target="_top">Autres paramètres</a> <br> </p>
        </div>
    </div>
    <div class="colonne droite">

        <div class="titre">
            <h1>Paramètres de connexion et sécurité</h1>
        </div>

        <form method="post" action="">
            <div class="formulaire">
                <fieldset class="motDePasse">
                    <legend>Changer le mot de passe</legend>
                    <p>
                        <label for="mdpActuel">Mot de passe actuel</label>
                        <input type="text" name="mdp" id="mdp"  value="*****"/> <br/>

                        <label for="nvMdp">Nv mot de passe</label>
                        <input type="text" name="mdp" id="mdp"  value="*****"/> <br/>

                        <label for="nvMdp">Reconfirmer le mdp</label>
                        <input type="text" name="mdp" id="mdp"  value="*****"/> <br/>
                    </p>
                    <input type=submit class="modifier" name="modifier" value="modifier">
                </fieldset>

                <fieldset class="identifiant">
                    <legend>Changer d'identifiant de connexion</legend>
                    <p>
                        <label for="identifiant">Identifiant</label>
                        <input type="text" id="identifiant"
                               pattern=".+@globex.com" size="30" required>
                    </p>
                    <input type=submit class="modifier" name="modifier" value="modifier">
                </fieldset>
            </div>
        </form>



    </div>
</div>

</body>
</html>