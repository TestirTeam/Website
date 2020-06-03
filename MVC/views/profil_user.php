<?php

require('models/connexiondb.php');
$resultats = $db->prepare ('SELECT * FROM resultats WHERE id_client = ?');
$resultats->execute(array($_SESSION['id']));

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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu header</title>
    <link rel="stylesheet" href="stylesheetMVC/profil.css"/>
</head>
<body>

<?php require('header.php')?>
<br>
<br>
<div>
    <section>
        <a id="photoCompte"><img src="../Images/PhotoProfil.png" alt="photo de profil"/></a>
        <div>
            <a id="PrenomNom">
                <?php echo $_SESSION["prenom"].' '.$_SESSION["nom"];?>
            </a>
            <a id="Email">
                <?php echo $_SESSION["mail"];?>
            </a>
            <a id="Age">
                Age:  <?php echo $_SESSION["age"];?> ans
            </a>
        </div>
        <div class="Boutton">
            <a href="modifUser" class="bouton1">Modifier</a>
        </div>
        <div class="Boutton">
            <a href="choix-test" class="bouton2">Test</a>
        </div>
        <div class="Boutton">
            <a href="FAQ" class="bouton3">Aide</a>
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
            <img src="../Images/celsius.png" alt="" id="imgf"/>
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
            <img src="../Images/battement.png" alt="" id="imgf"/>
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
            <img src="../Images/vue.png" alt="" id="imgf"/>
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
            <img src="../Images/audio.png" alt="" id="imgf"/>
        </h3>
        <a>
            Pour quantifier les troubles auditifs, nous mesurons la capacité de reconnaisance de tonalité en évaluant la apacité à reproduire une fréquence sonore en chantant ou grâce à une application. Votre score obtenu en fonction de la précision de reconnaissance est de <?php echo $res_son?>.
        </a>
    </div>
</div>
</div>
</body>