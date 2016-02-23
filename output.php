<?php
include 'Splitsen.php';
include 'BestandToevoegen.php';
include 'MinnetjesNaarLetters.php';
include 'Horizontaal.php';
include 'ArrayNaarTabel.php';
include 'PrintjQueryEnPHPOpmaak.php';
include 'PrintZoekwoorden.php';
voegBestandToe();
splitsen($woordenzoeker);
minnetjesNaarLetters($woordenzoeker);
$niveau = 2;
if (isset($_POST["Niveau1"])) {
    $niveau = 1;
}
if (isset($_POST["Niveau2"])) {
    $niveau = 2;
}
  $niveau = 2;

if (isset($niveau)) {
    horizontaalZoeken($woordenzoeker, $gesplitst, $niveau);
}
?>

<html>
    <head>
     <?php jQueryEnPhpOpmaak($gevondenWoordenCoordinaten, $zoekwoorden); ?>
        <link rel="stylesheet" type="text/css" href="output.css">
        <meta charset="UTF-8">
        <title></title>
 <div id="titel">
  Woordzoeker 1.0 
 </div>
    </head>
    <body>
 
            
  
        <?php
        bestandtoevoegenaanenuit();
        ?>
        <div>
            <form action="Output.php" method="post">
                <input id="knoppen" type="submit" name="Niveau1" value="links naar rechts"></input>
                <input id="knoppen" type="submit" name="Niveau2" value="horizontaal"></input>

            </form>
        </div>

        <div id="woordzoekertabel">
        <?php echo build_table($woordenzoeker); ?>   
            <div id="woordenlijst">
            <?php printZoekwoorden($zoekwoorden); ?>
            </div>
       
    </body>
</html>
