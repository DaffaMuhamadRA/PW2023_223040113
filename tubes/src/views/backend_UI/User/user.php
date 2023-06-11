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
    <link rel="stylesheet" href="user.css" />
    <link rel="stylesheet" href="../Admin/admin.css">
</head>

<body>
    <!-- ----------------------------------------------------------------------------------------- navbar -->
    <?php require("../../../partials/navbar/navbar_user.php"); ?>
    <!-- ----------------------------------------------------------------------------------------- home page -->
    <!-- hero image -->
    <div class="heroimage">
        <div class="color-overlay d-flex justify-content-center align-items-center">
            <form action="../../Item_UI/itemList/item-list.php" class="search-bar" method="get">
                <input type="text" placeholder="search medicine" name="keyword" autocomplete="off" id="keyword">
                <p>|</p>
                <button class="btn" type="submit" name="cari"><i class="bi bi-search" id="tombol-cari"></i></button>
            </form>
            <!-- ------------------------- -->
            <!-- <h1>Hello world</h1>
        <form class="d-flex me-auto " role="search">
            <input
              class="form-control ms-2 rounded-pill"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn submit-btn" type="submit">
              <i class="bi bi-search"></i>
            </button>
          </form> -->
        </div>
    </div>
    <!-- ----------------------------------- menu -->

    <!-- ----------------------------- main content -->
    <div class="main-content-wrap">
        <h1 class="d-flex justify-content-center">Artikel</h1>
        <div class="main-content d-flex justify-content-evenly">
            <div class="card" style="width: 18rem;">
                <img src="../../../../image/artikel/jantung.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Mencegah Penyakit Jantung</h5>
                    <p class="card-text">mimin punya kabar gembira untuk kalian, mencegah penyakit jantung dapat dilakukan dengan cara ...</p>
                    <a href="#" class="btn btn-primary">Lebih Lanjut</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="../../../../image/artikel/mata.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Fakta Unik Mata</h5>
                    <p class="card-text">Untuk kalian para pecandu gadget mimin punya informasi terkait mata ,Para peneliti menemukan fakta bahwa mata .....</p>
                    <a href="#" class="btn btn-primary">Lebih Lanjut</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="../../../../image/artikel/dog.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Fakta tentang Anjing</h5>
                    <p class="card-text">Mimin punya fakta tentang hewan anjing nih, diadakan survei dengan 1000 anjing yang dimana ....</p>
                    <a href="#" class="btn btn-primary">Lebih Lanjut</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="../../../../image/artikel/sexual.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Kesehatan Alat Kelamin</h5>
                    <p class="card-text">Kebersihan alat kelamin perlu diperhatikan loh sahabat healthy, perlu diketahui jika kita tidak menjaga kesehatan alat kelamin kita contohnya .....</p>
                    <a href="#" class="btn btn-primary">Lebih Lanjut</a>
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