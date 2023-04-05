<?php
    $usr = '';
    $ps = '';
    if(isset($_REQUEST['txUSER']) && isset($_REQUEST['txPASKY'])) {
        $usr = $_REQUEST['txUSER'];
        $ps = $_REQUEST['txPASKY'];
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
    <form action="latihan3.php" method="POST">
        <div>
            User name
            <input type="text" name="txUSER">
        </div>
        <div>
            Password
            <input type="password" name="txPASKY">
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