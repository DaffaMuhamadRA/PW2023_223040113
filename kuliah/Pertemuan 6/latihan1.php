<?php 
$binatang = ['🐱‍👤','🐱‍🐉','🦍','🦉','🐣'];
$makanan  = ['🍤','🍔','🍕','🍞','🍟'];
$mahasiswa = ['Daffa', 'Muhamad','Rizki','Ansori','end'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <ul>
        <li>Nama : Daffa</li>
        <li>Makanan favorite : 🍤</li>
        <li>Peliharaan : 🐱‍👤</li>
    </ul>
    <ul>
        <?php foreach($mahasiswa as $i => $v) {?>
            <li>mahasiswa : <?= $mahasiswa[$i]; ?></li>
            <li>makanan favorite : <?= $makanan[$i]; ?></li>
            <li>Peliharaan : <?= $binatang[$i]; ?></li>
        <?php } ?>
    </ul>
</body>
</html>