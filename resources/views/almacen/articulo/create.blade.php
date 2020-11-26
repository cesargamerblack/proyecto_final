@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                    <h3>Nuevo Articulo</h3>
            </div>
            <div class="card-body">
                <div class="row">
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
    </div>
</div>
{!!Form::open(array('url'=>'almacen/articulo','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
{{Form::token()}}
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" required value="{{old('nombre')}}" class="form-control"
                placeholder="Nombres...">

        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="nombre">Categoria</label>
            <select name="idcategoria" class="form-control">
                @foreach ($categoria as $cat)
                <option value="{{$cat->idcategoria}}">{{$cat->nombre}}</option>
                @endforeach
            </select>

        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="codigo">Codigo de barras</label>
            <input type="text" name="codigo" required value="{{old('codigo')}}" class="form-control"
                placeholder="codigo de barras...">

        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="text" name="stock" required value="{{old('stock')}}" class="form-control"
                placeholder="stock de productos...">

        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" value="{{old('descripcion')}}" class="form-control"
                placeholder="descripcion de articulo...">

        </div>
    </div>
    <div class="col-md-6">
        <!--<div class="form-group">
            <label for="imagen">Imagen</label>
            <input type="file" name="imagen" class="form-control">

        </div>-->
        <div class="input-group mb-3">
                
                <div class="custom-file">
                  <input type="file" name="imagen" class="custom-file-input" >
                  <label class="custom-file-label" for="imagen">Ingrese imagen de articulo </label>
                </div>
              </div>
    </div>
</div>


<div class="form-group">
    <button class="btn btn-info" type="submit">Guardar</button>
    <button class="btn btn-danger" type="reset">Cancelar</button>
</div>
            </div>
        </div>
    </div>
</div>

{!!Form::close()!!}



@endsection