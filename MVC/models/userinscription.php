<?php
function selectUserPseudo($db,$pseudo){
    $reponse=$db->prepare('SELECT * FROM client WHERE pseudo= ?');
    $reponse->execute(array($pseudo));
    return $reponse;
}
function selectUserMail($db,$mail){
    $reponse=$db->prepare('SELECT * FROM client WHERE email= ?');
    $reponse->execute(array($mail));
    return $reponse;
}
function insertUserInfo($db,$pseudo,$nom, $prenom,$age,$date,$pays,$adrs,$sexe,$mail,$mdp){
    $admin=0;
    $examinateur=0;
    $reponse = $db->prepare("INSERT INTO client(admin,examinateur,pseudo,nom,prenom,age,date,pays,adresse,sexe,email,mdp) 
                                                                        values ('$admin','$examinateur','$pseudo','$nom', '$prenom','$age','$date','$pays','$adrs','$sexe','$mail','$mdp')");
    $reponse->execute();
}

?>
