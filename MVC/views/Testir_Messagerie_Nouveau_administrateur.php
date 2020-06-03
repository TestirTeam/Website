

<?php
require("controllers\Testir_Messagerie_fonction.php");
require ("models/connexiondb.php");
envoyer($db);
?>



<!-- HTML -->

<DOCTYPE! html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Testir Administrateur </title>
		<link rel="stylesheet" type="text/css" href="stylesheetMVC/Admin/Testir_Messagerie_Nouveau_administrateur.css">
	</head>

	<body>
		<div id="bloc_page">

            <?php require("Testir_Menu_administrateur.php"); ?>
			
			<section>

				<aside id="menuMessage">
					<div id="rectangle_rouge">
						<form method="post" action="Testir_Messagerie_administrateur">
							<input type="search" name="retrouverMessage" id="formMessage" placeholder=" retrouver un message ">
						</form>
					</div>
					<div id="liste_rouge">
						<button id="nouveau_message" onclick="window.location.href = 'Testir_Messagerie_Nouveau_administrateur';">
							<h3> Nouveau Message </h3>
						</button> 
						<div id="categories">
							<h5 id="reception" > Boite de réception </h5>
							<h5 id="important" > Messages reçus </h5>
							<h5 id="reception" > Messages envoyés </h5>
						</div>	
					</div>	
				</aside>


				<article id="partie_centrale">

					<div id="banniere">
						<div class="rectangle_blanc"></div>
						<h1> Messagerie </h1>
						<div class="rectangle_blanc"></div>
					</div>

					<button id="boutonAnnuler" onclick="window.location.href = 'Testir_Messagerie_administrateur'">
						<div id="imageMoins"></div>
						<h2> Retour </h2>
						<div id="imageMoins"></div>
					</button>

					<form method="post" action="Testir_Messagerie_Nouveau_administrateur" id="nouveauMessage">
						<div id="destinataire">
							<h3> Email destinataire : </h3>
							<?php verificationDestiantaire() ; ?>
							<input type="text" name="destinataireMessage" id="formDestinataire" placeholder=" email ">
						</div>

						<div id="objet">
							<h3> Objet : </h3>
							<?php verificationObjet() ; ?>
							<input type="text" name="objetMessage" id="formObjet" placeholder=" objet ">
						</div>

						<div id="contenu">
							<h3> Contenu : </h3>
							<?php verificationContenu() ; ?>
							<textarea name="contenuMessage" id="formContenu"></textarea>
						</div>

						<div id="submit">
							<input type="submit" value="envoyer">
							<input type="hidden" name="verification" value="1">
						</div>
					</form>
				</article>
					
			</section>
		</div>
	</body>
</html>