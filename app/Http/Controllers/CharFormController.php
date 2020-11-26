<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class CharFormController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
             
                    
          $venta = DB::table('venta as v')
          ->join('persona as p', 'v.idcliente', '=', 'p.idpersona')
          ->select('p.nombre as nombre',DB::raw('SUM(total_venta) as total'))
          ->groupBy('nombre')
          ->get();

          //$f=venta::whereDate('created_at', '=', Carbon::now()->format('Y-m-d'))->get();
          
         

          $ventaxfecha = DB::table('venta')
          
          ->select(DB::raw('MONTHNAME(fecha_hora) as fecha'),DB::raw('SUM(total_venta) as total'))
          ->groupBy('fecha')
          ->get();
          
        
            return view('reportes.index', ["ventas" => $venta,"ventaxfecha"=>$ventaxfecha]);


           
        
           // return view('reportes.index', ["ventaxfecha" => $ventaxfecha]);
           

        //return view('reportes.index');
    }
}
