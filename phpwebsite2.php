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
    
    <div id="titel">Woordzoeker 1.0</div>    


   
<?php
        $wz = FILE($_FILES['fileToUpload']['tmp_name']);
  $ruweWoordzoeker = Array($bestand);
print_r($ruweWoordzoeker);
 
        // ingelezen, nu verwerken
        // maak een $wz array ? uit regels of cellen $wz[][] 
        // str_split("zin") geeft ['z', 'i', 'n']
        // maak een $w array
        // 
        // zoekLRH($wz, $w);    // doet wat?
        // functions
        // output aanpassen
   
   // // print_r($regels [0][3]) ;
   // print"<pre>";
   // print_r($regels);
   // print"</pre>";

    // $letters = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"
           // );  
?>       
</body>
</html>
