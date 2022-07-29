<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html class="no-js">

<head>
    <!-- Basic Page Needs
        ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" href="favicon.ico">
    <title>Contact</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- Mobile Specific Metas
        ================================================== -->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Template CSS Files
        ================================================== -->
    <!-- Twitter Bootstrs CSS -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <!-- Ionicons Fonts Css -->
    <link rel="stylesheet" href="plugins/ionicons/ionicons.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="plugins/animate-css/animate.css">
    <!-- Hero area slider css-->
    <link rel="stylesheet" href="plugins/slider/slider.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="plugins/facncybox/jquery.fancybox.css">
    <!-- hover -->
    <link rel="stylesheet" href="plugins/hover/hover-min.css">
    <!-- template main css file -->
    <link rel="stylesheet" href="css/style.css">
    <!-- tailwinds css-->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <!--
        ==================================================
        Header Section Startv 50a1cc
        ================================================== -->
        @include('nav')

        <!--
        ==================================================
            Global Page Section Start
        ================================================== -->
        <section class="my-8 global-page-header bg-cyan-600">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="block">
                          <h2 class="">Contactanos</h2>
                          <ol class="breadcrumb list-inline text-center">
                              <li class="list-inline-item">
                                  <a href="/">
                                      <i class="ion-ios-home"></i>
                                      Inicio
                                  </a>
                              </li>
                          </ol>
                      </div>
                  </div>
              </div>
          </div>
      </section>


<!--
==================================================
    Contact Section Start
================================================== -->
<section id="contact-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mb-5 mb-md-0">
        <div class="block">
          <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">CONTACTA CON NOSOTROS</h2>
          <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
            Rellena el formulario con tus datos y envianos. nuestro equipo se pondra en contacto contigo los antes posibles
            ya que estamos ansiosos de que formes parte de esta comunidad
          </p>
          <div class="contact-form">
            <form id="contact-form" method="#" action="#" role="form">

              <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                <input type="text" placeholder="Nombre Completo" class="form-control" name="name" id="name">
              </div>

              <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                <input type="email" placeholder="Email" class="form-control" name="email" id="email">
              </div>

              <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                <input type="text" placeholder="Asunto" class="form-control" name="subject" id="subject">
              </div>

              <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                <textarea rows="6" placeholder="Mensaje" class="form-control" name="message" id="message"></textarea>
              </div>

              <div id="success" class="success">
                Thank you. The Mailman is on His Way :)
              </div>

              <div id="error" class="error">
                Sorry, don't know what happened. Try later :(
              </div>

              <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                <button type="submit" id="contact-submit" class=" items-center text-center btn btn-default btn-send hvr-bounce-to-right"
                  value="Send Message">Enviar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="map-area">
          <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">ENCUÉNTRANOS</h2>
          <!-- <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
            Si aute quis eu proident o cupidatat ne anim nescius, et est praesentibus, o quorum vidisse expetendis,
            nostrud eram quibusdam ad nam nostrud ubi.

          </p> -->
          <div class="map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.277552998015!2d90.3678744!3d23.773128800000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0ae4adf3cb9%3A0x7f2cf443b764e4a4!2sShishu+Mela!5e0!3m2!1sen!2s!4v1435516022247"
              width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="call-to-action">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="block">
                              <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">¿Y ... QUE PIENSAS?</h1>
                              <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Que esperas para ser parte de nuestra comunidad</p>
                              <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contactenos</a>
                          </div>
                      </div>

                  </div>
              </div>
          </section>

            <!--
            ==================================================
            Footer Section Start
            ================================================== -->
            <footer id="footer">
              <div class="container">
                  <div class="row content-justify-between">
                      <div class="col-md-8 col-12 text-center text-lg-left text-md-left">
                          <p class="copyright">Copyright: Diseñado y Desarrollado por <a href="" target="_blank">Doctor_Robot</a><br></p>
                      </div>
                      <div class="col-md-4 col-12">
                          <!-- Social Media -->
                          <ul class="social text-center text-md-right text-lg-right">
                              <li>
                                  <a href="http://wwww.fb.com/" class="Facebook">
                                      <i class="ion-social-facebook"></i>
                                  </a>
                              </li>
                              <li>
                                  <a href="http://wwww.twitter.com/" class="Twitter">
                                      <i class="ion-social-twitter"></i>
                                  </a>
                              </li>
                              <li>
                                  <a href="#" class="Linkedin">
                                      <i class="ion-social-linkedin"></i>
                                  </a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </footer> <!-- /#footer -->

	<!-- Template Javascript Files
	================================================== -->
	<!-- jquery -->
	<script src="plugins/jQurey/jquery.min.js"></script>
	<!-- Form Validation -->
    <script src="plugins/form-validation/jquery.form.js"></script>
    <script src="plugins/form-validation/jquery.validate.min.js"></script>
	<!-- slick slider -->
	<script src="plugins/slick/slick.min.js"></script>
	<!-- bootstrap js -->
	<script src="plugins/bootstrap/bootstrap.min.js"></script>
	<!-- wow js -->
	<script src="plugins/wow-js/wow.min.js"></script>
	<!-- slider js -->
	<script src="plugins/slider/slider.js"></script>
	<!-- Fancybox -->
	<script src="plugins/facncybox/jquery.fancybox.js"></script>
	<!-- template main js -->
	<script src="js/main.js"></script>
 	</body>
</html>
