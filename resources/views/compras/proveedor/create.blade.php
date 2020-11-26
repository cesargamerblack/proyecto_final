@extends ('layouts.admin')
@section ('contenido')

{!!Form::open(array('url'=>'compras/proveedor','method'=>'POST','autocomplete'=>'off'))!!}
{{Form::token()}}
<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Nuevo Proveedor</h3>
            </div>
            <div class="header-body p-2">
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
                            <label for="direccion">Direccion</label>
                            <input type="text" name="direccion" value="{{old('direccion')}}" class="form-control"
                                placeholder="Direccion...">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Documento</label>
                            <select name="tipo_documento" class="form-control">
                                <option value="INE">INE</option>
                                <option value="RFC">RFC</option>
                            </select>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="num_documento">Numero de documento</label>
                            <input type="text" name="num_documento" required value="{{old('num_documento')}}"
                                class="form-control" placeholder="numero de documento...">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="text" name="telefono" value="{{old('telefono')}}" class="form-control"
                                placeholder="tu telefono...">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="{{old('email')}}" class="form-control"
                                placeholder="tu Email...">

                        </div>

                    </div>
                    <div class="form-group p-4">
                            <button class="btn btn-info" type="submit">Guardar</button>
                            <button class="btn btn-danger" type="reset">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>




{!!Form::close()!!}



@endsection