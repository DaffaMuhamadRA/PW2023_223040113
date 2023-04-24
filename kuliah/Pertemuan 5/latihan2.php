<?php 
$binatang = ['🐱‍👤','🐱‍🐉','🦍','🦉','🐣'];
$makanan  = ['🍤','🍔','🍕','🍞','🍟'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    
    <h2>Daftar Binatang</h2>
    <ul>
        <?php for($i = 0; /*$i<5;*/$i < count($binatang); $i++){ ?>
            <!-- count berfungsi untuk perhitungan otomatis sesuai jumlah array -->
        <li><?= $binatang[$i]; ?></li>
        <?php } ?>
    </ul>

    <h2>Daftar Makanan</h2>
    <ul>
        <?php for($j=0;$j<5;$j++){ ?>
            <li><?= $makanan[$j]; ?></li>
            <?php } ?>
    </ul>
        <hr>

    <h2>Daftar Binatang</h2>
    <ol>
        <?php foreach($binatang as $b){ // foreach($NamaArray as $var) ?>
            <!-- foreach($array as $value) -->
        <li><?= $b; ?></li>
        <?php } ?>
    </ol>

    <h2>Daftar Makanan</h2>
    <ol>
        <?php foreach($makanan as $m){ ?>
        <li><?= $m; ?></li>
        <?php } ?>
    </ol>

    <h2>Daftar Makanan + index </h2>
    <ol>
        <?php foreach($makanan as $i => $v){ ?>
            <!-- foreach($array as $index => $value){}-->
        <li>index : <?= $i; ?>, value : <?= $v; ?></li>
        <?php } ?>
    </ol>
</body>
</html>