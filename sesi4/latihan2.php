<?php
    $usr = '';
    $ps = '';
    $eusr = '';
    $eps = '';
    
    if(isset($_POST['txUSER']) && isset($_POST['txPASKY'])) {
        $usr = $_POST['txUSER'];
        $ps = $_POST['txPASKY'];

        if($usr=="") {
            $eusr = "<div style='color:red;'>Field User Masih Kosong</div>";
        }
        if($ps=="") {
            $eps = "<div style='color:red;'>Field Password Masih Kosong</div>";
        }
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
    <form action="latihan2.php" method="POST">
        <div>
            User name
            <input type="text" name="txUSER">
            <?= $eusr; ?>
        </div>
        <div>
            Password
            <input type="password" name="txPASKY">
            <?= $eps; ?>
        </div>
        <button type="submit">submit</button>
    </form>
    <div>
        Isi dari FORM  : <br>
            1. User Name : <?= $usr ?><br>
            2. Password: <?= $ps ?>
    </div>
</body>
</html>