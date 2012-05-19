<?php

    // Eine Whitelist mit allen Dateien/Navigationspunkten, die wir haben.
    // Das Array ist in der ersten Dimension assoziativ, in der zweiten numerisch
    // Der zweite Wert der zweiten Dimension zeigt an, zu welchem Elternelement das Element gehört,
    // wobei null anzeigt, dass es sich um eine Seite auf oberster Ebene handelt.
    $navigation = array('home'      =>  array(
                                                'Home',
                                                null
                        ),


                        'angebot'   =>  array(
                                                'Angebot',
                                                null
                        ),

                        'blumen'   =>  array(
                                                'Blumen',
                                                'angebot'
                        ),

                        'tannenbaeume' =>  array(
                                                'Tannenbäume',
                                                'angebot'
                        ),

                        'team'      =>  array(
                                                'Team',
                                                null
                        ),

                        'dieter'    =>  array(
                                                'Dieter',
                                                'team'
                        ),

                        'paul'    =>  array(
                                                'Paul',
                                                'team'
                        ),


                        'kontakt'   =>  array(
                                                'Kontakt',
                                                null
                        ),

                        'impressum' =>  array(
                                                'Impressum',
                                                null
                        ),
    );

