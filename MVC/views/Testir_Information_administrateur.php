

<?php
require("controllers/Testir_Information_fonction.php");
require ("models/connexiondb.php");
?>



<!-- HTML -->

<DOCTYPE! html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Testir Administrateur </title>
		<link rel="stylesheet" type="text/css" href="stylesheetMVC/Admin/Testir_Information_administrateur.css">
	</head>

	<body>
		<div id="bloc_page">

            <?php require("Testir_Menu_administrateur.php"); ?>
			
			<section>

				<div id="banniere">
					<div class="rectangle_blanc"></div>
					<h1> Gérer l'information </h1>
					<div class="rectangle_blanc"></div>
				</div>

				<article id="tableaux">

					<table id="tableau_gauche">
						<tr class="titreTableau">
							<td id="titreColonne"colspan="2" onclick="window.location.href = "> FORUM </td>
						</tr>
						<tr class="sous_titres_tableau">
							<td id="sousTitreColonne1"> Numéro </td>
							<td id="sousTitreColonne2"> Sujet </td>
						</tr>
						<?php forumAfficher($db); ?>
					</table>

					<table id="tableau_droit">
						<tr class="titreTableau">
							<td id="titreColonne" colspan="2" onclick="window.location.href = 'Testir_Information_FAQ_administrateur'"> FAQ </td>
						</tr>
						<tr class="sous_titres_tableau">
							<td id="sousTitreColonne1"> Numéro </td>
							<td id="sousTitreColonne2"> Sujet </td>
						</tr>
						<?php faqAfficher($db); ?>
					</table>

				</article>


				<div id="symbole">
					<img src="../Images/admin/Polygone.png" alt="triangle">
				</div>


				<article id="boutons">
					<button id="bouton_gauche" onclick="window.location.href = 'Testir_Information_CGU_administrateur';">
						<h1> Conditions générales <br> d'utilisation </h1>
					</button>
					<button id="bouton_droit" onclick="window.location.href = 'Testir_Information_MentionLegales_administrateur';">
						<h1> Mentions <br> légales </h1>
					</button>
				</article>
				
			</section>

		</div>
	</body>
</html>