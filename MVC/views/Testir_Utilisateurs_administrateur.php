

<?php
require("controllers/Testir_Utilisateurs_fonction.php");
require ("models/connexiondb.php");

commentaireModifier($db);
supprimer($db);

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
		<link rel="stylesheet" type="text/css" href="stylesheetMVC/Admin/Testir_Utilisateurs_administrateur.css">
	</head>

	<body>
		<div id="bloc_page">

            <?php require("Testir_Menu_administrateur.php"); ?>
			
			<section>

				<aside id="menuUtilisateur">
					<div id="rectangle_rouge">
						<form method="post" action="Testir_Utilisateurs_administrateur">
							<input type="search" name="nomUtilisateurListe" id="rechercheUtilisateur" placeholder=" nom utilisateur ">
						</form>
					</div>
					<div id="listeUtilisateur">
						<h2> liste des utilisateurs : </h2>
						<ul>
							<?php utilisateurListe($db) ; ?>
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
							<img src="<?php $image=imageAfficher($db);
                            echo $image;?>" >
						</div>
						<div id="information_personelle">
							<h2> Nom </h2>
							<div> <?php $nom=nomAfficher($db);
                                echo $nom;?> </div>
							<h2> Prénom </h2>
							<div> <?php  $prenom=prenomAfficher($db);
                                echo $prenom;?> </div>
							<h2> Email </h2>
							<div> <?php $email=emailAfficher($db);
                                echo $email; ?> </div>
							<h2> Type </h2>
							<div> <?php $type=typeAfficher($db);
                                echo $type; ?> </div>
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
							<?php messageAfficher($db) ; ?>
						</table>
					</div>
				</article>


				<article id="partie_droite">

					<div id="gestion_utilisateur">

						<form method="post" action="Testir_Utilisateurs_administrateur" class="optionUtilisateur">
							<input type="submit" class="bouton" value="Valider" >
							<input type="hidden" name="nomUtilisateur" value=<?php echo $_POST['nomUtilisateur'] ?> >
							<input type="hidden" name="prenomUtilisateur" value= <?php echo $_POST['prenomUtilisateur'] ?> >
							<input type="hidden" name="emailUtilisateur" value= <?php echo $_POST['emailUtilisateur'] ?> >
							<input type="hidden" name="valider" value="1">
						</form>

						<form method="post" action="Testir_Utilisateurs_administrateur" class="optionUtilisateur">
							<input type="submit" class="bouton" value="Bloquer" >
							<input type="hidden" name="nomUtilisateur" value=<?php echo $_POST['nomUtilisateur'] ?> >
							<input type="hidden" name="prenomUtilisateur" value= <?php echo $_POST['prenomUtilisateur'] ?> >
							<input type="hidden" name="emailUtilisateur" value= <?php echo $_POST['emailUtilisateur'] ?> >
							<input type="hidden" name="bloquer" value="1">
						</form>

						<form method="post" action="Testir_Utilisateurs_administrateur" class="optionUtilisateur">
							<input type="submit" class="bouton" value="Supprimer" >
							<input type="hidden" name="nomUtilisateur" value=<?php echo $_POST['nomUtilisateur'] ?> >
							<input type="hidden" name="prenomUtilisateur" value= <?php echo $_POST['prenomUtilisateur'] ?> >
							<input type="hidden" name="emailUtilisateur" value= <?php echo $_POST['emailUtilisateur'] ?> >
							<input type="hidden" name="supprimer" value="1">
						</form>	
					</div>


					<div id="informations_forum">

                        <h2> Commentaires </h2>

						<div id="commentaires">

							<h3> spécifique à l'utilisateur </h3>

							<form method="post" action="Testir_Utilisateurs_administrateur">
								<textarea id="zoneCommentaire" name="commentaire" value="1"><?php commentaireAfficher($db); ?></textarea>
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