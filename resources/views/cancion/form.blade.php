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
                        <li><a href="{{ url('/home') }}" class="all-titles-pages">Perfil</a></li>
                    @else
                        <li><a href="{{ route('login') }}" class="all-titles-pages">Log in</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="all-titles-pages">Register</a></li>
                        @endif
                    @endauth
            </ul>
        </nav>
<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-floating">
            <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Título">
            {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
            <label for="titulo">Título</label>
        </div>
        <div class="form-floating">
            <input type="text" name="autor" id="autor" class="form-control" value="{{Auth::user()->name}}" readonly>
            <label for="autor">Autor</label>
        </div>

        <div class="form-floating">
            <select class="form-select" id="floatingSelect" name="categoria" aria-label="Floating label select example">
                @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                @endforeach
            </select>
            <label for="floatingSelect">Categoría</label>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>