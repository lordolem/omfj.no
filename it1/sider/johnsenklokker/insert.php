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



    echo "<h2>Legge til flere selgere</h2><br>";

    if(isset($_POST["leggtil"])) {

        $tjener = "mysql.klasserom.net";
        $brukernavn = "knet-elev20925";
        $passord = "ton59";
        $database = "knet-elev20925"; //Kan variere

        $kobling = new mysqli($tjener, $brukernavn, $passord, $database);

        if ($kobling->connect_error) {
            die("Noe gikk galt: " . $kobling->connect_error);
        }

        $kobling->set_charset("utf8");

        $s_fornavn = $_POST["s_fornavn"];
        $s_etternavn = $_POST["s_etternavn"];

        $sql = "INSERT INTO selger (s_fornavn, s_etternavn) VALUES ('$s_fornavn', '$s_etternavn')";

    }

    ?>

    <form class="insert" method="POST">
        Navn på selger:
        <input class="input" type="text" name="s_fornavn">
        <input class="input" type="text" name="s_etternavn">
        <input class="input" type="submit" name="leggtil" value="Legg til">
    </form>
</body>
</html>