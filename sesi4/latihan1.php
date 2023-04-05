<?php
    $usr = '';
    $ps = '';
    if(isset($_GET['txUSER']) && isset($_GET['txPASKY'])) {
        $usr = $_GET['txUSER'];
        $ps = $_GET['txPASKY'];
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
    <form action="latihan1.php" method="GET">
        <div>
            User name
            <input type="text" name="txUSER" required>
        </div>
        <div>
            Password
            <input type="password" name="txPASKY" required>
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