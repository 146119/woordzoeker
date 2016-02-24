<!DOCTYPE html>
        <?php
include 'splitsen.php';
include 'uploadenvaneenbestand.php';
include 'randomalfabet.php';
include 'functiehorizontaal.php';
include 'tabelmaken.php';
include 'jquery.php';
include 'gezochtewoorden.php';
include 'verticaalzoeken.php';
voegBestandToe();
splitsen($woordenzoeker);
minnetjesNaarLetters($woordenzoeker);


if (isset($_POST["Niveau1"])) {
    $niveau = 1;
}
if (isset($_POST["Niveau2"])) {
    $niveau = 2;
}
if (isset($_POST["Niveau3"])) {
    $niveau = 3;
}


if (isset($niveau)) {
    horizontaalZoeken($woordenzoeker, $gesplitst, $niveau);
      verticaalZoeken($woordenzoeker, $gesplitst, $niveau);
}
?>
<html>
    <head>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<?php
jquery($gevondenWoordenCoordinaten, $zoekwoorden); 

function highlight($text, $words, $color='yellow', $case='1') { 
 $words = trim($words); 
 $wordsArray = explode(' ', $words); 
 
 foreach($wordsArray as $word) { 
  if(strlen(trim($word)) != 0) 
   if ($case) {
    $text = eregi_replace($word, '<font style="background:' . $color . '";>\\0</font>', $text);
     } else {
    $text = ereg_replace($word, '<font style="background:' . $color . '";>\\0</font>', $text); 
   }
  } 
 return $text; 
} 
?>
        
        <link rel="stylesheet" type="text/css" href="output.css">
        <meta charset="UTF-8">
        <title></title>
 <div id="titel">
  Woordzoeker 1.0 
 </div>
    </head>
    <body>
        
        <?php
        uploadonorof();
        ?>
            <form action="Output.php" method="post">
                <input id="knoppen" type="submit" name="Niveau1" value="links naar rechts"></input>
                <input id="knoppen" type="submit" name="Niveau2" value="horizontaal"></input>
                <input id="knoppen" type="submit" name="Niveau3" value="verticaal"></input>
            </form>
  
        
        <?php echo build_table($woordenzoeker);  
        gezochtewoorden($zoekwoorden); ?>
          
       
    </body>
</html>
