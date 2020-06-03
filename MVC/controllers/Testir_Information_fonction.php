

<?php


//Accueil

function faqAfficher($db){
	$requeteFAQ = $db->query('SELECT * FROM faq');
	while ($FAQ = $requeteFAQ->fetch()) {
		echo '
			<tr class="nouvelleLigne">
				<td class="colonne1"> '. $FAQ['id_FAQ'] .' </td>
				<td class="colonne2"> '. $FAQ['sujet'] .' </td>
			</tr>
		
		';
	}
}


function forumAfficher($db){
	$requeteForum = $db->query('SELECT * FROM forum');
	while ($Forum = $requeteForum->fetch()) {
		echo '
			<tr class="nouvelleLigne">
				<td class="colonne1"> '. $Forum['id_forum'] .' </td>
				<td class="colonne2"> '. $Forum['sujet'] .' </td>
			</tr>
		
		';
	}
}

//CGU

function cgu($db) {
	$requeteCGU = $db->query('SELECT contenu FROM cgu');
	$CGU = $requeteCGU->fetch();
	if (!empty($_POST['CGU'])){
		echo $_POST['CGU'] ;
	}
	else{
		echo $CGU['contenu'] ;
	}
}

function modifierCGU($db) {
	$requeteCGU = $db->query('SELECT contenu FROM cgu');
	$CGU = $requeteCGU->fetch();

	if (!empty($_POST['CGU'])){
		$requete = $db->prepare(' UPDATE cgu SET contenu = ? ');
		$requete->execute(array(htmlspecialchars($_POST['CGU'])));
	}
}

//FAQ

function FaqQuestion($db) {
	$requeteCGU = $db->query('SELECT contenu FROM cgu');
	$CGU = $requeteCGU->fetch();
	if (!empty($_POST['CGU'])){
		echo $_POST['CGU'] ;
	}
	else{
		echo $CGU['contenu'] ;
	}
}

function modifierFaq($db) {
	if (isset($_POST['IdFaq'])){
		$requete = $db->prepare(' UPDATE faq SET question = ? WHERE id_FAQ = ?');
		$requete->execute(array(htmlspecialchars($_POST['FaqQuestion']), htmlspecialchars($_POST['IdFaq'])));
		$requete = $db->prepare(' UPDATE faq SET reponse = ? WHERE id_FAQ = ?');
		$requete->execute(array(htmlspecialchars($_POST['FaqReponse']), htmlspecialchars($_POST['IdFaq'])));
	}
}


function afficherFAQ($db){
	$requeteFAQ = $db->query('SELECT * FROM faq ORDER BY id_FAQ');
	$numero = 1;
	while ($FAQ = $requeteFAQ->fetch()) {
		echo '
		<form method="post" action="Testir_Information_FAQ_administrateur" class="faq">
			<div class="question">
				<h3> Question : '. $numero .' </h3>
				<textarea type="text" name="FaqQuestion" class="FaqQuestion">'. $FAQ['question'] .'</textarea>
			</div>

			<div class="reponse">
				<h3> Reponse : '. $numero .' </h3>
				<textarea type="text" name="FaqReponse" class="FaqReponse">'. $FAQ['reponse'] .'</textarea>
			</div>

			<div class="submit">
				<input type="submit" value="confirmer">
				<input type="hidden" name="IdFaq" value="' . $FAQ['id_FAQ'] . '">
			</div>
		</form>

		';
		$numero++;
	}
}


//Mentions legales

function ml($db) {
	$requeteML = $db->query('SELECT contenu FROM mentions_legales');
	$ML = $requeteML->fetch();
	if (!empty($_POST['ML'])){
		echo $_POST['ML'] ;
	}
	else{
		echo $ML['contenu'] ;
	}
}

function modifierML($db) {
	$requeteML = $db->query('SELECT contenu FROM mentions_legales');
	$ML = $requeteML->fetch();

	if (!empty($_POST['ML'])){
		$requete = $db->prepare(' UPDATE mentions_legales SET contenu = ? ');
		$requete->execute(array(htmlspecialchars($_POST['ML'])));
	}
}


?>