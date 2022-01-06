<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
    <link rel="stylesheet" href="main.css" type="text/css">
    <title>Ole Magnus</title>
</head>
<body>

    <?php

    include "include-nav-bar.php";
    include "include-sql.php";

    echo "<h2>Historikk av kjøp fra alle butikker</h2><br>";

    $resultat = $kobling->query($sql);

    while($rad = $resultat->fetch_assoc()) {
        $klokke_ref_nr = $rad["refnr"];
        $klokke_modell = $rad["modell_navn"];
        $klokke_materiale = $rad["materiale"];
        $klokke_diameter = $rad["diameter"];
        $klokke_pris = $rad["pris"];

        $produsent_land = $rad["p_land"];
        $produsent_navn = $rad["p_navn"];
        $produsent_grunnlagt = $rad["p_grunnlagt"];

        $kjoper_k_etternavn = $rad["k_etternavn"];
        $kjoper_k_fornavn = $rad["k_fornavn"];

        $selger_s_etternavn = $rad["s_etternavn"];
        $selger_s_fornavn = $rad["s_fornavn"];

        $butikk_sted = $rad["butikk_navn"];
        $butikk_gatenavn = $rad["gatenavn"];
        $butikk_gatenr = $rad["gatenr"];

        $dato = $rad["dato_id"];
    
        echo "  

        <table class='historikk'>
        <tr>
            <td class='venstre'>Ref Nummer:</td>
            <td class='hoyre'>$klokke_ref_nr</td>
        </tr>
        <tr>
            <td class='venstre'>Modell:</td>
            <td class='hoyre'>$klokke_modell</td>
        </tr>
        <tr>
            <td class='venstre'>Materiale:</td>
            <td class='hoyre'>$klokke_materiale</td>
        </tr>
        <tr>
            <td class='venstre'>Diameter:</td>
            <td class='hoyre'>$klokke_diameter mm</td>
        </tr>
        <tr>
            <td class='venstre'>Merke:</td>
            <td class='hoyre'>'$produsent_navn' fra $produsent_land est. $produsent_grunnlagt</td>
        </tr>
        <tr>
            <td class='venstre'>Kjøpt av:</td>
            <td class='hoyre'>$kjoper_k_etternavn, $kjoper_k_fornavn</td>
        </tr>
        <tr>
            <td class='venstre'>Solgt av:</td>
            <td class='hoyre'>$selger_s_etternavn, $selger_s_fornavn</td>
        </tr>
        <tr>
            <td class='venstre'>Sted kjøpt:</td>
            <td class='hoyre'>$butikk_sted på $butikk_gatenavn $butikk_gatenr</td>
        </tr>
        <tr>
            <td class='venstre'>Når kjøpt:</td>
            <td class='hoyre'>$dato</td>
        </tr>
        <tr>
            <td class='venstre'>Pris:</td>
            <td class='hoyre'>$klokke_pris kr</td>
        </tr>
        </table>
        ";
    }

    ?>
</body>
</html>