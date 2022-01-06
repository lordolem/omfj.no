<?php

$tjener = "mysql.klasserom.net";
$brukernavn = "knet-elev20925";
$passord = "ton59";
$database = "knet-elev20925";

// $tjener = "192.168.64.2:3306";
// $brukernavn = "olem";
// $passord = "olem";
// $database = "prosjektdb1";

$kobling = new mysqli($tjener, $brukernavn, $passord, $database);

if ($kobling->connect_error) {
    die("Noe gikk galt: " . $kobling->connect_error);
}

$kobling->set_charset("utf8");
?>