
<?php
require ("models/connexiondb.php");
require("header.php");


if(isset($_SESSION['id']) and !empty($_SESSION['id'])) {
    if(isset($_POST['idmsg']) and !empty($_POST['idmsg'])){
        require("models/boiteReception.php");
        $id_msg=intval($_POST['idmsg']);
        $msg = selectMsgById($db,$id_msg);
        $m=$msg->fetch();
    ?>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="stylesheetMVC/reception.css">
        <title>Testir</title>
    </head>
        <body>

    <div class="corps">
        <div class="rectangle1"> </div>
        <div class="demande">
            <h1> Messagerie Testir </h1>
            <b><p class="prems"> <?= $_SESSION["pseudo"] ?> bienvenue dans votre boite de lecture  </p></b>
            <p class="prems"> lecture du message n° <?= $id_msg ?></p>
            <div class="rectangle2"> </div>

        </div>
    </div>

    <div class="boitemsg">
        <div class="boxenvoi">
            <img src="../Images/message/gmail.png" class="boxmail">
            <a href="../index.php" class="a-envoi"> <p class="p-envoi">Boite de reception</p></a>
        </div>
        </br>
        <?= nl2br($m['message']); ?>
        </br> </br> </br> </br>
        <form id="my_form" method="POST" action="../index.php">
        <div class="boutons"><a href="#">
                <p>
                    <input type="hidden" name="idmsg" id="idmsg" value=<?=$id_msg?>>
                    <span class="bg"></span>
                    <span class="base"></span>
                    <input class="texte" type="submit" value="Supprimer" name="envoi_btn">

                </p>
            </a>
        </div>
        </form>
    </div>

    <br/>

    </body>
<?php
        updateLu($db,$id_msg);
    }
}
require("footer.php");

?>