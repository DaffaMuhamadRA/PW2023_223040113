<?php
session_start();

if (!isset($_SESSION['username'])) {
    echo "gagal username";
}

if (!isset($_SESSION["login"])) {
    header("Location: ../../../../index.php");
    exit;
}




require '../../../partials/functions/functions.php';

//pagination
//konfigurasi
$jumlahDataPerHalaman = 2;
$jumlahData = count(query("SELECT * FROM item"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
//jika halaman ada variabel halaman, maka gunakan halaman. jika tidak maka halaman isi variabel angka 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;
//pagination

//kategorikal
$kategori = $_GET['kategori'] ?? '';
if ($kategori) {

    $obat = query("SELECT * FROM item WHERE kategori_obat = '$kategori'LIMIT $awalData, $jumlahDataPerHalaman");
} else {
    $obat = query("SELECT * FROM item LIMIT $awalData, $jumlahDataPerHalaman");
}


//tombol cari ditekan

if (isset($_POST["cari"])) {
    $obat = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css" />
    <!-- css -->
    <link rel="stylesheet" href="admin_2.css" />
    <style>
        /* pagination */
    </style>
</head>

<body>
    <!-- ----------------------------------------------------------------------------------------- navbar -->
    <?php require('../../../partials/navbar/navbar.php'); ?>
    <!-- ----------------------------------------------------------------------------------------- home page -->
    <!-- searchbar -->
    <div class="heroimage">
        <div class="color-overlay d-flex justify-content-center align-items-center">
            <form action="" class="search-bar" method="post">
                <input type="text" placeholder="search medicine" name="keyword" autocomplete="off" id="keyword">
                <p>|</p>
                <button class="btn" type="submit" name="cari"><i class="bi bi-search" id="tombol-cari"></i></button>
            </form>

        </div>
    </div>
    <!-- ----------------------------------- menu -->

    <div class="main_menu mb-1" id="item_menu">
        <div class="container-fluid d-flex justify-content-center main_menu_container">

            <div class="navbar_menu">
                <?php require("../../../partials/nav-tabs/nav-tabs.php"); ?>

                <div class="card-container">
                    <div class="container text-center grid-kiri">
                        <div class="row grid-item">
                            <div class="col-lg-4 ">

                                <?php require("../../../partials/collapse/collapse.php"); ?>
                            </div>
                            <div class="col-lg-8 bagian-card" style="border: #grey 2px solid;">


                                <!-- container item -->
                                <div class="container text-center" id="container">
                                    <?php if ($obat) : ?>
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

                                            <div class="pagination-item">
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

                                        </div>
                                    <?php else : ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="alert alert-danger dflex justify-content-center" role="alert">
                                                    Data Tidak Ditemukan !
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



            </div>


        </div>
    </div>





    <!-- ------------------------------- footer -->
    <?php require("../../../partials/footer/footer.php"); ?>

    <!-- java bootsrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
    <script src="../../../js/script.js"></script>
</body>

</html>