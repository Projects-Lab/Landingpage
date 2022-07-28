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
        <title>Timer Agency Template</title>
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
        Header Section Start
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
                            <h2 class="">Nuestra Compañia</h2>
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


    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                        <h2 class="text-center text-2xl">
                            ¿Quienes Somos?
                        </h2>
                        <p>
                            Somos emprendedores y nos gusta ver que tus sueños, tus proyectos se pueden cumnplir.
                            Somos testigos de cómo tus sueños se desenvuelven, o más bien, somos testigos de tu trabajo para conseguirlo.
                            Te acompañamos en esas noches que te tocó quedarte a trabajar hasta tarde pero la sacaste del estadio al otro día con el cliente.
                        </p>
                        <p>
                            Nos encanta ser tus fieles amigos, y creemos que en Lavoriamo Coworking conocerás a muchos otros como tú, que con berraquera han logrado estar donde estás.
                            Llegamos a Montería para demostrar que la definición de equipo puede cambiar, porque en Lavoriamo Coworking todos somos una familia en la que todos sus miembros trabajan independientemente para
                            cumplir sus propios objetivos. Somos el amigo que siempre te va a apoyar y será tu cómplice para salir adelante.
                        </p>
                    </div>

                </div>
                <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s">
                  <img src="images/about/about-company.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- /#about -->


<!--
==================================================
    Company Feature Section Start
================================================== -->
<section class="about-feature clearfix">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 px-0">
        <div class="block about-feature-1 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">
          <h2 class="text-center">
            Por qué elegirnos
          </h2>
          <p>
            Al elegirnos te conviertes en uno de nuestro equipo, juntos nos comprometemos a que tus proyectos o ideas de negocio
            se hagan realidad.
          </p>
        </div>
      </div>
      <div class="col-lg-4 px-0">
        <div class="block about-feature-2 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
          <h2 class="text-center">
            Lo que obtienes
          </h2>
          <p>
            Una excelente atencion, obtienes esos contactos, empresas que quieren invertir en tus sueños y convertirte en un gran empresario
          </p>
        </div>
      </div>
      <div class="col-lg-4 px-0">
        <div class="block about-feature-3 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".7s">
          <h2 class="text-center">
            Conoce la sinergia
          </h2>
          <p>
            Sinergia que manejamos, que existe entre los demás usuarios del coworking, aprende de ellos y cambia esa forma de trabajar
            individual por un buen equipo.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>


<!--
==================================================
    Team Section Start
================================================== -->
<section id="team">
  <div class="container">
    <div class=" text-center row">
      <div class="col-lg-12">
        <h2 class="subtitle text-center">Nuestro Equipo</h2>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
          <div class="team-img">
            <img src="images/team/team-1.jpg" class="team-pic" alt="">
          </div>
          <h3 class="team_name">Guillermo Bedoya</h3>
          <p class="team_designation">CEO, Project Manager</p>
          <!-- <p class="team_text"> </p> -->
            <p class="social-icons">
              <a href="http://www.facebook.com" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
              <a href="http://twitter.com" target="_blank"><i class="ion-social-twitter-outline"></i></a>
              <a href="https://es.linkedin.com/" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
            </p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
          <div class="team-img">
            <img src="images/team/team-2.jpg" class="team-pic" alt="">
          </div>
          <h3 class="team_name">Enrique Coneo</h3>
          <p class="team_designation">CEO, Project Manager</p>
          <!-- <p class="team_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore .</p> -->
          <p class="social-icons">
            <a href="http://www.facebook.com" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
            <a href="http://twitter.com" target="_blank"><i class="ion-social-twitter-outline"></i></a>
            <a href="https://es.linkedin.com/" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
          </p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
          <div class="team-img">
            <img src="images/team/team-3.jpg" class="team-pic" alt="">
          </div>
          <h3 class="team_name">Diego Herrera</h3>
          <p class="team_designation">CEO, Project Manager</p>
          <!-- <p class="team_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore .</p> -->
            <p class="social-icons">
              <a href="http://www.facebook.com" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
              <a href="http://twitter.com" target="_blank"><i class="ion-social-twitter-outline"></i></a>
              <a href="https://es.linkedin.com/" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
            </p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
          <div class="team-img">
            <img src="images/team/team-4.jpg" class="team-pic" alt="">
          </div>
          <h3 class="team_name">Luis Quiceno</h3>
          <p class="team_designation">CEO, Project Manager</p>
          <!-- <p class="team_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore .</p> -->
            <p class="social-icons">
              <a href="http://www.facebook.com" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
              <a href="http://twitter.com" target="_blank"><i class="ion-social-twitter-outline"></i></a>
              <a href="https://es.linkedin.com/" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
            </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!--
        ==================================================
            Clients Section Start
        ==================================================
      -->

<!--
  <section id="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="subtitle text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".3s">
                  NUESTROS CLIENTES FELICES</h2>
                <div id="clients-logo" class=" clients-logo-slider">
                    <img class="img-fluid mx-2" src="images/clients/logo-1.jpg" alt="">
                    <img class="img-fluid mx-2" src="images/clients/logo-2.jpg" alt="">
                    <img class="img-fluid mx-2" src="images/clients/logo-3.jpg" alt="">
                    <img class="img-fluid mx-2" src="images/clients/logo-4.jpg" alt="">
                    <img class="img-fluid mx-2" src="images/clients/logo-5.jpg" alt="">
                    <img class="img-fluid mx-2" src="images/clients/logo-1.jpg" alt="">
                    <img class="img-fluid mx-2" src="images/clients/logo-2.jpg" alt="">
                    <img class="img-fluid mx-2" src="images/clients/logo-3.jpg" alt="">
                    <img class="img-fluid mx-2" src="images/clients/logo-4.jpg" alt="">
                    <img class="img-fluid mx-2" src="images/clients/logo-5.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>  -->

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
          </footer>
           <!-- /#footer -->

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
