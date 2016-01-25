<!DOCTYPE html>
<?php
//$uploaded= $_FILES["fileToUpload"];

if (!isset($_FILES['fileToUpload'])) {
    die("Geen bestand geupload");
}
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="phpwebsite2.css">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <div id="titel">Woordzoeker 1.0</div>    
<table class="c" border="1" >
    <tr>
        <td>
         <?php
        $regels = FILE($_FILES['fileToUpload']['tmp_name']);
        print_R($regels);
        // ingelezen, nu verwerken
        // maak een $wz array ? uit regels of cellen $wz[][] 
        // str_split("zin") geeft ['z', 'i', 'n']
        // maak een $w array
        // 
        // zoekLRH($wz, $w);    // doet wat?
        // functions
        // output aanpassen
        
?>
        </td>
    </tr>
</table>
            
    </div>        
    </body>
</html>
