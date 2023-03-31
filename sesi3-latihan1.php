<?php 

    $cars = array("Volvol","BMW","Toyota");

    echo "jumlah data" .  count($cars);

    for($i = 0; $i < count($cars); $i++) {
        echo "Kendaraan " . $cars[$i];
        echo "<br>";
    }
