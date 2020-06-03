

<?php 

//menuCapteur

function testListe($db) {
	if (isset($_POST['nomTest'])) {
		$requeteNomCapteur = $db->prepare('SELECT nom FROM capteur WHERE nom LIKE ? ORDER BY nom');
		$requeteNomCapteur->execute(array("%" . htmlspecialchars($_POST['nomTest']) . "%"));
	}
	else{
		$requeteNomCapteur = $db->query('SELECT nom FROM capteur ORDER BY nom');
	}
	while ($nomCapteur = $requeteNomCapteur->fetch()) {
		echo '<a href="#' . $nomCapteur['nom']. '"><li>' . $nomCapteur['nom'] . '</li> </a>';
	}
}

function testListe2($db) {
	$requeteNomTest = $db->query('SELECT nom FROM capteur ORDER BY nom');
	while ($nomTest = $requeteNomTest->fetch()) {
		echo '<a href="Testir_Capteurs_administrateur#' . $nomTest['nom']. '"><li>' . $nomTest['nom'] . '</li> </a>';
	}
}


//Accueil

function testAfficher($db) {
	$requeteCapteur = $db->query('SELECT * FROM capteur ORDER BY nom');

	while ($capteur = $requeteCapteur->fetch()) {
		echo '
		<div class="test" id="' . $capteur['nom'] . '">
			<div id="presentationTest">

				<div id="descriptionTest">
					<div id="NomTest"> <h3> ' . $capteur['nom'] . ' </h3> </div>
					<div id="resumerTest"> <h4> ' . $capteur['fonctionnalite'] . ' </h4> </div>
				</div>

				<div id="imageTest">
					<img src=" '. $capteur['image'] . ' " alt="Image du test" id="imageTaille">
				</div>

			</div>

			<div class="option">

				<form method="post" action="Testir_Capteurs_Consulter_administrateur" id="formulaireOption">
					<input type="submit" class= "bouton" value="consulter" >
					<input type="hidden" name="nomCapteur" value="' . $capteur['nom'] . '">
				</form>

				<form method="post" action="Testir_Capteurs_Modifier_administrateur" id="formulaireOption">
					<input type="submit" class= "bouton" value="modifier" >
					<input type="hidden" name="nomCapteur" value="' . $capteur['nom'] . '">
					<input type="hidden" name="imageCapteur" value="' . $capteur['image'] . '">
					<input type="hidden" name="fonctionnaliteCapteur" value="' . $capteur['fonctionnalite'] . '">
					<input type="hidden" name="programmeCapteur" value="' . $capteur['programme'] . '">
				</form>

				<form method="post" action="Testir_Capteurs_Supprimer_administrateur" id="formulaireOption">
					<input type="submit" class= "bouton" value="supprimer" >
					<input type="hidden" name="nomCapteur" value="' . $capteur['nom'] . '">
				</form>


				
			</div>
		</div>' ;
	}
}




//ajouter



function ajouterTest($db) {
	if (!empty($_POST['nomNouveauTest'])) {
		$requeteNouveauCapteur = $db->prepare(' INSERT INTO capteur(nom,image,fonctionnalite,programme) VALUES (?, ?, ?, ?) ');
		$requeteNouveauCapteur->execute(array(htmlspecialchars($_POST['nomNouveauTest']), htmlspecialchars($_POST['imageNouveauTest']), htmlspecialchars($_POST['fonctionnaliteNouveauTest']), htmlspecialchars($_POST['programmeNouveauTest'])));
			}
}


function verificationNom(){
	if (empty($_POST['nomNouveauTest']) && isset($_POST['verifNom'])) {
		echo '<h2> ATTENTION : le nouveau test doit avoir au moins un nom pour être créé </h2>' ;
	}
}



//consulter

function testConsulter($db) {
	$requeteCapteur = $db->prepare('SELECT * FROM capteur WHERE nom= ?');
	$requeteCapteur->execute(array(htmlspecialchars($_POST['nomCapteur'])));
	$capteur = $requeteCapteur->fetch();
	echo '
		<div class="test" id="'. $capteur['nom'].'">
			<div id="NomTest">
				<h3> ' . $capteur['nom'] . ' </h3>
			</div>

			<div id="imageTest">
				<img src=" '. $capteur['image'] . ' " alt="Image du test" id="imageTaille">
			</div>

			<div id="fonctionnaliteTest">
				<h3> fonctionnalité : </h3>
				<div id="fonctionnalite"> <h4> ' . $capteur['fonctionnalite'] . ' </h4> </div>
			</div>

			<div id="programmeTest">
				<h3> Programme : </h3>
				<div id="programme"> <h4> ' . $capteur['programme'] . ' </h4> </div>
			</div>

		</div>' ;
}



//modifier

function afficherNom($db){
	$requeteCapteur = $db->prepare('SELECT * FROM capteur WHERE nom = ?');
	$requeteCapteur->execute(array($_POST['ModificationNom']));
	$capteur = $requeteCapteur->fetch();
	echo $capteur['nom'];	
}

function afficherImage($db){
	$requeteCapteur = $db->prepare('SELECT * FROM capteur WHERE nom= ?');
	$requeteCapteur->execute(array($_POST['ModificationNom']));
	$capteur = $requeteCapteur->fetch();
	echo $capteur['image'];
}

function afficherFonctionnalite($db){
	$requeteCapteur = $db->prepare('SELECT * FROM capteur WHERE nom= ?');
	$requeteCapteur->execute(array($_POST['ModificationNom']));
	$capteur = $requeteCapteur->fetch();
	echo $capteur['fonctionnalite'];
}

function afficherProgramme($db){
	$requeteCapteur = $db->prepare('SELECT * FROM capteur WHERE nom= ?');
	$requeteCapteur->execute(array($_POST['ModificationNom']));
	$capteur = $requeteCapteur->fetch();
	echo $capteur['programme'];
}


function modifierNom($db) {
	if (!empty($_POST['ModificationNom'])) {
		$requeteModification = $db->prepare('UPDATE capteur SET nom = ? WHERE nom = ? ');
		$requeteModification->execute(array(htmlspecialchars($_POST['ModificationNom']), htmlspecialchars($_POST['nomSecondaire'])));
	}
}

function modifierImage($db) {
	$requeteModification = $db->prepare('UPDATE capteur SET image = ? WHERE nom = ? ');
	$requeteModification->execute(array(htmlspecialchars($_POST['ModificationImage']), htmlspecialchars($_POST['nomSecondaire'])));
}

function modifierFonctionnalite($db) {
	$requeteModification = $db->prepare('UPDATE capteur SET fonctionnalite = ? WHERE nom = ? ');
	$requeteModification->execute(array(htmlspecialchars($_POST['ModificationFonctionnalite']), htmlspecialchars($_POST['nomSecondaire'])));
}

function modifierProgramme($db) {
	$requeteModification = $db->prepare('UPDATE capteur SET programme = ? WHERE nom = ? ');
	$requeteModification->execute(array(htmlspecialchars($_POST['ModificationProgramme']), htmlspecialchars($_POST['nomSecondaire'])));
}

function verificationNom2(){
	if (empty($_POST['ModificationNom'])) {
		echo '<h2> ATTENTION : le test doit toujours avoir au moins un nom ! </h2>' ;
	}
}


//supprimer

function supprimer($db) {
	if (isset($_POST['nomSecondaire'])) {
		$requeteSupprimer = $db->prepare('DELETE FROM capteur WHERE nom = ?');
		$requeteSupprimer->execute(array(htmlspecialchars($_POST['nomSecondaire'])));
	}
}

function validation(){
	if (isset($_POST['nomCapteur'])) {
		echo $_POST['nomCapteur'];
	}
	else {
		echo ' le capteur a bien été supprimé ' ;
	}
}

function retour(){
	if (isset($_POST['nomSecondaire'])) {
		echo 'Retour';
	}
	else {
		echo 'Annuler';
	}
}

?>