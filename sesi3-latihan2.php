<?php
    $ages = array('Peter'=>'15','Ben'=>'20','Joe'=>'43');

    echo 'Umur dari Joe '.$ages['Joe'].' tahun';
    echo '<br>';

    foreach($ages as $user => $age) {
        // echo 'Umur dari ' . $user . ' = ' . $age . ' tahun';
        echo "$user = $age tahun <br>";
    }