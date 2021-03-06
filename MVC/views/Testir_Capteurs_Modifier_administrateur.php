

<?php
require("controllers/Testir_Capteurs_fonction.php");
require ("models/connexiondb.php");

if (!isset($_POST['ModificationNom'])) {
	$_POST['ModificationNom'] = $_POST['nomCapteur'];
	}

if (!isset($_POST['ModificationImage'])) {
	$_POST['ModificationImage'] = $_POST['imageCapteur'];
	}

if (!isset($_POST['ModificationFonctionnalite'])) {
	$_POST['ModificationFonctionnalite'] = $_POST['fonctionnaliteCapteur'];
	}

if (!isset($_POST['ModificationProgramme'])) {
	$_POST['ModificationProgramme'] = $_POST['programmeCapteur'];
	}

if (!isset($_POST['nomSecondaire'])) {
	$_POST['nomSecondaire'] = $_POST['nomCapteur'] ;
}


modifierNom($db);
modifierImage($db);
modifierFonctionnalite($db);
modifierProgramme($db);
?>



<!-- HTML -->

<DOCTYPE! html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Testir Administrateur </title>
		<link rel="stylesheet" type="text/css" href="stylesheetMVC/Admin/Testir_Capteurs_Modifier_administrateur.css">
	</head>

	<body>
		<div id="bloc_page">

            <?php require("Testir_Menu_administrateur.php"); ?>

			<div id="contenu">
			
				<section>
					<aside id="menuTest">

						<div id="rechercheTest">
							<form method="post" action="Testir_Capteurs_administrateur">
								<input type="search" name="nomTest" id="formTest" placeholder=" nom du test ">
							</form>
						</div>
						<div id="listeTest">
							<h2> Liste des tests : </h2>
							<ul>
								<?php testListe2($db) ; ?>
							</ul>
						</div>

					</aside>


					<article>

						<div id="banniere">
							<div class="rectangle_blanc"></div>
							<h1> Gérer les capteurs </h1>
							<div class="rectangle_blanc"></div>
						</div>

						<button id="boutonAnnuler" onclick="window.location.href = 'Testir_Capteurs_administrateur';">
							<div id="imageMoins"></div>
							<h2> Retour </h2>
							<div id="imageMoins"></div>
						</button>

						<form method="post" action="Testir_Capteurs_Modifier_administrateur"  id="nouveauTest">
							<div id="nouveauTestNom">
								<?php verificationNom2() ; ?>
								<h3> Nom : </h3>
								<input type="text" name="ModificationNom" id="formNomNouveauTest" value="<?php afficherNom($db) ; ?>">
							</div>

							<div id="nouveauTestImage">
								<h3> Lien de l'image : </h3>
								<input type="text" name="ModificationImage" id="formImageNouveauTest" value="<?php afficherImage($db) ; ?>">
							</div>

							<div id="nouveauTestFonctionnalite">
								<h3> Fonctionnalité : </h3>
								<textarea name="ModificationFonctionnalite" id="formFonctionnaliteNouveauTest"><?php afficherFonctionnalite($db) ; ?></textarea>
							</div>

							<div id="nouveauTestProgramme">
								<h3> Programme : </h3>
								<textarea name="ModificationProgramme" id="formProgrammeNouveauTest" ><?php afficherProgramme($db) ; ?></textarea>
							</div>

							<div>
								<input type="hidden" name="nomSecondaire" value="<?php echo $_POST['ModificationNom'] ?>" >
							</div>

							<div id="submit">
								<input type="submit" value="confirmer">
							</div>
						</form>

					</article>
				</section>
			</div>

		</div>
	</body>
</html>


