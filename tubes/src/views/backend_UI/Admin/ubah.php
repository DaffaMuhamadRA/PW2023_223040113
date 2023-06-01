<?php
require('../../../partials/functions/functions.php');

//ambil data dari url
$id = $_GET["id"];
//query data item berdasarkan id
$ubah_item = query("SELECT * FROM item WHERE id = $id")[0];


//cek submit
if (isset($_POST["submit"])) {


    //cek data berhasil ditambahkan atau tidak
    if (ubah($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil diubah!');
        document.location.href = 'edit.php';
        </script>
    ";
    } else {
        echo "
        <script>
        alert('data gagal diubah!');
        document.location.href = 'edit.php';
        </script>
    ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Item</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css" />
    <!-- css -->
    <!-- <link rel="stylesheet" href="admin.css"> -->

</head>

<body>
    <!-- ----------------------------------------------------------------------------------------- navbar -->
    <?php require('../../../partials/navbar/navbar.php'); ?>

    <div class="container-fluid d-flex justify-content-center ">
        <form action="" method="post" style="width: 1000px;" enctype="multipart/form-data">

            <input type="hidden" id="id" name="id" value="<?= $ubah_item["id"]; ?>">
            <input type="hidden" name="gambarLama" value="<?= $ubah_item["gambar"]; ?>">

            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label> <br>
                <img src="../../../../image/dataFoto/<?= $ubah_item["gambar"]; ?>" alt="" width="100">
                <input type="file" class="form-control" id="gambar" name="gambar" value="<?= $ubah_item["gambar"]; ?>">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Obat</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $ubah_item["nama"]; ?>">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea type="text" class="form-control" id="deskripsi" rows="3" name="deskripsi" value="<?= $ubah_item["deskripsi"]; ?>"><?= $ubah_item["deskripsi"]; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="indikasi_umum" class="form-label">Indikasi Umum</label>
                <textarea type="text" class="form-control" id="indikasi_umum" rows="3" name="indikasi_umum" value="<?= $ubah_item["indikasi_umum"]; ?>"><?= $ubah_item["indikasi_umum"]; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="komposisi" class="form-label">Komposisi</label>
                <input type="text" class="form-control" id="komposisi" name="komposisi" value="<?= $ubah_item["komposisi"]; ?>">
            </div>
            <div class="mb-3">
                <label for="aturan_pakai" class="form-label">Aturan Pakai</label>
                <textarea type="text" class="form-control" id="aturan_pakai" rows="3" name="aturan_pakai" value="<?= $ubah_item["aturan_pakai"]; ?>"><?= $ubah_item["aturan_pakai"]; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="perhatian" class="form-label">Perhatian</label>
                <textarea type="text" class="form-control" id="perhatian" rows="3" name="perhatian" value="<?= $ubah_item["perhatian"]; ?>"><?= $ubah_item["perhatian"]; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="kontra_indikasi" class="form-label">Kontra Indikasi</label>
                <textarea type="text" class="form-control" id="kontra_indikasi" rows="3" name="kontra_indikasi" value="<?= $ubah_item["kontra_indikasi"]; ?>"><?= $ubah_item["kontra_indikasi"]; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="efek_samping" class="form-label">Efek Samping</label>
                <textarea type="text" class="form-control" id="efek_samping" rows="3" name="efek_samping" value="<?= $ubah_item["efek_samping"]; ?>"><?= $ubah_item["efek_samping"]; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="golongan_produk" class="form-label">Golongan Produk</label>
                <textarea type="text" class="form-control" id="golongan_produk" rows="3" name="golongan_produk" value="<?= $ubah_item["golongan_produk"]; ?>"><?= $ubah_item["golongan_produk"]; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="kemasan" class="form-label">Kemasan</label>
                <textarea type="text" class="form-control" id="kemasan" rows="3" name="kemasan" value="<?= $ubah_item["kemasan"]; ?>"><?= $ubah_item["kemasan"]; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="manufaktur" class="form-label">Manufaktur</label>
                <input type="text" class="form-control" id="manufaktur" rows="3" name="manufaktur" value="<?= $ubah_item["manufaktur"]; ?>"></textarea>
            </div>
            <div class="mb-3">
                <label for="no_registrasi" class="form-label">No Registrasi</label>
                <input type="text" class="form-control" id="no_registrasi" rows="3" name="no_registrasi" value="<?= $ubah_item["no_registrasi"]; ?>"></textarea>
            </div>
            <div class="mb-3">
                <label for="kategori_obat" class="form-label">Kategori Obat</label>
                <input type="text" class="form-control" id="kategori_obat" name="kategori_obat" value="<?= $ubah_item["kategori_obat"]; ?>">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    <!-- ------------------------------- footer -->
    <?php require("../../../partials/footer/footer.php"); ?>

    <!-- java bootsrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
</body>

</html>