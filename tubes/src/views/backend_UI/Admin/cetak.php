<?php

require_once __DIR__ . '/vendor/autoload.php';

require '../../../partials/functions/functions.php';
$item = query("SELECT * FROM item");

$mpdf = new \Mpdf\Mpdf();

$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/print.css">
</head>
<body>
    <h1>Daftar Item</h1>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>gambar</th>
        <th>nama</th>
        <th>deskripsi</th>
        <th>indikasi umum</th>
        <th>koposisi</th>
        <th>Aturan Pakai</th>
        <th>perhatian</th>
        <th>golongan produk</th>
        <th>kemasan</th>
        <th>manufaktur</th>
        <th>no registrasi</th>
    </tr>';

$i = 1;
foreach ($item as $row) {
    $html .= '<tr>
            <td>' . $i++ . '</td>
            <td><img src="../../../../image/dataFoto/' . $row["gambar"] . '" width = "30"></td>
            <td>' . $row["nama"] . '</td>
            <td>' . $row["deskripsi"] . '</td>
            <td>' . $row["indikasi_umum"] . '</td>
            <td>' . $row["komposisi"] . '</td>
            <td>' . $row["aturan_pakai"] . '</td>
            <td>' . $row["perhatian"] . '</td>
            <td>' . $row["golongan_produk"] . '</td>
            <td>' . $row["kemasan"] . '</td>
            <td>' . $row["manufaktur"] . '</td>
            <td>' . $row["no_registrasi"] . '</td>
        </tr>';
}

$html .= '
    </table>
</body>
</html>
';
$mpdf->WriteHTML($html);

$mpdf->Output();
