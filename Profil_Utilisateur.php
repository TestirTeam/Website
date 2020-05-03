<?php
session_start();
try{
    $bdd = new PDO("mysql:host=localhost;dbname=bdd testir;charset=utf8", "root", "root");
}
catch(Exception $e){
    die("Erreur: " .$e->getMessage());
}
$reponse_id = $bdd->prepare ('SELECT `id_client` FROM client WHERE `email`= ?');
$reponse_id->execute(array('paul.besrest@gmail.com'));
while ($donnees = $reponse_id->fetch())
{
    $id_client=$donnees['id_client'];
}
$reponse_id->closeCursor();
$resultats = $bdd->prepare ('SELECT * FROM resultats WHERE `id_client`=?');
$resultats->execute(array($_SESSION["mail"]));

while ($donnees = $resultats->fetch())
{
    $res_battement=$donnees['battement'];
    $res_temperature=$donnees['temperature'];
    $res_vue=$donnees['vue'];
    $res_son=$donnees['son'];
    $res_personnalite=$donnees['personnalité'];
    $score_battement=$donnees['scoreBatt'];
    $score_temperature=$donnees['scoreTemp'];
    $score_vue=$donnees['scoreVue'];
    $score_son=$donnees['scoreSon'];
}
$resultats->closeCursor();
function scoretotal($scoreSon, $scoreTemp, $scoreBatt, $scoreVue, $scorePers){
    return ($scoreSon+$scoreTemp+$scoreBatt+$scoreVue+$scorePers)/5;
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Menu header</title>
    <link rel="stylesheet" href="styleUtilisateur.css"/>
</head>
<body>

<div class="header">
    <a href="#default" class="logo">
        <div class="igloo">
            <img src="image/LogoTestir2.png" alt="" id="imgTestirHeaderLogo"/>
            <img src="image/TesTirBlanc2.png" alt="" id="imgTestirHeader"/>
        </div>

    </a>
    <div class="header-right">
        <a class="active" href="#home">Accueil</a>
        <a href="#contact">Notre Start-up</a>
        <a href="#about">Nos Services</a>
        <a href="#about">Deconnexion</a>
    </div>
</div>
<br>
<div>
    <section>
        <a id="photoCompte"><img src="image/PhotoProfil.png" alt="photo de profil"/></a>
        <div>
            <a id="PrenomNom">
                <?php echo $_SESSION["prenom"].' '. $_SESSION["nom"];?>
            </a>
            <a id="Email">
                <?php echo $_SESSION["mail"];?>
            </a>
            <a id="Age">
                Age:  <?php echo $_SESSION["age"];?> ans
            </a>
        </div>
        <div class="Boutton">
            <a href="https://www.google.fr/" class="bouton1">Modifier</a>
        </div>
        <div class="Boutton">
            <a href="https://www.google.fr/" class="bouton2">Test</a>
        </div>
        <div class="Boutton">
            <a href="https://www.google.fr/" class="bouton3">Aide</a>
        </div>
    </section>
</div>
<div>
    <span class="heading">
        <h3>
             Résultat des tests
        </h3>
        <p>Score total : <?php echo scoretotal($score_vue,$score_battement,$score_temperature,$score_son,$res_personnalite).'/100'?>
            <p class="description"> Votre examinateur va pourvoir évaluer si vous êtes aptes de porter et d'utiliser une arme selon les résulats de vos tests</p>
        </p>
    </span>
    <div class="row">
        <div class="side">
            <div>Temperature</div>
        </div>
        <div class="middle">
            <div class="bar-container">
                <div class="bar-5" style="width: <?php echo $score_temperature?>%; height: 18px; background-color: #4CAF50;"></div>
            </div>
        </div>
        <div class="side right">
            <div>
                <?php
                echo  $score_temperature.'/100';
                ?>
            </div>
        </div>
        <div class="side">
            <div>Battement</div>
        </div>
        <div class="middle">
            <div class="bar-container">
                <div class="bar-4" style="width: <?php echo $score_battement?>%; height: 18px; background-color: #2196F3;"></div>
            </div>
        </div>
        <div class="side right">
            <div>
                <?php
                echo  $score_battement.'/100';
                ?>
            </div>
        </div>
        <div class="side">
            <div>Vue</div>
        </div>
        <div class="middle">
            <div class="bar-container">
                <div class="bar-3" style="width: <?php echo $score_vue?>%; height: 18px; background-color: #9933ff;"></div>
            </div>
        </div>
        <div class="side right">
            <div>
                <?php
                echo  $score_vue.'/100';
                ?>
            </div>
        </div>
        <div class="side">
            <div>Son</div>
        </div>
        <div class="middle">
            <div class="bar-container">
                <div class="bar-2" style="width: <?php echo $score_son?>%; height: 18px; background-color: #ff9800;"></div>
            </div>
        </div>
        <div class="side right">
            <div>
                <?php
                echo  $score_son.'/100';
                ?>
            </div>
        </div>
        <div class="side">
            <div>Questionnaire</div>
        </div>
        <div class="middle">
            <div class="bar-container">
                <div class="bar-1" style="width: <?php echo $res_personnalite?>%; height: 18px; background-color: #f44336;"></div>
            </div>
        </div>
        <div class="side right">
            <div>
                <?php
                echo  $res_personnalite.'/100';
                ?>
            </div>
        </div>
    </div>
</div>
<div class="titre2">
    <h3>
        Details des tests psychotechniques
    </h3>
</div>
<div class="column">
    <div class="card">
        <h3>
            Temperature
            <img src="image/celsius.png" alt="" id="thermometre"/>
        </h3>
        <a>
            L’être humain est un organisme homéotherme, ce qui signifie que sa température corporelle est quasiment constante. On considère généralement que la température basale usuelle du doigts est de 37 °C. Votre température était de <?php echo $res_temperature?> degré celcius.
        </a>
    </div>
</div>
<div class="column">
    <div class="card">
        <h3>
            Battement
            <img src="image/battement.png" alt="" id="battement"/>
        </h3>
        <a>
            La fréquence cardiaque est le nombre de battements cardiaques (ou pulsations) par unité de temps (généralement la minute). Chez l'adulte en bonne santé, la fréquence cardiaque au repos est d'environ 70 battements par minute. Votre fréquence cardiaque est de <?php echo $res_battement?> battements pas minute.</a>
        </a>
    </div>
</div>
<div class="column">
    <div class="card">
        <h3>
            Vue
            <img src="image/vue.png" alt="" id="oeil"/>
        </h3>
        <a>
            Le temps de réponse, ou temps de réaction, correspond au temps de latence entre la présentation d'un stimulus (auditif, visuel etc.) et la réponse que l'on doit apporter sur ce stimulus. Plus le temps de réaction est bas, plus la réaction est rapide. Vous avez un temps de réaction de <?php echo $res_vue?> millisecondes.
        </a>
    </div>
</div>
<div class="column">
    <div class="card">
        <h3>
            Son
            <img src="image/audio.png" alt="" id="son"/>
        </h3>
        <a>
            Pour quantifier les troubles auditifs, nous mesurons la capacité de reconnaisance de tonalité en évaluant la apacité à reproduire une fréquence sonore en chantant ou grâce à une application. Votre score obtenu en fonction de la précision de reconnaissance est de <?php echo $res_son?>.
        </a>
    </div>
</div>
</div>
</body>


