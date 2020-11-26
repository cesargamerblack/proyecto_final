
@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                   <h4>Usuarios <a href="usuario/create"><button class="btn btn-primary">Nuevo</button></a>
            @include('seguridad.usuario.search')</h4> 

            </div>
            
    
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
        <div class="table-responsive">
            <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                <thead class="">
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Opciones</th>
                </thead>
                @foreach ($usuarios as $usu)                  
                <tr>
                    <td>{{$usu->id}}</td>
                    <td>{{$usu->name}}</td>
                    <td>{{$usu->email}}</td>
                    <td>
                            <a href="{{URL::action('UsuarioController@edit',$usu->id)}}"><button class="btn btn-primary">Editar</button></a>
                            <a href="" data-target="#modal-delete-{{$usu->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                    </td>
                   
                </tr>
                @include('seguridad.usuario.modal')
                @endforeach

            </table>
        </div>
         {{$usuarios->render()}}       
    </div>
</div>
@endsection