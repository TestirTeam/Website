<?php
require ("models/connexiondb.php");
require("header.php");

if(isset($_SESSION['id']) and !empty($_SESSION['id'])) {
    require("models/boiteReception.php");
    $msg = selectMsg($db,$_SESSION['id']);
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
    <b><p class="prems"> <?= $_SESSION["pseudo"] ?> bienvenue dans votre boite de réception  </p></b>
    <p class="prems"> Veuillez retrouver l'historique de vos messages ci-dessous !</p>
    <div class="rectangle2"> </div>

</div>
</div>


<div class="boitemsg">
    <div class="boxenvoi">
        <img src="../Images/message/gmail.png" class="boxmail">
        <a href="messagerie-envoi" class="a-envoi"> <p class="p-envoi">Boite d'envoi</p></a>
    </div>
    <br />

    <?php while($m=$msg->fetch()){
    $pexp= showPseudoDesti($db,$m['id_expediteur'])
    ?>
        <form id="my_form" method="POST" action="lectureMsg">
            <?php if($m['lu']==1){ ?>
            <span style="color: gray">
            <?php }?>


            <b><?= $pexp ?></b> vous a envoyé
                <input type="hidden" name="idmsg" id="idmsg" value=<?=$m['id']?>>
                <input type=submit  value="ce message" >
                </br>
                <label>-------------------------------------------------------------</label>
                </br>
                <b>Objet :</b> <?= $m['objet'] ?>
            <?php if($m['lu']==1){ ?>
            </span>
            <?php }?>
        </form>
    <br /><br />
    <br />

    <?php }?>

</div>




</body>
<?php }
require("footer.php");
?>
