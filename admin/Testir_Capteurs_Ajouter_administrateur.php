

<?php
require("controleur\Testir_Capteurs_fonction.php");
ajouterTest();
?>



<!-- HTML -->

<DOCTYPE! html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Testir Administrateur </title>
		<link rel="stylesheet" type="text/css" href="../MVC/index.php">
	</head>

	<body>
		<div id="bloc_page">

			<?php include("Testir_Menu_administrateur.php"); ?>

			<div id="contenu">
			
				<section>
					<aside id="menuTest">

						<div id="rechercheTest">
							<form method="post" action="Testir_Capteurs_administrateur.php">
								<input type="search" name="nomTest" id="formTest" placeholder=" nom du test ">
							</form>
						</div>
						<div id="listeTest">
							<h2> Liste des tests : </h2>
							<ul>
								<?php testListe2() ; ?>
							</ul>
						</div>

					</aside>


					<article>

						<div id="banniere">
							<div class="rectangle_blanc"></div>
							<h1> Gérer les capteurs </h1>
							<div class="rectangle_blanc"></div>
						</div>

						<button id="boutonAnnuler" onclick="window.location.href = 'Testir_Capteurs_administrateur.php';">
							<div id="imageMoins"></div>
							<h2> Retour </h2>
							<div id="imageMoins"></div>
						</button>

						<form method="post" action="Testir_Capteurs_Ajouter_administrateur.php" id="nouveauTest">
							<div id="nouveauTestNom">
								<?php  verificationNom() ; ?>
								<h3> Nom : </h3>
								<input type="text" name="nomNouveauTest" id="formNomNouveauTest" placeholder=" nom du nouveau test ">
							</div>

							<div id="nouveauTestImage">
								<h3> Lien de l'image : </h3>
								<input type="text" name="imageNouveauTest" id="formImageNouveauTest" placeholder=" lien de l'image ">
							</div>

							<div id="nouveauTestFonctionnalite">
								<h3> Fonctionnalité : </h3>
								<textarea name="fonctionnaliteNouveauTest" id="formFonctionnaliteNouveauTest"></textarea>
							</div>

							<div id="nouveauTestProgramme">
								<h3> Programme : </h3>
								<textarea name="programmeNouveauTest" id="formProgrammeNouveauTest" ></textarea>
							</div>

							<input type="hidden" name="verifNom" value="1">

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
