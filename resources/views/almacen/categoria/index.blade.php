@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    <div class="col-md-12">

    
    <div class="card">
        <div class="card-header">
            <h4>Listado de categorias</h4>
        </div>
        <div class="car-body p-2">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xl-12" >
                        <h3> <a href="categoria/create"><button class="btn btn-outline-primary">Nuevo<span></span><i class="fas fa-plus-circle"></i></button></a></h3>
                        @include('almacen.categoria.search')
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                    <div class="table-responsive">
                        <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                            <thead class="">
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Opciones</th>
                            </thead>
                            @foreach ($categorias as $cat)                  
                            <tr>
                                <td>{{$cat->idcategoria}}</td>
                                <td>{{$cat->nombre}}</td>
                                <td>{{$cat->descripcion}}</td>
                                <td>
                                        <a href="{{URL::action('CategoriaController@edit',$cat->idcategoria)}}"><button class="btn btn-outline-primary">Editar <span></span><i class="fas fa-edit"></i></button></a>
                                        <a href="" data-target="#modal-delete-{{$cat->idcategoria}}" data-toggle="modal"><button class="btn btn-outline-danger">Eliminar <span></span><i class="fas fa-trash-alt"></i></button></a>
                                </td>
                               
                            </tr>
                            @include('almacen.categoria.modal')
                            @endforeach
            
                        </table>
                    </div>
                     {{$categorias->render()}}       
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection