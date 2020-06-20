<?php
include_once ("../../Controller/ProductController.php");
include_once ("../../Model/ProductModel.php");
$ProductController = new ProductController();
$Products = $ProductController->getProductByType(3);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Aqua Trust --Egypt</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Selecao - v2.0.0
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="position-relative">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
      <a href="index.php"><h4 class="pt-2">AQUA TRUST</h4></a>

      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php#about">About</a></li>
          <li><a href="index.php">Mission &amp; Vission</a></li>
          <li><a href="index.php">Team</a></li>
          <li><a href="index.php">Contact</a></li>
          <li class="drop-down"><a href="">Services and Products</a>
            <ul>
              <li><a href="CoolingProducts.php">Cooling</a></li>
              <li><a href="BoilerProducts.php">Boiler</a></li>
              <li class="active"><a href="SpecialityChecmicalsProducts.php">Speciality Chemicals</a></li>
            </ul>
          </li>
          <li><a href="News.php">News and Events</a></li>
          <li><a href="Certificates.php">Certificates</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main>

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">
      <div class="d-flex justify-content-between align-items-center">
          <h2>Speciality Chemicals Products</h2>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details">
    <div id="News" class="container">
            <div class="col-sm-12">
            <div class="row">
        <?php
            for ($x=0;$x<sizeof($Products);$x++) {
                $TempDescription = "";
                $Description = $Products[$x]->getDescription();
                if (strlen($Description)<=70){
                    $TempDescription = $Description;
                }
                else{
                    for ($y=0;$y<70;$y++){
                        $TempDescription = $TempDescription.$Description[$y];
                    }
                }

                $TempDescription = $TempDescription."...";

                ?>

                                <div class="col-lg-4 mt-3 d-flex align-items-stretch">
                                    <div class="card defaultBorder mb-3 text-center h-100" style="width: 18rem;">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title defaultColor"><?php echo $Products[$x]->getName();?></h5>
                                            <p class="card-text text-dark" style="font-weight: bold;"><?php echo $TempDescription;?></p>
                                            <a href="ViewProduct.php?ID=<?php echo $Products[$x]->getID(); ?>" class="btn btn-submit mt-auto">View More Details</a>
                                        </div>
                                    </div>
                                </div>



                <?php
            }
        ?>
            </div>
            </div>
        </div>

    </section><!-- End Portfolio Details Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/TweenMax/TweenMax.min.js"></script>
  <script src="assets/vendor/wavify/wavify.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
<footer id="footer" class="pt-5 mt-5 ">
    <div class="container">
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Selecao</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a><br>
        Developed by <a href="https://tera-coding.com">Tera Coding</a>
      </div>
    </div>
  </footer><!-- End Footer -->
</html>