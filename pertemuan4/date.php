<?php
//date
//untuk menampilkan tanggal dengan fotmat tertentu
    //echo date("l, d-m-y");
//time
//UNIX timestamp / EPOCH time 
//detik yang sudah berlalu sejak 1970
// echo time();
//echo date ("D M Y",time()+60*60*24*100);
//mktime
//membuat sendri detik
//mktime(0,0,0,0,0,0)
//jam, menit, detik, bulan, tanggal, tahhun
//echo date("l",timestamp: mktime(0,0,0,12,27,2007));

//strtotime
echo date("l", strtotime("27 des 2007"));
?>