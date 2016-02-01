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
  
        
        // ingelezen, nu verwerken
        // maak een $wz array ? uit regels of cellen $wz[][] 
        // str_split("zin") geeft ['z', 'i', 'n']
        // maak een $w array
        // 
        // zoekLRH($wz, $w);    // doet wat?
        // functions
        // output aanpassen
        
$woorden = Array($regels); // woorden
// strlen($woorden);



    $alfabet = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"
            );
     
  function build_table($woorden){
      //print_r($woorden);
    // start table
    $html = '<table>';
    // header row
    $html .= '<tr>';
    foreach($woorden[0] as $key=>$value){
            $html .= '<th>' . $key . '</th>';
        }
    $html .= '</tr>';

    // data rows
    foreach( $woorden as $key=>$value){
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
$woorden[] = "aap";
$woorden[]="pop";
echo build_table($woorden);
?>
            
      <script>
function myFunction() {
    var str = "$woorden";
    var res = str.split("");
   
</script>  

    </div>        
    </body>
</html>
