<?php 

session_start();


if( !isset ($_SESSION["login"])){
    header("Location: login.php");
    exit;

}

require 'functions.php';

//pagination
//konfigurasi
$jumlahDataPerHalaman = 2;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
//jika halaman ada variabel halaman, maka gunakan halaman. jika tidak maka halaman isi variabel angka 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;



$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");


//tombol cari ditekan

if(isset ($_POST["cari"])){
    $mahasiswa = cari($_POST["keyword"]);
}

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
    <a href="logout.php">logout</a>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="post">

        <input type="text" name="keyword" size="40" autofocus
         placeholder="Masukan keyword pencarian" autocomplete="off">
        <button type="submit" name="cari"> Cari !</button>
    </form>
    <br><br>


    <!-- navigasi -->
    <!-- < -->
    <?php if($halamanAktif > 1) : ?>
    <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
    <?php endif; ?>
        <!-- pagination -->
    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) :?>
        <?php if($i == $halamanAktif) : ?>
        <a href="?halaman=<?= $i; ?>" style="color:red;"><?= $i; ?></a>

        <?php else : ?>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
    <?php endif; ?>
    <?php endfor; ?>
    <!-- > -->
    <?php if($halamanAktif < $jumlahHalaman) : ?>
    <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
    <?php endif; ?>
           


    <br>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>gambar</th>
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
            <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>
             | 
             <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" alt="" width="50px"></td>
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