<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ __('Waancolor |') }} @yield('title') </title>

        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Rubén Tipiani">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <link rel="apple-touch-icon" sizes="57x57" href="assets/images/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/images/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/images/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/images/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/images/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/images/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="assets/images/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
        <link rel="manifest" href="assets/images/manifest.json">

        <!-- Fonts -->
        <link href="//fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="assets/css/style-starter.css">

        <!-- Template CSS -->
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        <header id="site-header" class="fixed-top nav-fixed">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark stroke">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="assets/images/logo.png" alt="Waancolor" title="Waancolor">
                    </a>
                    <button class="navbar-toggler collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarWaancolor" aria-controls="navbarWaancolor" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                        <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarWaancolor">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item {{ Request::route()->getName() === 'home' ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('home') }}">{{ __('Inicio') }}
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item {{ Request::route()->getName() === 'nosotros' ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('nosotros') }}">
                                    {{ __('Nosotros') }}
                                </a>
                            </li>
                            <li class="nav-item {{ Request::route()->getName() === 'servicios' ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('servicios') }}">
                                    {{ __('Servicios') }}
                                </a>
                            </li>
                            <li class="nav-item {{ Request::route()->getName() === 'contactanos' ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('contactanos') }}">
                                    {{ __('Contáctanos') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        @yield('content')

        <footer class="w3l-footer-66">
            <section class="footer-inner-main">
                <div class="footer-hny-grids py-5">
                    <div class="container py-lg-4">
                        <div class="text-txt">
                            <div class="row newsletter-grids-footer">
                                <div class="col-lg-6 newsletter-text pr-lg-5">
                                    <h3 class="hny-title two">
                                        {{ __('Suscríbete') }}
                                    </h3>
                                    <h4>
                                        {{ __('Entérate sobre nuestras novedades, suscribiéndote a nuestro boletín.') }}
                                    </h4>
                                </div>
                                <div class="col-lg-6 newsletter-right">
                                    <form class="footer-newsletter" action="{{ URL::to('/guardar-suscripcion') }}" method="post">
                                        @csrf
                                        <input type="email" name="email_suscripcion" class="form-input" placeholder="Déjanos tu email.">
                                        <button class="btn" type="submit">
                                            {{ __('Suscribirme') }}
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="right-side">
                                <div class="row sub-columns">
                                    <div class="col-lg-4 col-md-6 sub-one-left pr-lg-4">
                                        <a class="navbar-brand" href="{{ route('home') }}">
                                            <img src="assets/images/logo.png" alt="Waancolor" title="Waancolor"/>
                                        </a>
                                        <p class="pr-lg-4 text-justify">
                                            {{ __('Somos una empresa dedicada a la venta de bienes y servicios en general con una cadena de tiendas de pintura multimarca.') }}
                                        </p>
                                        <div class="columns-2">
                                            <ul class="social">
                                                <li>
                                                    <a href="https://www.facebook.com/waancolor" target="_blank">
                                                        <span class="fa fa-facebook" aria-hidden="true"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://instagram.com" target="_blank">
                                                        <span class="fa fa-instagram" aria-hidden="true"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.linkedin.com/" target="_blank">
                                                        <span class="fa fa-linkedin" aria-hidden="true"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.youtube.com/" target="_blank">
                                                        <span class="fa fa-youtube" aria-hidden="true"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 sub-one-left">
                                        <h6>
                                            {{ __('Mapa de sitio') }}
                                        </h6>
                                        <div class="mid-footer-gd sub-two-right">

                                            <ul>
                                                <li>
                                                    <a href="{{ route('home') }}">
                                                        <span class="fa fa-angle-double-right mr-2"></span>
                                                        {{ __('Inicio') }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('nosotros') }}">
                                                        <span class="fa fa-angle-double-right mr-2"></span>
                                                        {{ __('Nosotros') }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('servicios') }}">
                                                        <span class="fa fa-angle-double-right mr-2"></span>
                                                        {{ __('Servicios') }}
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('contactanos') }}">
                                                        <span class="fa fa-angle-double-right mr-2"></span>
                                                        {{ __('Contáctanos') }}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 sub-one-left">
                                        <h6>
                                            {{ __('Nuestros especialistas') }}
                                        </h6>
                                        <div class="instagram-feeds">
                                            <div class="b-img">
                                                <a href="#url">
                                                    <img src="assets/images/f1.jpg" class="img-fluid" alt="Waancolor">
                                                </a>
                                            </div>
                                            <div class="b-img">
                                                <a href="#url">
                                                    <img src="assets/images/f2.jpg" class="img-fluid" alt="Waancolor">
                                                </a>
                                            </div>
                                            <div class="b-img">
                                                <a href="#url">
                                                    <img src="assets/images/f3.jpg" class="img-fluid" alt="Waancolor">
                                                </a>
                                            </div>
                                            <div class="b-img">
                                                <a href="#url">
                                                    <img src="assets/images/f4.jpg" class="img-fluid" alt="Waancolor">
                                                </a>
                                            </div>
                                            <div class="b-img">
                                                <a href="#url">
                                                    <img src="assets/images/f5.jpg" class="img-fluid" alt="Waancolor">
                                                </a>
                                            </div>
                                            <div class="b-img">
                                                <a href="#url">
                                                    <img src="assets/images/f6.jpg" class="img-fluid" alt="Waancolor">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="below-section">
                    <div class="container">
                        <div class="copyright-footer">
                            <div class="columns text-lg-left">
                                <p>
                                    {{ __('©2023 Waancolor - Todos los derechos reservados') }}
                                </p>
                            </div>
                            <ul class="columns text-lg-right">
                                <li>
                                    <a href="{{ route('politicas-de-privacidad') }}">
                                        {{ __('Privacidad') }}
                                    </a>
                                </li>
                                <li>|</li>
                                <li>
                                    <a href="{{ route('terminos-y-condiciones') }}">
                                        {{ __('Términos & Condiciones') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <button onclick="topFunction()" id="movetop" title="Go to top">
                    <span class="fa fa-long-arrow-up" aria-hidden="true"></span>
                </button>
            </section>
        </footer>

        <!-- Script de SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- Script personalizado -->
        <script>
                // Espera a que se cargue el documento
                document.addEventListener('DOMContentLoaded', function() {
                    // Verifica si hay mensajes de éxito o error flash en la sesión
                    @if(Session::has('success'))
                        Swal.fire({
                            icon: 'success',
                            title: '¡Suscripción exitosa!',
                            text: 'Hemos registrado tu correo',
                            confirmButtonText: 'Cerrar'
                        });
                    @elseif(Session::has('error'))
                        Swal.fire({
                            icon: 'warning',
                            title: '¡Atención!',
                            text: 'Correo electrónico registrado previamente',
                            confirmButtonText: 'Cerrar'
                        });
                    @endif
                });
        </script>

        @if(Session::has('mensajeExito'))
            <script>
                Swal.fire({
                    icon: '{{ Session::get('icono') }}',
                    title: 'Error al enviar',
                    text: '{{ Session::get('mensajeExito') }}',
                    confirmButtonText: 'Cerrar'
                });
            </script>
        @endif


        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <script>
            $(document).ready(function () {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',

                    fixedContentPos: false,
                    fixedBgPos: true,

                    overflowY: 'auto',

                    closeBtnInside: true,
                    preloader: false,

                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                });

                $('.popup-with-move-anim').magnificPopup({
                    type: 'inline',

                    fixedContentPos: false,
                    fixedBgPos: true,

                    overflowY: 'auto',

                    closeBtnInside: true,
                    preloader: false,

                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-slide-bottom'
                });
            });
        </script>
        <script src="assets/js/jquery.waypoints.min.js"></script>
        <script src="assets/js/jquery.countup.js"></script>

        <script>
            $('.counter').countUp();
        </script>
        <script src="assets/js/owl.carousel.js"></script>
        <script>
            $(document).ready(function () {
                $('.owl-one').owlCarousel({
                    loop: true,
                    margin: 0,
                    nav: false,
                    responsiveClass: true,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    autoplaySpeed: 1000,
                    autoplayHoverPause: false,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        480: {
                            items: 1,
                            nav: false
                        },
                        667: {
                            items: 1,
                            nav: true
                        },
                        1000: {
                            items: 1,
                            nav: true
                        }
                    }
                })
            })
        </script>
        <script>
            $(document).ready(function () {
                $('.owl-testimonial').owlCarousel({
                    loop: true,
                    margin: 0,
                    nav: false,
                    responsiveClass: true,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    autoplaySpeed: 1000,
                    autoplayHoverPause: false,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        480: {
                            items: 1,
                            nav: false
                        },
                        667: {
                            items: 1,
                            nav: false
                        },
                        1000: {
                            items: 1,
                            nav: false
                        }
                    }
                })
            })
        </script>
        <script>
            $(function () {
              $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
              })
            });
        </script>
        <script>
            $(window).on("scroll", function () {
              var scroll = $(window).scrollTop();

              if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
              } else {
                $("#site-header").removeClass("nav-fixed");
              }
            });

            //Main navigation Active Class Add Remove
            $(".navbar-toggler").on("click", function () {
              $("header").toggleClass("active");
            });
            $(document).on("ready", function () {
              if ($(window).width() > 991) {
                $("header").removeClass("active");
              }
              $(window).on("resize", function () {
                if ($(window).width() > 991) {
                  $("header").removeClass("active");
                }
              });
            });
        </script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>
