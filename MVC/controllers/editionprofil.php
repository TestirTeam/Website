<?php


$requser = $db->prepare("SELECT * FROM client WHERE id_client = ?");
$requser->execute(array($_SESSION['id']));
$user = $requser->fetch();
if(isset($_POST['pseudomu']) AND !empty($_POST['pseudomu']) AND $_POST['pseudomu'] != $user['pseudo']) {
    $newpseudo = htmlspecialchars($_POST['pseudomu']);
    $insertpseudo = $db->prepare("UPDATE client SET pseudo = ? WHERE id_client = ?");
    $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
    $_SESSION["pseudo"]=$newpseudo;
    header('Location: monProfil');
}
if(isset($_POST['nommu']) AND !empty($_POST['nommu']) AND $_POST['nommu'] != $user['nom']) {
    $newnom = htmlspecialchars($_POST['nommu']);
    $insertnom = $db->prepare("UPDATE client SET nom = ? WHERE id_client = ?");
    $insertnom->execute(array($newnom, $_SESSION['id']));
    $_SESSION["nom"]=$newnom;
    header('Location: monProfil');
}
if(isset($_POST['prenommu']) AND !empty($_POST['prenommu']) AND $_POST['prenommu'] != $user['prenom']) {
    $newprenom = htmlspecialchars($_POST['prenommu']);
    $insertprenom = $db->prepare("UPDATE client SET prenom = ? WHERE id_client = ?");
    $insertprenom->execute(array($newprenom, $_SESSION['id']));
    $_SESSION["prenom"]=$newprenom;
    header('Location: monProfil');
}
if(isset($_POST['agemu']) AND !empty($_POST['agemu']) AND $_POST['agemu'] != $user['age']) {
    $newage = intval($_POST['newage']);
    $insertage = $db->prepare("UPDATE client SET age = ? WHERE id_client = ?");
    $insertage->execute(array($newage, $_SESSION['id']));
    $_SESSION["age"]=$newage;
    header('Location: monProfil');
}
if(isset($_POST['datenmu']) AND !empty($_POST['datenmu']) AND $_POST['datenmu'] != $user['date']) {
    $newdaten = $_POST['newdaten'];
    $insertdaten = $db->prepare("UPDATE client SET date = ? WHERE id_client = ?");
    $insertdaten->execute(array($newdaten, $_SESSION['id']));
    $_SESSION["date"]=$newdaten;
    header('Location: monProfil');
}
if(isset($_POST['paysmu']) AND !empty($_POST['paysmu']) AND $_POST['paysmu'] != $user['pays']) {
    $newpays = htmlspecialchars($_POST['newpays']);
    $insertpays = $db->prepare("UPDATE client SET pays = ? WHERE id_client = ?");
    $insertpays->execute(array($newpays, $_SESSION['id']));
    $_SESSION["pays"]=$newpays;
    header('Location: monProfil');
}
if(isset($_POST['adrsmu']) AND !empty($_POST['adrsmu']) AND $_POST['adrsmu'] != $user['adresse']) {
    $newadrs = htmlspecialchars($_POST['newadrs']);
    $insertadrs = $db->prepare("UPDATE client SET adresse = ? WHERE id_client = ?");
    $insertadrs->execute(array($newage, $_SESSION['id']));
    $_SESSION["adrs"]=$newadrs;
    header('Location: monProfil');
}
if(isset($_POST['sexemu']) AND !empty($_POST['sexemu']) AND $_POST['sexemu'] != $user['sexe']) {
    $newsexe = htmlspecialchars($_POST['newsexe']);
    $insertsexe = $db->prepare("UPDATE client SET sexe = ? WHERE id_client = ?");
    $insertsexe->execute(array($newsexe, $_SESSION['id']));
    $_SESSION["sexe"]=$newsexe;
    header('Location: monProfil');
}
if(isset($_POST['mailmu']) AND !empty($_POST['mailmu']) AND $_POST['mailmu'] != $user['email']) {
    $newmail = htmlspecialchars($_POST['newmail']);
    $insertmail = $db->prepare("UPDATE client SET email = ? WHERE id_client = ?");
    $insertmail->execute(array($newmail, $_SESSION['id']));
    $_SESSION["mail"]=$newmail;
    header('Location: monProfil');
}
/*
if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2'])) {
    $mdp1 = sha1($_POST['newmdp1']);
    $mdp2 = sha1($_POST['newmdp2']);
    if($mdp1 == $mdp2) {
        $insertmdp = $bdd->prepare("UPDATE client SET mdp = ? WHERE id_client = ?");
        $insertmdp->execute(array($mdp1, $_SESSION['id']));
        header('Location: monProfil');
    } else {
        $msg = "Vos deux mdp ne correspondent pas !";
    }
}*/
?>