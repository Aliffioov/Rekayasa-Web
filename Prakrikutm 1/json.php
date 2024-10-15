<?php
// Membuat array
$data = array(
    "nama" => "Alap",
    "umur" => 20,
    "kota" => "Semarang",
    "hobi" => array("membaca", "bermain game", "menonton film")
);

// Meng-encode array ke JSON
$json_data = json_encode($data);

// Menampilkan JSON
echo $json_data;
?>