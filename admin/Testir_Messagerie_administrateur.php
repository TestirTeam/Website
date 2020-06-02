
<?php
require("controleur\Testir_Messagerie_fonction.php");
?>



<!-- HTML -->

<DOCTYPE! html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Testir Administrateur </title>
		<link rel="stylesheet" type="text/css" href="../MVC/index.php">

		<script>

		function afficherContenu(idMessage) {
			var contenu = document.getElementById(idMessage);

			if (contenu.style.display == "none") {
				contenu.style.display = "block";
			}
			else{
				contenu.style.display = "none";
			}
		}

		function boutonBoite() {
			var importantVar = document.getElementById("importants");
			var envoyeVar = document.getElementById("messagesEnvoyes");

			importantVar.style.height = "auto";
			importantVar.style.display = "block";
			messagesEnvoyes.style.height = "auto";
			messagesEnvoyes.style.display = "block";
		}

		function boutonRecu() {
			var importantVar = document.getElementById("importants");
			var envoyeVar = document.getElementById("messagesEnvoyes");

			importantVar.style.height = "1000px";
			importantVar.style.display = "block";
			messagesEnvoyes.style.display = "none";
		}

		function boutonEnvoye() {
			var importantVar = document.getElementById("importants");
			var envoyeVar = document.getElementById("messagesEnvoyes");

			messagesEnvoyes.style.height = "1000px";
			messagesEnvoyes.style.display = "block";
			importantVar.style.display = "none";
		}


		</script>

	</head>

	<body>
		<div id="bloc_page">

			<?php include("Testir_Menu_administrateur.php"); ?>
			
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
							<h5 id="reception" class="controleMessagerie" onclick="boutonBoite()"> Boite de réception </h5>
							<h5 id="important" class="controleMessagerie" onclick="boutonRecu()"> Messages reçus </h5>
							<h5 id="reception" class="controleMessagerie" onclick="boutonEnvoye()"> Messages envoyés </h5>
						</div>	
					</div>
					
				</aside>


				<article id="partie_centrale">

					<div id="banniere">
						<div class="rectangle_blanc"></div>
						<h1> Messagerie </h1>
						<div class="rectangle_blanc"></div>
					</div>

					<div id="importants">
						<h2> Messages reçus : </h2>
						<div class="centrageTableau">
							<table class="tableauImportant">				
								<tr class="sousTitresTableauImportant">
									<td class="colonne1"> Date </td>
									<td class="colonne2"> Auteur </td>
									<td class="colonne3"> Sujet </td>
								</tr>
								<?php recuAfficher(); ?>
							</table>
						</div>
					</div>

					<div id="messagesEnvoyes">
						<h2> Messages envoyés : </h2>
						<div class="centrageTableau">
							<table class="tableauImportant">				
								<tr class="sousTitresTableauImportant">
									<td class="colonne1"> Date </td>
									<td class="colonne2"> Destinataire </td>
									<td class="colonne3"> Sujet </td>
								</tr>
								<?php envoyeAfficher(); ?>
							</table>
						</div>
					</div>
				</article>
					
			</section>
		</div>
	</body>
</html>