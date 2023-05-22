<?php 
require'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

// // ambil data dari tabel mahasiswa / query data
// //mysql_query("koneksi","syntax sql query")
// $result = mysqli_query($conn,"SELECT * FROM mahasiswa");

// //ambil data(fetch) mahasiswa dari object result;
// // ada 4 cara
// // 1. mysqli_fetch_row () -> mengembalikan array yang type array-nya numeric (angka)
// // 2. mysqli_fetch_assoc () -> mengembalikan array yang type array-nya assosiative (string)
// // 3. mysqli_fetch_array () -> mengembalikan array yang type array-nya numeric atau assosiative, tapi kekurangannya ketika di tampilkan semuanya tampil data yang disajikan double.
// // 4. mysqli_fetch_object () -> mengebalikan object, jadi mysqli_fetch_object($mhs->nama);

// // while( $mhs = mysqli_fetch_assoc($result)){
// // var_dump($mhs["nama"]);
// // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>nrp</th>
        <th>nama</th>
        <th>email</th>
        <th>jurusan</th>
    </tr>

    <?php $i=1; ?>

<?php foreach ( $mahasiswa as $row) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="#">ubah</a> | <a href="#">Hapus</a>
        </td>
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++ ?>
<?php endforeach; ?>


    </table>
</body>
</html>