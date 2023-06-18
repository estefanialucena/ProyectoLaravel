@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Cancione
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Cancione</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cancion.update', $cancion->id) }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            @include('cancion.formUpdate')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
