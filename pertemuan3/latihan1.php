<!-- CONTOH KE 1 -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1</title>
</head>
<body>
    
<table border ="2" cellpadding="10" cellspacing="0">
    <tr>
    <td>1,1</td>
    <td>1,2</td>
    <td>1,3</td>
    <td>1,4</td>
    <td>1,5</td>
    </tr>

    <tr>
    <td>1,1</td>
    <td>1,2</td>
    <td>1,3</td>
    <td>1,4</td>
    <td>1,5</td>
    </tr>
</table>

</body>
</html> -->

<!-- CONTOH KE 2 --
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1</title>
</head>
<body>
    
<table border ="2" cellpadding="10" cellspacing="0">
    <?php
    for ($i = 1; $i <= 4; $i++ ) {
        echo "<tr>";
        for ( $j = 1; $j <= 5; $j++ ) {
            // cara lain 👇🏼
            // echo "<td>1,1</td>";
            echo "<td>$i,$j</td>";
        }
        echo "<tr>";
      }
    ?>
</table>

</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
    
<table border ="2" cellpadding="10" cellspacing="0">
    <?php for ($i = 1; $i <= 3; $i++ ) { ?>
        <?php if( $i % 2 == 1 ) : ?>
        <tr class="warna-baris">
            <?php else : ?>
            <?php endif; ?>
            <?php for ( $j = 1; $j = 5; $j++ ) { ?>
               <td> <?= "$i, $j"; ?></td>
                <?php } ?>
        </tr>
   <?php } ?>
</table>

</body>
</html> 