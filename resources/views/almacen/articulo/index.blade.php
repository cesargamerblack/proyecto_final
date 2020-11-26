@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Articulos</h3>
            </div>
            <div class="card-body mt-0">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xl-12 mt-0" >
                            <h3><a href="articulo/create"><button class="btn btn-outline-primary">Nuevo <span></span><i class="fas fa-plus-circle"></i></button></a></h3>
                            @include('almacen.articulo.search')
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                        <div class=" p-2 table-responsive">
                            <table class="table table-sm table-borderless table-striped table-bordered table-condensed table-hover">
                                <thead class="table-borderless">
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Codigo</th>
                                    <th>Categoria</th>
                                    <th>stock</th>
                                    <th>Imagen</th>
                                    <th>Estado</th>
                                    <th>Opciones</th>
                                </thead>
                                @foreach ($articulos as $art)                  
                                <tr>
                                    <td>{{$art->idarticulo}}</td>
                                    <td>{{$art->nombre}}</td>
                                    <td>{{$art->codigo}}</td>
                                    <td>{{$art->categoria}}</td>
                                    <td>{{$art->stock}}</td>
                                    <td>
                                    <img src="{{asset('imagenes/articulos/'.$art->imagen)}}" alt="{{$art->nombre}}" height="100px" width="100px" class="img-thumbnail">
                                    </td>
                                    <td>{{$art->estado}}</td>
                                    <td>
                                            <a href="{{URL::action('ArticuloController@edit',$art->idarticulo)}}"><button class="btn btn-outline-primary">Editar <span></span><i class="fas fa-edit"></i></button></a>
                                            <a href="" data-target="#modal-delete-{{$art->idarticulo}}" data-toggle="modal"><button class="btn btn-outline-danger">Sin existencia <span></span><i class="fas fa-trash-alt"></i></button></a>
                                    </td>
                                   
                                </tr>
                                @include('almacen.articulo.modal')
                                @endforeach
                
                            </table>
                        </div>
                         {{$articulos->render()}}       
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection