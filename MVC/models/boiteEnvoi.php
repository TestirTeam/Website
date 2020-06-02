<?php
function selectDestinataire($db,$destinataire){
    $response=$db->prepare('SELECT id_client FROM client WHERE pseudo =?');
    $response->execute(array($destinataire));
    $destexist= $response->rowCount();

    return array($response,$destexist);
}

function insertMsg($db,$id_desti,$message,$objet){
    $lu=0;
    $response=$db->prepare('INSERT INTO testir_chat(id_expediteur,id_destinataire,objet,message,lu) VALUES (?,?,?,?,?)');
    $response->execute(array($_SESSION['id'], $id_desti, $objet,$message,$lu));

    return $response;
}
function showUserList($db){
    $response = $db->query('SELECT pseudo FROM client ORDER BY pseudo');
    return $response;
}

?>