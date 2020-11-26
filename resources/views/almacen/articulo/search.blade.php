{!! Form::open(array('url'=>'almacen/articulo','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}


<div class="form-group mt-0">
	<div class="input-group">
		<input type="text" class="form-control" name="searchText" placeholder="Buscar..." value="{{$searchText}}">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-outline-primary">Buscar <i class="fas fa-search"></i></button>
		</span>
	</div>
</div>

{{Form::close()}}