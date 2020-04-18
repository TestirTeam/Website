<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Style_modif_utilisateur.css" />
    <title>Utilisateur</title>
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
                    <h1>Informations de l'utilisateur</h1>
                </div>

                <form method="post" action="">
                    <div class="formulaire">
                        <fieldset class="profil">
                            <legend>Profil</legend>
                            <p>

                                <label for="pseudo">Votre pseudo</label>
                                <input type="text" name="pseudo" id="pseudo"  value=<?php echo $_SESSION["pseudo"];?>> <br/>

                                <label for="nom">Nom</label>
                                <input type="text" name="nom" id="nom"  value=<?php echo $_SESSION["nom"];?>> <br/>

                                <label for="prenom">Prénom</label>
                                <input type="text" name="prenom" id="prenom"  value=<?php echo $_SESSION["prenom"];?>> <br/>

                                <label for="age">Age</label>
                                <input type="text" name="age" id="age" value=<?php echo $_SESSION["age"];?>> <br/>

                                <label for="anniversaire">Date de naissance </label>
                                <input type="date" id="daten" name="daten"
                                       value=<?php echo $_SESSION["date"];?>> <br/>

                                <label for="pays">Pays </label>
                                <select name="pays" id="pays">
                                    <option value="">France</option>
                                    <option value="Espagne">Espagne</option>
                                    <option value="Angleterre">Angleterre</option>
                                </select> <br/>

                                <label for="adresse">Adresse</label>
                                <input type="text" name="adrs" id="adrs"  value=<?php echo $_SESSION["adrs"];?>> <br/>

                                <label for="sexe">Sexe</label>
                                <select name="sexe" id="sexe">
                                    <option value="féminin">Femme</option>
                                    <option value="masculin">Homme</option>
                                </select> <br/>

                                <input type=submit class="modifier" name="modifier" value="modifier">
                            </p>
                        </fieldset>

                        <fieldset class="mail">
                                <legend>Adresse e-mail</legend>
                            <p>
                                <label for="mail">e-mail</label>
                                <input type="mail" id="mail" pattern=".+@globex.com" size="30" required value=<?php echo $_SESSION["mail"];?>> <br/>
                                <input type=submit class="modifier" name="modifier" value="modifier">
                            </p>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>