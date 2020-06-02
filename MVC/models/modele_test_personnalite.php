<?php




function insertFormSubmit($bdd,$q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10,$q11,$q12,$q13,$q14,$q15,$q16,$q17,$q18,$q19,$q20) {

    $id=$_SESSION['id'];
    $req = $bdd->prepare('INSERT INTO testperso(id_client, question_1, question_2, question_3, question_4, 
    question_5, question_6, question_7, question_8, question_9, question_10, question_11, question_12, question_13, question_14, question_15, 
    question_16, question_17, question_18, question_19, question_20) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');


    $req->execute(array(
        $id,
        $q1,
        $q2,
        $q3,
        $q4,
        $q5,
        $q6,
        $q7,
        $q8,
        $q9,
        $q10,
        $q11,
        $q12,
        $q13,
        $q14,
        $q15,
        $q16,
        $q17,
        $q18,
        $q19,
        $q20));
    header("Location: monProfil");


}

function checkTest($db,$id_client){
    $req= $db->prepare('SELECT id_test FROM testperso WHERE id_client= ?');
    $req->execute(array($id_client));
    $req=$req->fetch();

    return $req;
}

?>