<?php

function bddConnect() {

    try
    {
        $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

}




function insertFormSubmit() {

    $bdd = bddConnect();

    $req = $bdd->prepare('INSERT INTO test personnalité(id_test personnalité, id_client, question_1, question_2, question_3, question_4, 
    question_5, question_6, question_7, question_8, question_9, question_10, question_11, question_12, question_13, question_14, question_15, 
    question_16, question_17, question_18, question_19, question_20) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

    $_POST['id_test personnalité'] = 1;
    $_POST['id_client'] = 2;

    $req->execute(array(
        'id_test personnalité' => $_SESSION['id_test personnalité'],
        'id_client' => $_POST['id_client'],
        'question_1' => $_POST['question_1'],
        'question_2' => $_POST['question_2'],
        'question_3' => $_POST['question_3'],
        'question_4' => $_POST['question_4'],
        'question_5' => $_POST['question_5'],
        'question_6' => $_POST['question_6'],
        'question_7' => $_POST['question_7'],
        'question_8' => $_POST['question_8'],
        'question_9' => $_POST['question_9'],
        'question_10' => $_POST['question_10'],
        'question_11' => $_POST['question_11'],
        'question_12' => $_POST['question_12'],
        'question_13' => $_POST['question_13'],
        'question_14' => $_POST['question_14'],
        'question_15' => $_POST['question_15'],
        'question_16' => $_POST['question_16'],
        'question_17' => $_POST['question_17'],
        'question_18' => $_POST['question_18'],
        'question_19' => $_POST['question_19'],
        'question_20' => $_POST['question_20']));

    $submit = $req->fetch();

    return $submit;

}

?>