<?php
//$wz = array($bestand);   //array van het bestand

function build_table($array) {
    $html = '<table>';
    $xcoördinaat = "0";
    $ycoördinaat = "0";
    foreach ($array as $key => $value)  {
        $html .= '<tr>';
        foreach ($value as $key2 => $value2)    {
            $coördinaat = 'x' . $xcoördinaat . "y" . $ycoördinaat;
            $html .= "<td class='$coördinaat'>" . $value2 . '</td>';
            $xcoördinaat = $xcoördinaat + 1;
        }
        $html .='<?tr>';
        $ycoördinaat = $ycoördinaat + 1;
        $xcoördinaat = "0";
    }
    $html .= '</table>';
    return $html;
}
  
//minnetjes veranderen in letters
function minnetjesNaarLetters($woordenzoeker) {
    global $woordenzoeker;
    $alfabet = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
    foreach ($woordenzoeker as &$value) {
        foreach ($value as &$value2) {
            if ($value2 == "-") {
                $value2 = $alfabet[rand(0, 25)];
            }
        }
    }
}

?>
