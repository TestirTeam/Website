<?php
?>

<!DOCTYPE html>
<html>
<title>TESTIR</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="stylesheetMVC/AccueilV2.css">
<style>
    @font-face {font-family: "Apple SD Gothic Neo"; src: url("//db.onlinewebfonts.com/t/67680f2eb947c5cbd58b40961b4a61e9.eot"); src: url("//db.onlinewebfonts.com/t/67680f2eb947c5cbd58b40961b4a61e9.eot?#iefix") format("embedded-opentype"), url("//db.onlinewebfonts.com/t/67680f2eb947c5cbd58b40961b4a61e9.woff2") format("woff2"), url("//db.onlinewebfonts.com/t/67680f2eb947c5cbd58b40961b4a61e9.woff") format("woff"), url("//db.onlinewebfonts.com/t/67680f2eb947c5cbd58b40961b4a61e9.ttf") format("truetype"), url("//db.onlinewebfonts.com/t/67680f2eb947c5cbd58b40961b4a61e9.svg#Apple SD Gothic Neo") format("svg"); }
    @font-face {font-family: "MuseoW01-900"; src: url("//db.onlinewebfonts.com/t/4cc9d692753925335e7af83ecf6e6815.eot"); src: url("//db.onlinewebfonts.com/t/4cc9d692753925335e7af83ecf6e6815.eot?#iefix") format("embedded-opentype"), url("//db.onlinewebfonts.com/t/4cc9d692753925335e7af83ecf6e6815.woff2") format("woff2"), url("//db.onlinewebfonts.com/t/4cc9d692753925335e7af83ecf6e6815.woff") format("woff"), url("//db.onlinewebfonts.com/t/4cc9d692753925335e7af83ecf6e6815.ttf") format("truetype"), url("//db.onlinewebfonts.com/t/4cc9d692753925335e7af83ecf6e6815.svg#MuseoW01-900") format("svg"); }
    body {font-family: "Times New Roman", Georgia, Serif;background-color: #0d0d0d}
    h1, h2, h3, h4, h5, h6 {
        font-family: "MuseoW01-900";
        letter-spacing: 5px;
        color: darkred;
    }
    h1{
        color: white;
        align-content: center;
        font-size: 3em;

    }
    p{
        color: white;
    }
    .disp{
        display: flex;
        flex-wrap: wrap;
        width: 70%;

    }
    #bvn{
        margin-right: 5%;
    }
</style>
<body>

<?php require('header.php')?>
<!-- Header -->
<div class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
    <img class="w3-image filtre" src="../Images/fond.png" alt="" width="1600" height="800">
    <div class="w3-display-middle w3-padding-large  disp">
        <h1 id="bvn">Bienvenue sur</h1><img src="../Images/TesTirBlanc.png" alt="" width="220" height="80">
        <h1>Pour améliorer vos performances de tirs, rejoignez-nous!</h1>
    </div>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

    <!-- About Section -->
    <div class="w3-row w3-padding-64 page-2" id="page-2">
        <div class="w3-col m6 w3-padding-large w3-hide-small">
            <img src="../Images/startup.png" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="400">
        </div>

        <div class="w3-col m6 w3-padding-large">
            <h2 class="w3-center">Notre Start-Up</h2><br>
            <h5 class="w3-center">since 2019</h5>
            <p class="w3-large">En France, le port d’arme est en grande partie réglementé. Cependant, des dérapages et des accidents subsistent encore. Une erreur, une balle perdue et c’est un corps qui s’effondre. Alors qu’aux Etats-Unis les tueries meurtrières ne cessent d’augmenter, il est impensable d'être encore des témoins passifs d'accidents causés par le manque de maîtrise d'une arme à feu.
                Afin de limiter ces dérives, l’entreprise Infinite Measures a mandaté notre start up, Testir, pour lui proposer une gamme de tests visant à jauger les qualités tant physiques que psychologiques des détenteurs d'armes. Infinite Measures nous a sélectionné car nous sommes les seuls, à ce jour, à offrir ce type de tests sur le marché français. </p>
            <p class="w3-large w3-text-grey w3-hide-medium w3-opacity">Notre objectif est de faire en sorte que les détenteurs d’arme à feu aient une parfaite maîtrise de leurs armes, réduisant ainsi au maximum le risque d’accident.
            </p>
        </div>
    </div>

    <hr>

    <!-- Menu Section -->
    <div class="w3-row w3-padding-64" id="page-3">
        <div class="w3-col l6 w3-padding-large">
            <h2 class="w3-center">Nos Clients</h2><br>
            <h4>Chasseurs</h4>
            <p class="w3-text-grey">Autorisation pour exercer la chasse</p><br>

            <h4>Particuliers</h4>
            <p class="w3-text-grey">Pratique du tir en loisir ou sportif</p><br>

            <h4>Armée</h4>
            <p class="w3-text-grey">Maitrise basique de l'arme pour les recrues</p><br>

            <h4>Police Nationale</h4>
            <p class="w3-text-grey">Maitrise arme de poing pour une utilisation en service</p><br>

        </div>

        <div class="w3-col l6 w3-padding-large">
            <img src="../Images/client.png" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:105%">
        </div>
    </div>

    <hr>




</div>

<?php require('footer.php')?>

</body>
</html>