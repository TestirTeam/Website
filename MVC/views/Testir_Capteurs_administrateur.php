

<?php
require("controllers/Testir_Capteurs_fonction.php");
require ("models/connexiondb.php");
?>



<!-- HTML -->

<DOCTYPE! html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Testir Administrateur </title>
		<link rel="stylesheet" type="text/css" href="stylesheetMVC/Admin/Testir_Capteurs_administrateur.css">
	</head>

	<body>
		<div id="bloc_page">

            <?php require("Testir_Menu_administrateur.php"); ?>

			<div id="contenu">
			
				<section>

					<aside id="menuTest">
						<div id="rechercheTest">
							<form method="post" action="Testir_Capteurs_administrateur" id="formulaireRecherche">
								<input type="search" name="nomTest" id="recherche" placeholder=" nom du test " autofocus>
							</form>
						</div>
						<div id="listeTest">
							<h2> Liste des tests : </h2>
							<ul>
								<?php testListe($db) ; ?>
							</ul>
						</div>
					</aside>

					<article>
						<div id="banniere">
							<div class="rectangle_blanc"></div>
							<h1> Gérer les capteurs </h1>
							<div class="rectangle_blanc"></div>
						</div>

						<button id="boutonAjouterTest" onclick="window.location.href = 'Testir_Capteurs_Ajouter_administrateur';">
							<div id="imagePlus"></div>
							<h2> Ajouter un test </h2>
							<div id="imagePlus"></div>
						</button>

						<div id="ensembleTest">
							<?php testAfficher($db) ; ?>
						</div>
					</article>
					
				</section>

			</div>

		</div>
	</body>
</html>