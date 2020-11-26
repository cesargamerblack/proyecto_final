@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Nueva Categoria</h3>
            </div>
            <div class="card-body">
                    <div class="col-md-6">
                            
                            @if (count($errors)>0)
                                <div class="alert alert-danger">
                                    <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                    </ul>
                                </div>
                                @endif
                            {!!Form::open(array('url'=>'almacen/categoria','method'=>'POST','autocomplete'=>'off'))!!}
                            {{Form::token()}}
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" class="form-control" placeholder="Nombres...">
                    
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripcion</label>
                                <input type="text" name="descripcion" class="form-control" placeholder="Descripcion...">
                                
                            </div>
                            <div class="form-group">
                                <button class="btn btn-info" type="submit">Guardar</button>
                                <button class="btn btn-danger" type="reset">Cancelar</button>
                             </div>
                            
                            {!!Form::close()!!}
            </div>
        </div>
    </div>

    </div>
</div>
@endsection