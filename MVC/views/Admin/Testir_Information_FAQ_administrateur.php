

<?php
require("controleur\Testir_Information_fonction.php");
modifierFaq();
?>



<!-- HTML -->

<DOCTYPE! html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Testir Administrateur </title>
		<link rel="stylesheet" type="text/css" href="Testir_Information_FAQ_administrateur.css">
	</head>

	<body>
		<div id="bloc_page">

			<?php include("Testir_Menu_administrateur.php") ; ?>

			<div id="contenu">
			
				<section>

					<div id="banniere">
						<div class="rectangle_blanc"></div>
						<h1> Foire Aux <br> Questions </h1>
						<div class="rectangle_blanc"></div>
					</div>

					<button id="boutonAnnuler" onclick="window.location.href = 'Testir_Information_administrateur.php';">
						<div id="imageMoins"></div>
						<h2> Retour </h2>
						<div id="imageMoins"></div>
					</button>

					<?php afficherFAQ(); ?>

				</section>
			</div>

		</div>
	</body>
</html>

