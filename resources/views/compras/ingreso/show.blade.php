@extends ('layouts.admin')
@section ('contenido')
 <a href="{{ URL::to('compras/ingreso') }}">Regresar</a>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Detalle de compra</h5>
            </div>
            <div class="card-body">
                <div class="row">
                        <div class="col-md-6 col-6">
                                <div class="form-group">
                                    <label for="">Proveedor</label>
                                    <p>{{$ingreso->nombre}}</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-6">
                                <div class="form-group">
                                    <label>Fecha Hora</label>
                                    <p>{{$ingreso->fecha_hora}}</p>
                                </div>
                            </div>
            
                            <div class="col-md-4 col-4">
                                <div class="form-group">
                                    <label>Tipo Comprobante</label>
            
                                    <p>{{$ingreso->tipo_comprobante}}</p>
            
                                </div>
                            </div>
                            <div class="col-md-4 col-4">
                                <div class="form-group">
                                    <label>Serie Comprobante</label>
            
                                    <p>{{$ingreso->serie_comprobante}}</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-4">
                                <div class="form-group">
                                    <label>Numero Comprobante</label>
            
                                    <p>{{$ingreso->num_comprobante}}</p>
                                </div>
                            </div>
                </div>


            </div>
            <div class="p-2">
                <div class="card p-3 ">
                    <div class="row">

                        <div class="col-sm-12 col-md-12 col-12">
                            <table id="detalles"
                                class=" table table-striped table-bordered table-condensed table-hover">
                                <thead style="background-color:#5bc500">

                                    <th>Articulo</th>
                                    <th>Cantidad</th>
                                    <th>Precio Compra</th>
                                    <th>Precio Venta</th>
                                    <th>Subtotal</th>
                                </thead>
                                <tfoot>

                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>
                                        <h4 id="total">{{$ingreso->total}}</h4>
                                    </th>
                                </tfoot>
                                <tbody>
                                    @foreach ($detalles as $det)
                                    <tr>
                                        <td>{{$det->articulo}}</td>
                                        <td>{{$det->cantidad}}</td>
                                        <td>{{$det->precio_compra}}</td>
                                        <td>{{$det->precio_venta}}</td>
                                        <td>{{$det->cantidad*$det->precio_compra}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



</div>




@endsection