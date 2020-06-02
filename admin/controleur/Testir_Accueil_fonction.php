<?php
// base de données
$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');


function nombreDemandeInscription(){
	$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
	$requeteStatistiques = $bdd->query('SELECT nombreDemandeInscription FROM statistiques');
	$statistiques = $requeteStatistiques->fetch();
	echo $statistiques['nombreDemandeInscription'];
}

function nombreTicketAdministrateur(){
	$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
	$requeteAdministrateur = $bdd->query('SELECT * FROM administrateur');
	$administrateur = $requeteAdministrateur->fetch();
	echo $administrateur['nombreTickets'];
}

function nombreMessageAdministrateur(){
	$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
	$requeteAdministrateur = $bdd->query('SELECT * FROM administrateur');
	$administrateur = $requeteAdministrateur->fetch();
	echo $administrateur['nombreMessages'];
}

function nombreClientInscrit(){
	$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
	$requeteClient = $bdd->query('SELECT COUNT(*) FROM client');
	$client = $requeteClient->fetch();
	echo $client[0];
}

function nombreRDV(){
	$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
	$requeteStatistiques = $bdd->query('SELECT nombreRDV FROM statistiques');
	$statistiques = $requeteStatistiques->fetch();
	echo $statistiques['nombreRDV'];
}

function nombreTest(){
	$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
	$requeteStatistiques = $bdd->query('SELECT nombreTest FROM statistiques');
	$statistiques = $requeteStatistiques->fetch();
	echo $statistiques['nombreTest'];
}

function satisfaction(){
	$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
	$requeteStatistiques = $bdd->query('SELECT satisfaction FROM statistiques');
	$statistiques = $requeteStatistiques->fetch();
	echo $statistiques['satisfaction'];
}






function annonce() {
	$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
	$requeteStatistiques = $bdd->query('SELECT annonce FROM statistiques');
	$statistiques = $requeteStatistiques->fetch();
	if (!empty($_POST['annonce'])){
		echo $_POST['annonce'] ;
	}
	else{
		echo $statistiques['annonce'] ;
	}
}

function modifierAnnonce() {
	$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
	$requeteStatistiques = $bdd->query('SELECT annonce FROM statistiques');
	$statistiques = $requeteStatistiques->fetch();

	if (!empty($_POST['annonce'])){
		$requete = $bdd->prepare(' UPDATE statistiques SET annonce = ? ');
		$requete->execute(array(htmlspecialchars($_POST['annonce'])));
	}
}

?>