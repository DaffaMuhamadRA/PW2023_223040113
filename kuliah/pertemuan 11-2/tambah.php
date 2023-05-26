<?php 
require('functions.php');

$tittle= 'Form Tambah Data';

//insert data ketika tombol di klik
// ' tambah disini mengambil dari name = "tambah" -> lihat button
if(isset($_POST['tambah'])){
    //tampilkan pesan jika data berhasil ditambahkan
    if(tambah($_POST)>0){
        echo" 
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>";
    }

}

require('views/tambah.view.php');
 ?>