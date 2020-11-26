@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                 <h5>Detalle de la venta</h5>
            </div>
            <div class="card-body">
                    <div class="row">
                            <div class="col-md-6 col-6">
                                <div class="form-group">
                                    <label>Cliente</label>            
                                <p>{{$ventas->nombre}}</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-6">
                                    <div class="form-group">
                                        <label>Fecha Hora</label>            
                                    <p>{{$ventas->fecha_hora}}</p>
                                    </div>
                                </div>
                            
                            <div class="col-md-4 col-4">
                                <div class="form-group">
                                    <label>Tipo Comprobante</label>
                                    
                                    <p>{{$ventas->tipo_comprobante}}</p>
                                
                                </div>
                            </div>
                            <div class="col-md-4 col-4">
                                <div class="form-group">
                                    <label>Serie Comprobante</label>
                                    
                                    <p>{{$ventas->serie_comprobante}}</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-4">
                                <div class="form-group">
                                    <label>Numero Comprobante</label>
                                    
                                    <p>{{$ventas->num_comprobante}}</p>
                                </div>
                            </div>   
                            
                        </div>
                        <div class="">
                            <div class="card p-3 ">
                                <div class="row">
                                    
                                     <div class="col-sm-12 col-md-12 col-12">
                                        <table id="detalles" class=" table table-sm table-striped table-bordered table-condensed table-hover">
                                            <thead style="background-color:#5bc500">
                                                
                                                <th>Articulo</th>
                                                <th>Cantidad</th>
                                                <th>Precio Venta</th>
                                                <th>Descuento</th>
                                                <th>Subtotal</th>
                                            </thead>
                                            <tfoot style="background-color:#CCFF90">
                                                
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>Total</th>
                                            <th><h4 id="total">{{$ventas->total_venta}}</h4></th>
                                            </tfoot>
                                            <tbody>
                                                @foreach ($detalles as $det)
                                                    <tr>
                                                    <td>{{$det->articulo}}</td>
                                                    <td>{{$det->cantidad}}</td>
                                                    <td>{{$det->precio_venta}}</td>
                                                    <td>{{$det->descuento}}</td>
                                                    <td>{{$det->cantidad*$det->precio_venta-$det->descuento}}</td>
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
</div>    
        


@endsection