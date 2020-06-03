<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=bdd_testir;port=3309", "root", "root");
    $db->exec('SET NAMES utf8');

} catch (PDOException $e) {

    die();
}
?>
