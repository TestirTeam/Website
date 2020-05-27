<?php
function selectDestinataire($db,$destinataire){
    $response=$db->prepare('SELECT id_client FROM client WHERE pseudo =?');
    $response->execute(array($destinataire));
    $destexist= $response->rowCount();

    return array($response,$destexist);
}

function insertMsg($db,$id_desti,$message){

    $response=$db->prepare('INSERT INTO testir_chat(id_expediteur,id_destinataire,message) VALUES (?,?,?)');
    $response->execute(array($_SESSION['id'], $id_desti, $message));

    return $response;
}
function showUserList($db){
    $response = $db->query('SELECT pseudo FROM client ORDER BY pseudo');
    return $response;
}

?>