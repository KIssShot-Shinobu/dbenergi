<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Daya Bakti Energi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- ini untuk email -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v2.3.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center ">
      <a href="index.html" class="mr-auto"><img src="assets/img/Logo-DBE.png" alt="" class="img-fluid logo"
          style="width: 80px; height: 80px;"></a>

      <!-- <h1 class="logo mr-auto"><a href="index.html">Daya Bakti Energi</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->


      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="brands.html">Brands</a></li>
          <li class="active"><a href="Contact.html">Contact</a></li>

        </ul>
      </nav>
      <!-- .nav-menu -->

      <!-- <a href="#about" class="get-started-btn scrollto">Get Started</a> -->

    </div>
  </header>
  <!-- End Header -->



  <!-- Body -->
  <section>
    <div class="containeremail">
      <form id="contact" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <?php if(!empty($notify)){ ?>
        <p class="notify <?php echo !empty($notifyClass)?$notifyClass:''; ?>">
          <?php echo $notify; ?>
        </p>
        <?php } ?>
        <h3>Contact Form</h3>
        <h4>Hubungi kami dengan mengisi isian dibawah</h4>
        <fieldset>
          <input placeholder="Nama Anda" type="text" name="name" tabindex="1" required autofocus>
        </fieldset>
        <fieldset>
          <input placeholder="Email Anda" type="text" name="email" tabindex="2" required>
        </fieldset>
        <fieldset>
          <input placeholder="Subject (optional)" type="text" name="subject" tabindex="4" required>
        </fieldset>
        <fieldset>
          <textarea placeholder="Ketikan pesan Anda" name="message" tabindex="5" required></textarea>
        </fieldset>
        <fieldset>
          <button name="submit" type="submit" id="contact-submit" data-submit="...Mengirim pesan">Kirim</button>
        </fieldset>
      </form>
    </div>




  </section>

  <section>

  </section>


  <!-- and Body -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Daya Bhakti Energi</h3>
            <p>
              Jalan Daya bhakti <br>
              Madiun, Kec. Taman <br>
              Jawa Timur Indonesia <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> office@dbpersada.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">

          </div>

          <div class="col-lg-3 col-md-6 footer-links">

          </div>

          <div class="col-lg-3 col-md-6 footer-links">

          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Daya Bhakti Energi</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="#">Mb</a>
      </div>
    </div>
  </footer>

  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/js/jquery.jcarousel.min.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>