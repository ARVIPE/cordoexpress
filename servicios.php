<?php
include("includes/a_config.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("includes/MetaTags.php"); ?>
</head>

<body class="fondoPrincipal">
    <div class="container-fluid p-0">

        <?php include("includes/navbar.php"); ?>


        <main>
            <section class="content">
                <div data-aos="fade-right" data-aos-delay="100" class="color" style="margin-top: 20px;">
                    <h3>Así trabajamos</h1>
                </div>
                <img data-enlargeable width="600" data-aos="fade-right" data-aos-delay="100" class="img-fluid" src="https://i.ibb.co/2YDxhvM/02cf0906-80a0-4ff2-84a6-419762ae75f9.png" style="display:block !important; margin-left: auto; margin-right:auto; cursor: zoom-in">
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <h4>Servicios Express</h4>
                            <p>El servicio consiste en la contratación de vehículos dedicados directos a cualquier punto de media entre 24 y 36 horas desde nuestro HUB de Córdoba.</p>
                            <p>Las limitaciones de servicios son las derivadas de su capacidad, por ello el peso máximo por expedición resultante es de 1200 Kilos y hasta 20 m3 de capacidad para la mercancia.</p>
                            <p>
                            <ul>
                                <li>VEHÍCULO DIRECTO</li>
                                <li>Cualquier punto de Europa</li>
                                <li>Servicio de 24-36 horas</li>
                                <li>Máximo de 1200 Kg</li>
                            </ul>
                            </p>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <img data-aos="fade-down" data-aos-delay="100" class="imagenDescripcion1" src="https://i.ibb.co/3vKjzwR/c39eca08-2dec-4281-bba3-61347678102a.jpg">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <h5>Servicios Domésticos</h5>
                            <img class="imagenDescripcion" data-aos="fade-down" data-aos-delay="100" src="https://i.ibb.co/hf6YVT1/9a6059ec-fe95-4d13-bbc7-f7287903a1a2.jpg">
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <h5>Servicios Palletways</h5>
                            <div class="mt-lg-5">
                                <p>Nuestro servicio Premium le garantiza la entrega de forma urgente</p>
                                <p>Servicio Doméstico Peninsular: 24-48 Horas</p>
                                <p>Servicio Europeo: 48-72 Horas</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="container">
                    <div class="color1">
                        <h5>Tipos de Pallets</h5>
                    </div>
                    <div class="row">
                        <div style="display:block; margin-left: auto; margin-right:auto; cursor: zoom-in"><img data-aos="fade-right" data-aos-delay="100" class="img-fluid" data-enlargeable width="700" src="https://i.ibb.co/FwK3gVN/0c6d842d-d621-4757-b640-554cc0af0ee0.png"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="color1">
                        <h5>Red Europea de Mercancía Palletizada Líder</h5>
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <img class="img-fluid" data-aos="fade-down" data-aos-delay="100" src="https://i.ibb.co/QnJ9g7S/5baef39f-d0c8-460a-9395-ab6ab2bac85f.png">
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <img class="img-fluid" data-aos="fade-down" data-aos-delay="100" src="https://i.ibb.co/CbP3wkJ/173ab1a5-45ea-4551-bf1d-4f88c2967fe9.png">
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </main>

        <?php include("includes/footer.php"); ?>
    </div>
</body>

</html>

<script>
    $('img[data-enlargeable]').addClass('img-enlargeable').click(function() {
        var src = $(this).attr('src');
        var modal;

        function removeModal() {
            modal.remove();
            $('body').off('keyup.modal-close');
        }
        modal = $('<div>').css({
            background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center',
            backgroundSize: 'contain',
            width: '100%',
            height: '100%',
            position: 'fixed',
            zIndex: '10000',
            top: '0',
            left: '0',
            cursor: 'zoom-out'
        }).click(function() {
            removeModal();
        }).appendTo('body');
        //handling ESC
        $('body').on('keyup.modal-close', function(e) {
            if (e.key === 'Escape') {
                removeModal();
            }
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>