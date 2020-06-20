<?php
  include_once("../../Shared/Database/DatabaseConnect.php");
  $sql = "SELECT * FROM `HomePage`";
  $Database = new DatabaseConnect();
  $Result = $Database->execute($sql);
  if ($Result->num_rows > 0){
      $row = mysqli_fetch_array($Result);
  }
  $sql = "SELECT * FROM `aboutusItems`";
  $Result2 = $Database->execute($sql);
  

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
  <link href="../../Shared/Images/Logos/logo.png" rel="icon">
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

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.php"><h4 class="pt-2">AQUA TRUST</h4></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#mission">Mission &amp; Vission</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="drop-down"><a href="">Services and Products</a>
            <ul>
              <li><a href="CoolingProducts.php">Cooling</a></li>
              <li><a href="BoilerProducts.php">Boiler</a></li>
              <li><a href="SpecialityChecmicalsProducts.php">Speciality Chemicals</a></li>
            </ul>
          </li>
          <li><a href="News.php">News and Events</a></li>
          <li><a href="Certificates.php">Certificates</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animated fadeInDown">AQUA TRUST FOR WATER TREATMENT</span></h2>
          <p class="animated fadeInUp">Aqua trust is one of the largest Water Treatment companies in Egypt The company depends on advanced Technology in production of Scale inhibitors, Corrosion inhibitors, Anti foulants and Micro biocides as well as safe cleaners and antiefoam agents based on Organic–Green Chemical Technology. </p>
          <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animated fadeInDown">AQUA TRUST company is a member in Chamber of Chemical Industries under No. 1913 and works in the following fields</h2>
          <p class="animated fadeInUp"></p>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animated fadeInDown">AQUA TRUST</h2>
          <p class="animated fadeInUp">company depends on a scientific applied method through a whole Integrated organization started by the experts from the company by collecting all kind of information whether it is about water treatment, Cement Grinding Aid or Chromium redion chromium VI reducing agent.</p>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <div class="hero-waves">
    <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave">
      <defs></defs>
      <path id="wave1" d="" />
    </svg>
    <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave">
      <defs></defs>
      <path id="wave2" d="" />
    </svg>
  </div>

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>About</h2>
          <p>Who we are</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6">
            <p>
                <?php
                  echo $row['About'];
                ?>
            </p>
            <ul>
              <?php
                if ($Result2->num_rows > 0){
                  while ($row2= mysqli_fetch_array($Result2)) {

                    ?>
                    <li><i class="ri-check-double-line"></i><?php echo $row2['Title'] ?></li>

                    <?php
                  }
                }
              ?>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <!-- ======= Mission and Vission Section ======= -->
    <section id="mission" class="cta pt-5">
      <div class="container">

        <div class="row" data-aos="zoom-out">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>Mission</h3>
            <p> <?php echo $row['Mission'] ?> </p>
          </div>
        </div>

        <div class="row mt-3" data-aos="zoom-out">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>Vision</h3>
            <p> <?php echo $row['Vision'] ?> </p>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->
    <!-- ======= Team Section ======= -->
    <section id="team" class="team md-5">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Team</h2>
          <p>Our Hardworking Team</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="../../Images/Team/maged.JPG" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Eng. Maged Yassien</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="../../Images/Team/fayza.JPG" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.facebook.com/faiza.abouzaid.3"><i class="icofont-facebook"></i></a>
                  <a href="https://www.linkedin.com/in/eng-faiza-abou-zeid-0678a16b/"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Eng. Faiza Abou-Zeid</h4>
                <span>General Manager</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact mt-5">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>57 Hisham Labib St., Nasr city, Cairo, Egypt.</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p><a href="mailto:aquatrust@aquatrust-eg.com">aquatrust@aquatrust-eg.com</a></p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Phone 1:</h4>
                <p>0222757399</p>
              </div>
              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Phone 2:</h4>
                <p>22702341</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

            <form action="../../Controller/ContactController.php" method="post" role="form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control editInput" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <?php
                if(isset($_GET['sucess'])){
                  if ($_GET['sucess'] == "true") {
                    ?>
                    <div class="alert alert-success alert-dismissible fade show">
                      <div class="container">
                        <div class="row">
                          <button type="button" class="close" data-dismiss="alert"><span aria-hidden = "true">&times;</span></button>
                          We Recieved Your Message, Going to be in touch soon
                        </div>
                      </div>
                    </div>
                    <?php
                  }
                }
              ?>
              <div class="text-center pt-3"><button type="submit" name="ContactUS" class = "btn-submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  

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

<!-- ======= Footer ======= -->
<footer id="footer" class="pt-5 mt-5 footer">
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