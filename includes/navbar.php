<html>
  <head>
      <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  </head>
  <body>
  
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center">
            <form method="post" action="mailto:info@cordoexpress.es">
              <input type="submit" value="info@cordoexpress.es" style="background: none; border: none; color: white;">
            </form>
        </i>
        <i class="bi bi-phone d-flex align-items-center"><span>957 42 11 11</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://es.linkedin.com/company/grupo-zamora-cordoexpress" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.php"><img src="https://i.ibb.co/19K9mHV/logo-Principal.png" ></a></h1>
      
      <nav id="navbar" class="navbar" >
        <ul>
           
          <?php 
            if($_SERVER["SCRIPT_NAME"] == "/index.php"){
              ?><li><a class="nav-link scrollto active" href="index.php">Inicio</a></li><?php
            }else{
              ?><li><a class="nav-link scrollto" href="index.php">Inicio</a></li><?php
            }
            if($_SERVER["SCRIPT_NAME"] == "/nosotros.php"){
              ?><li><a class="nav-link scrollto active" href="nosotros.php">Nosotros</a></li><?php
            }else{
              ?><li><a class="nav-link scrollto" href="nosotros.php">Nosotros</a></li><?php
            }
            if($_SERVER["SCRIPT_NAME"] == "/servicios.php"){
              ?><li><a class="nav-link scrollto active" href="servicios.php">Servicios</a></li><?php
            }else{
              ?><li><a class="nav-link scrollto" href="servicios.php">Servicios</a></li><?php
            }
            if($_SERVER["SCRIPT_NAME"] == "/galeria.php"){
              ?><li><a class="nav-link scrollto active" href="galeria.php">Galeria</a></li><?php
            }else{
              ?><li><a class="nav-link scrollto" href="galeria.php">Galeria</a></li><?php
            }
            if($_SERVER["SCRIPT_NAME"] == "/contacto.php"){
              ?><li><a class="nav-link scrollto active" href="contacto.php">Contacto</a></li><?php
            }else{
              ?><li><a class="nav-link scrollto" href="contacto.php">Contacto</a></li><?php
            }
            if($_SERVER["SCRIPT_NAME"] == "/login.php"){
              ?><li><a class="nav-link scrollto active" href="https://portal.palletways.com/login_v2.php">Login</a></li><?php
            }else{
              ?><li><a class="nav-link scrollto" href="https://portal.palletways.com/login_v2.php">Login</a></li><?php
            }
          ?>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  

</body>
</html>