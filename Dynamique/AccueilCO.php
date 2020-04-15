<?php
//demarrage de la session de connexion
session_start();
$db = new PDO("mysql:host=localhost;dbname=bdd_testir;port=3309", "root", "root");

if(isset($_POST['formCo']))//Verification du click bouton
{
    $mailpseuco=htmlspecialchars($_POST['mailpseuco']);
    $mdpco=sha1($_POST['mdpco']);

    //Concatenation de condition pour verifier que tout est correct
    if(!empty($_POST['mailpseuco']) AND !empty($_POST['mdpco'])){

        $requserm= $db->prepare("SELECT * FROM client WHERE email= ? AND mdp= ?");
        $requserm->execute(array($mailpseuco,$mdpco));
        $usermexist= $requserm->rowCount();
        /* Pour utiliser le pseudo comme moyen de connection
        $requserp= $db->prepare('SELECT * FROM client WHERE pseudo= ? AND mdp= ?');
        $requserp->execute(array($mailpseuco,$mdpco));
        $userpexist=$requserp->rowCount();*/

        if($usermexist==1 /*or $userpexist==1*/){
            $userinfo=$requserm->fetch();//Recuperation des infos de l'user correspondant si la connexion est un succes
            $_SESSION["pseudo"]=$userinfo['pseudo'];
            $_SESSION["nom"]=$userinfo['nom'];
            $_SESSION["prenom"]=$userinfo['prenom'];
            $_SESSION["date"]=$userinfo['date'];
            $_SESSION["pays"]=$userinfo['pays'];
            $_SESSION["adrs"]=$userinfo['adresse'];
            $_SESSION["sexe"]=$userinfo['sexe'];
            $_SESSION["mail"]=$mailpseuco;


            $error="Vous etes connecté !";
            header('Location: http://localhost:63342/WebsiteTestir/Dynamique/PageAccueil.php?_ijt=cm5k50v2klbijrp8tn0a1nhtkl');

        }else{

            $error="Mauvais mail ou mot de passe !";
        }
    }else{
        $error="Veuillez completer les champs !";
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="AccueilCSSCO.css">
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
                var errorpop = <?php echo json_encode($error); ?>;
                alert(errorpop)
            </script>
            <input type=submit class="buttonCo" name="formCo" value="Se connecter" >
            <form/>
    </div>

    <div id="co"></div>

    <div class="header">
        <a href="../statique/PageAccueil.html#page-1" class="logo">
            <div class="igloo">
                <img src="../Images/Logo%20Testir.png" alt="" id="imgTestirHeaderLogo"/>
                <img src="../Images/TesTirBlanc....png" alt="" id="imgTestirHeader"/>
            </div>
        </a>
        <div class="header-right">
            <a href="../statique/PageAccueil.html#page-1">Accueil</a>
            <a href="../statique/PageAccueil.html#page-2">Notre Start-up</a>
            <a href="../statique/PageAccueil.html#page-3">Nos Services</a>
            <a href=AccueilCO.php>Connexion</a>
            <a href=AccueilInscr.php>Inscription</a>
        </div>
    </div>

</scroll-page>





</body>
</html>
