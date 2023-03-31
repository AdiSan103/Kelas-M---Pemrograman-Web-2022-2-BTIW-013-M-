<?php 

    function TentangAplikasi(){
        echo '<h1>Tentang Aplikasi</h1>';
        echo '<sup>Versi 1.0</sup>';
    }

    function cetakLabel01($txt = 'tidak ada input') {
        echo 'argumen : ' .  $txt;
    }

    function jumlahkan($angka1 = 0, $angka2 = 0) {
        echo 'hasil : ' . ($angka1 + $angka2);
    }