<?php
// base de données



function recuAfficher($db){
    $requete = $db->query('SELECT * FROM messagerie');
    $messagerie = $requete->fetch();

	if (isset($_POST['retrouverMessage'])) {
		$requeteMessagerie = $db->prepare('SELECT * FROM messagerie WHERE emailAuteur LIKE ? OR jour LIKE ?');
		$requeteMessagerie->execute(array("%" . htmlspecialchars($_POST['retrouverMessage']) . "%", "%" . htmlspecialchars($_POST['retrouverMessage']) . "%"));
	}
	else{
		$requeteMessagerie = $db->query('SELECT * FROM messagerie');
	}

	while ($messagerie = $requeteMessagerie->fetch()) {
		echo '
			<tr class="nouvelleLigne" onclick="afficherContenu('. $messagerie['id_messagerie'] .')">
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


function envoyeAfficher($db){
	if (isset($_POST['retrouverMessage'])) {
		$requeteMessagerie = $db->prepare('SELECT * FROM messagerie WHERE emailDestinataire LIKE ? OR jour LIKE ?');
		$requeteMessagerie->execute(array("%" . htmlspecialchars($_POST['retrouverMessage']) . "%", "%" . htmlspecialchars($_POST['retrouverMessage']) . "%"));
	}
	else{
		$requeteMessagerie = $db->query('SELECT * FROM messagerie');
	}

	while ($messagerie = $requeteMessagerie->fetch()) {
		echo '
			<tr class="nouvelleLigne" onclick="afficherContenu('. $messagerie['id_messagerie'] .')">
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

function envoyer($db){
    if (!empty($_POST['destinataireMessage']) && !empty($_POST['objetMessage']) && !empty($_POST['contenuMessage'])) {
        $requeteMessage = $db->prepare('INSERT INTO messagerie (emailAuteur, emailDestinataire, type, jour, importance, objet, contenu) VALUES (:emailAuteur, :emailDestinataire, :type, :jour, :importance, :objet, :contenu)');
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

?>