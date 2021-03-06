<?php
include("includes/a_config.php");


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("includes/MetaTags.php"); ?>
    <script type="text/javascript">
        var onloadCallback = function() {
            grecaptcha.render('html_element', {
                'sitekey': '6LfQLf4bAAAAAO6uS3fPIgs_uYp4VJYcB6iV23Gx'
            });

            setInterval(function() {
                var result = grecaptcha.getResponse();
                document.cookie = "captcha=" + result.length;
                var x = document.cookie;
                console.log(document.cookie);
                
                
            }, );
        };
    </script>

   

</head>

<body class="fondoPrincipal">
    <div class="container-fluid p-0">
        <?php include("includes/navbar.php"); ?>
        <main>
            <section class="content">
                <section id="contact" class="contact" style="margin-top: 50px;">
                    <div class="container" data-aos="fade-up">
                        <div class="row" data-aos="fade-up" data-aos-delay="100">
                            <div class="col">
                                <iframe class="mb-4 mb-lg-0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=Calle%20Ing.%20Ribera,%2013,%2014013%20C%C3%B3rdoba%20ES%20ES-14009+(Mi%20nombre%20de%20egocios)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" style="border:0; width: 100%; height: 365px;" allowfullscreen></iframe>
                            </div>                                    
                            <iframe class="mb-4 mb-lg-0" src="https://docs.google.com/forms/d/e/1FAIpQLSdTdtbwRO4mrnYGnIWX7shzMh-zIik-9K7oIKmi1nIHH3JOaA/viewform?embedded=true" width="500" height="400" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>


    
                                <?php   
                                    if (isset($_COOKIE["captcha"])) {
                                        if ($_COOKIE["captcha"] != "0") {
                                            if (isset($_POST['enviar'])) {

                                                if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])) {

                                                    $sender = $_POST['email'];
                                                    $recipient = 'info@cordoexpress.es';

                                                    $subject = $_POST['subject'];
                                                    $message =  $_POST['message'];
                                                    $headers = 'From:' . $sender;


                                                    if (mail($recipient, $subject, $message, $headers)) {

                                        ?><script>
                                                            alert("Tu mensaje ha sido enviado");
                                                        </script><?php
                                                                } else {
                                                                    ?><script>
                                                            alert("No se ha podido enviar el mensaje contactenos o intentelo mas tarde");
                                                        </script><?php
                                                                }
                                                            }

                                                                    ?><script>

                                                </script><?php
                                                        }
                                                    } else { 
                                            
                                                    }
                                                    } ?>

                                    
                                                <?php 
                                                    if(isset($_POST['enviar']) && $_COOKIE["captcha"] == 0){
                                                        ?><script>alert("Tienes que hacer el captcha")</script><?php


                                                    }


                                                ?>



                            </div>

                        </div>

                    </div>


                    <div class="container" style="margin-top: 30px;">
                        <div class="contact" data-aos="fade-up" data-aos-delay="100">
                            <div class="row">
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
                                        <p>info@cordoexpress.es</p>
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
                </section>

            </section>
        </main>

        <?php include("includes/footer.php"); ?>
    </div>
</body>

</html>




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