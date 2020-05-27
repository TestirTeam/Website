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
?>