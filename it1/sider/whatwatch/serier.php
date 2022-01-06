<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
    <link rel="stylesheet" href="main.css" type="text/css">
    <title>Ole Magnus</title>
</head>
<body>

    <?php

    include "INC_header.php";
    include "INC_kobling.php";

    $knapp = 'Slett';
    $color = '#F18C8E';

    $sql = "SELECT serieid, serie_navn, startaar, terningkast, sesonger, Platform_platformid, platform_navn 
            FROM Serie JOIN Platform ON Platform.platformid = Serie.Platform_platformid";

    $resultat = $kobling->query($sql);

    if(isset($_POST['delete'])) {

        $delete = $_POST["delete"];

        $sql = "DELETE FROM Serie WHERE serieid='$delete'";

        include "INC_console.php";
    }

    echo "

    <table class='serier'>
    <tr>
        <td class='table-header'>Serie navn:</td>
        <td class='table-header'>Sesonger:</td>
        <td class='table-header'>Startår:</td>
        <td class='table-header'>Terningkast:</td>
        <td class='table-header'>Platform:</td>
    </tr>
    ";

    while($rad = $resultat->fetch_assoc()) {

        $serieid = $rad["serieid"];
        $serie = $rad["serie_navn"];
        $sesonger = $rad["sesonger"];
        $startaar = $rad["startaar"];
        $terningkast = $rad["terningkast"];
        $platform = $rad["platform_navn"];

        echo "

        <tr>
            <td class='table-content'>$serie</td>
            <td class='table-content'>$sesonger</td>
            <td class='table-content'>$startaar</td>
            <td class='table-content'>$terningkast</td>
            <td class='table-content'>$platform</td>
            <td class='table-delete'>
                <form method='POST'>
                    <input style='background-color:$color;' class='delete-content' type='submit' onclick='window.location.reload(true);' name='delete' value='$knapp'>
                    <input type='hidden' name='delete' value='$serieid'>
                </from>
            </td>
        </tr>

        ";
    }

    echo "</table>";

    ?>
</body>
</html>