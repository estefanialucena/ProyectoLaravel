@extends('layouts.app')

@section('content')
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
@endsection
