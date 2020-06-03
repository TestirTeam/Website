
<?php
require("controleur\Testir_Accueil_fonction.php");
?>



<!-- HTML -->

<DOCTYPE! html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Testir Administrateur </title>
		<link rel="stylesheet" type="text/css" href="../../index.php">
	</head>

	<body>
		<div id="bloc_page">

			<?php include("Testir_Menu_administrateur.php"); ?>

			<div id="contenu">
			
				<section>

					<div id="banniere">
						<div class="rectangle_blanc"></div>
						<h1> Annonce </h1>
						<div class="rectangle_blanc"></div>
					</div>

					<button id="boutonAnnuler" onclick="window.location.href = 'Testir_Accueil_administrateur.php';">
						<div id="imageMoins"></div>
						<h2> Retour </h2>
						<div id="imageMoins"></div>
					</button>

					<form method="post" action="Testir_Accueil_Annonce_administrateur.php" id="annonceTest">
						<div id="nouvelleAnnonce">
							<h3> Nouvelle annonce : </h3>
							<textarea type="text" name="annonce" id="formNouvelleAnnonce"><?php annonce() ; ?></textarea>
						</div>

						<div id="submit">
							<input type="submit" value="confirmer">
						</div>
					</form>

				</section>
			</div>

		</div>
	</body>
</html>

<?php modifierAnnonce(); ?>