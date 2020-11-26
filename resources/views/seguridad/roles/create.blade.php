@extends ('layouts.admin')
@section ('contenido')


<a href="{{ URL::to('seguridad') }}">Regresar</a> <br> <br>

<h1>Formulario de creación</h1>



{{ Form::open(array('url' => 'seguridad/roles')) }}

<div class="row">

<div class="form-group col-md-4">
        {{ Form::label('nombre', 'Nombre del rol') }}
        {{ Form::text('nombre', Request::old('nombre'),
           array('class' => 'form-control', 'required'=>true, 'maxlength'=> 30)) }}
    </div>

    

</div>

    {{ Form::submit('Registrar Rol', ['class' => 'btn btn-primary'] ) }}

{{ Form::close() }}


@endsection
