@extends ('layouts.admin')
@extends ('layouts.vendedor')
@section ('contenido')
<div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            
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

{!!Form::model($persona,['method'=>'PATCH','route'=>['cliente.update',$persona->idpersona]])!!}
{{Form::token()}}
<div class="row">
      <div class="col-md-12">
            <div class="card">
                  <div class="card-header">
                        <h3>Editar Cliente: {{ $persona->nombre}}</h3>
                  </div>
                  <div class="card-body">
                        
                        <div class="row">
                              <div class="col-md-6">
                                    <div class="form-group">
                                          <label for="nombre">Nombre</label>
                                          <input type="text" name="nombre" required value="{{$persona->nombre}}"
                                                class="form-control" placeholder="Nombres...">

                                    </div>
                              </div>
                              <div class="col-md-6">
                                    <div class="form-group">
                                          <label for="direccion">Direccion</label>
                                          <input type="text" name="direccion" value="{{$persona->direccion}}"
                                                class="form-control">

                                    </div>
                              </div>
                              <div class="col-md-6">
                                    <div class="form-group">
                                          <label>Documento</label>
                                          <select name="tipo_documento" class="form-control">
                                                @if ($persona->tipo_documento=='INE')
                                                <option value="INE" selected>INE</option>
                                                @endif
                                          </select>

                                    </div>
                              </div>
                              <div class="col-md-6">
                                    <div class="form-group">
                                          <label for="num_documento">numero documento</label>
                                          <input type="text" name="num_documento" required
                                                value="{{$persona->num_documento}}" class="form-control">

                                    </div>
                              </div>
                              <div class="col-md-6">
                                    <div class="form-group">
                                          <label for="telefono">Telefono</label>
                                          <input type="text" name="telefono" value="{{$persona->telefono}}"
                                                class="form-control">

                                    </div>
                              </div>
                              <div class="col-md-6">
                                    <div class="form-group">
                                          <label for="email">Email</label>
                                          <input type="email" name="email" value="{{$persona->email}}"
                                                class="form-control">

                                    </div>
                              </div>

                        </div>


                        <div class="form-group">
                              <button class="btn btn-danger" type="submit">Guardar</button>
                              <button class="btn btn-info" type="reset">Cancelar</button>
                        </div>



                  </div>
            </div>
      </div>
</div>

{!!Form::close()!!}


@endsection