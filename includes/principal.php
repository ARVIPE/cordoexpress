
  <!-- ===== Carrousel ====== -->
  <header class="hero-text">
  <div class="hero" data-arrows="true" data-autoplay="true">
    <!--.hero-slide-->

    <div class="hero-slide">
      <img alt="Mars Image" class="img-responsive cover" src="https://i.ibb.co/BB7rtQm/1.jpg">
      <div class="header-content text-white position-absolute slide-content col-lg-4">
        <h1 class="mb-4">Bienvenido a <span class="d-block font-weight-bold">CordoExpress</span></h1>
        <a class="btn btn-primary btn-lg w-max mt-2" href="#" tabindex="0">Contacto</a>
      </div>
    </div>
    <!--.hero-slide-->

    <div class="hero-slide">
      <img alt="Mars Image" class="img-responsive cover" src="https://i.ibb.co/2WtdR74/2.jpg">
      <div class="header-content text-white position-absolute slide-content col-lg-4">
        <h1 class="mb-4">CordoExpress</h1>
        <p class="font-weight-bold">Confíe su mercancía en un operador de transporte de amplia experiencia</p>
        <a class="btn btn-primary btn-lg w-max mt-2" href="#" tabindex="0">Contacto</a>
      </div>
    </div>
    <!--.hero-slide-->

    <div class="hero-slide">
      <img alt="Mars Image" class="img-responsive cover" src="https://i.ibb.co/ys8TG5S/3.jpg">
      <div class="header-content text-white position-absolute slide-content col-lg-4">
      <h1 class="mb-4">Transportes</h1>
        <p>Transporte de por carretera, fundamentalmente desarrollando logística, transporte y distribución en la provincia de Córdoba. </p>
        <a class="btn btn-primary btn-lg w-max mt-2" href="#" tabindex="0">Contacto</a>
      </div>
    </div>
  </div>
  <!--.hero-->
</header>
  <!-- ==== End Carrousel ==== -->


<!-- === Start description === --->
<div class="container" style="margin-top: 50px; margin-bottom: 30px;">


<div class="row">
  <div class="col" style="margin-top: 30px">
  <h3><span class="tituloDescripcion">CordoExpress el mejor servicio posible.</span></h3>
  <p>Si quiere más información sobre nuestros servicios puede llamarnos o utilizar la página de <a href="contacto.php">contacto</a> que aparece en la web. </br> Servicios: Transporte de carga paletizada fraccionada, completa, grupaje, cualquier servicio que nos demande en transporte nacional (doméstico) y Europeo.</p>
  </div>
  <div class="col" data-aos="fade-right">
  <img data-aos="fade-right" data-aos-delay="100" src="https://i.ibb.co/4dRZ9Yy/descripcion1.jpg"  class="imagenDescripcion">
  </div>
</div>
<hr style="height:2px;border:none;color:#7c7c7c;;background-color:#7c7c7c;;" />
<div class="row">
  <div class="col">
    <h4 class="tituloDescripcion" style="text-align: center;" >Servicios Palletways</h4>
    <img  data-aos="fade-left" data-aos-delay="100" src="https://i.ibb.co/J2zqtYJ/descripcion2.png" class="imagenDescripcion">
    <p>Servicios de transporte paletizado en 24 y 48 horas en la Peninsula Ibérica y servicios paneuropeos a partir de 36 horas.</p>
  </div>
  <div class="col">
    <h4 class="tituloDescripcion" style="text-align: center;">Operador Logistico</h4>
    <img data-aos="fade-right" data-aos-delay="100"  src="https://i.ibb.co/VJj6t29/descripcion3.jpg" class="imagenDescripcion">
    <p>¿Necesitas almacenamiento? ¿Tienes cargas fraccionadas? ¿Cargas completas? Pidenos cotización sin compromiso. Ofrecemos los </br>mejores servicios.</p>
  </div>
</div>


</div>


<!-- === End description === --->

<!-- === Contact === --->
<div class="contact">
    <div class="row">
        <div class="container" data-aos="fade-up">
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6">
              <div class="info-box mb-4">
                <i class="bx bx-map"></i>
                <h3>Nuestra dirección</h3>
                <p>Calle Ing. Ribera, 13, 14013 Córdoba ES ES-14009</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="info-box  mb-4">
                <i class="bx bx-envelope"></i>
                <h3>Nuestro correo</h3>
                <p>contabilidad@cordoexpress.es</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="info-box  mb-4">
                <i class="bx bx-phone-call"></i>
                <h3>Llamanos</h3>
                <p>+34 957 42 11 11</p>
              </div>
            </div>
          </div>
        </div>
</div>




<!-- === End contact === -->





<script>
  jQuery(document).ready(function ($) {
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
		responsive: [
	    {
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