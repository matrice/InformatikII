<?php

function makeNavigation($data, $p) {

     // Stringvariable zum schrittweisen Zusammenstückeln unserer Navigation
     $html = '';
     $act = ' id="active"';

     // Schleife, die unser Navigationsarray durchläuft und jedes Mal den
     // HTML-String um einen neuen Eintrag verlängert.
     // Dabei steckt in $value immer der aktuelle Wert aus dem Navigationsarray
     foreach ($data as $key => $value) {

         // "Wenn der User nicht eingeloggt ist, der Menüeintrag aber verlangt,
         // dass er eingeloggt sein muss, dann setze die Schleife umgehend fort."
         if ($_SESSION['loggedIn'] === false && $value[2] === true) continue;

         $html = $html . '<li' . (($key == $p) ? $act : '') .  '><a href="index.php?p=' . $key . '">' . ucfirst($value[0]) . '</a></li>';

     }

     // Nachdem alle Elemente aus dem Array abgearbeitet wurden, wird der
     // fertige String an die aufrufende Stelle zurückgegeben.
     return $html;
 };
