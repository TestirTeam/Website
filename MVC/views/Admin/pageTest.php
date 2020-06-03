<?php
// base de données
$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$requeteCapteur = $bdd->query('SELECT * FROM capteur');
$Capteur = $requeteCapteur->fetch();

?>

<?php 

function capteurAffichage() {
    while ( $donnees = $requeteCapteur->fetch()) {
        echo "string" ;
    }
}


?>

<!DOCTYPE html>
<html>

    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
        <title> Exercice </title>
    </head>


    <body>
        <!-- Corps de la page -->
	<p>
	<h1> Paul BESREST </h1>
	une image :
	<br />
	<a href="../../index.php"><img src= "../../index.php" alt="photo discord"/></a>
	</p>

    <h2>Page de test</h2>
        
     <p>
        Cette page contient du code HTML avec des balises PHP.<br />
        <?php /* Insérer du code PHP ici */ ?>
        Voici quelques petits tests :
    </p>
        
    <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
    </ul>
        
    <?php
    /* Encore du PHP
    Toujours du PHP */
    ?>

    <p>
        Cette ligne a été écrite entièrement en HTML.<br />
        <?php echo "Celle-ci a été écvxcvcxvxcen PHP."; ?>
    </p>

    </body>
</html>
