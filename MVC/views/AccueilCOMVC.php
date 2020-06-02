<?php
require("controllers/Connexion.php");
require ("models/connexiondb.php");
if(isset($_POST['formCo']))//Verification du click bouton
{
    $response =checkConnection($db);

}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheetMVC/AccueilCSSCO.css">
    <title>Testir</title>
</head>
<body>


<scroll-page id="page-1">
    <div id="background"></div>
    <div id="coblanc">
        <h1 class="titreCO">Connexion</h1>
        <form method="post" action="">
            <h3>Email</h3>
            <input type="text" name="mailpseuco" id="mailpseuco">
            <h3>Mot de passe</h3>
            <input type="password" name="mdpco" id="mdpco">
            <div class="resterCo">
                <input type="checkbox" id="resterco" name="resterco" size="20">
                <label for="resterco">Rester connecté</label>
            </div>
            <script>
                var errorpop = <?php echo json_encode($response); ?>;
                alert(errorpop)
            </script>
            <input type=submit class="buttonCo" name="formCo" value="Se connecter" >
            <form/>
    </div>

    <div id="co"></div>

    <?php require('header.php') ?>

</scroll-page>





</body>
</html>
