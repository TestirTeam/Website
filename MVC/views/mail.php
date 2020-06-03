<?php
require ("models/connexiondb.php");
if(isset($_SESSION['id']) and !empty($_SESSION['id'])) {
    require("controllers/Envoimsg.php")
    ?>
    <?php require('header.php')?>


    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="stylesheetMVC/envoi.css">
        <title>Testir</title>
    </head>
    <body>

    <div class="corps">
        <div class="rectangle1"> </div>
        <div class="demande">
            <h1> Envoi Mail - Administrateur Testir </h1>
            <b><p class="prems">  Bienvenue <?= $_SESSION["pseudo"] ?> !</p></b>
            <p class="prems"> Veuillez utiliser la saisie ci-dessous pour envoyer un mail d'aide à Testir !</p>
            <div class="rectangle2"> </div>

        </div >
        <form method="POST">
            <div class="envoie">

                <div id="objet">
                    <label> Objet : </label>
                    <input type="text" name="objet" id="input-objet">
                </div>
                <br/><br/>
                <textarea name="message">
        </textarea>
                <br/><br/>
                <div class="boutons"><a href="#">
                        <p>
                            <span class="bg"></span>
                            <span class="base"></span>
                            <input class="texte" type="submit" value="Envoyer" name="envoi_btn">
                        </p>
                    </a>
                </div>
                <br/><br/>
                <label class="error"><?php if (isset($error)) {
                        echo $error;
                    } ?></label>

            </div>
        </form>
    </div>



    </body>
    <?php require('footer.php')?>
    <?php
}
?>
<script src="javascript/select.js"></script>
