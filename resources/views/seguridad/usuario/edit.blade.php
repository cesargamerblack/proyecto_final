@extends ('layouts.admin')
@section ('contenido')
<a href="{{ URL::to('seguridad/usuario') }}">Regresar</a> 
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

		{!!Form::model($usuarios,['method'=>'PATCH','route'=>['usuario.update',$usuarios->id]])!!}
		{{Form::token()}}
		<div class="row justify-content-center">
			<div class="col-md-12 col-12">
				<div class="card">
					<div class="card-header">Editar Usuario: {{ $usuarios->name}}</div>

					<div class="card-body">

						@csrf

						<div class="form-group row">
							<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

							<div class="col-md-8">
								<input id="name" type="text"
									class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
									value="{{$usuarios->name}}" required autofocus>

								
							</div>
						</div>

						<div class="form-group row">
							<label for="email"
								class="col-md-4 col-form-label text-md-right">{{ __('Correo electronico') }}</label>

							<div class="col-md-8">
								<input id="email" type="email" class="form-control" name="email" value="{{$usuarios->email}}" required>


							</div>
						</div>

						<div class="form-group row">
							<label for="password"
								class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

							<div class="col-md-8">
								<input id="password" type="password"
									class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
									name="password" required>

								@if ($errors->has('password'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group row">
							<label for="password-confirm"
								class="col-md-4 col-form-label text-md-right">{{ __('Confirma tu contraseña') }}</label>

							<div class="col-md-8">
								<input id="password-confirm" type="password" class="form-control"
									name="password_confirmation" required>
							</div>
						</div>

						<div class="form-group row mb-0">
							<div class="col-md-8 offset-md-4">
								<button type="submit" class="btn btn-primary">
									Actualizar
								</button>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		{!!Form::close()!!}

	</div>
</div>
@endsection