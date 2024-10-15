<?php
// JSON yang akan di-decode
$json_string = '{"nama":"Alap","umur":20,"kota":"Semarang"}';

// Meng-decode JSON ke PHP Object
$obj = json_decode($json_string);

// Meng-decode JSON ke PHP Array
$arr = json_decode($json_string, true);

// Mengakses nilai pada PHP Object
echo $obj->nama . "<br>";
echo $obj->umur . "<br>";
echo $obj->kota . "<br>";

// Mengakses nilai pada PHP Array
echo $arr["nama"] . "<br>";
echo $arr["umur"] . "<br>";
echo $arr["kota"] . "<br>";
?>