<header>
  <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
  <div class="overlay"></div>
  <!-- The HTML5 video element that will create the background video on the header -->
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="../media/images/video.mp4" type="video/mp4">
  </video>
  <!-- The header content -->
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-3">Video Header</h1>
        <p class="lead mb-0">Using HTML5 Video and Bootstrap</p>
      </div>
    </div>
  </div>
</header>

<!-- === Start description === --->
<div class="container" style="margin-top: 50px; margin-bottom: 30px;">
  <div class="row">
    <div class="col-md-6 col-lg-6 col-xl-6 col-sm-0" style="margin-top: 30px">
      <h3><span class="tituloDescripcion">CordoExpress el mejor servicio posible.</span></h3>
      <p>Si quiere más información sobre nuestros servicios puede llamarnos o utilizar la página de <a href="contacto.php">contacto</a> que aparece en la web. </br> Servicios: Transporte de carga paletizada fraccionada, completa, grupaje, cualquier servicio que nos demande en transporte nacional (doméstico) y Europeo.</p>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-6 col-sm-0" data-aos="fade-right">
      <img data-aos="fade-right" data-aos-delay="100" src="https://i.ibb.co/4dRZ9Yy/descripcion1.jpg" class="imagenDescripcion" >
    </div>
  </div>
  <hr style="height:2px;border:none;color:#7c7c7c;;background-color:#7c7c7c;;" />
  <div class="row">
    <div class="col">
      <h4 class="tituloDescripcion" style="text-align: center;">Servicios Palletways</h4>
      <img data-aos="fade-left" data-aos-delay="100" src="https://i.ibb.co/J2zqtYJ/descripcion2.png" class="imagenDescripcion">
      <p>Servicios de transporte paletizado en 24 y 48 horas en la Peninsula Ibérica y servicios paneuropeos a partir de 36 horas.</p>
    </div>
    <div class="col">
      <h4 class="tituloDescripcion" style="text-align: center;">Operador Logistico</h4>
      <img data-aos="fade-right" data-aos-delay="100" src="https://i.ibb.co/VJj6t29/descripcion3.jpg" class="imagenDescripcion">
      <p>¿Necesitas almacenamiento? ¿Tienes cargas fraccionadas? ¿Cargas completas? Pidenos cotización sin compromiso. Ofrecemos los mejores servicios.</p>
    </div>
  </div>
</div>


<!-- === End description === --->




<!-- === End contact === -->





<script>
  jQuery(document).ready(function($) {
    $('.hero').slick({
      dots: true,
      infinite: true,
      speed: 500,
      fade: !0,
      cssEase: 'linear',
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3000,
      draggable: false,
      arrows: false,
      responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true
          }
        },
        {
          breakpoint: 768,
          settings: {
            draggable: true,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            draggable: true,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            draggable: true,
            slidesToScroll: 1
          }
        }

      ]
    });
  });
</script>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>