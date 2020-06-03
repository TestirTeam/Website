

<?php
require("controllers\Testir_Information_fonction.php");
require ("models/connexiondb.php");
?>



<!-- HTML -->

<DOCTYPE! html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Testir Administrateur </title>
		<link rel="stylesheet" type="text/css" href="stylesheetMVC/Admin/Testir_Information_MentionLegales_administrateur.css">
	</head>

	<body>
		<div id="bloc_page">

            <?php require("Testir_Menu_administrateur.php"); ?>

			<div id="contenu">
			
				<section>

					<div id="banniere">
						<div class="rectangle_blanc"></div>
						<h1> Mentions <br> légales </h1>
						<div class="rectangle_blanc"></div>
					</div>

					<button id="boutonAnnuler" onclick="window.location.href = 'Testir_Information_administrateur';">
						<div id="imageMoins"></div>
						<h2> Retour </h2>
						<div id="imageMoins"></div>
					</button>

					<form method="post" action="Testir_Information_MentionLegales_administrateur" id="ml">
						<div id="nouvellesML">
							<h3> Nouvelles mentions légales : </h3>
							<textarea type="text" name="ML" id="formNouvellesML"><?php ml($db) ; ?></textarea>
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

<?php modifierML($db); ?>