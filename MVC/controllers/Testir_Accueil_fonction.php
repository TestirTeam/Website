<?php
// base de données



function nombreDemandeInscription($db){
	$requeteStatistiques = $db->query('SELECT nombreDemandeInscription FROM statistiques');
	$statistiques = $requeteStatistiques->fetch();
	echo $statistiques['nombreDemandeInscription'];
}

function nombreTicketAdministrateur($db){
	$requeteClient = $db->query('SELECT * FROM client_paul');
	$client = $requeteClient->fetch();
	echo $client['nombreTickets'];
}

function nombreMessageAdministrateur($db){
	$requeteClient = $db->query('SELECT * FROM client_paul');
	$client = $requeteClient->fetch();
	echo $client['nombreMessages'];
}

function nombreClientInscrit($db){
	$requeteClient = $db->query('SELECT COUNT(*) FROM client_paul');
	$client = $requeteClient->fetch();
	echo $client[0];
}

function nombreRDV($db){
	$requeteStatistiques = $db->query('SELECT nombreRDV FROM statistiques');
	$statistiques = $requeteStatistiques->fetch();
	echo $statistiques['nombreRDV'];
}

function nombreTest($db){
	$requeteStatistiques = $db->query('SELECT nombreTest FROM statistiques');
	$statistiques = $requeteStatistiques->fetch();
	echo $statistiques['nombreTest'];
}

function satisfaction($db){
	$requeteStatistiques = $db->query('SELECT satisfaction FROM statistiques');
	$statistiques = $requeteStatistiques->fetch();
	echo $statistiques['satisfaction'];
}






function annonce($db) {
	$requeteStatistiques = $db->query('SELECT annonce FROM statistiques');
	$statistiques = $requeteStatistiques->fetch();
	if (!empty($_POST['annonce'])){
		echo $_POST['annonce'] ;
	}
	else{
		echo $statistiques['annonce'] ;
	}
}

function modifierAnnonce($db) {
	$requeteStatistiques = $db->query('SELECT annonce FROM statistiques');
	$statistiques = $requeteStatistiques->fetch();

	if (!empty($_POST['annonce'])){
		$requete = $db->prepare(' UPDATE statistiques SET annonce = ? ');
		$requete->execute(array(htmlspecialchars($_POST['annonce'])));
	}
}

?>