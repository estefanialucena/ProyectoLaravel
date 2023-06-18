@extends('layouts.app')

@section('template_title')
    Cancione
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Canciones') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('canciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
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
                    </div>
                </div>
                {!! $canciones->links() !!}
            </div>
        </div>
    </div>
@endsection
