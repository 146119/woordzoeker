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