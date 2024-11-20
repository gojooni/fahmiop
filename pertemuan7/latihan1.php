<?php
//variable scope / lingkup variable
// $x = 10;

// function tampilx(){
//     global $x;
//     echo $x;
    
// }

// tampilx();

//SUPERGLOBALS
//$_GET
//$_POST
//$_REQUEST
//$_SESSION
//$_COOKIE
//$_SERVER
//$_ENV
//variable global milik php
//merupakan array Associative

//$_GET
$mahasiswa = [
    [
        "nama" => "Fahmi Idris",
        "NRP" => "48646829",
        "email" => "akugantengbanget@gmail.com",
        "jurusan" => "teknik lokomotif",
        "gambar" => "gio.jpg"
    ]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>
                &NRP=<?= $mhs["NRP"]; ?>
                &email=<?= $mhs["email"]; ?>
                &jurusan=<?= $mhs["jurusan"]; ?>
                &gambar=<?= $mhs["gambar"]; ?>">
                    <?= $mhs["nama"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
