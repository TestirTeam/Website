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


<form method="POST">
    <div class="envoie">
        <a href="messagerie-reception"> Boite de reception</a>
        <br><br><br>
        <label> Destinataire : </label>

        <select name="destinataire">
            <?php while ($d = $destinataire->fetch()) { ?>
                <option><?= $d['pseudo'] ?></option>
            <?php } ?>
            <option>Admin</option>
        </select>
        <br/><br/>
        <textarea name="message">
        </textarea>
        <br/><br/>
        <input type="submit" value="Envoyer" name="envoi_btn">
        <br/><br/>
        <label class="error"><?php if (isset($error)) {
                echo $error;
            } ?></label>

    </div>
</form>


</body>
    <?php require('footer.php')?>
    <?php
}
    ?>