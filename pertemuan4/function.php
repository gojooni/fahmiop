<?php
function salam($waktu = "datang", $nama = "admin") {
    return "selamat $waktu, $nama";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>apa kamu</title>
</head>
<body>
    <h1><?= salam("siang","fahmi");?></h1>
    
</body>
</html>