<?php 
require 'functions.php';
$alam = query("SELECT * FROM menu_wisata WHERE kategori='alam'");

?> 

<!DOCTYPE html>
<html lang="en">

<head>
	<title> Proyek Akhir wkwk</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php">LoGo.</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.php" class="nav-link">BERANDA</a></li>
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
					<li class="nav-item active"><a href="informasi.php" class="nav-link">INFORMASI</a></li>
					<!-- <li class="nav-item"><a href="hotel.php" class="nav-link">Rute</a></li>
               <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
              <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li> -->
					<li class="nav-item cta"><a href="rute.php" class="nav-link"><span>RUTE</span></a></li>
          </ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
	<div class="hero-wrap" style="background-image: url('images/alam/bg_alam.jpg');height: 50vh;">
		<div class="overlay">
    </div>
		<div class="container">
		<div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <h2 class="mb-4" style="padding-top: 10rem; padding-left: 0; color:aliceblue"">
			<span style="font-size: 14px;"><a href="index.php">Home </a> / Wisata Alam</span> <br/>
			<strong>Wisata</strong> Alam</h2>">
          </div>
        </div>
    		<div class="row">
        <?php foreach( $alam as $row ) : ?>
			<div class="col-md-6 col-lg-4 ftco-animate">
            <div class="destination">
              <a
                class="img img-2 d-flex justify-content-center align-items-center"
                style="background-image: url(images/destination-1.jpg); border-radius: 20px;"
				href="detail_wisata.php"
              >
                <div
                  class="icon d-flex justify-content-center align-items-center"
                >
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3" style="height: 300px;">
                <div class="d-flex">
                  <div class="one">
                    <h3><?= $row["nama_wisata"]; ?></h3>
                  </div>
                </div>
                <p>
                  <?= substr($row["informasi"],0,210);  ?>
                </p>
                <p class="bottom-area d-flex">
                  <span><i class="icon-map-o"></i> ppp </span>
                  <span class="ml-auto"><a href="detail_wisata.php">Kunjungi</a></span>
                </p>
              </div>
            </div>
          </div>
          <?php endforeach; ?>

			<div class="row" style="padding-top: 2rem;">
				<div class="col-sm-12 col-md-6 col-lg-6">
					<img src="images/destination-1.jpg" style="width: 100%; height: 50vh;">
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6">
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti molestiae voluptatum soluta quia eligendi esse aliquam, inventore saepe reiciendis impedit explicabo nisi autem, sed quae ipsum ipsa recusandae et molestias.</p>
				</div>
			</div>
		</div>
	</div>
	</div>


	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" />
		</svg></div>


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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0fLolW_4p0Z-7iQoOzc6ia-1AQ0OrVDc&libraries=places&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

</body>

</html>