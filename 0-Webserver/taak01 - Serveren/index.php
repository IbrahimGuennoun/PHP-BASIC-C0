<?php
function mijnNaamIsGroot(){
    $voornaam = "Ibrahim ";
    $achternaam ="Guennoun";
    $gehelenaam = $voornaam . $achternaam;
    echo strtoupper("Mijn naam is $gehelenaam");
}
mijnNaamIsGroot();