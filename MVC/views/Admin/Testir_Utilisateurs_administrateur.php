

<?php
require("controleur\Testir_Utilisateurs_fonction.php");

commentaireModifier();
supprimer();

// dans le cas d'aucun utilisateur sélectionné
if (!isset($_POST['nomUtilisateur'])) {
	$_POST['nomUtilisateur'] = "none";
	$_POST['prenomUtilisateur'] = "none";
	$_POST['emailUtilisateur'] = "none";
}
?>



<!-- HTML -->

<DOCTYPE! html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Testir Administrateur </title>
		<link rel="stylesheet" type="text/css" href="Testir_Utilisateurs_administrateur.css">
	</head>

	<body>
		<div id="bloc_page">

			<?php include("Testir_Menu_administrateur.php") ; ?>
			
			<section>

				<aside id="menuUtilisateur">
					<div id="rectangle_rouge">
						<form method="post" action="Testir_Utilisateurs_administrateur.php">
							<input type="search" name="nomUtilisateurListe" id="rechercheUtilisateur" placeholder=" nom utilisateur ">
						</form>
					</div>
					<div id="listeUtilisateur">
						<h2> liste des utilisateurs : </h2>
						<ul>
							<?php utilisateurListe() ; ?>
						</ul>
					</div>	
				</aside>


				<article id="partie_centrale">

					<div id="banniere">
						<div class="rectangle_blanc"></div>
						<h1> Partie Utilisateur </h1>
						<div class="rectangle_blanc"></div>
					</div>

					<div id="renseignement_utilisateur">
						<div id="photo">
							<img src="<?php imageAfficher() ; ?>" >
						</div>
						<div id="information_personelle">
							<h2> Nom </h2>
							<div> <?php nomAfficher() ; ?> </div>
							<h2> Prénom </h2>
							<div> <?php prenomAfficher() ; ?> </div>
							<h2> Email </h2>
							<div> <?php emailAfficher() ; ?> </div>
							<h2> Type </h2>
							<div> <?php typeAfficher() ; ?> </div>
						</div>
					</div>

					<div id="bas">
						<h2> Messages et tickets </h2>
						<table id="tableau">
							<tr id="sous_titres">
								<td class="date"> Date </td>
								<td class="type"> Type </td>
								<td class="objet"> Objet </td>
							</tr>
							<?php messageAfficher() ; ?>
						</table>
					</div>
				</article>


				<article id="partie_droite">

					<div id="gestion_utilisateur">

						<form method="post" action="Testir_Utilisateurs_administrateur.php" class="optionUtilisateur">
							<input type="submit" class="bouton" value="Valider" >
							<input type="hidden" name="nomUtilisateur" value=<?php echo $_POST['nomUtilisateur'] ?> >
							<input type="hidden" name="prenomUtilisateur" value= <?php echo $_POST['prenomUtilisateur'] ?> >
							<input type="hidden" name="emailUtilisateur" value= <?php echo $_POST['emailUtilisateur'] ?> >
							<input type="hidden" name="valider" value="1">
						</form>

						<form method="post" action="Testir_Utilisateurs_administrateur.php" class="optionUtilisateur">
							<input type="submit" class="bouton" value="Bloquer" >
							<input type="hidden" name="nomUtilisateur" value=<?php echo $_POST['nomUtilisateur'] ?> >
							<input type="hidden" name="prenomUtilisateur" value= <?php echo $_POST['prenomUtilisateur'] ?> >
							<input type="hidden" name="emailUtilisateur" value= <?php echo $_POST['emailUtilisateur'] ?> >
							<input type="hidden" name="bloquer" value="1">
						</form>

						<form method="post" action="Testir_Utilisateurs_administrateur.php" class="optionUtilisateur">
							<input type="submit" class="bouton" value="Supprimer" >
							<input type="hidden" name="nomUtilisateur" value=<?php echo $_POST['nomUtilisateur'] ?> >
							<input type="hidden" name="prenomUtilisateur" value= <?php echo $_POST['prenomUtilisateur'] ?> >
							<input type="hidden" name="emailUtilisateur" value= <?php echo $_POST['emailUtilisateur'] ?> >
							<input type="hidden" name="supprimer" value="1">
						</form>	
					</div>


					<div id="informations_forum">

						<h2> Réactions Forums </h2>

						<div id="pouces">
							<div id="pouce_bleu">
								<img src="C:/Users/paulb/Pictures/Image_Testir/pouce_bleu.jpg" alt="pouce bleu">
							</div>
							<h3> <?php nombrePouceBleu(); ?> </h3>
							<div id="pouce_rouge">
								<img src="C:/Users/paulb/Pictures/Image_Testir/pouceRouge.jpg" alt="pouce rouge">
							</div>
							<h3> <?php nombrePouceRouge(); ?> </h3>
						</div>

						<div id="commentaires">
							<h3> Commentaires </h3>
							<form method="post" action="Testir_Utilisateurs_administrateur.php">
								<textarea id="zoneCommentaire" name="commentaire" value="1"><?php commentaireAfficher(); ?></textarea>
								<input type="submit" name="commentaireSubmit" value="enregistrer">
								<input type="hidden" name="nomUtilisateur" value=<?php echo $_POST['nomUtilisateur'] ?> >
								<input type="hidden" name="prenomUtilisateur" value= <?php echo $_POST['prenomUtilisateur'] ?> >
								<input type="hidden" name="emailUtilisateur" value= <?php echo $_POST['emailUtilisateur'] ?> >
							</form>
							
						</div>
					</div>
						
				</article>
			</section>

		</div>
	</body>
</html>