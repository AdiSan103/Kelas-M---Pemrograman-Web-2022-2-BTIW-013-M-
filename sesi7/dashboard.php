<?php
    session_start();
    
    if(isset($_SESSION['login'])) {
        if($_SESSION['login'] != "") {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <ul>
        <li><a href="#">HOME</a></li>
        <li><a href="#">BERANDA</a></li>
    </ul>
    <a href="?act=logout">LOGOUT</a>
</body>
</html>


<?php 
        } else {
            header('location: login.php');
        }
    } else {
        header('location: login.php');
    }

?>