<div class="navbar navbar-expand-lg" style="background-color: #62CDFF">
  <div class="container-fluid ">
    <a class="navbar-brand" href="#">
      <h1>HealthCare</h1>
    </a>
    <button class="navbar-toggler me-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 justify-content-center">
        <li class="nav-item">

          <a class="nav-link active" aria-current="page" href="../../../../../tubes/src/views/backend_UI/User/user.php">Beranda</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            Artikel
          </a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="#"> Kesehatan Jantung </a>
            </li>
            <li>
              <a class="dropdown-item" href="#"> Kesehatan Mental </a>
            </li>
            <li><a class="dropdown-item" href="#"> Kesehatan hewan </a></li>
            <li>
              <a class="dropdown-item" href="#"> Kesehatan Seksual </a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            Penunjang Kesehatan
          </a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="#"> Kelender Menstruasi </a>
            </li>
            <li>
              <a class="dropdown-item" href="#"> Kalkulator BMI </a>
            </li>
            <li>
              <a class="dropdown-item" href="#"> Tes Gangguan Kecemasan </a>
            </li>
            <li><a class="dropdown-item" href="#"> Tes Depresi </a></li>
            <li>
              <a class="dropdown-item" href="#"> Donasi </a>
            </li>
          </ul>

        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../Item_UI/itemKategori/item-kategori.php"> Cari Obat </a>
        </li>
      </ul>

      <!-- ------------------ account  -->

      <!-- <i class="bi bi-person-circle">

              </i>
                </a>
                </li> -->

    </div>
    <ul>
      <li class=" account md-auto collapse navbar-collapse" id="navbarSupportedContent">
        <div class="notif">
          <div class="d-grid gap-2 d-md-flex justify-content-md-end n-button">
            <button class="btn  me-md-2" type="button"><i class="bi bi-bell-fill"></i></button>
          </div>
        </div>
        <div class="dropdown u-drop">
          <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle"> <?= $_SESSION['username']; ?></i>
          </button>
          <ul class="dropdown-menu account-drop">
            <li><a class="dropdown-item" href="#"><i class="bi bi-person-bounding-box"></i> Your
                Account</a>
            </li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Setting</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-people-fill"></i> Switch account</a>
            </li>
            <li><a class="dropdown-item" href="../../../partials/logout/logout.php"><i class="bi bi-box-arrow-right"></i> Sign out</a>
            </li>
          </ul>
        </div>
      </li>
    </ul>

  </div>




</div>