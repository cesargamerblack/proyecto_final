@extends ('layouts.admin')
@extends ('layouts.vendedor')
@section ('contenido')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Listado de clientes</h4>
            </div>
            <div class="card-body">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xl-12">
                    <h3> <a href="cliente/create"><button class="btn btn-primary">Nuevo</button></a></h3>
                    @include('ventas.cliente.search')
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                    <div class="p-2 table-responsive">
                        <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                            <thead class="">
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Tipo Doc.</th>
                                <th>Numero Doc</th>
                                <th>Telefono</th>
                                <th>Email</th>
                                <th>Opciones</th>
                            </thead>
                            @foreach ($personas as $per)
                            <tr>
                                <td>{{$per->idpersona}}</td>
                                <td>{{$per->nombre}}</td>
                                <td>{{$per->tipo_documento}}</td>
                                <td>{{$per->num_documento}}</td>
                                <td>{{$per->telefono}}</td>
                                <td>{{$per->email}}</td>

                                <td>
                                    <a href="{{URL::action('ClienteController@edit',$per->idpersona)}}"><button
                                            class="btn btn-primary">Editar</button></a>
                                    <a href="" data-target="#modal-delete-{{$per->idpersona}}"
                                        data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                                </td>

                            </tr>
                            @include('ventas.cliente.modal')
                            @endforeach

                        </table>
                    </div>
                    {{$personas->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection