<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 $file_handle = fopen("$uploaded", "r");
        while (!feof($file_handle))
            {
            $line = fgets($file_handle);
            echo $line. "<br />";
            }
    fclose($file_handle);

    $ruweWoordzoeker = Array(); // van de regels
    $woorden = Array(); // woorden
?>
    
    
    <?php
if (!isset($_FILES['fileToUpload'])) {
    die("Geen bestand geupload");
}
$uploaded = $_FILES["fileToUpload"];
 $file_handle = fopen($uploaded, "r");
        while (!feof($file_handle))
            {
            $line = fgets($file_handle);
            echo $line. "<br />";
            }
    fclose($file_handle);

    $ruweWoordzoeker = Array(); // van de regels
    $woorden = Array(); // woorden
    print_r($woorden)
?>

 //     $l= strlen($regels[0]);   
  //  for($r = 0; $ < $c; $r++0{        // regel
 //       for ($x = 0; $x <$1; $x++){
 //       print "<div>"$rij[$r][$x] "<div>";  //letter    
 /       }
//    }
 

 <?php
    function build_table($woorden){
    // start table
    $html = '<table>';
    // header row
    $html .= '<tr>';
    foreach($array[0] as $key=>$value){
            $html .= '<th>' . $key . '</th>';
        }
    $html .= '</tr>';

    // data rows
    foreach( $array as $key=>$value){
        $html .= '<tr>';
        foreach($value as $key2=>$value2){
            $html .= '<td>' . $value2 . '</td>';
        }
        $html .= '</tr>';
    }

    // finish table and return it

    $html .= '</table>';
    return $html;
}

$array = array(
    array('first'=>'tom', 'last'=>'smith', 'email'=>'tom@example.org', 'company'=>'example ltd'),
    array('first'=>'hugh', 'last'=>'blogs', 'email'=>'hugh@example.org', 'company'=>'example ltd'),
    array('first'=>'steph', 'last'=>'brown', 'email'=>'steph@example.org', 'company'=>'example ltd')
);

echo build_table($array);
 ?>

