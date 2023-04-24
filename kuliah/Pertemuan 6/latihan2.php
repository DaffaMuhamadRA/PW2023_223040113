<?php

//Array Multidimensi atau "array dalam array"
$mahasiswa = [
    ['Daffa','🍤','🐱‍👤'],
    ['Muhamad','🍔','🐱‍🐉'],
    ['Rizki','🍕','🦍'],
    ['Ansori','🍞','🦉'],
    ['end','🍟','🐣']
];
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
        <?php foreach($mahasiswa as $i ) {?>
            <li>mahasiswa : <?= $i[0]; ?></li>
            <li>makanan favorite : <?= $i[1]; ?></li>
            <li>Peliharaan : <?= $i[2]; ?></li>
        <?php } ?>
    </ul>
</body>
</html>