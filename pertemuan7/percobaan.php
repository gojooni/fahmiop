<!DOCTYPE html>
<html>
<head>
    <title>Kartu Nama Fahmi Idris</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background-color: #007BFF;
            color: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 300px;
            text-align: center;
        }
        .card h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .card p {
            margin: 5px 0;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="card">
        <?php
        
        $nama = "Fahmi Idris";
        $ttl = "27 Desember 2007";
        $umur = 17;
        $sekolah = "SMKN 8 Jember";

        
        echo "<h1>$nama</h1>";
        echo "<p><strong>TTL:</strong> $ttl</p>";
        echo "<p><strong>Umur:</strong> $umur tahun</p>";
        echo "<p><strong>Sekolah:</strong> $sekolah</p>";
        ?>
    </div>
</body>
</html>
