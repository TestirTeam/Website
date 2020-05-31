

<?php
require("controleur\Testir_Capteurs_fonction.php");
supprimer();
?>



<!-- HTML -->

<DOCTYPE! html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Testir Administrateur </title>
		<link rel="stylesheet" type="text/css" href="Testir_Capteurs_Supprimer_administrateur.css">
	</head>

	<body>
		<div id="bloc_page">

			<?php include("Testir_Menu_administrateur.php") ; ?>

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
							<div id="imagePlus"></div>
							<h2> <?php retour() ;?> </h2>
							<div id="imagePlus"></div>
						</button>

						<div id="nomTestSuppression" >
							<h3> <?php validation(); ?> </h3>

							<form method="post" action="Testir_Capteurs_Supprimer_administrateur" id="formSuppression">
								<input type="hidden" name="nomSecondaire" value= <?php validation() ; ?> >
								<input type="submit" name="suppression" id="supprimer" value=" Supprimer le capteur " >
							</form>
						</div>

						
							


					</article>
					
				</section>
			</div>

		</div>
	</body>
</html>