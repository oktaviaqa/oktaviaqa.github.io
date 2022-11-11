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
  <link rel="stylesheet" href="css/rute.css" />
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
            <li class="nav-item">
              <a href="index.php" class="nav-link">BERANDA</a>
            </li>
            <!-- <li class="nav-item"><a href="hotel.php" class="nav-link">Rute</a></li>
         <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li> -->
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
              <li><a class="dropdown-item" href="oleholeh.php">Pusat Oleh-oleh</a></li>
          </ul>
        </li> 
        <li class="nav-item">
          <a href="informasi.php" class="nav-link">INFORMASI</a>
        </li>   
        <li class="nav-item cta active">
              <a href="rute.php" class="nav-link"><span>RUTE</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div
      class="hero-wrap"
      style="background-image: url('images/bg_1.jpg'); height: 50vh"
    >
      <div class="overlay"></div>
      <div class="container">
        <div
          class="row no-gutters slider-text justify-content-center"
          data-scrollax-parent="true"
          style="padding-top: 10rem"
        >
          <div
            class="col-md-9 ftco-animate"
            data-scrollax=" properties: { translateY: '70%' }"
          >
            <div class="block-17 my-4" style="border-radius: 20px">
              <!-- <label> Dimana </label> -->
              <form action="" method="post" class="d-block d-flex">
                <div class="fields d-flex">
                  <div class="rute textfield-search one-third">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Pilih Tujuan"
                    />
                  </div>
                </div>
                <input
                  type="submit"
                  class="search-submit btn btn-primary"
                  value="Search"
                />
              </form>
            </div>
          </div>
        </div>

        <div class="row">
          <div id="map" class="map ftco-animate"></div>
        </div>
      </div>
    </div>
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
        <circle
          class="path-bg"
          cx="24"
          cy="24"
          r="22"
          fill="none"
          stroke-width="4"
          stroke="#eeeeee"
        />
        <circle
          class="path"
          cx="24"
          cy="24"
          r="22"
          fill="none"
          stroke-width="4"
          stroke-miterlimit="10"
          stroke="#F96D00"
        />
      </svg>
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
