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

//search


if (isset($_GET["cari"])) {
    $obat = cari($_GET["keyword"]);
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
    <link rel="stylesheet" href="item_list.css">
</head>

<body>
    <!-- ----------------------------------------------------------------------------------------- navbar -->
    <?php require '../../../partials/navbar/navbar.php'; ?>
    <!-- ----------------------------------------------------------------------------------------- item page -->

    <div class="bgcolor item-page">
        <!-- ---------------------------------------------------------------    bgcolor -->
        <div class="bggrey"></div>
        <!-- -----------------------------------------------------------------  item-list -->
        <div class="item-list">
            <div class="container container-item">
                <div class="input-group mb-3 item-form">
                    <input type="text" class="form-control item-form-control" placeholder="Example : Paracetamol, Vitamin C, or Covid-19" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn item-btn" type="button" id="button-addon2"><i class="bi bi-search">
                            Cari</i></button>
                </div>
                <!-- ---------------------------------------------------------------------------- GRID -->
                <div class="row grid-utama">
                    <!-- --------------------------------------- Grid Kiri -->
                    <div class="col-4 grid-kiri">
                        <div class="container container-grid-kiri">
                            <?php require '../../../partials/collapse/collapse.php'; ?>
                        </div>
                    </div>
                    <!-- ---------------------------------------------------------------- Grid kanan -->
                    <div class="col-8 grid-kanan">
                        <div class="container container-grid-kanan">
                            <h5 class="judul-obat">Obat</h5>
                            <div class="container text-center grid-kanan-item">
                                <div class="row">
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
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- -----------------------------------------------------------------   footer -->
    <footer class=" bg-dark text-white pt-5 pb-4">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">FashiOn</h5>
                    <p>a company that stands in the fashion and clothing business that aims to
                        provide comfort to the
                        wearer in
                        the beauty of clothing.</p>

                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Product</h5>
                    <p><a href="#" class="text-white" style="text-decoration: none;">Men</a></p>
                    <p><a href="#" class="text-white" style="text-decoration: none;">Woman</a></p>
                    <p><a href="#" class="text-white" style="text-decoration: none;">Kid</a></p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Get In Touch</h5>
                    <p><a href="#" class="text-white" style="text-decoration: none;">Your
                            Account</a></p>
                    <p><a href="#" class="text-white" style="text-decoration: none;">About</a></p>
                    <p><a href="#" class="text-white" style="text-decoration: none;">Contact</a></p>
                    <p><a href="#" class="text-white" style="text-decoration: none;">Help</a></p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Company Name</h5>
                    <p><i class="bi bi-house-fill me-3"></i>Indonesia</p>
                    <p><i class="bi bi-envelope-at-fill me-3"></i>Fashion@mail.com</p>
                    <p><i class="bi bi-telephone-fill me-3"></i>+82 34567890</p>
                    <p><i class="bi bi-telephone-fill me-3"></i>+11 22333444</p>
                </div>
            </div>
            <hr class="mb-4">
            <div class="row align-items-center">
                <div class="col-md-7 col-lg-8">
                    <p>Copyright ©2022 All Right Reserver By :</p>
                    <!-- <a href="#" style="text-decoration: none"><strong class="text-danger bg-light"> Fashi<span
                class="text-black">On </span></strong></a> -->
                    <a class="navbar-brand" href="#">
                        <h2>HealthCare</h2>
                    </a>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="text-center text-md right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="bi bi-facebook"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="bi bi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="bi bi-instagram"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="bi bi-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- java bootsrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
</body>

</html>