
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CV Trimitra Abadi</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="dist/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="dist/lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="dist/lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="dist/lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="dist/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="dist/lib/animate/animate.min.css" rel="stylesheet">
  <link href="dist/lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="dist/css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="dist/css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="dist/css/responsive.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="Plant"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="index.php">
                  <h1><span>CV Trimitra Abadi</span></h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="index.php">Home</a>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="img/about/wp1.jpg" alt="" title="#slider-direction-1" />
        <img src="img/about/2.jpg" alt="" title="#slider-direction-2" />
        <img src="img/about/wp2.jpg" alt="" title="#slider-direction-3" />
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">CV Trimitra Abadi</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Menyediakan Jasa yang Anda Butuhkan</h1>
                </div>
                <!-- layer 3 -->
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">CV Trimitra Abadi</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Tersedia Jasa Kontruksi Sampai Jasa Cuci Mobil</h1>
                </div>
                <!-- layer 3 -->
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">CV Trimitra Abadi</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Kini Telah Hadir Pemesanan Online yang Memudahkan Anda.</h1>
                </div>
                <!-- layer 3 -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->

  <!-- Start About area -->
  <?php
        if(isset($_GET['data'])){
          $id_blog = $_GET['data'];
              $batas = 1;
              $sql_bl = "SELECT `id_blog`,`id_user`,`tanggal`,`judul`,`isi`,`foto` FROM `blog` 
              WHERE `id_blog`=$id_blog LIMIT $batas";
              $query_bl = mysqli_query($koneksi,$sql_bl);
              while($data_bl = mysqli_fetch_row($query_bl)){
                $id_blog = $data_bl[0];
                $id_user = $data_bl[1];
                $tgl = $data_bl[2];
                $judul = $data_bl[3];
                $isi = $data_bl[4];
                $foto = $data_bl[5];
              }
        }
          ?>
  <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2><?php echo $judul;?></h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
								  <img src="admin/blog/<?php echo $foto;?>" alt="">
								</a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <p class="blog-post-meta"><?php echo $isi;?></p>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->
  <!-- Faq area start -->
  <!-- Start Suscrive Area -->
  <div class="suscribe-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
          <div class="suscribe-text text-center">
            <h3>Trimitra Abadi Solusi Tepat Dalam Waktu Singkat</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Suscrive Area -->
  <!-- Start contact Area -->
  <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Kontak Kami</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile"></i>
                <p>
                  Telepon: <br>+62 838 5200 7905<br>
                  +62 813 3429 4016<br>
                  <span>Buka Setiap Hari Kecuali Hari Selasa <br>
                  Jam : 08.00-20.00</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-envelope-o"></i>
                <p>
                  Email: trimitraabadi15@gmail.com<br>
                  <span>Web: www.trimitraabadi.com<br>
                  Instagram: @trimitraabadi</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker"></i>
                <p>
                  Lokasi: Jalan Raya Soekarno Hatta<br>
                  <span>Pilang, Kecamatan Kademangan, Kota Probolinggo</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
</body>

</html>
