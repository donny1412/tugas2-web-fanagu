<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mlaku.id | Hotel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

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
	      <a class="navbar-brand" href="index.php">Mlaku.id</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="places.php" class="nav-link">Destinasi Wisata</a></li>
	          <li class="nav-item active"><a href="hotel.php" class="nav-link">Hotel</a></li>
	          <li class="nav-item"><a href="Tour Guide.php" class="nav-link">Tour Guide</a></li>
	          <?php
              session_start();
              // Check if the user is already logged in, if yes then redirect him to welcome page
              if (isset($_SESSION["status"]) && $_SESSION["status"] =='login') {
                  echo  "<li class='nav-item'><a href='logout.php' class='nav-link'>Log out</a></li>";
              } else echo  "<li class='nav-item'><a href='login.php' class='nav-link'>Login</a></li>";
            ?>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap js-fullheight" style="background-image: url('images/thumb.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Hotel</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Hotel</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section justify-content-end ftco-search">
      <div class="container-wrap ml-auto">
        <div class="row no-gutters">
          <div class="col-md-12 nav-link-wrap">
            <div class="nav nav-pills justify-content-center text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Search Hotel</a>
            </div>
          </div>
          <div class="col-md-12 tab-wrap">
            <div class="tab-content p-4 px-5" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                <form action="hoteljogja.php" class="search-destination">
                  <div class="row">
                    <div class="col-md align-items-end">
                      <div class="form-group">
                        <label for="#">Where</label>
                        <div class="form-field">
                          <div class="icon"><span class="icon-map-marker"></span></div>
                          <input type="text" class="form-control" placeholder="Where">
                        </div>
                      </div>
                    </div>
                    <div class="col-md align-self-end">
                      <div class="form-group">
                        <div class="form-field">
                          <input type="submit" value="Search" class="form-control btn btn-primary">
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		<section class="ftco-section">
      <div class="container">
        <div class="row">
        	<div class="col-lg-3 sidebar order-md-last ftco-animate">
          </div><!-- END-->



          <div class="col-lg-9">
            <div class="row">
              <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                <div class="destination">
                  <a class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/hotel/Jambuluwuk/Jambuluwuk.jpg);">
                    <div class="icon d-flex justify-content-center align-items-center">
                      <span class="icon-link"></span>
                    </div>
                  </a>
                  <div class="text p-3">
                    <div class="d-flex">
                      <div class="one">
                        <h3><a href="hotel-Jambuluwuk.php">Jambuluwuk Hotel</a></h3>
                        <p class="rate">
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <span>10 Rating</span>
                        </p>
                      </div>
                    </div>
                    <p>Info </p>
                    <p class="days"><span>IDR 552.000</span></p>
                    <hr>
                    <p class="bottom-area d-flex">
                      <span><i class="icon-map-o"></i> Pakualaman, Yogyakarta </span>
                      <span class="ml-auto"><a href="hotel-jambuluwuk.php">Book</a></span>
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                <div class="destination">
                  <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/hotel/Artotel.jpg);">
                    <div class="icon d-flex justify-content-center align-items-center">
                      <span class="icon-link"></span>
                    </div>
                  </a>
                  <div class="text p-3">
                    <div class="d-flex">
                      <div class="one">
                        <h3><a href="MT-hotel.php">Artotel Hotel</a></h3>
                        <p class="rate">
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <span>10 Rating</span>
                        </p>
                      </div>
                    </div>
                    <p>Info </p>
                    <p class="days"><span>IDR 625.000</span></p>
                    <hr>
                    <p class="bottom-area d-flex">
                      <span><i class="icon-map-o"></i> Mlati, Yogyakarta</span>
                      <span class="ml-auto"><a href="MT-hotel.php">Book</a></span>
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                <div class="destination">
                  <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/hotel/Adhisthana.jpg);">
                    <div class="icon d-flex justify-content-center align-items-center">
                      <span class="icon-link"></span>
                    </div>
                  </a>
                  <div class="text p-3">
                    <div class="d-flex">
                      <div class="one">
                        <h3><a href="MT-hotel.php">Adhisthana Hotel</a></h3>
                        <p class="rate">
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star-0"></i>
                          <span>8 Rating</span>
                        </p>
                      </div>
                    </div>
                    <p>Info </p>
                    <p class="days"><span>IDR 145.000</span></p>
                    <hr>
                    <p class="bottom-area d-flex">
                      <span><i class="icon-map-o"></i> Mergangsan, Yogyakarta</span>
                      <span class="ml-auto"><a href="MT-hotel.php">Book</a></span>
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                <div class="destination">
                  <a href="MT-hotel.php" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/hotel/intercontinental/intercontinental.jpg);">
                    <div class="icon d-flex justify-content-center align-items-center">
                      <span class="icon-link"></span>
                    </div>
                  </a>
                  <div class="text p-3">
                    <div class="d-flex">
                      <div class="one">
                        <h3><a href="#">InterContinental Bandung Dago Pakar</a></h3>
                        <p class="rate">
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <span>10 Rating</span>
                        </p>
                      </div>
                    </div>
                    <p>Info</p>
                    <p class="days"><span>Rp. Sekian</span></p>
                    <hr>
                    <p class="bottom-area d-flex">
                      <span><i class="icon-map-o"></i> Lembang, Jawa Barat</span>
                      <span class="ml-auto"><a href="MT-hotel.php">Book</a></span>
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                <div class="destination">
                  <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/hotel/novena_lembang/novena.jpg);">
                    <div class="icon d-flex justify-content-center align-items-center">
                      <span class="icon-link"></span>
                    </div>
                  </a>
                  <div class="text p-3">
                    <div class="d-flex">
                      <div class="one">
                        <h3><a href="MT-hotel.php">Novena Hotel Lembang</a></h3>
                        <p class="rate">
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star-o"></i>
                          <span>8 Rating</span>
                        </p>
                      </div>
                    </div>
                    <p>Info</p>
                    <p class="days"><span>Rp. Sekian</span></p>
                    <hr>
                    <p class="bottom-area d-flex">
                      <span><i class="icon-map-o"></i> Lembang. Jawa Barat</span>
                      <span class="ml-auto"><a href="MT-hotel.php">Book</a></span>
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                <div class="destination">
                  <a href="MT-hotel.php" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/hotel/grand_inna/inna.jpg);">
                    <div class="icon d-flex justify-content-center align-items-center">
                      <span class="icon-link"></span>
                    </div>
                  </a>
                  <div class="text p-3">
                    <div class="d-flex">
                      <div class="one">
                        <h3><a href="#">Grand Inna Malioboro</a></h3>
                        <p class="rate">
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star-o"></i>
                          <span>8 Rating</span>
                        </p>
                      </div>
                    </div>
                    <p>Info</p>
                    <p class="days"><span>Rp. Sekian</span></p>
                    <hr>
                    <p class="bottom-area d-flex">
                      <span><i class="icon-map-o"></i> Yogyakarta</span>
                      <span class="ml-auto"><a href="MT-hotel.php">Book</a></span>
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-5">
              <div class="col text-center">
                <div class="block-27">
                  <ul>
                    <li><a href="hotel.php">&lt;</a></li>
                    <li><a href="hotel.php">1</a></li>
                    <li class="active"><a href="hotel2.php">2</a></li>
                    <li><a href="MT-hotel.php">3</a></li>
                    <li><a href="hotel.php">&gt;</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div> <!-- .col-md-8 -->
          </div>
          </div>
          </section> <!-- .section -->


    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Mlaku.id</h2>
              <p>Memudahkan Liburan Anda</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Surabaya, Indonesia</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">0355 332750</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">mlaku@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">


          </div>
        </div>
      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
