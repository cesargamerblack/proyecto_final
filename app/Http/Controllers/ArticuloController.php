<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Articulo;
use Illuminate\Http\Request;
use App\Http\Requests\ArticuloFormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules\In;
use Symfony\Component\Console\Input\Input as SymfonyInput;
use Laracasts\Flash\Flash;

class ArticuloController extends Controller
{
    public function __construct()
    {
        //desabilitar el accseso
       $this->middleware('auth');
    }
    public function index1(){
        return view('almacen.articulo.index');
    }
    public function index(Request $request){
         {
            $query = trim($request->get('searchText'));
            $articulos = DB::table('articulo as a')
            ->join('categoria as c','a.idcategoria','=','c.idcategoria')
            ->select('a.idarticulo','a.nombre','a.codigo','a.stock','c.nombre as categoria','a.descripcion','a.imagen','a.estado')
            ->where('a.nombre', 'LIKE', '%' . $query . '%')
            ->orwhere('a.codigo', 'LIKE', '%' . $query . '%')
            ->orderBy('a.idarticulo','desc')
            ->paginate(6);
            return view('almacen/articulo.index', ["articulos" => $articulos,"searchText"=>$query]);
               
        }

    }
    public function create(){
        //para cargar a combobox
        $categorias=DB::table('categoria')->where('condicion','=','1')->get();
        return view('almacen/articulo.create',["categoria"=>$categorias]);
      // return view('almacen.articulo.create');
    }
    public function store(ArticuloFormRequest $request){
        $articulo =new Articulo;
        $articulo->idcategoria=$request->get('idcategoria');
        $articulo->codigo=$request->get('codigo');
        $articulo->nombre=$request->get('nombre');
        $articulo->stock=$request->get('stock');
        $articulo->descripcion=$request->get('descripcion');
        $articulo->estado='Activo';

        //if(Input::has_file('imagen')){
       //     $file=Input::file('imagen');
         //   $file->move(public_path().'/imagenes/articulos/',$file->getClientOriginalName());
          //  $articulo->imagen=getClientOriginalName();

       // }
       if ($request->file('imagen')) {
        $file=$request->file('imagen');
       // $name='blogfacilito_'.time().'.'.$file->getClientOriginalExtension();
      
        $name=$file->getClientOriginalName();
        $path=public_path().'/imagenes/articulos/';
        $file->move($path,$name);
        $articulo->imagen=$name;
    }

 
        $articulo->save();
        //Flash::success("Se ha creado el articulo ".$articulo->nombre.' de forma satisfactoria.');
    
        return Redirect::to('almacen/articulo');
    }
    public function show($id){
        return view("almacen/articulo.show",["articulo"=>Articulo::findOrFail($id)]);

    }
    public function edit($id)
    {
       // return view('almacen.categoria.edit');
       $articulo=Articulo::findOrFail($id);
       $categoria=DB::table('categoria')->where('condicion','=','1')->get();
        return view("almacen.articulo.edit",["articulo"=>$articulo,"categorias"=>$categoria]);
    }
    public function update(ArticuloFormRequest $request,$id)
    {
        $articulo=Articulo::findOrFail($id);
        $articulo->idcategoria=$request->get('idcategoria');
        $articulo->codigo=$request->get('codigo');
        $articulo->nombre=$request->get('nombre');
        $articulo->stock=$request->get('stock');
        $articulo->descripcion=$request->get('descripcion');
        $articulo->estado='Activo';

        if ($request->file('imagen')) {
            $file=$request->file('imagen');
         
            $name=$file->getClientOriginalName();
            $path=public_path().'/imagenes/articulos/';
            $file->move($path,$name);
            $articulo->imagen=$name;
        }
        $articulo->update();
        return Redirect::to('almacen/articulo');
    }
    public function destroy($id){
        $articulo=Articulo::findOrFail($id);
        $articulo->estado='Inactivo';
        $articulo->update();
        return Redirect::to('almacen/articulo');
    }
}
