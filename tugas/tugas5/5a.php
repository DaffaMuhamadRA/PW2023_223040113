<?php 
$mahasiswa=[
    [
        "nrp" => "223040113",
        "nama" => "Daffa Muhamad Rizki A",
        "email"=> "Daffamuhamadra@gmail.com",
        "jurusan"=> "Teknik Informatika",
        "gambar"=> "caffe.webp"
    ],
    [
        "nrp"=> "30405060",
        "nama"=> "Doraemon",
        "email"=> "Doraemon@gmail.ac.id",
        "jurusan"=> "Teknik Mesin",
        "gambar"=>"Doraemon.webp"
    ],
    [
        "nrp"=> "60504030",
        "nama"=> "Dobita",
        "email"=> "NobitaNobi@gmail.com",
        "jurusan"=> "Teknik Pangan",
        "gambar" => "Nobita.webp"
    ],
    [
        "nrp"=> "50402010",
        "nama"=> "Shizuka",
        "email"=> "ShizukaMinamoto@gmail.com",
        "jurusan"=> "Teknik Pangan",
        "gambar" => "shizuka.webp"
    ],
    [
        "nrp"=> "30401020",
        "nama"=> "Giant",
        "email"=> "TakeshiGouda@gmail.com",
        "jurusan"=> "Teknik Mesin",
        "gambar" => "Giant.webp"
    ],
    [
        "nrp"=> "60504030",
        "nama"=> "Suneo",
        "email"=> "SuneoHonekawa@gmail.com",
        "jurusan"=> "Teknik Informatika",
        "gambar" => "Suneo.webp"
    ],
    [
        "nrp"=> "20304050",
        "nama"=> "Dekisugi",
        "email"=> "HidetoshiDekisugi@gmail.com",
        "jurusan"=> "Teknik Informatika",
        "gambar" => "dekisugi.webp"
    ],
    [
        "nrp"=> "40203040",
        "nama"=> "Jaiko",
        "email"=> "JaikoGouda@gmail.com",
        "jurusan"=> "Teknik Pangan",
        "gambar" => "Jaiko.webp"
    ],
    [
        "nrp"=> "20401230",
        "nama"=> "Dorami",
        "email"=> "Dorami@gmail.com",
        "jurusan"=> "Teknik Informatika",
        "gambar" => "Dorami.webp"
    ],
    [
        "nrp"=> "22405010",
        "nama"=> "Pak Guru",
        "email"=> "GuruNobita@gmail.com",
        "jurusan"=> "Teknik Industri",
        "gambar" => "GuruN.webp"
    ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/squoosh/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
        <?php endforeach; ?>
</body>
</html>