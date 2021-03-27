@extends('layouts.museoweb')
@section('contenido')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>	
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-center">
                <div class="banner-content col-lg-8">
                    <h6 class="text-white">MUSEO UNSAAC</h6>
                    <h1 class="text-white">
                        MUSEO DE BIOLOGIA UNSAAC		
                    </h1>
                    <p class="pt-20 pb-20 text-white">
                        Centro de investigacion y museo de la UNSAAC
                    </p>
                    <a href="#" class="primary-btn text-uppercase">Conocer mas</a>
                </div>											
            </div>
        </div>
    </section>
    <!-- End banner Area -->	

    <!-- Start service Area -->
    <section class="service-area pt-100" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-service">
                        <span class="lnr lnr-clock"></span>
                        <h4>Horarios</h4>
                        <p>
                        Lunes - Viernes: 10.00am a 05.00pm
                        Sabados: 12.00pm a 03.00 pm
                        Domingo cerrado
                        </p>						 	
                        <div class="overlay">
                        <div class="text">
                            <p>
                                Visita nuestro museo
                            </p>
                            <a href="#" class="text-uppercase primary-btn">Comprar entrada</a>
                        </div>
                        </div>
                    </div>							
                </div>
                <div class="col-lg-4">
                    <div class="single-service">
                        <span class="lnr lnr-clock"></span>
                        <h4>Horarios</h4>
                        <p>
                            Lunes - Viernes: 10.00am a 05.00pm
                            Sabados: 12.00pm a 03.00 pm
                            Domingo cerrado
                        </p>						 	
                        <div class="overlay">
                            <div class="text">
                                <p>
                                    Visita nuestro museo
                                </p>
                                <a href="#" class="text-uppercase primary-btn">Comprar entrada</a>
                            </div>
                        </div>
                    </div>					
                </div>
                <div class="col-lg-4">
                    <div class="single-service">
                        <span class="lnr lnr-clock"></span>
                        <h4>Horarios</h4>
                        <p>
                            Lunes - Viernes: 10.00am a 05.00pm
                            Sabados: 12.00pm a 03.00 pm
                            Domingo cerrado
                        </p>						 	
                        <div class="overlay">
                            <div class="text">
                                <p>
                                    Visita nuestro museo
                                </p>
                                <a href="#" class="text-uppercase primary-btn">Comprar entrada</a>
                            </div>
                        </div>
                    </div>								
                </div>												
            </div>
        </div>	
    </section>
    <!-- End service Area -->
    
    <!-- Start quote Area -->
    <section class="quote-area section-gap">
        <div class="container">				
            <div class="row">
                <div class="col-lg-6 quote-left">
                    <h1>
                        <span>Museo</span> Especimenes, <br>
                        Investigacion <span>trabajo</span>, coleccion<br>
                        reserva <span>desarrollo</span>.
                    </h1>
                </div>
                <div class="col-lg-6 quote-right">
                    <p>
                        Nuestro compromiso en el desarrollo de la investigacion
                    </p>
                </div>
            </div>
        </div>	
    </section>
    <!-- End quote Area -->

    <!-- Start exibition Area -->
    <section class="exibition-area section-gap" id="exhibitions">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">Exibicion de especimenes</h1>
                        <p>Cuidamos nuestro trabajo</p>
                    </div>
                </div>
            </div>						
            <div class="row">
                <div class="active-exibition-carusel">
                    <div class="single-exibition item">
                        <img src="{{asset('img')}}/museo1.jpg" alt="">
                        <ul class="tags">
                            <li><a href="#">Especimen</a></li>
                            <li><a href="#">clase de especimen</a></li>
                        </ul>
                        <a href="#"><h4>Conocer mas</h4></a>
                        <p>
                            Detalles del especimen, familia, nombres y demas
                        </p>
                        <h6 class="date">Fecha de Captura y Author</h6>
                    </div>

                    <div class="single-exibition item">
                        <img src="{{asset('img')}}/museo2.jpg" alt="">
                        <ul class="tags">
                            <li><a href="#">Especimen</a></li>
                            <li><a href="#">clase de especimen</a></li>
                        </ul>
                        <a href="#"><h4>Conocer mas</h4></a>
                        <p>
                            Detalles del especimen, familia, nombres y demas
                        </p>
                        <h6 class="date">Fecha de Captura y Author</h6>
                    </div>

                    <div class="single-exibition item">
                        <img src="{{asset('img')}}/museo3.jpg" alt="">
                        <ul class="tags">
                            <li><a href="#">Especimen</a></li>
                            <li><a href="#">clase de especimen</a></li>
                        </ul>
                        <a href="#"><h4>Conocer mas</h4></a>
                        <p>
                            Detalles del especimen, familia, nombres y demas
                        </p>
                        <h6 class="date">Fecha de Captura y Author</h6>
                    </div>

                    <div class="single-exibition item">
                        <img src="{{asset('img')}}/museo4.jpg" alt="">
                        <ul class="tags">
                            <li><a href="#">Especimen</a></li>
                            <li><a href="#">clase de especimen</a></li>
                        </ul>
                        <a href="#"><h4>Conocer mas</h4></a>
                        <p>
                            Detalles del especimen, familia, nombres y demas
                        </p>
                        <h6 class="date">Fecha de Captura y Author</h6>
                    </div>

                    <div class="single-exibition item">
                        <img src="{{asset('img')}}/museo5.jpg" alt="">
                        <ul class="tags">
                            <li><a href="#">Especimen</a></li>
                            <li><a href="#">clase de especimen</a></li>
                        </ul>
                        <a href="#"><h4>Conocer mas</h4></a>
                        <p>
                            Detalles del especimen, familia, nombres y demas
                        </p>
                        <h6 class="date">Fecha de Captura y Author</h6>
                    </div>

                    <div class="single-exibition item">
                        <img src="{{asset('img')}}/museo6.jpg" alt="">
                        <ul class="tags">
                            <li><a href="#">Especimen</a></li>
                            <li><a href="#">clase de especimen</a></li>
                        </ul>
                        <a href="#"><h4>Conocer mas</h4></a>
                        <p>
                            Detalles del especimen, familia, nombres y demas
                        </p>
                        <h6 class="date">Fecha de Captura y Author</h6>
                    </div>

                    <div class="single-exibition item">
                        <img src="{{asset('img')}}/museo7.jpg" alt="">
                        <ul class="tags">
                            <li><a href="#">Especimen</a></li>
                            <li><a href="#">clase de especimen</a></li>
                        </ul>
                        <a href="#"><h4>Conocer mas</h4></a>
                        <p>
                            Detalles del especimen, familia, nombres y demas
                        </p>
                        <h6 class="date">Fecha de Captura y Author</h6>
                    </div>

                    <div class="single-exibition item">
                        <img src="{{asset('img')}}/museo8.jpg" alt="">
                        <ul class="tags">
                            <li><a href="#">Especimen</a></li>
                            <li><a href="#">clase de especimen</a></li>
                        </ul>
                        <a href="#"><h4>Conocer mas</h4></a>
                        <p>
                            Detalles del especimen, familia, nombres y demas
                        </p>
                        <h6 class="date">Fecha de Captura y Author</h6>
                    </div>

                    <div class="single-exibition item">
                        <img src="{{asset('img')}}/museo9.jpg" alt="">
                        <ul class="tags">
                            <li><a href="#">Especimen</a></li>
                            <li><a href="#">clase de especimen</a></li>
                        </ul>
                        <a href="#"><h4>Conocer mas</h4></a>
                        <p>
                            Detalles del especimen, familia, nombres y demas
                        </p>
                        <h6 class="date">Fecha de Captura y Author</h6>
                    </div>
                </div>													
            </div>
        </div>	
    </section>
    <!-- End exibition Area -->			

    <!-- Start upcoming-event Area -->
    <section class="upcoming-event-area section-gap" id="events">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">Ultimos eventos</h1>
                        <p>Eventos recientes</p>
                    </div>
                </div>
            </div>						
            <div class="row">
                <div class="col-lg-6 event-left">
                    <div class="single-events">
                        <img class="img-fluid" src="img/u1.jpg" alt="">
                        <a href="#"><h4>Presentacion de especimen</h4></a>
                        <h6><span>20 abril</span> Especimenes recientes</h6>
                        <p>
                            Exposicion del autor sobre las especificaciones del reciente especimen
                        </p>
                        <a href="#" class="primary-btn text-uppercase">mas informacion</a>
                    </div>
                    <div class="single-events">
                        <img class="img-fluid" src="img/u1.jpg" alt="">
                        <a href="#"><h4>Presentacion de especimen</h4></a>
                        <h6><span>20 abril</span> Especimenes recientes</h6>
                        <p>
                            Exposicion del autor sobre las especificaciones del reciente especimen
                        </p>
                        <a href="#" class="primary-btn text-uppercase">mas informacion</a>
                    </div>						
                </div>
                <div class="col-lg-6 event-right">
                    <div class="single-events">
                        <img class="img-fluid" src="img/u1.jpg" alt="">
                        <a href="#"><h4>Presentacion de especimen</h4></a>
                        <h6><span>20 abril</span> Especimenes recientes</h6>
                        <p>
                            Exposicion del autor sobre las especificaciones del reciente especimen
                        </p>
                        <a href="#" class="primary-btn text-uppercase">mas informacion</a>
                    </div>
                    <div class="single-events">
                        <img class="img-fluid" src="img/u1.jpg" alt="">
                        <a href="#"><h4>Presentacion de especimen</h4></a>
                        <h6><span>20 abril</span> Especimenes recientes</h6>
                        <p>
                            Exposicion del autor sobre las especificaciones del reciente especimen
                        </p>
                        <a href="#" class="primary-btn text-uppercase">mas informacion</a>
                    </div>						
                </div>
            </div>
        </div>	
    </section>
    <!-- End upcoming-event Area -->
    
    <!-- Start blog Area -->
    {{--<section class="blog-area section-gap" id="blog">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Latest From Our Blog</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>					
            <div class="row">
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b1.jpg" alt="">								
                    </div>
                    <p class="date">10 Jan 2018</p>
                    <a href="#"><h4>Addiction When Gambling
                    Becomes A Problem</h4></a>
                    <p>
                        inappropriate behavior ipsum dolor sit amet, consectetur.
                    </p>
                    <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                        <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
                    </div>									
                </div>
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b2.jpg" alt="">								
                    </div>
                    <p class="date">10 Jan 2018</p>
                    <a href="#"><h4>Addiction When Gambling
                    Becomes A Problem</h4></a>
                    <p>
                        inappropriate behavior ipsum dolor sit amet, consectetur.
                    </p>
                    <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                        <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
                    </div>									
                </div>
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b3.jpg" alt="">								
                    </div>
                    <p class="date">10 Jan 2018</p>
                    <a href="#"><h4>Addiction When Gambling
                    Becomes A Problem</h4></a>
                    <p>
                        inappropriate behavior ipsum dolor sit amet, consectetur.
                    </p>
                    <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                        <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
                    </div>									
                </div>
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b4.jpg" alt="">								
                    </div>
                    <p class="date">10 Jan 2018</p>
                    <a href="#"><h4>Addiction When Gambling
                    Becomes A Problem</h4></a>
                    <p>
                        inappropriate behavior ipsum dolor sit amet, consectetur.
                    </p>
                    <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                        <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
                    </div>									
                </div>							
            </div>
        </div>	
    </section>--}}
    <!-- End blog Area -->

    <!-- Start gallery Area -->
    <section class="gallery-area section-gap" id="gallery">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10 text-white">Galeria</h1>
                        <p>Especies de nuestro museo</p>
                    </div>
                </div>
            </div>						
            <div id="grid-container" class="row">
                <a class="single-gallery" href="{{asset('img')}}/museo1.jpg"><img class="grid-item" src="{{asset('img')}}/museo1.jpg"></a>
                <a class="single-gallery" href="{{asset('img')}}/museo2.jpg"><img class="grid-item" src="{{asset('img')}}/museo2.jpg"></a>
                <a class="single-gallery" href="{{asset('img')}}/museo3.jpg"><img class="grid-item" src="{{asset('img')}}/museo3.jpg"></a>
                <a class="single-gallery" href="{{asset('img')}}/museo4.jpg"><img class="grid-item" src="{{asset('img')}}/museo4.jpg"></a>
                <a class="single-gallery" href="{{asset('img')}}/museo5.jpg"><img class="grid-item" src="{{asset('img')}}/museo5.jpg"></a>
                <a class="single-gallery" href="{{asset('img')}}/museo6.jpg"><img class="grid-item" src="{{asset('img')}}/museo6.jpg"></a>
                <a class="single-gallery" href="{{asset('img')}}/museo7.jpg"><img class="grid-item" src="{{asset('img')}}/museo7.jpg"></a>
                <a class="single-gallery" href="{{asset('img')}}/museo8.jpg"><img class="grid-item" src="{{asset('img')}}/museo8.jpg"></a>
                <a class="single-gallery" href="{{asset('img')}}/museo9.jpg"><img class="grid-item" src="{{asset('img')}}/museo9.jpg"></a>
                <a class="single-gallery" href="{{asset('img')}}/museo10.jpg"><img class="grid-item" src="{{asset('img')}}/museo10.jpg"></a>
                <a class="single-gallery" href="{{asset('img')}}/museo11.jpg"><img class="grid-item" src="{{asset('img')}}/museo11.jpg"></a>
                <a class="single-gallery" href="{{asset('img')}}/museo12.jpg"><img class="grid-item" src="{{asset('img')}}/museo12.jpg"></a>
                <a class="single-gallery" href="{{asset('img')}}/museo13.jpg"><img class="grid-item" src="{{asset('img')}}/museo13.jpg"></a>
            </div>	
        </div>	
    </section>
    <!-- End gallery Area -->    
@endsection