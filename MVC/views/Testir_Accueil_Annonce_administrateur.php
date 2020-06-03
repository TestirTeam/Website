
<?php
require("controllers/Testir_Accueil_fonction.php");
require ("models/connexiondb.php");
?>



<!-- HTML -->

<DOCTYPE! html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Testir Administrateur </title>
		<link rel="stylesheet" type="text/css" href="stylesheetMVC/Admin/Testir_Accueil_Annonce_administrateur.css">
	</head>

	<body>
		<div id="bloc_page">

            <?php require("Testir_Menu_administrateur.php"); ?>

			<div id="contenu">
			
				<section>

					<div id="banniere">
						<div class="rectangle_blanc"></div>
						<h1> Annonce </h1>
						<div class="rectangle_blanc"></div>
					</div>

					<button id="boutonAnnuler" onclick="window.location.href = 'Testir_Accueil_administrateur';">
						<div id="imageMoins"></div>
						<h2> Retour </h2>
						<div id="imageMoins"></div>
					</button>

					<form method="post" action="Testir_Accueil_Annonce_administrateur" id="annonceTest">
						<div id="nouvelleAnnonce">
							<h3> Nouvelle annonce : </h3>
							<textarea type="text" name="annonce" id="formNouvelleAnnonce"><?php annonce($db) ; ?></textarea>
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

<?php modifierAnnonce($db); ?>