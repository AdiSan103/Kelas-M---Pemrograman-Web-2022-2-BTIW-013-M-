<?php

$mhs = array(
    array("Nama" => 'Boiboy', "NIM" => "1234", "KOTA" => "Durian Runtuh"),
    array("Nama" => 'Spongebob', "NIM" => "1235", "KOTA" => "Malang"),
    array("Nama" => 'Susanti', "NIM" => "1236", "KOTA" => "Jakarta"),
    array("Nama" => 'Patrik', "NIM" => "1237", "KOTA" => "Bikini Bottom"),
);

echo $mhs[0]['Nama'];
echo '<br><br>';
print_r($mhs);



echo '<br><br>';
echo '<table border="2">';
echo '<tr>';

echo '<th> No </th>';
echo '<th> Nama </th>';
echo '<th> NIM </th>';
echo '<th> KOTA </th>';

echo '</tr>';

$i = 1;
// per data orang mahasiswa
foreach($mhs as $dtmhs) {
    echo'<tr>';
    // per data diri mahasiswa
        echo "<td>" . $i . "</td>";
        foreach($dtmhs as $dt) {
            echo '<td>' . $dt . '</td>';
        }
    $i++;
    echo'</tr>';
}
echo '</table>';

echo '<br>';

// header('Content-Type: application/json');
$dt1 =  json_encode($mhs);
echo $dt1;

echo json_decode($dt1);