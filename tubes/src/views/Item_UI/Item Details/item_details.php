<?php

//koneksi DBMS
require '../../../partials/functions/functions.php';

//ambil data dari URL
$id = $_GET["id"];
$tampil = query("SELECT * FROM item WHERE id = $id")[0];


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
    <link rel="stylesheet" href="item_details.css">
</head>

<body>
    <!-- ----------------------------------------------------------------------------------------- navbar -->
    <?php require("../../../partials/navbar/navbar.php"); ?>
    <!-- ----------------------------------------------------------------------------------------- item page -->

    <div class="bgcolor ">
        <!-- ---------------------------------------------------------------    bgcolor -->
        <!-- -----------------------------------------------------------------  item-list -->
        <div class=" item-list">
            <div class="container container_item">

                <!-- ---------------------------------------------------------------------------- Detail Item -->
                <div class="container item_details">
                    <div class="input-group mb-3 item-form">
                        <input type="text" class="form-control item-form-control" placeholder="Example : Paracetamol, Vitamin C, or Covid-19" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn item-btn" type="button" id="button-addon2"><i class="bi bi-search">
                                Cari</i></button>
                    </div>
                    <div class="row grid-desc">
                        <!-- -------------------------------------------------------------- grid kiri -->
                        <div class="col image-desc">
                            <img src="../../../../image/dataFoto/<?= $tampil["gambar"]; ?>" class="img-thumbnail" alt="...">
                        </div>
                        <!-- ------------------------------------------------------------- grid tengah -->
                        <div class="col text-start item-details-tengah">
                            <!-- nama obat -->
                            <h3><?= $tampil["nama"]; ?></h3>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="button">Button</button>
                            </div>
                            <!-- deskripsi -->
                            <h5>Deskripsi</h5>
                            <p><?= $tampil["deskripsi"]; ?></p>
                            <hr>
                            <h5>Indikasi Umum</h5>
                            <p><?= $tampil["indikasi_umum"]; ?></p>
                            <hr>
                            <h5>Komposisi</h5>
                            <p><?= $tampil["komposisi"]; ?></p>
                            <hr>
                            <h5>Dosis</h5>
                            <p><?= $tampil["dosis"]; ?></p>
                            <hr>
                            <h5>Aturan pakai</h5>
                            <p><?= $tampil["aturan_pakai"]; ?></p>
                            <hr>
                            <h5>Perhatian</h5>
                            <p><?= $tampil["perhatian"]; ?></p>
                            <hr>
                            <h5>Kontra Indikasi</h5>
                            <p><?= $tampil["kontra_indikasi"]; ?></p>
                            <hr>
                            <h5>Efek Samping</h5>
                            <p><?= $tampil["efek_samping"]; ?></p>
                            <hr>
                            <h5>Golongan Produk</h5>
                            <p><?= $tampil["golongan_produk"]; ?></p>
                            <hr>
                            <h5>Kemasan</h5>
                            <p><?= $tampil["kemasan"]; ?></p>
                            <hr>
                            <h5>manufaktur</h5>
                            <p><?= $tampil["manufaktur"]; ?></p>
                            <hr>
                            <h5>No. Registrasi</h5>
                            <p><?= $tampil["no_registrasi"]; ?></p>
                        </div>
                        <!-- ---------------------------------------------------------------- grid kanan -->
                        <div class="col grid-kanan-item-details">
                            <h5>Rekomendasi produk lain</h5>
                            <div class="card mb-3" style="max-width: 400px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="..." class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural lead-in to additional content. This content is a little bit
                                                longer.</p>
                                            <div class="d-grid gap-2 col-6 mx-auto">
                                                <button class="btn btn-primary" type="button">Button</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3" style="max-width: 400px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="..." class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural lead-in to additional content. This content is a little bit
                                                longer.</p>
                                            <div class="d-grid gap-2 col-6 mx-auto">
                                                <button class="btn btn-primary" type="button">Button</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3" style="max-width: 400px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="..." class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural lead-in to additional content. This content is a little bit
                                                longer.</p>
                                            <div class="d-grid gap-2 col-6 mx-auto">
                                                <button class="btn btn-primary" type="button">Button</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- -----------------------------------------------------------------   footer -->
    <?php require("../../../partials/footer/footer.php"); ?>

    <!-- java bootsrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
</body>

</html>