<?php
session_start();


if (!isset($_SESSION["login"])) {
    header("Location: ../../../../index.php");
    exit;
}

require '../../../partials/functions/functions.php';

$obat = query("SELECT * FROM item");


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
    <link rel="stylesheet" href="admin.css" />
</head>

<body>
    <!-- ----------------------------------------------------------------------------------------- navbar -->
    <?php require('../../../partials/navbar/navbar.php'); ?>
    <!-- ----------------------------------------------------------------------------------------- home page -->
    <!-- hero image -->
    <div class="heroimage">
        <div class="color-overlay d-flex justify-content-center align-items-center">
            <form action="" class="search-bar" method="post">
                <input type="text" placeholder="search medicine" name="keyword" autocomplete="off">
                <p>|</p>
                <button class="btn" type="submit" name="cari"><i class="bi bi-search"></i></button>
            </form>

        </div>
    </div>
    <!-- ----------------------------------- menu -->
    <div class="main_menu  ">
        <div class="container-fluid d-flex justify-content-center main_menu_container">

            <div class="navbar_menu">
                <?php require("../../../partials/nav-tabs/nav-tabs.php"); ?>

                <div class="card-container" style="border: red 2px solid;">
                    <div class="container text-center grid-kiri">
                        <div class="row grid-item">
                            <div class="col-lg-4 " style="border: #a1eafb 2px solid;">

                                <?php require("../../../partials/collapse/collapse.php"); ?>
                            </div>
                            <div class="col-lg-8 bagian-card" style="border: #a1eafb 2px solid;">
                                <!-- container -->
                                <div class="container text-center">
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
                                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



            </div>


        </div>
        <!-- ----------------------------- main content -->
        <div class="main-content-wrap">
            <h1 class="d-flex justify-content-center">main content</h1>
            <div class="main-content d-flex justify-content-evenly">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
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
</body>

</html>