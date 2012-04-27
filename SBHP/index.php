<?php

    // Eine Whitelist mit allen Dateien/Navigationspunkten, die wir haben.
    $navigation = array('home','angebot','team','kontakt','impressum');

    // Prüfung, ob unser Parameter in der URL vorhanden ist und ob der Wert
    // von p gleichzeitig im Navigationsarray vorhanden ist.
    if (isset($_GET['p']) && in_array($_GET['p'], $navigation)) {
        $page = $_GET['p'];
    } else {
        $page = 'home';
    }

    // Funktion, die eine Navigation erzeugt
    function makeNavigation($data) {

        // Stringvariable zum schrittweisen Zusammenstückeln unserer Navigation
        $html = '';

        // Schleife, die unser Navigationsarray durchläuft und jedes Mal den
        // HTML-String um einen neuen Eintrag verlängert.
        // Dabei steckt in $value immer der aktuelle Wert aus dem Navigationsarray
        foreach ($data as $key => $value) {
            $html = $html . '<li><a href="index.php?p=' . $value . '">' . ucfirst($value) . '</a></li>';
        }

        // Nachdem alle Elemente aus dem Array abgearbeitet wurden, wird der
        // fertige String an die aufrufende Stelle zurückgegeben.
        return $html;
    };

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
                        <?php
                                // Aufruf der Funktion, die unsere Navigation an dieser
                                // Stelle generieren soll. Der Rückgabewert wird
                                // mit echo() im Browser ausgegeben.
                                echo makeNavigation($navigation);
                        ?>
                    </ul>
                </div>

                <!-- Content-Bereich -->
                <?php include $page . '.php'; ?>

            </div>
        </div>
    </body>
</html>

