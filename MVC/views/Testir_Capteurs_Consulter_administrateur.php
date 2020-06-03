

<?php
require("controllers/Testir_Capteurs_fonction.php");
require ("models/connexiondb.php");
ajouterTest($db);
?>



<!-- HTML -->

<DOCTYPE! html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Testir Administrateur </title>
		<link rel="stylesheet" type="text/css" href="stylesheetMVC/Admin/Testir_Capteurs_Consulter_administrateur.css">
	</head>

	<body>
		<div id="bloc_page">

            <?php require("Testir_Menu_administrateur.php"); ?>
			
			<section>
				<article>

					<div id="menuTest">
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
					</div>


					<div id="contenu">

						<div id="banniere">
							<div class="rectangle_blanc"></div>
							<h1> Gérer les capteurs </h1>
							<div class="rectangle_blanc"></div>
						</div>

						<button id="boutonRetour" onclick="window.location.href = 'Testir_Capteurs_administrateur';">
							<div id="imagePlus"></div>
							<h2> Retour </h2>
							<div id="imagePlus"></div>
						</button>

						<div id="ensembleTest">
							<?php testConsulter($db) ; ?>
						</div>

					</div>

					
				</article>
			</section>

		</div>
	</body>
</html>