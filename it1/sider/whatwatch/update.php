<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
        <link rel="stylesheet" href="main.css" type="text/css">
        <link rel="script" href="dropdown.js" type="text/js">
        <title>WhatWatch | Update</title>
    </head>
    <body>
        <?php 

            include "INC_header.php";
            include "INC_kobling.php";

            if(isset($_POST["Endre"])) {

                $serie_id = $_POST["serieid"];
                $serie_navn = $_POST["serie_navn"];
                $sesonger = $_POST["sesonger"];
                $terningkast = $_POST["terningkast"];

                $sql = "UPDATE  `knet-elev20925`.`Serie` 
                        SET serie_navn = '$serie_navn', sesonger = '$sesonger', terningkast = '$terningkast' 
                        WHERE serieid = '$serie_id'";
                
                include "INC_console.php";
            }
      
            $sql = "SELECT * FROM Serie";
            $resultat = $kobling->query($sql);

            echo "<form class='insert' method='POST'>";

            while($rad = $resultat->fetch_assoc()) {

                $serie_id = $rad["serieid"];
                $serie_navn = $rad["serie_navn"];
                $sesonger = $rad["sesonger"];
                $terningkast = $rad["terningkast"];

                echo "<br>";
                echo "<div class='input-seksjon'>";
                echo "<p class='input-tekst'>ID</p>";
                echo "<input class='form-input-num' type='number' name='serieid' value='$serie_id' disabled>";
                echo "</div>";
                echo "<br>";
                echo "<div class='input-seksjon'>";
                echo "<p class='input-tekst'>Serienavn</p>";
                echo "<input class='form-input' type='text' name='serie_navn' value='$serie_navn'>";
                echo "</div>";
                echo "<br>";
                echo "<div class='input-seksjon'>";
                echo "<p class='input-tekst'>Sesonger</p>";
                echo "<input class='form-input-num' type='number' name='sesonger' value='$sesonger'>";
                echo "</div>";
                echo "<br>";
                echo "<div class='input-seksjon'>";
                echo "<p class='input-tekst'>Terningkast</p>";
                echo "<input class='form-input-num' type='number' name='terningkast' value='$terningkast'>";
                echo "</div>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";

            }

            echo "<input class='legg-til' type='submit' name='Endre' value='Endre'>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "</form>";
        ?>
    </body>
</html>