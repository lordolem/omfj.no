
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" charset=utf-8>
        <link rel="stylesheet" href="../css/juleprosjekt-brev.css" type="text/css">
        <link rel="stylesheet" href="../css/juleprosjekt-main.css" type="text/css">
        <title>Juleprosjekt</title>
    </head>
    <body>

        <div class="header">
            <h2 class="main-logo">Brev til Nissen</h2>
            <?php include "../include/header-sider.php"; ?>
        </div>

        <div class="brev-innsending">
            <form action="" method="post">
                <p>Navnet ditt:</p><input type="text" name="first_name">
                <p>Din e-post:</p><input type="text" name="email">
                <p>Hva du vil skrive til Nissen:</p><textarea rows="5" name="message" cols="30"></textarea><br>
            <input type="submit" name="submit" value="Send inn">
            </form>
        </div>

    </body>
</html>