<?php

function selectUserCo($db,$mail,$mdp){
    $reponse=$db->prepare("SELECT * FROM client WHERE email= ? AND mdp= ?");
    $reponse->execute(array($mail,$mdp));
    return $reponse;
}
function selectAllUsers($db){
    $reponse = $db->prepare("select * from users ");
    $reponse->execute();
    return $reponse;
}
?>