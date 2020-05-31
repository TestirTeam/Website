
<?php
// base de données
$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');


function envoyer(){
	if (!empty($_POST['destinataireMessage']) && !empty($_POST['objetMessage']) && !empty($_POST['contenuMessage'])) {
		$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
		$requeteMessage = $bdd->prepare('INSERT INTO messagerie (emailAuteur, emailDestinataire, type, jour, importance, objet, contenu) VALUES (:emailAuteur, :emailDestinataire, :type, :jour, :importance, :objet, :contenu)');
		$requeteMessage->execute(array(
			'emailAuteur' => 'auteur de email',
			'emailDestinataire' => $_POST['destinataireMessage'],
			'type' => 'message',
			'jour' => date('Y-m-d'),
			'importance' => 'important',
			'objet' => $_POST['objetMessage'],
			'contenu' => $_POST['contenuMessage']
		));
	}
}


function verificationDestiantaire(){
	if (empty($_POST['destinataireMessage']) && isset($_POST['verification'])) {
		echo '<h6> ATTENTION : le message doit contenir l\'adresse du destinataire </h6>' ;
	}
}

function verificationObjet(){
	if (empty($_POST['objetMessage']) && isset($_POST['verification'])) {
		echo '<h6> ATTENTION : le message doit contenir l\'objet </h6>' ;
	}
}

function verificationContenu(){
	if (empty($_POST['contenuMessage']) && isset($_POST['verification'])) {
		echo '<h6> ATTENTION : le message doit contenir du contenu </h6>' ;
	}
}

envoyer();

?>


<!-- HTML -->

<DOCTYPE! html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Testir Administrateur </title>
		<link rel="stylesheet" type="text/css" href="Testir_Messagerie_Nouveau_administrateur.css">
	</head>

	<body>
		<div id="bloc_page">

			<?php include("Testir_Menu_administrateur.php") ; ?>
			
			<section>

				<aside id="menuMessage">
					<div id="rectangle_rouge">
						<form method="post" action="Testir_Messagerie_administrateur.php">
							<input type="search" name="retrouverMessage" id="formMessage" placeholder=" retrouver un message ">
						</form>
					</div>
					<div id="liste_rouge">
						<button id="nouveau_message" onclick="window.location.href = 'Testir_Messagerie_Nouveau_administrateur.php';">
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

					<button id="boutonAnnuler" onclick="window.location.href = 'Testir_Messagerie_administrateur.php'">
						<div id="imageMoins"></div>
						<h2> Retour </h2>
						<div id="imageMoins"></div>
					</button>

					<form method="post" action="Testir_Messagerie_Nouveau_administrateur.php" id="nouveauMessage">
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