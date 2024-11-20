<?php
//pengulangan pada array
//for /foreach
$angka = [1,4,5,3,66,88,100]
?>
<!DOCTYPE html>
<html>
<head>
    
    <title>latihan2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
    </style>
</head>
<body>

<?php for ($i = 0; $i < count($angka);$i++){?>
    <div class="kotak"><?php echo $angka [$i];?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach ($angka as $a) { ?>
    <div class="kotak"><?php echo $a; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach ($angka as $a) : ?>
     <div class="kotak"><?= $a; ?></div> 
<?php endforeach; ?>
    
