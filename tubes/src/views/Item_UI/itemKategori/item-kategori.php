<?php
session_start();

if (!isset($_SESSION['username'])) {
    echo "gagal username";
}

if (!isset($_SESSION["login"])) {
    header("Location: ../../../../index.php");
    exit;
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
    <link rel="stylesheet" href="item-kategori.css" />
</head>

<body>
    <!-- ----------------------------------------------------------------------------------------- navbar -->
    <?php require '../../../partials/navbar/navbar_user.php'; ?>
    <!-- ----------------------------------------------------------------------------------------- item page -->

    <div class="bgcolor item-page">
        <div class="bggrey"></div>
        <!-- -----------------------------------------------------------------  item-list -->
        <div class="container container-item">
            <div class="input-group mb-3 item-form">
                <input type="text" class="form-control item-form-control" placeholder="Example : Paracetamol, Vitamin C, or Covid-19" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn item-btn" type="button" id="button-addon2"><i class="bi bi-search">
                        Cari</i></button>
            </div>
            <div class="kategori-obat ">
                <h2>Belanja Sesuai Kategori</h2>
                <!-- grid #1 -->
                <!-- <div class="container item-grid1">
                    <div class="row ">
                        <div class="col">
                            <h4>Batuk, Pilek & Flu</h4>
                            <div class="row row-cols-2 ">
                                <div class="col">Batuk & Flu</div>
                                <div class="col">Balsem & Minyak Esensial</div>
                                <div class="col">Nasal Spray & Dekongestan</div>
                                <div class="col">Untuk Bayi & Anak</div>
                                <div class="col">Perawatan Herbal</div>
                            </div>
                            <div class="col">
                                <h4>Batuk, Pilek & Flu</h4>
                                <div class="row row-cols-2 ">
                                    <div class="col">Batuk & Flu</div>
                                    <div class="col">Balsem & Minyak Esensial</div>
                                    <div class="col">Nasal Spray & Dekongestan</div>
                                    <div class="col">Untuk Bayi & Anak</div>
                                    <div class="col">Perawatan Herbal</div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <h4>Demam & Nyeri</h4>
                            <div class="row row-cols-2">
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                            </div>
                        </div>

                    </div>
                </div> -->
                <div class="container text-start ">
                    <div class="row row-cols-2" style="margin-top: 50px;">
                        <div class="col">
                            <h4>Batuk, Pilek & Flu</h4>
                            <div class="row row-cols-2 ">
                                <div class="col"><a href="../itemList/item-list.php?kategori=batuk dan flu#item_menu">Batuk &
                                        Flu</a> </div>
                                <div class="col"><a href="../itemList/item-list.php?kategori=balsem dan minyak esensial#item_menu">Balsem & Minyak Esensial</a></div>
                                <div class="col"><a href="../itemList/item-list.php?kategori=nasal spray dan deskongestan#item_menu">Nasal Spray & Dekongestan</a></div>
                                <div class="col"><a href="../itemList/item-list.php?kategori=untuk bayi dan anak#item_menu">Untuk Bayi & Anak</a></div>
                                <div class="col"><a href="../itemList/item-list.php?kategori=perawatan herbal#item_menu">Perawatan Herbal</a></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="col">
                                <h4>Demam & Nyeri</h4>
                                <div class="row row-cols-2">
                                    <div class="col"><a href="#">Pereda Demam & Nyeri</a></div>
                                    <div class="col"><a href="#">Untuk Bayi & Anak</a></div>
                                    <div class="col"><a href="#">Terapi Panas & Dingin</a></div>
                                    <div class="col"><a href="#">Perawatan Herbal</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="col" style="margin-top: 50px;">
                                <h4>Infeksi</h4>
                                <div class="row row-cols-2">
                                    <div class="col"><a href="#">Antibiotik</a></div>
                                    <div class="col"><a href="#">Antijamur</a></div>
                                    <div class="col"><a href="#">Antivirus</a></div>

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="col" style="margin-top: 50px;">
                                <h4>Alergi</h4>
                                <div class="row row-cols-2">
                                    <div class="col"><a href="#">Obat Alergi</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- <div class="dropdown d-flex justify-content-center item-list">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Dropdown link
                </a>

                <ul class="dropdown-menu item-list-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div> -->


        </div>
    </div>

    <!-- -----------------------------------------------------------------   footer -->
    <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">FashiOn</h5>
                    <p>a company that stands in the fashion and clothing business that aims to provide comfort to the
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
                    <p><a href="#" class="text-white" style="text-decoration: none;">Your Account</a></p>
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
                            <li class="list-inline-item"><a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="bi bi-instagram"></i></a></li>
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