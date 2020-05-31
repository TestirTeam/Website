

<?php
require("controleur\Testir_Information_fonction.php");
?>



<!-- HTML -->

<DOCTYPE! html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Testir Administrateur </title>
		<link rel="stylesheet" type="text/css" href="Testir_Information_administrateur.css">
	</head>

	<body>
		<div id="bloc_page">

			<?php include("Testir_Menu_administrateur.php") ; ?>
			
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
						<?php forumAfficher(); ?>
					</table>

					<table id="tableau_droit">
						<tr class="titreTableau">
							<td id="titreColonne"colspan="2" onclick="window.location.href = 'Testir_Information_FAQ_administrateur.php'"> FAQ </td>
						</tr>
						<tr class="sous_titres_tableau">
							<td id="sousTitreColonne1"> Numéro </td>
							<td id="sousTitreColonne2"> Sujet </td>
						</tr>
						<?php faqAfficher(); ?>
					</table>

				</article>


				<div id="symbole">
					<img src="C:/Users/paulb/Pictures/Image_Testir\Polygone 3.png" alt="triangle">
				</div>


				<article id="boutons">
					<button id="bouton_gauche" onclick="window.location.href = 'Testir_Information_CGU_administrateur.php';">
						<h1> Conditions générales <br> d'utilisation </h1>
					</button>
					<button id="bouton_droit" onclick="window.location.href = 'Testir_Information_MentionLegales_administrateur.php';">
						<h1> Mentions <br> légales </h1>
					</button>
				</article>
				
			</section>

		</div>
	</body>
</html>