<?php 
    $nvar = 'P1';

    if(isset($_GET['pg'])) {
        $nvar = $_GET['pg'];
    }

    switch($nvar) {
        case "P1":
            $judulpage = "Halaman 1";
            $konten = "<h3>Ini Halaman 1</h3>";
            break;
        case "P2":
            $judulpage = "Halaman 2";
            $konten = "<h3>Ini Halaman 2</h3>";
            break;
        case "P3":
            $judulpage = "Halaman 3";
            $konten = "<h3>Ini Halaman 3</h3>";
            break;
        case "P4":
            $judulpage = "Halaman 4";
            $konten = "<h3>Ini Halaman 4</h3>";
            break;
        default:
            $judulpage = "Halaman Default";
            $konten = "<h3>Ini Halaman Default</h3>";
            break;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judulpage ?></title>
</head>
<body>
    <?php 
        echo $konten;
    ?>

    <a href="latihan03.php?pg=P1">Latihan 1</a>
    <a href="latihan03.php?pg=P2">Latihan 2</a>
    <a href="latihan03.php?pg=P3">Latihan 3</a>
    <a href="latihan03.php?pg=P4">Latihan 4</a>
</body>
</html>