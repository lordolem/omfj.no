<?php

$tjener = "192.168.64.2:3306";
$brukernavn = "olem";
$passord = "olem";
$database = "klokkedb"; //Kan variere

$kobling = new mysqli($tjener, $brukernavn, $passord, $database);

if ($kobling->connect_error) {
    die("Noe gikk galt: " . $kobling->connect_error);
}

$kobling->set_charset("utf8");

$sql = "SELECT refnr, modell_navn, materiale, diameter, 
        pris, dato_id, butikk_navn, gatenavn, gatenr, 
        s_fornavn, s_etternavn, k_fornavn, k_etternavn, 
        p_navn, p_land, p_grunnlagt, dato_id

FROM produsent

JOIN klokke ON produsent.produsent_id = klokke.k_produsent_id
JOIN kjoper ON kjoper.kjoper_id = klokke.k_kjoper_id
JOIN selger ON selger.selger_id = klokke.k_selger_id
JOIN butikk ON butikk.butikk_id = klokke.k_butikk_id
JOIN dato ON dato.dato_id = klokke.k_dato_id

ORDER BY dato_id desc

";
?>