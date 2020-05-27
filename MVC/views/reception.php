<?php
require ("models/connexiondb.php");
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

<?php while($m=$msg->fetch()){
    $pexp= showPseudoDesti($db,$m['id_destinataire'])
    ?>
    <b><?= $pexp ?></b> vous a envoyé :
    <br /><br />
    <?= nl2br($m['message']) ?>
    <br />


<?php }?>
</body>
<?php }?>
