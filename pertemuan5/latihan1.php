<?php
//array
//variable yang dapat memiliki banyak nilai
//element paada array boleh memiliki tipe data yang berbeda
//pasangan antara key dan bvalue
//key-nya adalah index,yang ddimulai dari 0

//membuat array cara lama
//cara lama
$hari = array("senin", "selasa", "rabu");
//cara baru
$bulan = ["january", "february", "maret"];
$arrl =[123, "tulisan", false];

//menampilkan array
//var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

//menampilkan 1 elemen pada array
// echo $arrl[0];
// echo "<br>";
// echo $bulan[1]

//menambahkan 1 elemen pada array
var_dump($hari);
$hari[]="kamis";
$hari[]="jumat";
echo "<br>";
var_dump($hari);


?>