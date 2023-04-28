<?php
    include("database/connect.php");

    function dd($request) {
        var_dump($request);
        die();
    }

    function createuser($nama, $email, $username, $password) {
        global $cnn;
        $stt = false;
        $iduser = md5($username);
        $sql = "INSERT INTO tbuser(nama, email, username, passkey, iduser)
            VALUES(
                '$nama',
                '$email',
                '$username',
                '$password',
                '$iduser'
            )
        ";
        $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die("Koneksi ke DBMS GAGAL");
        $stt = mysqli_query($cnn , $sql);
        return $stt;
    }

    function checklogin($user, $pwd) {
        global $cnn;
        $hsl['STATUS'] =  FALSE;
        $sql = "SELECT nama, email, username, passkey, iduser FROM tbuser WHERE username='$user';"; 
        $hs = mysqli_query($cnn, $sql);
        $jdata =  mysqli_num_rows($hs);
        if($jdata > 0) {
            $h = mysqli_fetch_assoc($hs);
            // dd($h);
            if($h['passkey'] == $pwd) {
                $hsl['STATUS'] = true;
                $hsl['NAMA'] = $h['nama'];
                $hsl['EMAIL'] = $h['email'];
                $hsl['IDUSER'] = $h['iduser'];
            }
        }
        return $hsl;
    }