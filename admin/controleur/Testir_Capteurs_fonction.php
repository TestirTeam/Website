

<?php 

//menuCapteur

function testListe() {
	$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
	if (isset($_POST['nomTest'])) {
		$requeteNomCapteur = $bdd->prepare('SELECT nom FROM capteur WHERE nom LIKE ? ORDER BY nom');
		$requeteNomCapteur->execute(array("%" . htmlspecialchars($_POST['nomTest']) . "%"));
	}
	else{
		$requeteNomCapteur = $bdd->query('SELECT nom FROM capteur ORDER BY nom');
	}
	while ($nomCapteur = $requeteNomCapteur->fetch()) {
		echo '<a href="#' . $nomCapteur['nom']. '"><li>' . $nomCapteur['nom'] . '</li> </a>';
	}
}

function testListe2() {
	$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
	$requeteNomTest = $bdd->query('SELECT nom FROM capteur ORDER BY nom');
	while ($nomTest = $requeteNomTest->fetch()) {
		echo '<a href="Testir_Capteurs_administrateur.php#' . $nomTest['nom']. '"><li>' . $nomTest['nom'] . '</li> </a>';
	}
}


//Accueil

function testAfficher() {
	$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
	$requeteCapteur = $bdd->query('SELECT * FROM capteur ORDER BY nom');

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

				<form method="post" action="Testir_Capteurs_Consulter_administrateur.php" id="formulaireOption">
					<input type="submit" class= "bouton" value="consulter" >
					<input type="hidden" name="nomCapteur" value="' . $capteur['nom'] . '">
				</form>

				<form method="post" action="Testir_Capteurs_Modifier_administrateur.php" id="formulaireOption">
					<input type="submit" class= "bouton" value="modifier" >
					<input type="hidden" name="nomCapteur" value="' . $capteur['nom'] . '">
					<input type="hidden" name="imageCapteur" value="' . $capteur['image'] . '">
					<input type="hidden" name="fonctionnaliteCapteur" value="' . $capteur['fonctionnalite'] . '">
					<input type="hidden" name="programmeCapteur" value="' . $capteur['programme'] . '">
				</form>

				<form method="post" action="Testir_Capteurs_Supprimer_administrateur.php" id="formulaireOption">
					<input type="submit" class= "bouton" value="supprimer" >
					<input type="hidden" name="nomCapteur" value="' . $capteur['nom'] . '">
				</form>


				
			</div>
		</div>' ;
	}
}




//ajouter



function ajouterTest() {
	$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
	if (!empty($_POST['nomNouveauTest'])) {
		$requeteNouveauCapteur = $bdd->prepare(' INSERT INTO capteur(nom,image,fonctionnalite,programme) VALUES (?, ?, ?, ?) ');
		$requeteNouveauCapteur->execute(array(htmlspecialchars($_POST['nomNouveauTest']), htmlspecialchars($_POST['imageNouveauTest']), htmlspecialchars($_POST['fonctionnaliteNouveauTest']), htmlspecialchars($_POST['programmeNouveauTest'])));
			}
}


function verificationNom(){
	if (empty($_POST['nomNouveauTest']) && isset($_POST['verifNom'])) {
		echo '<h2> ATTENTION : le nouveau test doit avoir au moins un nom pour être créé </h2>' ;
	}
}



//consulter

function testConsulter() {
	$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
	$requeteCapteur = $bdd->prepare('SELECT * FROM capteur WHERE nom= ?');
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

function afficherNom(){
	$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
	$requeteCapteur = $bdd->prepare('SELECT * FROM capteur WHERE nom = ?');
	$requeteCapteur->execute(array($_POST['ModificationNom']));

	$capteur = $requeteCapteur->fetch();
	echo $capteur['nom'];	
}

function afficherImage(){
	$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
	$requeteCapteur = $bdd->prepare('SELECT * FROM capteur WHERE nom= ?');
	$requeteCapteur->execute(array($_POST['ModificationNom']));

	$capteur = $requeteCapteur->fetch();
	echo $capteur['image'];
}

function afficherFonctionnalite(){
	$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
	$requeteCapteur = $bdd->prepare('SELECT * FROM capteur WHERE nom= ?');
	$requeteCapteur->execute(array($_POST['ModificationNom']));

	$capteur = $requeteCapteur->fetch();
	echo $capteur['fonctionnalite'];
}

function afficherProgramme(){
	$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
	$requeteCapteur = $bdd->prepare('SELECT * FROM capteur WHERE nom= ?');
	$requeteCapteur->execute(array($_POST['ModificationNom']));

	$capteur = $requeteCapteur->fetch();
	echo $capteur['programme'];
}


function modifierNom() {
	if (!empty($_POST['ModificationNom'])) {
		$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
		$requeteModification = $bdd->prepare('UPDATE capteur SET nom = ? WHERE nom = ? ');
		$requeteModification->execute(array(htmlspecialchars($_POST['ModificationNom']), htmlspecialchars($_POST['nomSecondaire'])));
	}
}

function modifierImage() {
	$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
	$requeteModification = $bdd->prepare('UPDATE capteur SET image = ? WHERE nom = ? ');
	$requeteModification->execute(array(htmlspecialchars($_POST['ModificationImage']), htmlspecialchars($_POST['nomSecondaire'])));
}

function modifierFonctionnalite() {
	$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
	$requeteModification = $bdd->prepare('UPDATE capteur SET fonctionnalite = ? WHERE nom = ? ');
	$requeteModification->execute(array(htmlspecialchars($_POST['ModificationFonctionnalite']), htmlspecialchars($_POST['nomSecondaire'])));
}

function modifierProgramme() {
	$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
	$requeteModification = $bdd->prepare('UPDATE capteur SET programme = ? WHERE nom = ? ');
	$requeteModification->execute(array(htmlspecialchars($_POST['ModificationProgramme']), htmlspecialchars($_POST['nomSecondaire'])));
}

function verificationNom2(){
	if (empty($_POST['ModificationNom'])) {
		echo '<h2> ATTENTION : le test doit toujours avoir au moins un nom ! </h2>' ;
	}
}


//supprimer

function supprimer() {
	if (isset($_POST['nomSecondaire'])) {
		$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
		$requeteSupprimer = $bdd->prepare('DELETE FROM capteur WHERE nom = ?');
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