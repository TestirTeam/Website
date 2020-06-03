
<?php
require ("models/connexiondb.php");
require("controllers/Testir_Accueil_fonction.php");

?>



<!-- HTML -->

<DOCTYPE! html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Testir statistiques Administrateur </title>
		<link rel="stylesheet" type="text/css" href="stylesheetMVC/Admin/Testir_Accueil_administrateur.css">
	</head>

	<body>
		<div id="bloc_page">

			<?php require("Testir_Menu_administrateur.php"); ?>

			<div id="contenu">

				<section id= "statistiqueRecent">

					<div class="banniere">
						<div class="rectangle_blanc"></div>
						<h1> Statistiques récentes </h1>
						<div class="rectangle_blanc"></div>
					</div>

					<article>
						<aside id="nombreDemandeInscription">
							<h1> Demandes d'inscriptions </h1>
							<div id= "inscriptionImage">
								<img id= "listeBlanche" src="../Images/admin/iconeListeTest.png" alt="liste blanche">
								<div id= "premierCadre"> <?php nombreDemandeInscription($db) ; ?> </div>
							</div>
						</aside>

						<aside id= "messagerie">
							<div id= "ticket">
                                <div id="ticketTitre">
                                    <h1> Tickets </h1>
                                </div>
								<div id="rond_gauche">
									<h2> <?php nombreTicketAdministrateur($db) ; ?> </h2>
								</div>
							</div>
							<div id= "message">
                                <div id="messageTitre">
                                    <h1> Messages </h1>
                                </div>
								<div id="rond_droit">
									<h2> <?php nombreMessageAdministrateur($db) ; ?> </h2>
								</div>
							</div>
						</aside>

					</article>

					<button id= "annonce" onclick="window.location.href = 'Testir_Accueil_Annonce_administrateur';">
						<h1> Passer une annonce </h1>
					</button>

				</section>

				<section id= "statistiqueGeneral">

					<div class="banniere">
						<div class="rectangle_blanc"></div>
						<h1> Statistiques générales </h1>
						<div class="rectangle_blanc"></div>
					</div>

					<article>
						<aside id= "nombreInscription">
							<h1> Nombre d'utilisateurs <br> inscrits </h1>
							<div id= "nombreInscriptionImage">
								<div id= "buste"><img src="../Images/admin/USER white.png" alt="buste blanc"></div>
								<div id= "deuxiemeCadre">  <?php echo nombreClientInscrit($db) ; ?> </div>
							</div>
						</aside>

						<aside id= "nombreUtilisateurAn">
							<h1> Nombre d'utilisateurs <br> annuelles </h1>
							<div id= "graphiqueAn"><img src="../Images/admin/diagramme.png" alt="statistiques"></div>
						</aside>
					</article>

					<aside id= "chiffres">
						<div id= "rdv" class= "chiffreCompartiment">
							<h1>RDV</h1>
							<div class="boite"> <?php nombreRDV($db) ?> </div>
						</div>
						<div id= "tests" class= "chiffreCompartiment">
							<h1>TESTS</h1>
							<div class="boite"> <?php nombreTest($db) ?> </div>
						</div>
						<div id="satisfaction" class= "chiffreCompartiment">
							<h1>SATISFACTION</h1>
							<div class="boite"> <?php satisfaction($db) ?> / 5 </div>
						</div>
					</aside>

				</section>
								
			</div>

		</div>
	</body>
</html>