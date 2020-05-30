<?php
require ("models/connexiondb.php");
require ("header.php");

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
    <a href="messagerie-envoi"> Boite d'envoi</a>
    <br /><br />

    <?php while($m=$msg->fetch()){
    $pexp= showPseudoDesti($db,$m['id_destinataire'])
    ?>
    <b><?= $pexp ?></b> vous a envoyé :
    <br /><br />
    <?= nl2br($m['message']) ?>
    <br />

    <?php }?>

</div>




</body>
<?php }
require ("footer.php");
?>
