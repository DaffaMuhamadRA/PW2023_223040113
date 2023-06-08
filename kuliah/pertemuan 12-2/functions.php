<?php
// Sesuaikan dengan URL project kalian
define('BASE_URL', '/pw2023_223040113/kuliah/pertemuan 11-2');

function koneksi()
{
  $conn = mysqli_connect('localhost', 'root', '', 'pw2023_223040113') or die('KONEKSI GAGAL!');
  return $conn;
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

//tambah
function tambah($data){
  $conn = koneksi();
  $nim = htmlspecialchars($data['nrp']);
  $nama = htmlspecialchars($data['nama']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO 
              mahasiswa
            Values
            (null,'$nim','$nama','$email','$jurusan','$gambar')";

  //koneksi , string sql
  mysqli_query($conn,$query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);

}

function dd($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";
  die;
}


function uriIS($uri)
{
  return ($_SERVER["REQUEST_URI"] === $uri) ? 'active' : '';
}


