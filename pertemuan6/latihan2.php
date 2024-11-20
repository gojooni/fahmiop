<?php 
// $mahasiswa = [
//     ["Fahmi idris", "48646829", "teknik 
// lokomotif", "akugantengbanget@gmail.com"]
// ];

//array associative
//definisinya sama seperti array numerik, kecuali
//keynya adalah string yang dibuat sendiri
$mahasiswa = [
    [
    "nama" => "Fahmi idris",
    "NRP"  => "48646829",
    "email" => "akugantengbanget@gmail.com",
    "jurusan" => "teknik lokomotif",
    "gambar" => "gio.jpg",
    ]
];



?>

<!DOCTYPE html>
<html>
<head>
    <title>daftar mahasiswa</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
     <?php foreach ($mahasiswa as $mhs) : ?>
    <ul><li>
        <img src="img/<?= $mhs["gambar"]; ?>">
    </li>
        <li>Nama :<?= $mhs["nama"]; ?></li>
        <li>NRP :<?= $mhs["NRP"]; ?></li>
        <li>email :<?= $mhs["email"]; ?></li>
        <li>jurusan :<?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
    
</body>
</html>