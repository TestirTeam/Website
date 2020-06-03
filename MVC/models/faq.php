<?php

function getFaqInfo($db,$id){
    $response=$db->prepare('SELECT * FROM faq WHERE id_FAQ= ?');
    $response->execute(array($id));
    $response= $response->fetch();

    return $response;
}



?>


