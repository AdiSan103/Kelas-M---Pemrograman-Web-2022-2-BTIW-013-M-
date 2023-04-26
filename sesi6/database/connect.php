<?php 
    // memanggil dari file lain 
    // include('../config.php');
    include('config.php');

    // ini untuk koneksi dengan 3 argumen
    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die("Koneksi ke DBMS GAGAL");

    // check koneksi
    // if($cnn) {
    //     echo ' TRUE CONNECTION';
    // } else {
    //     echo ' FALSE CONNECTION';
    // }

