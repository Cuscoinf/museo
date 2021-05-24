<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>MUSEO UNSAAC</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="{{asset('css')}}/linearicons.css">
        <link rel="stylesheet" href="{{asset('css')}}/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('css')}}/bootstrap.css">
        <link rel="stylesheet" href="{{asset('css')}}/magnific-popup.css">
        <link rel="stylesheet" href="{{asset('css')}}/nice-select.css">					
        <link rel="stylesheet" href="{{asset('css')}}/animate.min.css">
        <link rel="stylesheet" href="{{asset('css')}}/owl.carousel.css">
        <link rel="stylesheet" href="{{asset('css')}}/main.css">
    </head>
    <body>

          <header id="header" id="home">
              <div class="container header-top">
                <div class="row">
                    <div class="col-6 top-head-right">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                          <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-6 top-head-right">
                        <ul>
                            <li><a href="{{route('dashboard')}}"><i class="fa fa-lock"></i> Ingresar</a></li>
                            <li><a href="{{route('registro.investigador')}}">Registrarse</a></li>
                        </ul>
                    </div>		  			
                </div>
              </div>
              <hr>
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                  <div id="logo">
                    <a href="#"><img style="width: 60px; heigth:auto; border-radius:30px; box-shadow:3px 3px 3px #000000b8" src="{{asset('img')}}/logo-museo.jpg" alt="Museo Unsaac" title="Museo" /></a>
                  </div>
                  <nav id="nav-menu-container">
                    <ul class="nav-menu">
                      <li class="menu-active"><a href="index.html">Inicio</a></li>
                      <li><a href="about.html">Sobre el museo</a></li>
                      <li><a href="gallery.html">Galeria</a></li>
                      <li><a href="event.html">Eventos</a></li>
                      <li><a href="ticket.html">Investigacion</a></li>
                      <li><a href="blog-home.html">Blog</a></li>
                      <li><a href="contact.html">Contactos</a></li>	          
                    </ul>
                  </nav><!-- #nav-menu-container -->		    		
                </div>
            </div>
          </header><!-- #header -->

        @yield('contenido')

        <!-- start footer Area -->		
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Museo Unsaac</h6>
                            <p>
                                Informacion de nuestro museo para el publico en general
                            </p>
                            <p class="footer-text">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Derechos reservados 2021</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Suscribete</h6>
                            <p>Suscribete a nuestro boletin informativo</p>
                            <div class="" id="mc_embed_signup">
                                <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
                                    <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
                                        <button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
                                        <div style="position: absolute; left: -5000px;">
                                            <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                        </div>

                                    <div class="info"></div>
                                </form>
                            </div>
                        </div>
                    </div>						
                    <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                        <div class="single-footer-widget">
                            <h6>Siguenos</h6>
                            <p>Nuestra redes sociales</p>
                            <div class="footer-social d-flex align-items-center">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>							
                </div>
            </div>
        </footer>	
        <!-- End footer Area -->		

        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="js/vendor/bootstrap.min.js"></script>			
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
          <script src="js/easing.min.js"></script>			
        <script src="js/hoverIntent.js"></script>
        <script src="js/superfish.min.js"></script>	
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>	
        <script src="js/owl.carousel.min.js"></script>	
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/justified.min.js"></script>					
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>			
        <script src="js/parallax.min.js"></script>		
        <script src="js/mail-script.js"></script>	
        <script src="js/main.js"></script>	
    </body>
</html>