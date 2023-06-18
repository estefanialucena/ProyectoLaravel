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