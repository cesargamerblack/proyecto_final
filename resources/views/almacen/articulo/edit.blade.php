@extends ('layouts.admin')
@section ('contenido')
 <a href="{{ URL::to('almacen/articulo') }}">Regresar</a>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
					<h5>Editar Articulo: {{ $articulo->nombre}}</h5>
			</div>
			<div class="card-body">
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
						
						
						{!!Form::model($articulo,['method'=>'PATCH','route'=>['articulo.update',$articulo->idarticulo],'files'=>'true'])!!}
						{{Form::token()}}
						
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="nombre">Nombre</label>
									<input type="text" name="nombre" required value="{{$articulo->nombre}}" class="form-control">
						
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="nombre">Categoria</label>
									<select name="idcategoria" class="form-control">
										@foreach ($categorias as $cat)
										@if($cat->idcategoria==$articulo->idcategoria)
										<option value="{{$cat->idcategoria}}" selected>{{$cat->nombre}}</option>
										@else
										<option value="{{$cat->idcategoria}}">{{$cat->nombre}}</option>
						
										@endif
										@endforeach
									</select>
						
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="codigo">Codigo de barras</label>
									<input type="text" name="codigo" required value="{{$articulo->codigo}}" class="form-control">
						
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="stock">Stock</label>
									<input type="text" name="stock" required value="{{$articulo->stock}}" class="form-control">
						
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="descripcion">Descripcion</label>
									<input type="text" name="descripcion" value="{{$articulo->descripcion}}" class="form-control">
						
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="imagen">Imagen</label>
									<input type="file" name="imagen" class="form-control">
									<div class="mt-2">
											@if(($articulo->imagen)!="")
									<img style="max-width: 200px; class="img-fluid img-thumbnail" src="{{asset('imagenes/articulos/'.$articulo->imagen)}}" alt="">
									@endif
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