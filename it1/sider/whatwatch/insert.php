<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
        <link rel="stylesheet" href="main.css" type="text/css">
        <link rel="script" href="dropdown.js" type="text/js">
        <title>Ole Magnus</title>
    </head>
    <body>
        <?php 

            include "INC_header.php";
            include "INC_kobling.php";

            if(isset($_POST["leggtil"])) {

                $serie_navn = $_POST["serie_navn"];
                $sesonger = $_POST["sesonger"];
                $startaar = $_POST["startaar"];
                $terningkast = $_POST["terningkast"];
                $platform_navn = $_POST["Platform_platformid"];

                $sql = "INSERT INTO  `knet-elev20925`.`Serie` (`serieid` ,`serie_navn` ,`sesonger` ,`startaar` , `terningkast` , `Platform_platformid`) VALUES (NULL ,  '$serie_navn',  '$sesonger',  '$startaar',  '$terningkast',  '$platform_navn')";
                
                include "INC_console.php";
            }
        ?>

        <form class="insert" method="POST">
            <br>
            <div class="input-seksjon">
                <p class="input-tekst">Serie</p>
                <input class="form-input" type="text" name="serie_navn">
            </div>

            <br>
            <div class="input-seksjon">
                <p class="input-tekst">Sesonger</p>
                <input class="form-input-num" type="number" name="sesonger">
            </div>

            <br>
            <div class="input-seksjon">
                <p class="input-tekst">Startår</p>
                <input class="form-input-num" type="number" name="startaar">
            </div>

            <br>
            <div class="input-seksjon">
                <p class="input-tekst">Terningkast (1 - 6)</p>
                <input class="form-input-num" type="number" name="terningkast">
            </div>

    
            <?php 
                $sql = "SELECT * FROM Platform";

                $resultat = $kobling->query($sql);

                echo "<div class='input-seksjon'>";
                echo "<br><select class='custom-select' name='Platform_platformid'>";

                while($rad = $resultat->fetch_assoc()) {
                    $platform_id = $rad["platformid"];
                    $platform_navn = $rad["platform_navn"];

                    echo "<option value=$platform_id>$platform_navn</option>";
                }
                echo "</select>";
                echo "</div>";
            ?>

            <input class="legg-til" type="submit" name="leggtil" value="Legg til">
        </form>
    </body>
</html>