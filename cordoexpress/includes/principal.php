
  <!-- ===== Carrousel ====== -->
  <header class="hero-text">
  <div class="hero" data-arrows="true" data-autoplay="true">
    <!--.hero-slide-->

    <div class="hero-slide">
      <img alt="Mars Image" class="img-responsive cover" src="../assets/img/pallet1.jpg">
      <div class="header-content text-white position-absolute slide-content col-lg-4">
        <h1 class="mb-4">Bienvenido a <span class="d-block font-weight-bold">CordoExpress</span></h1>
        <a class="btn btn-primary btn-lg w-max mt-2" href="#" tabindex="0">Contacto</a>
      </div>
    </div>
    <!--.hero-slide-->

    <div class="hero-slide">
      <img alt="Mars Image" class="img-responsive cover" src="../assets/img/pallet2.jpg">
      <div class="header-content text-white position-absolute slide-content col-lg-4">
        <h1 class="mb-4">CordoExpress</h1>
        <p class="font-weight-bold">Confíe su mercancía en un operador de transporte de amplia experiencia</p>
        <a class="btn btn-primary btn-lg w-max mt-2" href="#" tabindex="0">Contacto</a>
      </div>
    </div>
    <!--.hero-slide-->

    <div class="hero-slide">
      <img alt="Mars Image" class="img-responsive cover" src="../assets/img/Network-News-2.jpg">
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
<div class="container" style="margin-top: 50px; margin-bottom: 200px;">

<hr style="height:2px;border:none;color:#7c7c7c;;background-color:#7c7c7c;;" />
<div class="row">
  <div class="col" style="margin-top: 30px">
  <h3><span class="tituloDescripcion">CordoExpress el mejor servicio posible.</span></h3>
  <p>Si quiere más información sobre nuestros servicios puede llamarnos o utilizar la página de <a href="contacto.php">contacto</a> que aparece en la web. </br> Servicios: Transporte de carga paletizada fraccionada, completa, grupaje, cualquier servicio que nos demande en transporte nacional (doméstico) y Europeo.</p>
  </div>
  <div class="col">
  <img src="../assets/img/descripcion1.jpg"  style="width: 600px; height: 300px;">
  </div>
</div>
<hr style="height:2px;border:none;color:#7c7c7c;;background-color:#7c7c7c;;" />
<div class="row">
  <div class="col">
    <h4 class="tituloDescripcion" style="text-align: center;" >Servicios Palletways</h4>
    <img src="../assets/img/descripcion2.png" style="width: 500px; height: 300px;">
    <p>Servicios de transporte paletizado en 24 y 48 horas en la Peninsula Ibérica y servicios paneuropeos a partir de 36 horas.</p>
  </div>
  <div class="col">
    <h4 class="tituloDescripcion" style="text-align: center;">Operador Logistico</h4>
    <img src="../assets/img/descripcion3.jpg" style="width: 500px; height: 300px;">
    <p>¿Necesitas almacenamiento? ¿Tienes cargas fraccionadas? ¿Cargas completas? Pidenos cotización sin compromiso. Ofrecemos los </br>mejores servicios.</p>
  </div>
</div>
<hr style="height:2px;border:none;color:#7c7c7c;;background-color:#7c7c7c;;" />



</div>






<!-- === End description === --->


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