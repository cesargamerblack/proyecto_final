@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    <div class="col-md-12 ">
        <div class="card">
            <div class="card-header">
                <h5>Compras</h5>
            </div>
            <div class="card-body">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xl-12" >
           
                            <h3><a href="{{url('compras/ingreso/create')}}"><button class="btn btn-primary">Nueva compra</button></a></h3>
                            @include('compras.ingreso.search')
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                        <div class="table-responsive table-sm p-2">
                            <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                <thead class="">
                                    <th>Id</th>
                                    <th>Fecha</th>
                                    <th>Proveedor</th>
                                    <th>Comprobante</th>                    
                                    <th>Impuesto</th> 
                                    <th>Total</th>                    
                                    <th>Estado</th>
                                    <th>Opciones</th> 
                                </thead>
                                @foreach ($ingresos as $ing)                  
                                <tr class="">
                                    <td class="">{{$ing->idingreso}}</td>
                                    <td class="">{{$ing->fecha_hora}}</td>
                                    <td>{{$ing->nombre}}</td>
                                    <td>{{$ing->tipo_comprobante.': '.$ing->serie_comprobante.'-'.$ing->num_comprobante}}</td>
                                                  
                                    <td>{{$ing->impuesto}}</td> 
                                    <td>{{$ing->total}}</td>
                                    <td>{{$ing->estado}}</td>  
                                    <td>
                                            <a href="{{URL::action('IngresoController@show',$ing->idingreso)}}"><button class="btn btn-primary">Detalles</button></a>
                                            <a href="" data-target="#modal-delete-{{$ing->idingreso}}" data-toggle="modal"><button class="btn btn-danger">Anular</button></a>
                                    </td>
                                   
                                </tr>
                                @include('compras.ingreso.modal')
                                @endforeach
                
                            </table>
                        </div>
                         {{$ingresos->render()}}       
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection