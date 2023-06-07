<?php
require '../partials/functions/functions.php';

$keyword = $_GET["keyword"];

//konfigurasi
$jumlahDataPerHalaman = 6;
$jumlahData = count(query("SELECT * FROM item"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
//jika halaman ada variabel halaman, maka gunakan halaman. jika tidak maka halaman isi variabel angka 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$query = $query = "SELECT * FROM item 
                        WHERE
                        nama LIKE '%$keyword%' OR
                        indikasi_umum LIKE '%$keyword%' OR
                        komposisi LIKE '%$keyword%' OR
                        golongan_produk LIKE '%$keyword%' OR
                        no_registrasi LIKE '%$keyword%'
                        LIMIT $awalData, $jumlahDataPerHalaman ";



$obat = query($query);


?>

<div class="row g-3 bagian-card-item">


    <?php foreach ($obat as $row) : ?>
        <div class="col-4">
            <div class="p-3">
                <div class="card ">
                    <img src="../../../../image/dataFoto/<?= $row["gambar"]; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row["nama"]; ?></h5>
                        <a href="../../Item_UI/Item Details/item_details.php?id=<?= $row["id"]; ?>" class="btn btn-primary">Cek Details</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>


    <!-- card -->



    <!-- pagination -->
    <nav aria-label="Page navigation example ">
        <ul class="pagination d-flex justify-content-center">

            <?php if ($halamanAktif > 1) : ?>
                <li class="page-item"><a class="page-link" href="?halaman=<?= $halamanAktif - 1; ?>#item_menu">Previous</a></li>
            <?php endif; ?>



            <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                <?php if ($i == $halamanAktif) : ?>

                    <li class="page-item"><a class="page-link" href="?halaman=<?= $i; ?>#item_menu" style="color:red;"> <?= $i; ?> </a></li>

                <?php else : ?>

                    <li class="page-item"><a class="page-link" href="?halaman=<?= $i; ?>#item_menu"> <?= $i; ?> </a></li>
                <?php endif; ?>
            <?php endfor; ?>



            <?php if ($halamanAktif < $jumlahHalaman) : ?>
                <li class="page-item"><a class="page-link" href="?halaman=<?= $halamanAktif + 1; ?>#item_menu"> Next </a></li>
            <?php endif; ?>

        </ul>
    </nav>
</div>