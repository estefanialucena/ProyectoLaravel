@extends('layouts.app')

@section('template_title')
    {{ $cancione->name ?? "{{ __('Show') Cancione" }}
@endsection

@section('content')
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
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cancione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('canciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Categoria Id:</strong>
                            {{ $cancione->categoria_Id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $cancione->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
