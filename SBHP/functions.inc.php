<?php

    /**
     * Erstellt Listenelemente für Haupt- und Unternavigation
     * @param array $data Navigationsarray
     * @param string $p aktuelle Seite
     * @param int $level Haupt- oder Subnavigation (0 oder 1)
     * @return string verkettete Listenelemente
     */
    function makeNavigation($data, $p, $level) {

        $html = '';

        // Ermittelt die Elternseite
        $parent = getNaviParent($data, $p);

        // Hauptnavigation
        if ($level === 0) {
            foreach ($data as $key => $value) {
                // Wenn akt. Wert Elternseiten hat, dann nicht mit ins Hauptmenü aufnehmen
                if ($value[1] !== null) continue;
                $html = $html . '<li ' . ($key == $p || $key == $parent ? 'class="active"' : '') . '><a href="index.php?p=' . $key . '">' . $value[0] . '</a></li>';
            }
        }

        // Unternavigation
        // Anmerkung: diese wird auch auf Seiten angezeigt, die Unterseiten sind
        if ($level === 1) {
            foreach ($data as $key => $value) {
                // Wenn Wert für Elternseite gegeben und dieser gleich der Elternseite ist oder
                // der Wert für die Elternseite gleich der akt. Seite
                if ( $value[1] !== null && $value[1] == $parent || $value[1] == $p) {
                    $html = $html . '<li ' . ($key == $p ? 'class="active"' : '') . '><a href="index.php?p=' . $key . '">' . $value[0] . '</a></li>';
                }
            }
        }

        return $html;
    };

    /**
     * @param array $data Navigationsarray
     * @param string $p akt. Seite
     * @return string Elternseite
     */
    function getNaviParent($data, $p) {

        foreach ($data as $key => $value) {
            if ($p == $key) return $parent = $value[1];
        }

        return false;
    }
