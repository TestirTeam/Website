<?php
function selectMsg($db,$id_dest){
    $response=$db->prepare("SELECT * FROM testir_chat WHERE id_destinataire = ?");
    $response->execute(array($id_dest));
    return $response;
}

function showPseudoDesti($db,$id_exp){

    $response = $db->prepare("SELECT * FROM client WHERE id_client = ?");
    $response->execute(array($id_exp));
    $response= $response->fetch();
    $response=$response['pseudo'];

    return $response;

}

function selectMsgById($db,$id){
    $response=$db->prepare("SELECT * FROM testir_chat WHERE id = ?");
    $response->execute(array($id));
    return $response;
}

function updateLu($db,$id){
    $response=$db->prepare("UPDATE testir_chat SET lu =1 WHERE id = ?");
    $response->execute(array($id));
}

function supprimerMsg($db,$id){
    $response=$db->prepare("DELETE FROM testir_chat WHERE id = ?");
    $response->execute(array($id));
}
?>