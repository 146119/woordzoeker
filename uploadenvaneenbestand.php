<?php

function voegBestandToe() {
    global $woordenzoeker;
    if (isset($_FILES['file'])) {
        if ($_FILES["file"]["error"] > 0) {
            echo "Error: " . $_FILES["file"]["error"] . "<br />";
        } elseif ($_FILES["file"]["type"] !== "text/plain") {
            echo "Dit is geen .txt bestand.";
        } else {
            $woordenzoeker = FILE($_FILES["file"]["tmp_name"]);
        }
    }
    else {
        $woordenzoeker = file("woordzoekerniveau123.txt");
    }
    return $woordenzoeker;
    $woordenzoeker = file("woordzoekerniveau123.txt");
}

function uploadonorof (){
    echo '<form action="Output.php" method="post" enctype="multipart/form-data">
            <br/>
            <label for="file">Zoek een bestand:</label>
            <input type="file" name="file" id="file"/>
            <input type="submit" value="Submit">
        </form>';
}
