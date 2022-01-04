<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon.png">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/projects.css">
    <title>OMFJ</title>
</head>
<body>
    <div class="main">
        <h1>Miele Logic CLI</h1>
        <?php include "../include/nav.php"; ?>
        <div class="project-info">
            <p>
                A program that uses the Miele Logic API (kind, uses curl idk) to check the progress of the dryers and washers at my student complex.
            </p>
            <p>
                <b>Example output:</b>
                <br>
                    -- Grønneviksøren 54 -- <br>
                    Machine 1 Washer: Time left: 13 min.<br>
                    Machine 2 Dyrer: Idle until 1:00<br>
                    Machine 3 Washer: Time left: 16 min.<br>
                    Machine 4 Dyrer: Idle until 1:00<br>
                    Machine 5 Washer: Time left: 9 min.<br>
                    Machine 6 Dyrer: Idle until 1:00<br>
                    Machine 7 Washer: Time left: 8 min.<br>
                    Machine 8 Dyrer: Idle until 1:00<br>
                    Machine 9 Washer: Idle untilmidnight<br>
                    Machine 10 Dyrer: Idle until 1:00<br>
                    Machine 11 Washer: Idle untilmidnight<br>
                    Machine 12 Dyrer: Idle until 1:00<br>
                    Machine 13 Washer: Idle untilmidnight<br>
                    Machine 20 Washer: Idle until 1:00<br>
                    Machine 21 Washer: Idle untilmidnight<br>
                    Machine 22 Washer: Idle until 1:00<br>
                    Machine 23 Washer: Idle until 1:00
            </p>
            <p>
                <a class="take-a-look" href="miele.zip">Download</a>
            </p>
        </div>
    </div>
</body>
</html>