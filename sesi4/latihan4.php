<?php
    $filez = "";
    $path='upGambar/';
    if(isset($_POST['upfilex'])) {
        // echo "<pre>";
        // print_r($_FILES);
        // echo "</pre>";
        $filez = $path . basename($_FILES["upGambar"]["name"]);
        move_uploaded_file($_FILES["upGambar"]["tmp_name"], $filez);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="latihan4.php" method="POST" enctype="multipart/form-data">
        <div>
            Upload Gambar
            <input type="file" name="upGambar">
        </div>
        <div>
            <button type="submit">Upload File</button>
        </div>
        <input type="hidden" name="upfilex">
    </form>

    <div>
        <?= "<img src='$filez' width='200px' />      "?>
    </div>
</body>
</html>