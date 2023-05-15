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
</head>

<body>
    <!-- ----------------------------------------------------------------------------------------- navbar -->
    <?php require("../../../partials/navbar/navbar.php"); ?>
    <!-- ----------------------------------------------------------------------------------------- home page -->
    <!-- hero image -->
    <div class="heroimage">
        <div class="color-overlay d-flex justify-content-center align-items-center">
            <form action="" class="search-bar">
                <input type="text" placeholder="search medicine">
                <p>|</p>
                <button class="btn" type="submit"><i class="bi bi-search"></i></button>
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
    <div class="main-menu d-flex justify-content-center">

        <ul>

            <li id="chat-doctor ">
                <a href="#">
                    <img src="../../../image/editing/chat-doctor.png" alt="chat-doctor">
                    <p>Chat Dengan Dokter</p>
                </a>
            </li>


            <li id="toko-kesehatan">
                <a href="#">
                    <img src="../../../image/editing/toko-kesehatan.png" alt="Toko-Kesehatan">
                    <p>Toko Kesehatan</p>
                </a>
            </li>


            <li id="Buat-Janji">
                <a href="#">
                    <img src="../../../image/icon/doctor/janji-rs2.jpg" alt="Buat-Janji">
                    <p>Buat Janji</p>
                </a>
            </li>


            <li id="Janji-medis">
                <a href="#">
                    <img src="../../../image/icon/doctor/janji-rs.webp" alt="Janji-medis">
                    <p>Janji Medis</p>
                </a>
            </li>


            <li id="home-lab">
                <a href="#">
                    <img src="../../../image/editing/home-lab.png" alt="Home-Lab">
                    <p>Home Lab</p>
                </a>
            </li>

        </ul>

    </div>
    <!-- ----------------------------- main content -->
    <div class="main-content-wrap">
        <h1 class="d-flex justify-content-center">main content</h1>
        <div class="main-content d-flex justify-content-evenly">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
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