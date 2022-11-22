<?php 

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "wisata");

// ambil data dari database
$result = mysqli_query($conn,"SELECT * FROM menu_kategori");

// untuk munculin error
// if ( !$result) {
//   echo mysqli_error($conn);
// }
?> 

<!DOCTYPE html>
<html lang="en">
  <title>Proyek Akhir wkwk</title>
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no"
  />

  <link
    href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"
    rel="stylesheet"
  />
  <link
    href="https://fonts.googleapis.com/css?family=Alex+Brush"
    rel="stylesheet"
  />

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css" />
  <link rel="stylesheet" href="css/animate.css" />

  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/owl.theme.default.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />

  <link rel="stylesheet" href="css/aos.css" />

  <link rel="stylesheet" href="css/ionicons.min.css" />

  <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
  <link rel="stylesheet" href="css/jquery.timepicker.css" />

  <link rel="stylesheet" href="css/flaticon.css" />
  <link rel="stylesheet" href="css/icomoon.css" />
  <link rel="stylesheet" href="css/style.css" />

  <body>
  <nav
      class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light"
      id="ftco-navbar"
    >
      <div class="container">
        <a class="navbar-brand" href="index.php">LoGo.</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#ftco-nav"
          aria-controls="ftco-nav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="index.php" class="nav-link">BERANDA</a>
              <li class="nav-item dropdown">
                <a
                  href="#"
                  class="nav-link dropdown-toggle"
                  id="navbarDarkDropdownMenuLink"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                  >KATEGORI</a
                >
                <ul
                  class="dropdown-menu dropdown-menu-dark"
                  aria-labelledby="navbarDarkDropdownMenuLink"
                >
                <li><a class="dropdown-item" href="alam.php">Wisata Alam</a></li>
              <li><a class="dropdown-item" href="religi.php">Wisata Religi</a></li>
              <li><a class="dropdown-item" href="sejarah.php">Wisata Sejarah</a></li>
              <li><a class="dropdown-item" href="keluarga.php">Wisata Keluarga</a></li>
              <li><a class="dropdown-item" href="oleholeh.php">Pusat Oleh-oleh</a></li>>
                </ul>
              </li>
            <li class="nav-item">
              <a href="informasi.php" class="nav-link">INFORMASI</a>
            </li>
            <!-- <li class="nav-item"><a href="hotel.php" class="nav-link">Rute</a></li>
         <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li> -->
            <li class="nav-item cta">
              <a href="rute.php" class="nav-link"><span>RUTE</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


  <div class="container" id="show-data" style="margin-top:150px ;">
      <div class="card mb-3" style="height: 316px; margin-bottom:0; border:none;">
        <div class="row no-gutters" style="height: 100%;">
          <div
            class="col-md-6"
            style="
              background-image: url('https://hatrabbits.com/wp-content/uploads/2017/01/random.jpg');
              background-size: cover;
            "
          ></div>
          <div class="col-md-6">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
              </p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" style="height: 316px; margin-bottom:0; border:none;">
        <div class="row no-gutters" style="height: 100%;">
          <div class="col-md-6 ">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
              </p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
          <div
            class="col-md-6"
            style="
              background-image: url('https://hatrabbits.com/wp-content/uploads/2017/01/random.jpg');
              background-size: cover;
            "
          ></div>
        </div>
      </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
