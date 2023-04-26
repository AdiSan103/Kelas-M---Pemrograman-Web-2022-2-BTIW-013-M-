<?php
    include("cmd/user.php");
    $psn="";

    if(isset($_POST['txPassword'])) {
        if($_POST['txPASS1'] == $_POST['txPASS2']) {

            $nama = $_POST['txNama'];
            $email = $_POST['txEmail'];
            $username = $_POST['txUsername'];
            $password = $_POST['txPassword'];
            
            if(createuser($nama,$email,$username,$password)) {
                $psn ="Create Data User Sukses";
            } else {
                $psn="Create Data User Gagal";
            }
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
    <form action="" method="post" style="display:flex; flex-direction: column; gap:10px; max-width:200px">
        <?php
            echo"<div>$psn</div>";
        ?>
        <div>
            <label for="">Nama😎</label>
            <input type="text" name="txNAMA">
        </div>
        <div>
            <label for="">Email📧</label>
            <input type="email" name="txEMAIL">
        </div>
        <div>
            <label for="">Username🧔</label>
            <input type="text" name="txUsername">
        </div>
        <div>
            <label for="">Password👀</label>
            <input type="text" name="txPassword">
        </div>
        <div>
            <label for="">Password Verifikasi👀</label>
            <input type="text" name="txPasswordVerification">
        </div>
        <button type="submit">SUBMIT🙌</button>
    </form>
</body>
</html>