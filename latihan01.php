<?php 
    $judulpage = "latihan Script php";
    $konten="<h3>Latihan Script</h3>";
    $konten .= "<p>Latihan php <ul><li>test 1232<li></ul></p>"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$judulpage?></title>
</head>
<body>
    <?php
        echo $konten;
    ?>
</body>
</html>