<?php

    // Starten oder Fortsetzen einer Session bei jedem Aufruf der Seite
    session_start();

    require_once 'lib/sbhp/func.makenavigation.inc.php';
    require_once 'lib/sbhp/func.printoffer.inc.php';

    // Initialisierung des Session-Variable
    if (!isset($_SESSION['loggedIn'])) $_SESSION['loggedIn'] = null;

    // Simulation des Zustands "eingeloggt". Später werden wir diesen Schalter
    // mit einem Login-Formular umsetzen.
    if (isset($_GET['l']) && $_GET['l'] === '1') {
        // Ab jetzt gilt der User als "eingeloggt".
        $_SESSION['loggedIn'] = true;
    }

    if (isset($_GET['l']) && $_GET['l'] === '0') {
        // Ab jetzt gilt der User als "eingeloggt".
        $_SESSION['loggedIn'] = false;
    }

    // Eine Whitelist mit allen Dateien/Navigationspunkten, die wir haben.
    // Komplexer als bisher, das dritte Feld in der zweiten Dimension signalisiert,
    // ob die Seite nur eingeloggten Usern angezeigt wird (true).
    $navigation = array(
                'home' => array(
                                    'Home',
                                    'Startseite',
                                    false
                          ),
                'angebot' => array(
                                    'Angebot',
                                    'Unser Angebot von Blumen und Tannenbäumen aus zweiter Hand',
                                    false
                          ),
                'kontakt' => array(
                                    'Kontakt',
                                    'Wir sind rund um die Uhr für Sie da.',
                                    false
                          ),
                'impressum' => array(
                                    'Impressum',
                                    'Verklagen Sie uns! Wir haben gute Anwälte.',
                                    false
                          ),
                'admin' => array(
                                    'Admin',
                                    'Du kommst hier net rein.',
                                    true
                          )
                );

    // Prüfung, ob unser Parameter in der URL vorhanden ist und ob der Wert
    // von p gleichzeitig im Navigationsarray vorhanden ist.
    // Auch hier neu: array_keys(), eine Funktion, die aus den Schlüsseln eines assoziativen Arrays
    // ein neues, "flaches" Array macht.
    if (isset($_GET['p']) && in_array($_GET['p'], array_keys($navigation))) {

        if ($navigation[$_GET['p']][2] === true && $_SESSION['loggedIn'] === false) {
            $page = 'home';
        } else {
            $page = $_GET['p'];
        }

    } else {
        $page = 'home';
    }

    if ( $page == 'angebot' && ( isset($_GET['print']) && $_GET['print'] == '1') ) {
        printOffer();
    }

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
        <p id="login">
            <?php if ($_SESSION['loggedIn']) : ?>
                <a href="index.php?l=0">Logout</a>
            <?php else: ?>
                <a href="index.php?l=1">Login</a>
            <?php endif; ?>
        </p>
        <h1><a href="index.php">Secondhandblumen Petersen</a></h1>

        <div id="wrapper">
            <div id="container">
                <div id="navcontainer">
                    <ul>
                        <?php
                                // Aufruf der Funktion, die unsere Navigation an dieser
                                // Stelle generieren soll. Der Rückgabewert wird
                                // mit echo() im Browser ausgegeben.
                                // Es wird auch der Wert der aktuellen Seite übergeben
                                echo makeNavigation($navigation, $page);
                        ?>
                    </ul>
                </div>

                <!-- Content-Bereich -->
                <?php include $page . '.php'; ?>

            </div>
        </div>
    </body>
</html>

