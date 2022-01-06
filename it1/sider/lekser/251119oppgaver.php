<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
        <link rel="stylesheet" href="../../main.css" type="text/css">
        <link rel="stylesheet" href="oppgaverstandard.css" type="text/css">
        <title>Ole Magnus | Oppgaver 25.11.2019</title>
    </head>
    <body>

        <div class="header">
            <h2 class="main-logo">Lekser</h2>
            <?php include "../../include/navmenu-sider.php"; ?>
        </div>
        
        <div class="site-content">

            <?php
            echo "<h3>Oppgave 10.21</h3>";
            $figurer = array("Langbein", "Asterix", "Donald Duck");
            $måned = date("m");

            echo "<p>Dette er noen tegneseriefigurer</p>";
            for($i=0; $i < count($figurer); $i++) {
            echo "Figur med indeks $i: $figurer[$i] <br>";
            }

            echo "<br>";

            echo $figurer[2];
            echo "<br><br>";

            echo "<h3>Oppgave 10.22</h3>";

            echo "<a href='https://www.disney.com/'>$figurer[0]</a>";
            echo "<br><br>";

            echo "<h3>Oppgave 10.23</h3>";
            echo "<p>Det er den $måned. måneden.</p>";
            echo "<br><br>";

            echo "<h3>Oppgave 10.24</h3>";
            $skrue = "Skrue McDuck";
            $art = array("$skrue"=>"and");
            echo "$skrue er en $art[$skrue].";
            echo "<br><br>";

            echo "<h3>Oppgave 10.25</h3>";
            $heltall = array(1,2,3,4,5);
            $sum = $heltall[0]*$heltall[1]*$heltall[2]*$heltall[3]*$heltall[4];
            echo "<p>Alle heltallene ganget sammen er $heltall[0] * $heltall[1] * $heltall[2] * $heltall[3] * $heltall[4] =  $sum</p>";
            echo "<br><br>";

            echo "<h3>Oppgave 10.26</h3>";
            $input = array(
            "Hjerter 1",
            "Hjerter 2",
            "Hjerter 3",
            "Hjerter 4",
            "Hjerter 5",
            "Hjerter 6",
            "Hjerter 7",
            "Hjerter 8",
            "Hjerter 9",
            "Hjerter 10",
            "Hjerter 11",
            "Hjerter 12",
            "Hjerter 13",
            "Kløver 1",
            "Kløver 2",
            "Kløver 3",
            "Kløver 4",
            "Kløver 5",
            "Kløver 6",
            "Kløver 7",
            "Kløver 8",
            "Kløver 9",
            "Kløver 10",
            "Kløver 11",
            "Kløver 12",
            "Kløver 13",
            "Ruter 1",
            "Ruter 2",
            "Ruter 3",
            "Ruter 4",
            "Ruter 5",
            "Ruter 6",
            "Ruter 7",
            "Ruter 8",
            "Ruter 9",
            "Ruter 10",
            "Ruter 11",
            "Ruter 12",
            "Ruter 13",
            "Spar 1",
            "Spar 2",
            "Spar 3",
            "Spar 4",
            "Spar 5",
            "Spar 6",
            "Spar 7",
            "Spar 8",
            "Spar 9",
            "Spar 10",
            "Spar 11",
            "Spar 12",
            "Spar 13",
            );
            $rand_keys = array_rand($input, 2);
            echo $input[$rand_keys[0]] . "\n";
            echo "<br><br>";

            echo "<h3>Oppgave 10.34 - 37</h3>";
            echo "<p>Alle oppgavene er gjort. Det er blitt lagt til siden.</p>";
            echo "<br><br>";
            ?>

        </div>
    </body>
</html>