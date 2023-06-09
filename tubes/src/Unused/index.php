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
  <link rel="stylesheet" href="src/views/halaman_utama/style.css" />
  <!-- php css external -->
  <style>

  </style>
</head>

<body>
  <!-- ----------------------------------------------------------------------------------------- navbar -->
  <?php require('src/partials/navbar/navbar.php'); ?>
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
          <img src="image/editing/chat-doctor.png" alt="chat-doctor">
          <p>Chat Dengan Dokter</p>
        </a>
      </li>


      <li id="toko-kesehatan">
        <a href="#">
          <img src="image/editing/toko-kesehatan.png" alt="Toko-Kesehatan">
          <p>Toko Kesehatan</p>
        </a>
      </li>


      <li id="Buat-Janji">
        <a href="#">
          <img src="image/icon/doctor/janji-rs2.jpg" alt="Buat-Janji">
          <p>Buat Janji</p>
        </a>
      </li>


      <li id="Janji-medis">
        <a href="#">
          <img src="image/icon/doctor/janji-rs.webp" alt="Janji-medis">
          <p>Janji Medis</p>
        </a>
      </li>


      <li id="home-lab">
        <a href="#">
          <img src="image/editing/home-lab.png" alt="Home-Lab">
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
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>




  <!-- ------------------------------- footer -->
  <footer class="bg-dark text-white pt-5 pb-4">
    <div class="container text-center text-md-left">
      <div class="row text-center text-md-left">
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-warning">HealthCare</h5>
          <p>Companies operating in the health sector. As an intermediary between the world of health and customers.</p>

        </div>
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Site Map</h5>
          <p><a href="#" class="text-white" style="text-decoration: none;">FAQ</a></p>
          <p><a href="#" class="text-white" style="text-decoration: none;">Blog</a></p>
          <p><a href="#" class="text-white" style="text-decoration: none;">Syarat & Ketentuan</a></p>
          <p><a href="#" class="text-white" style="text-decoration: none;">Kebijakan Privasi</a></p>
        </div>
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Layanan Pengaduan Konsumen</h5>
          <p>PT Media HealthCare Indoensia</p> <br>
          <p>Jl.Kenangan no.11 Block April</p>
          <p><i class="bi bi-envelope-at-fill me-1"></i> HC_IND@mail.com</p>
          <p><i class="bi bi-telephone-fill me-3"></i>+82 34567890</p>
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