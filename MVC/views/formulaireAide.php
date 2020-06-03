<?php
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="stylesheetMVC/formulaireAide.css">
    <title>Formulaire</title>
</head>

<body>

<?php require("header.php")?>

<div class="profil-header">
    <div class="profil-img">
        <img src="../Images/photoProfil.png" alt="Photo de profil" width="150" height="150" />
    </div>
    <div class="profil-nom">
        <h2>Marie Lemercier</h2>
        </br>
        <a class="butprof" href="#profil" >Mon Profil</a>
    </div>
</div>

<div class="corps">
    <div class="rectangle1"> </div>
    <div class="demande">
        <h1>F.A.Q</h1>
        <p class="prems"> Quel que soit votre problème, nous sommes là pour vous aider ! </p>
        <p class="prems"> </p>
        <p class="details">Détails</p>
        <div class="rectangle2"> </div>

    </div >
    <form  method="post">
        <ul>
            <li>
                <label for="name">Objet</label>
                <input type="text" id="name" name="user_name" />
            </li>
            <li>
                <label for="mail">J'ai besoin d'aide pour</label>
                <input type="email" id="mail" name="user_mail" />
            </li>
            <li>
                <label for="msg">Description</label>
                <textarea id="msg" name="user_message"></textarea>
            </li>
            <li  >
                <a href="#openModal" class="bouton">Envoyer</a>
            </li>
        </ul>
    </form>
</div>

<div id="openModal" class="modalDialog">
    <div>
        <a href="#close" title="Close" class="close">X</a>
        <h2>Votre demande a bien été envoyée</h2>
        <p>Nous vous répondrons dans les plus brefs délais.</p>
        <p>Merci de votre compréhension.</p>
        <a class="butprof2" href="#profil" >Mon Profil</a>
        <a class="butprof2" href="#home">Accueil</a>
    </div>
</div>


</body>
</html>
