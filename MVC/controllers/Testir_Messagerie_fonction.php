<?php
// base de données
$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
$requete = $bdd->query('SELECT * FROM messagerie');

$messagerie = $requete->fetch();


function recuAfficher(){
	$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
	if (isset($_POST['retrouverMessage'])) {
		$requeteMessagerie = $bdd->prepare('SELECT * FROM messagerie WHERE emailAuteur LIKE ? OR jour LIKE ?');
		$requeteMessagerie->execute(array("%" . htmlspecialchars($_POST['retrouverMessage']) . "%", "%" . htmlspecialchars($_POST['retrouverMessage']) . "%"));
	}
	else{
		$requeteMessagerie = $bdd->query('SELECT * FROM messagerie');
	}

	while ($messagerie = $requeteMessagerie->fetch()) {
		echo '
			<tr class="nouvelleLigne" onclick="afficherContenu('. $messagerie['id_messagerie'] .');">
				<td class="colonne1"> '. $messagerie['jour'] .' </td>
				<td class="colonne2"> '. $messagerie['emailAuteur'] .' </td>
				<td class="colonne3"> '. $messagerie['objet'] .' </td>
			</tr>
			<tr class="nouveauContenu" id= '. $messagerie['id_messagerie'] .'>
				<td class="contenuTitre" > CONTENU : </td>
				<td class="contenu" colspan="2"> '. $messagerie['contenu'] .' </td>
			</tr>
		
		';
	}
}


function envoyeAfficher(){
	$bdd = new PDO('mysql:host=localhost;dbname=bdd testir;charset=utf8', 'root', '');
	if (isset($_POST['retrouverMessage'])) {
		$requeteMessagerie = $bdd->prepare('SELECT * FROM messagerie WHERE emailDestinataire LIKE ? OR jour LIKE ?');
		$requeteMessagerie->execute(array("%" . htmlspecialchars($_POST['retrouverMessage']) . "%", "%" . htmlspecialchars($_POST['retrouverMessage']) . "%"));
	}
	else{
		$requeteMessagerie = $bdd->query('SELECT * FROM messagerie');
	}

	while ($messagerie = $requeteMessagerie->fetch()) {
		echo '
			<tr class="nouvelleLigne" onclick="afficherContenu('. $messagerie['id_messagerie'] .');">
				<td class="colonne1"> '. $messagerie['jour'] .' </td>
				<td class="colonne2"> '. $messagerie['emailDestinataire'] .' </td>
				<td class="colonne3"> '. $messagerie['objet'] .' </td>
			</tr>
			<tr class="nouveauContenu" id= '. $messagerie['id_messagerie'] .'>
				<td class="contenuTitre" > CONTENU : </td>
				<td class="contenu" colspan="2"> '. $messagerie['contenu'] .' </td>
			</tr>
		
		';
	}
}

?>