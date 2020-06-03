<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = "a861f851@eu-cdbr-west-03.cleardb.net";
$username = "b62629c2849eaf";
$password = "a861f851";
$dbb = substr($url["path"], 1);
$dbname="heroku_b43668dd81da441";

try {
    $db = new PDO("mysql:host=".$server."; dbname=".$dbname, $username, $password);
    $db->exec('SET NAMES utf8');

} catch (PDOException $e) {

    die();
}
?>
