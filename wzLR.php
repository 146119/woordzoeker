<?php
foreach ($wz as $regel) {
// ---erkan----, ----sam-----, --yoni------, -boom-------, -----appel--, ---school---
foreach($regel as $letter) {
  
}
    
}

function zoekLR($wz,$w) {
    zoekLR($wz, $w [0]); 
    
    $wz [0]= str_split('---erkan----');
    $wz [1]= str_split('----sam-----');  
    $wz [2]= str_split('--yoni------');
    $wz [3]=str_split('-boom-------');
    $wz [4]=str_split('-----appel--');
    $wz [5]=str_split('---school---');
    
}

//LR zoeken
$check = 0;
for ($i = 0; $i < count ($zoekwoord); $i++) {
    if ($zoekwoord[$i] == $zoekregel[$i + $j]) {
        $check = $check + 1;
        $x = $i + $j;
        $y = $regelnummer - 1;
        $c = "x" . $x . "y" . $y;
        array_push($coördinaat[$w], $c);
    }
}
if ($check == count ($zoekwoord)) {
    $gevondenWplaats [$w] = $coördinaat [$w];
    $gevondenWplaats [$w] = array_slice ($gevondenWplaats [$w]);
}
?>