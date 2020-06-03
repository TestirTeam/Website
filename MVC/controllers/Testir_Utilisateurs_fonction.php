

<?php

//menu

function utilisateurListe($db) {
	if (isset($_POST['nomUtilisateurListe'])) {
		$requeteNomUtilisateur = $db->prepare('SELECT * FROM client_paul WHERE nom LIKE ? OR prenom LIKE ? ORDER BY nom');
		$requeteNomUtilisateur->execute(array("%" . htmlspecialchars($_POST['nomUtilisateurListe']) . "%","%" . htmlspecialchars($_POST['nomUtilisateurListe']) . "%"));
	}
	else{
		$requeteNomUtilisateur = $db->query('SELECT * FROM client_paul ORDER BY nom');
	}
	while ($nomUtilisateur = $requeteNomUtilisateur->fetch()) {
		echo '
		<li>
			<form method="post" action="Testir_Utilisateurs_administrateur" >
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

function imageAfficher($db){
	if ($_POST['nomUtilisateur']!="none") {
		$requeteClient = $db->prepare('SELECT * FROM client_paul where nom = ? AND prenom = ?');
		$requeteClient->execute(array($_POST['nomUtilisateur'],$_POST['prenomUtilisateur']));
		$client = $requeteClient->fetch();
		return $client['image'];
	}else{
        return "none";
    }
}

function nomAfficher($db){
	if ($_POST['nomUtilisateur']!="none") {
		$requeteClient = $db->prepare('SELECT * FROM client_paul where nom = ? AND prenom = ?');
		$requeteClient->execute(array($_POST['nomUtilisateur'],$_POST['prenomUtilisateur']));
		$client = $requeteClient->fetch();
		return $client['nom'];
	}else{
        return "none";
    }
}

function prenomAfficher($db){
	if ($_POST['nomUtilisateur']!="none") {
		$requeteClient = $db->prepare('SELECT * FROM client_paul where nom = ? AND prenom = ?');
		$requeteClient->execute(array($_POST['nomUtilisateur'],$_POST['prenomUtilisateur']));
		$client = $requeteClient->fetch();
		return $_POST['nomUtilisateur'];
	}else{
	    echo "none";
    }
}

function emailAfficher($db){
	if ($_POST['nomUtilisateur']!="none") {
		$requeteClient = $db->prepare('SELECT * FROM client_paul where nom = ? AND prenom = ?');
		$requeteClient->execute(array($_POST['nomUtilisateur'],$_POST['prenomUtilisateur']));
		$client = $requeteClient->fetch();
		return $client['email'];
	}else{
        return "none";
    }
}

function typeAfficher($db){
	if ($_POST['nomUtilisateur']!="none") {
		$requeteClient = $db->prepare('SELECT * FROM client_paul where nom = ? AND prenom = ?');
		$requeteClient->execute(array($_POST['nomUtilisateur'],$_POST['prenomUtilisateur']));
		$client = $requeteClient->fetch();
		return $client['type'];
	}else{
        return "none";
    }
}

//messages

function messageAfficher($db){
	if (isset($_POST['emailUtilisateur'])) {
		$requeteMessagerie = $db->prepare('SELECT * FROM messagerie where emailAuteur = ?');
		$requeteMessagerie->execute(array($_POST['emailUtilisateur']));
		$requeteNombreMessagerie = $db->prepare('SELECT COUNT(*) FROM messagerie where emailAuteur = ?');
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

function supprimer($db){
	if (isset($_POST['supprimer'])) {
		$requeteClient = $db->prepare('DELETE FROM client_paul where nom = ? AND prenom = ?');
		$requeteClient->execute(array($_POST['nomUtilisateur'],$_POST['prenomUtilisateur']));
	}else{
        echo "none";
    }
}



function nombrePouceBleu($db){
	if (isset($_POST['nomUtilisateur'])) {
		$requeteClient = $db->prepare('SELECT * FROM client_paul where nom = ? AND prenom = ?');
		$requeteClient->execute(array($_POST['nomUtilisateur'],$_POST['prenomUtilisateur']));
		$client = $requeteClient->fetch();
		echo $client['nombrePouceBleu'];
	}
}

function nombrePouceRouge($db){
	if (isset($_POST['nomUtilisateur'])) {
		$requeteClient = $db->prepare('SELECT * FROM client_paul where nom = ? AND prenom = ?');
		$requeteClient->execute(array($_POST['nomUtilisateur'],$_POST['prenomUtilisateur']));
		$client = $requeteClient->fetch();
		echo $client['nombrePouceRouge'];
	}
}

function commentaireAfficher($db){
	$requeteClient = $db->prepare('SELECT * FROM client_paul where nom = ? AND prenom = ?');
	$requeteClient->execute(array($_POST['nomUtilisateur'],$_POST['prenomUtilisateur']));
	$client = $requeteClient->fetch();
	echo $client['commentaire'];
}

function commentaireModifier($db){
	if (isset($_POST['commentaire'])) {
		$requeteClient = $db->prepare('UPDATE client_paul SET commentaire = ? where nom = ? AND prenom = ?');
		$requeteClient->execute(array(htmlspecialchars($_POST['commentaire']),$_POST['nomUtilisateur'],$_POST['prenomUtilisateur']));
	}
}