<?php

function jquery($gevondenWoordenCoordinaten, $zoekwoorden) {
    include "opmaak.php";
    klikKleuren($zoekwoorden);
    zoekwoordenOnderlijnen($zoekwoorden);
    foreach ($gevondenWoordenCoordinaten as $GEVONDENWOORDJE => $gevondenwoord) {
        echo '<script type=text/javascript>';
        echo '$(document).ready(function () {';
        echo '$("div.' . $GEVONDENWOORDJE . '").mouseenter(function () {';
        echo '$("td.' . $GEVONDENWOORDJE . '").css("background-color", "#4BFFF6");';
        echo "});";
        echo '});';
        echo '</script>';
        echo '<script type=text/javascript>';
        echo '$(document).ready(function () {';
        echo '$("div.' . $GEVONDENWOORDJE . '").mouseleave(function () {';
        echo '$("td.' . $GEVONDENWOORDJE . '").css("background-color", "");';
        echo "});";
        echo "});";
        echo '</script>';
        echo '<script type=text/javascript>';
        echo '$(document).ready(function () {';
        echo '$("div.' . $GEVONDENWOORDJE . '").click(function () {';
        echo '$("td.' . $GEVONDENWOORDJE . '").toggleClass("klik' . strtoupper($GEVONDENWOORDJE) . '");';
        echo "});";
        echo "});";
        echo '</script>';
        echo '<script>';
        echo '$(document).ready(function () {';
        echo '$("div.' . $GEVONDENWOORDJE . '").click(function () {';
        echo '$("div.' . $GEVONDENWOORDJE . '").toggleClass("klik' . strtoupper($GEVONDENWOORDJE) . '");';
        echo "});";
        echo "});";
        echo '</script>';
        foreach ($gevondenwoord as $cordinaat) {
            echo '<script type=text/javascript>';
            echo '$(document).ready(function () {';
            echo '$("td.' . $cordinaat . '").addClass("' . $GEVONDENWOORDJE . '");';
            echo '});';
            echo '</script>';
        }
    }
}
