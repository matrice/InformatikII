<?php
    $page = $_GET['p'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de" >
    <head>
            <title>Home | Secondhandblumen Petersen in Hamburg</title>
            <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
            <link rel="stylesheet" type="text/css" href="style.css" />
    </head>

    <body>

        <h1><a href="index.php">Secondhandblumen Petersen</a></h1>

        <div id="wrapper">
            <div id="container">
                <div id="navcontainer">
                    <ul>
                        <li><a href="index.php?p=home">Home</a></li>
                        <li><a href="index.php?p=angebot">Angebot</a></li>
                        <li><a href="index.php?p=team">Team</a></li>
                        <li><a href="index.php?p=kontakt">Kontakt</a></li>
                        <li><a href="index.php?p=impressum">Impressum</a></li>
                    </ul>
                </div>

                <!-- Content-Bereich -->
                <?php include $page . '.php'; ?>

            </div>
        </div>
    </body>
</html>

