

<?php

//menu

function utilisateurListe() {
	$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
	if (isset($_POST['nomUtilisateurListe'])) {
		$requeteNomUtilisateur = $bdd->prepare('SELECT * FROM client WHERE nom LIKE ? ORDER BY nom');
		$requeteNomUtilisateur->execute(array("%" . htmlspecialchars($_POST['nomUtilisateurListe']) . "%"));
	}
	else{
		$requeteNomUtilisateur = $bdd->query('SELECT * FROM client ORDER BY nom');
	}
	while ($nomUtilisateur = $requeteNomUtilisateur->fetch()) {
		echo '
		<li>
			<form method="post" action="Testir_Utilisateurs_administrateur.php" >
				<input type="submit" class="submit" value="' . $nomUtilisateur['nom'] .' '. $nomUtilisateur['prenom']. '" >
				<input type="hidden" name="nomUtilisateur" value="' . $nomUtilisateur['nom'] . '">
				<input type="hidden" name="prenomUtilisateur" value="' . $nomUtilisateur['prenom'] . '">
				<input type="hidden" name="emailUtilisateur" value="' . $nomUtilisateur['email'] . '">
			</form>
		</li>
		';
	}
}


//affichage informations utilisateurs

function imageAfficher(){
	if (isset($_POST['nomUtilisateur'])) {
		$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
		$requeteClient = $bdd->prepare('SELECT * FROM client where nom = ? AND prenom = ?');
		$requeteClient->execute(array($_POST['nomUtilisateur'],$_POST['prenomUtilisateur']));
		$client = $requeteClient->fetch();
		echo $client['image'];
	}
}

function nomAfficher(){
	if (isset($_POST['nomUtilisateur'])) {
		$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
		$requeteClient = $bdd->prepare('SELECT * FROM client where nom = ? AND prenom = ?');
		$requeteClient->execute(array($_POST['nomUtilisateur'],$_POST['prenomUtilisateur']));
		$client = $requeteClient->fetch();
		echo $client['nom'];
	}
}

function prenomAfficher(){
	if (isset($_POST['nomUtilisateur'])) {
		$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
		$requeteClient = $bdd->prepare('SELECT * FROM client where nom = ? AND prenom = ?');
		$requeteClient->execute(array($_POST['nomUtilisateur'],$_POST['prenomUtilisateur']));
		$client = $requeteClient->fetch();
		echo $client['prenom'];
	}
}

function emailAfficher(){
	if (isset($_POST['nomUtilisateur'])) {
		$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
		$requeteClient = $bdd->prepare('SELECT * FROM client where nom = ? AND prenom = ?');
		$requeteClient->execute(array($_POST['nomUtilisateur'],$_POST['prenomUtilisateur']));
		$client = $requeteClient->fetch();
		echo $client['email'];
	}
}

function typeAfficher(){
	if (isset($_POST['nomUtilisateur'])) {
		$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
		$requeteClient = $bdd->prepare('SELECT * FROM client where nom = ? AND prenom = ?');
		$requeteClient->execute(array($_POST['nomUtilisateur'],$_POST['prenomUtilisateur']));
		$client = $requeteClient->fetch();
		echo $client['type'];
	}
}

//messages

function messageAfficher(){
	if (isset($_POST['emailUtilisateur'])) {
		$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
		$requeteMessagerie = $bdd->prepare('SELECT * FROM messagerie where emailAuteur = ?');
		$requeteMessagerie->execute(array($_POST['emailUtilisateur']));
		$requeteNombreMessagerie = $bdd->prepare('SELECT COUNT(*) FROM messagerie where emailAuteur = ?');
		$requeteNombreMessagerie->execute(array($_POST['emailUtilisateur']));
		$messagerieNombre = $requeteNombreMessagerie->fetch();
		if ($messagerieNombre[0] == 0) {
			echo '
			<tr>
				<td class="date"> </td>
				<td class="type"> </td>
				<td class="objet"> </td>
			</tr>
			';
		}
		while ($messagerie = $requeteMessagerie->fetch()){
			echo '
			<tr>
				<td class="date"> ' . $messagerie['jour'] . '</td>
				<td class="type"> ' . $messagerie['type'] . '</td>
				<td class="objet"> ' . $messagerie['objet'] . '</td>
			</tr>
			';
		}
	}
	else{
		echo '
			<tr>
				<td class="date"> </td>
				<td class="type"> </td>
				<td class="objet"> </td>
			</tr>
			';
	}
}


//options

function valider(){
}

function bloquer(){
}

function supprimer(){
	if (isset($_POST['supprimer'])) {
		$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
		$requeteClient = $bdd->prepare('DELETE FROM client where nom = ? AND prenom = ?');
		$requeteClient->execute(array($_POST['nomUtilisateur'],$_POST['prenomUtilisateur']));
	}
}



function nombrePouceBleu(){
	if (isset($_POST['nomUtilisateur'])) {
		$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
		$requeteClient = $bdd->prepare('SELECT * FROM client where nom = ? AND prenom = ?');
		$requeteClient->execute(array($_POST['nomUtilisateur'],$_POST['prenomUtilisateur']));
		$client = $requeteClient->fetch();
		echo $client['nombrePouceBleu'];
	}
}

function nombrePouceRouge(){
	if (isset($_POST['nomUtilisateur'])) {
		$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
		$requeteClient = $bdd->prepare('SELECT * FROM client where nom = ? AND prenom = ?');
		$requeteClient->execute(array($_POST['nomUtilisateur'],$_POST['prenomUtilisateur']));
		$client = $requeteClient->fetch();
		echo $client['nombrePouceRouge'];
	}
}

function commentaireAfficher(){
	$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
	$requeteClient = $bdd->prepare('SELECT * FROM client where nom = ? AND prenom = ?');
	$requeteClient->execute(array($_POST['nomUtilisateur'],$_POST['prenomUtilisateur']));
	$client = $requeteClient->fetch();
	echo $client['commentaire'];
}

function commentaireModifier(){
	if (isset($_POST['commentaire'])) {
		$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
		$requeteClient = $bdd->prepare('UPDATE client SET commentaire = ? where nom = ? AND prenom = ?');
		$requeteClient->execute(array(htmlspecialchars($_POST['commentaire']),$_POST['nomUtilisateur'],$_POST['prenomUtilisateur']));
	}
}