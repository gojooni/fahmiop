<?php
$mahasiswa = [
    ["Fahmi idris", "48646829", "teknik 
lokomotif", "akugantengbanget@gmail.com"],
["gumilang", "48646829", "teknik indo", "ko@gmail.com"]

];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar mahasiswa</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>

<?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
    <li>Nama :<?= $mhs[0];?></li>
    <li>NRP :<?= $mhs[1];?></li>
    <li>Jurusan :<?= $mhs[2];?></li>
    <li>Email :<?= $mhs[3];?></li>
        
    </ul>
    <?php endforeach; ?>
    
</body>
</html>