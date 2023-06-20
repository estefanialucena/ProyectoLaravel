@extends('layouts.app')

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
<div class="container">
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                    <th>No</th>
                    
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Categoría</th>
                    <th>Fecha de creación</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($canciones as $cancion)
                    <tr>
                        <td>{{$cancion->id}}</td>
                        <td>{{$cancion->titulo}}</td>
                        <td>{{$cancion->user->name}}</td>
                        <td>{{$cancion->categoria->nombre}}</td>
                        <td>{{$cancion->created_at->format('d/m/Y')}}</td>
                        @if ($cancion->user->id == Auth::id())
                        <td>
                            <form action="{{ route('canciones.destroy',$cancion->id) }}" method="POST">
                                <a class="btn btn-sm btn-success" href="{{ route('canciones.edit',$cancion->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                            </form>
                        </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {!! $canciones->links() !!}
</div>
</div>
@endsection
