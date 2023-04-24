<?php

//Array Assosiative atau "array yang index nya adalah string yang kita buat sendiri"
$mahasiswa = [
    [
        'nama' =>'Daffa',
        'makanan' => ['🍤','🍔'],
        'peliharaan'=>'🐱‍👤'
    ],
    [
        'nama'=>'Muhamad',
        'makanan'=>['🍔'],
        'peliharaan'=>'🐱‍🐉'
    ],
    [
        'nama'=>'Rizki',
        'makanan'=>[],
        'peliharaan'=>'🦍'
    ],
    [
        'nama'=>'Ansori',
        'makanan'=>['🍞','🍟','🍤'],
        'peliharaan'=>'🦉'],
    [
        'nama'=>'end',
        'makanan'=>['🍟','🍞','🍔','🍤'],
        'peliharaan'=>'🐣']
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
    <hr>
    <ul>
        <?php for($i=0;$i < count($mahasiswa);$i++){ ?>
            <li>nama : <?= $mahasiswa[$i]['nama']; ?></li>
            <li>makanan : 
                <?php foreach($mahasiswa[$i]['makanan'] as $m){
                echo $m; 
                }?>
            </li>
            <li>peliharaan : <?= $mahasiswa[$i]['peliharaan']; ?></li>
            <br>
            <?php } ?>
    </ul>
    <hr>
    <ul>
        <?php foreach($mahasiswa as $i ) {?>
            <li>mahasiswa : <?= $i['nama']; ?></li>
            <li>makanan favorite : 
                <?php foreach($i['makanan'] as $m){
                    echo $m;
                } ?>
            </li>
            <li>Peliharaan : <?= $i['peliharaan']; ?></li>
            <br>
        <?php } ?>
    </ul>
</body>
</html>