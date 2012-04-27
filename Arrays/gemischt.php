<?php

    // Numerisch indizierte und assoziative Arrays lassen sich auch mischen.
    // Die folgende Mischung kommt meistens bei der Arbeit mit Datenbanken vor.

    $data[0] = array('id' => 3, 'name' => 'Peter', 'number' => '040 123 45 67');
    $data[1] = array('id' => 5, 'name' => 'Paul',  'number' => '040 234 56 78');
    $data[2] = array('id' => 7, 'name' => 'Mary',  'number' => '040 345 67 89');

    // Aufgabe: Geben Sie diese Struktur übersichtlich im Browser aus, um sich einen
    // Überblick zu verschaffen. Nutzen Sie dafür var_dump()

//    echo '<pre>';
//    var_dump($data);

    // Aufgabe: Generieren Sie eine HTML-Tabelle aus dieser Array-Struktur
    // Tipp: Die erste Dimension des Arrays ist numerisch und entspricht den Zeilen der
    // Tabelle. Die zweite den Spalten. Sie ist assoziativ.

    // Das generierte Ergebnis könnte so aussehen:
?>

    <table>
        <tr>
            <td>3</td>
            <td>Peter</td>
            <td>040 123 45 67</td>
    </tr>
        <tr>
            <td>5</td>
            <td>Paul</td>
            <td>040 234 56 78</td>
    </tr>
        <tr>
            <td>7</td>
            <td>Mary</td>
            <td>040 345 67 89</td>
    </tr>
    </table>