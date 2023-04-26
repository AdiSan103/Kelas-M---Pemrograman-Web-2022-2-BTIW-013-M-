<?php 
    // memanggil dari file lain 
    include('../config.php');
    // ini untuk koneksi dengan 3 argumen
    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS);

    // check koneksi

    // if($cnn) {
    //     // buat database jika tidak ada
    //     $sql = "CREATE DATABASE IF NOT EXISTS " . DBNAME;
    //     $hsl = mysqli_query($cnn,$sql);

        
    //     if($hsl) {
    //         echo 'DATABASE CREATED!';
    //     } else {
    //         echo 'DATABASE FAILED TO CREATE';
    //     }

    // } else {
    //     echo ' FALSE CONNECTION';
    // }
            
