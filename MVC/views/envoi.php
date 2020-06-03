<?php
require ("models/connexiondb.php");
if(isset($_SESSION['id']) and !empty($_SESSION['id'])) {
    require("controllers/Envoimsg.php")
    ?>
    <?php require('header.php') ?>


<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="stylesheetMVC/envoi.css">
    <title>Testir</title>
</head>
<body>

<div class="corps">
    <div class="rectangle1"> </div>
    <div class="demande">
        <h1> Messagerie Testir </h1>
        <b><p class="prems"> <?= $_SESSION["pseudo"] ?> bienvenue dans votre boite d'envoi </p></b>
        <p class="prems"> Veuillez utiliser la saisie ci-dessous pour envoyer un message !</p>
        <div class="rectangle2"> </div>

    </div >
    <form method="POST">
        <div class="envoie">
            <div class="boxenvoi">
                <img src="../Images/message/gmail.png" class="boxmail">
                <a href="messagerie-reception" class="a-recep"> <p class="p-recep">Boite de reception</p></a>
            </div>

            <br><br><br>
            <label> Destinataire : </label>

            <input name="destinataire" class="chosen-value" type="text" value="" placeholder="Taper pour filtrer">
            <ul class="value-list">
                <li>Admin</li>
                <?php while ($d = $destinataire->fetch()) { ?>
                    <li><?= $d['pseudo'] ?></li>
                <?php } ?>
            </ul>

            <br/><br/>
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
    <?php require('footer.php') ?>
    <?php
}
    ?>
<script src="javascript/select.js"></script>
