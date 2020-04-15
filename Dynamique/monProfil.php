<?php
session_start()
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Testir</title>
</head>
<body>
<h1>Profil de <?php echo $_SESSION['nom'].' '.$_SESSION['prenom'];?></h1>
<h2>Pseudo : <?php echo $_SESSION['pseudo'];?></h2>
<h2>Nom : <?php echo $_SESSION['nom'];?></h2>
<h2>Prenom : <?php echo $_SESSION['prenom'];?></h2>
<h2>Date de naissance : <?php echo $_SESSION['date'];?></h2>
<h2>Pays : <?php echo $_SESSION['pays'];?></h2>
<h2>Adresse :<?php echo $_SESSION['adrs'];?> </h2>
<h2>Sexe : <?php echo $_SESSION['sexe'];?></h2>
<h2>Mail : <?php echo $_SESSION['mail'];?></h2>
</body>
</html>
