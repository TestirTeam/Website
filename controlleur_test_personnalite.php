<?php

require('modele_test_personnalite.php');

insertFormSubmit();


if (empty($_SESSION['question_13']) or empty($_SESSION['question_14']) or empty($_SESSION['question_15']) or empty($_SESSION['question_16'])
    or empty($_SESSION['question_17']) or empty($_SESSION['question_18']) or empty($_SESSION['question_19']) or empty($_SESSION['question_20'])) {
    echo "Vous n'avez pas répondu à toutes les questions !";
} else {
    echo "Vous avez répondu à toutes les questions, merci !";
    session_destroy();
}
