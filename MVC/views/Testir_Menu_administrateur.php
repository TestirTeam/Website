

<?php require("header.php") ?>

</br> </br> </br></br>

<nav>
    <h2 id="nomAdministrateur"> <?= $_SESSION['prenom']?>  <?= $_SESSION['nom']?> </h2>

    <ul>
        <a href="Testir_Capteurs_administrateur"> CAPTEUR </a>
        <a href="Testir_Information_administrateur"> FORUM </a>
        <a href="Testir_Messagerie_administrateur"> MESSAGERIE </a>
        <a href="Testir_Accueil_administrateur"> STATISTIQUES </a>
        <a href="Testir_Utilisateurs_administrateur"> UTILISATEURS </a>
    </ul>
</nav>
