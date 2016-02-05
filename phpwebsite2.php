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
        $bestand = FILE($_FILES['fileToUpload']['tmp_name']);
  
        
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

$woorden = Array($bestand); // woorden
// strlen($woorden);
$woorden0= array($woorden[0]);
$woorden1= array($woorden[1]);
$woorden2= array($woorden[2]);
$woorden3= array($woorden[3]);
$woorden4= array($woorden[4]);
$woorden5= array($woorden[5]);

print_r($woorden0);

    $alfabet = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"
            );
  
 
?>       

</html>
