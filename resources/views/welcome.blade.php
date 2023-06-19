<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="Shortcut Icon" type="image/x-icon" href="../assets/icons/Page-icon-min.ico" />
    <link href='http://fonts.googleapis.com/css?family=Denk+One' rel='stylesheet' type='text/css'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="{{ asset('js/modernizr.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</head>

<body class="container-body-pages container-index">
    <div class="button-up hidden-xs">
        <i class="fa fa-arrow-circle-up"></i> &nbsp; Ir arriba
    </div>
    <div class="principal-container-page">
        <!-- ========= Menú ====== -->
        <nav class="navigation-menu-container">
            <div class="header-navigation">
                Menú
                <i class="fa fa-times btn-mobile-menu btn-navigation pull-right"></i>
            </div>
            <ul class="list-unstyled text-center">
                @auth
                        <li><a href="{{ url('/home') }}" class="all-titles-pages">Home</a></li>
                    @else
                        <li><a href="{{ route('login') }}" class="all-titles-pages">Log in</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="all-titles-pages">Register</a></li>
                        @endif
                    @endauth
            </ul>
        </nav>
        <!-- ========= Contenido de la pagina ====== -->
        <div class="content-container-page">
            <div class="bg-page btn-navigation hidden"></div>
            <nav class="NavBar">
                <div class="row">
                    <div class="col-xs-12 text-right">
                        <a class="pull-left btn-navigation btn-mobile-menu"><i class="fa fa-bars"></i></a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-music-player-fill" viewBox="0 0 16 16">
                            <path d="M8 12a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                            <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm1 2h6a1 1 0 0 1 1 1v2.5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1zm3 12a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                          </svg></i>&nbsp; TuneUp
                    </div>
                </div>
            </nav>
            <div class="heroIndex">
                <h1 class="all-titles-pages">Bienvenido a TuneUp</h1>
                <p>Bienvenido a TuneUp, la plataforma en línea donde puedes subir y compartir tu música con el mundo. <br>Descubre nuevos talentos, conecta con artistas y disfruta de la mejor música en un solo lugar.</p>
            </div>
            <section class="all-pages-content">
                <div class="container">
                    <div class="row Discos">
                        <div class="col-xs-12">
                            <h1 class="text-center wow pulse all-titles-pages">Nuevos Descubrimientos</h1>
                            <br><br><br>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div>
                                <img src="assets/img/music-1.jpg" alt="music"
                                    class="img-responsive img-circle center-box-content">
                                <h3 class="text-center all-titles-pages">Endorphins</h3>
                                <p>
                                    Sumérgete en un viaje sonoro lleno de energía y emociones con este álbum. Con ritmos contagiosos, melodías envolventes y arreglos innovadores, esta producción musical te transportará a un mundo electrónico fascinante.
                                </p>
                            </div>
                            <hr class="visible-xs">
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div>
                                <img src="assets/img/music-11.jpg" alt="music"
                                    class="img-responsive img-circle center-box-content">
                                <h3 class="text-center all-titles-pages">Heatin' Up</h3>
                                <p>
                                    Explora las profundidades de las emociones relacionadas con el amor perdido a través de este álbum. Con letras conmovedoras y melodías melancólicas, cada canción te sumergirá en experiencias personales y sentimientos universales.
                                </p>
                            </div>
                            <hr class="visible-xs">
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div>
                                <img src="assets/img/music-12.jpg" alt="music"
                                    class="img-responsive img-circle center-box-content">
                                <h3 class="text-center all-titles-pages">Try all over again</h3>
                                <p>
                                    Adéntrate en un mundo urbano lleno de ritmos vibrantes y líricas desafiantes con este álbum. Con bajos profundos y ritmos pegajosos, cada canción te hará vibrar y sentir la poderosa energía de la música trap.
                                </p>
                            </div>
                        </div>
                    </div>

                    <hr style="margin:90px 0px;">
                    <div class="row masEscuchadas">
                        <div class="col-xs-12">
                            <h1 class="text-center wow pulse all-titles-pages">Los cinco más descargados</h1>
                            <br><br><br>
                        </div>
                        <div class="col-xs-12">
                            <div class="mediaI">
                                <a class="pull-left" href="#">
                                    <img class="media-object img-rounded" src="assets/img/music-2.jpg" alt="music">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading all-titles-pages">Electronic Furies</h4>
                                    <p>
                                        Sumérgete en un torbellino de sonidos electrónicos en este álbum que combina elementos de la música dance, el techno y el trance. Con ritmos frenéticos, sintetizadores enérgicos y arreglos vanguardistas, cada canción es una explosión de energía electrónica que te lleva a través de un viaje sonoro emocionante.
                                    </p>
                                </div>
                            </div>
                            <br>
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object img-rounded" src="assets/img/music-22.jpg" alt="music">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading all-titles-pages">BROKEN</h4>
                                    <p>
                                        Explora la oscuridad y la introspección en este álbum cargado de emociones. Con letras introspectivas y melodías melancólicas, cada canción te sumerge en un estado de vulnerabilidad y reflexión. Los arreglos minimalistas y las voces emotivas crean una experiencia musical íntima y conmovedora.
                                    </p>
                                </div>
                            </div>
                            <br>
                            <div class="mediaI">
                                <a class="pull-left" href="#">
                                    <img class="media-object img-rounded" src="assets/img/music-23.jpg" alt="music" style="margin-left: 12px">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading all-titles-pages">No Surprises</h4>
                                    <p>
                                        Este álbum te envuelve en un ambiente de serenidad y melancolía. Con composiciones delicadas, letras profundas y arreglos sutiles, cada canción te transporta a un estado de calma y contemplación. Las melodías suaves y la voz evocadora te envuelven en una atmósfera tranquila y nostálgica.
                                    </p>
                                </div>
                            </div>
                            <br>
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object img-rounded" src="assets/img/music-24.jpg" alt="music">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading all-titles-pages">Plastic Animals</h4>
                                    <p>
                                        Sumérgete en un mundo de sonidos electrónicos y experimentales en este álbum que rompe con las convenciones musicales tradicionales. Con capas de sintetizadores, ritmos inusuales y muestras de sonidos encontrados, cada canción te invita a un viaje sonoro único y provocativo.
                                    </p>
                                </div>
                            </div>
                            <br>
                            <div class="mediaI">
                                <a class="pull-left" href="#">
                                    <img class="media-object img-rounded" src="assets/img/music-25.jpg" alt="music">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading all-titles-pages">Fauget</h4>
                                    <p>
                                        Este álbum te transporta a paisajes sonoros fascinantes y surrealistas. Con elementos de la música ambiental y electrónica, cada canción crea atmósferas envolventes y evocadoras. Las texturas sonoras y las melodías evolutivas te llevan a explorar territorios sonoros desconocidos y te invitan a la contemplación.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div><!--5 más descargadas -->
                </div><!--Container -->
            </section>
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <h3 class="all-titles-pages">Buscanos en</h3>
                            <ul class="list-unstyled">
                                <li class="list-social">
                                    <p class="hidden-xs">Twitter</p>
                                    <p><a href="#"><i class="fa fa-twitter"></i></a></p>
                                </li>
                                <li class="list-social">
                                    <p class="hidden-xs">Facebook</p>
                                    <p><a href="#"><i class="fa fa-facebook"></i></a></p>
                                </li>
                                <li class="list-social">
                                    <p class="hidden-xs">Google+</p>
                                    <p><a href="#"><i class="fa fa-google-plus"></i></a></p>
                                </li>
                                <li class="list-social">
                                    <p class="hidden-xs">Youtube</p>
                                    <p><a href="#"><i class="fa fa-youtube"></i></a></p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12">
                            <h3 class="text-center all-titles-pages">TuneUp &copy; 2023</h3><br>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- ========= Fin contenido de la pagina ====== -->
    </div>
</body>

</html>