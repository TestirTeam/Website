<?php

require('models/modele_test_personnalite.php');
require('models/connexiondb.php');




if (empty($_POST['question_13']) or empty($_POST['question_14']) or empty($_POST['question_15']) or empty($_POST['question_16'])
    or empty($_POST['question_17']) or empty($_POST['question_18']) or empty($_POST['question_19']) or empty($_POST['question_20'])) {

} else {
    insertFormSubmit($db,$_POST['question_1'],$_POST['question_2'],$_POST['question_3'],$_POST['question_4'],
    $_POST['question_5'],$_POST['question_6'],$_POST['question_7'],$_POST['question_8'],$_POST['question_9']
,$_POST['question_10'],$_POST['question_11'],$_POST['question_12'],$_POST['question_13'],$_POST['question_14'],
$_POST['question_15'],$_POST['question_16'],$_POST['question_17'],$_POST['question_18'],$_POST['question_19'],
$_POST['question_20']);


}
