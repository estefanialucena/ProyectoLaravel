<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/Page-icon-min.ico" />
    <link href='http://fonts.googleapis.com/css?family=Denk+One' rel='stylesheet' type='text/css'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')
    </script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</head>

<body class="container-body-pages container-contact">
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
                <li><a href="{{ url('/home') }}" class="all-titles-pages">Perfil</a></li>
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
                          </svg>&nbsp; TuneUp
                    </div>
                </div>
            </nav>
            <section class="all-pages-content">
                <div class="container">
                    <div class="row">

                        <h3 class="text-center all-titles-pages">Registro</h3>
                        <div class="card-body text-center" style="margin-left: 200px">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
        
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="row mb-3">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
        
                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>


                    </div>
                </div>
            </section>
            <footer>
                <div class="containerLogin">
                    <div class="rowLogin">
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
        </div><!-- Fin del contenedor de los contenidos -->
    </div><!-- Fin del contenedor principal -->
</body>

</html>