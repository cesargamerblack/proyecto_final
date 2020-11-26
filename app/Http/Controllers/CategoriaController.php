<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Categoria;
use App\Http\Requests\CategoriaFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class CategoriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index1(){
        return view('almacen.categoria.index');
    }
    public function index(Request $request){
         {
            $query = trim($request->get('searchText'));
            //$cate = DB::table('categoria')->select('idcategoria','nombre','descripcion','condicion')->get();
            $cate = DB::table('categoria')
            ->where('nombre', 'LIKE', '%' . $query . '%')
            ->where('condicion','1')
            ->orderBy('idcategoria','desc')
            ->paginate(6);
           // $categorias=BD::table('categoria')->where('nombre', 'LIKE', '%' . $query . '%')
               // ->where('condicion', '=', '1')
               // ->orderBy('idcategoria', 'desc')
              //  ->paginate(7);
                //return view('almacen.categoria.index',["categorias"=>$categorias,"searchText"=>$query]);
                return view('almacen/categoria.index', ["categorias" => $cate,"searchText"=>$query]);
               
        }

    }
    public function create(){
        return view('almacen/categoria.create');
    }
    public function store(CategoriaFormRequest $request){
        $categoria =new Categoria;
        $categoria->nombre=$request->get('nombre');
        $categoria->descripcion=$request->get('descripcion');
        $categoria->condicion='1';
        $categoria->save();
        return Redirect::to('almacen/categoria');
    }
    public function show($id){
        return view("almacen/categoria.show",["categoria"=>Categoria::findOrFail($id)]);

    }
    public function edit($id)
    {
       // return view('almacen.categoria.edit');
        return view("almacen.categoria.edit",["categoria"=>Categoria::findOrFail($id)]);
    }
    public function update(CategoriaFormRequest $request,$id)
    {
        $categoria=Categoria::findOrFail($id);
        $categoria->nombre=$request->get('nombre');
        $categoria->descripcion=$request->get('descripcion');
        $categoria->update();
        return Redirect::to('almacen/categoria');
    }
    public function destroy($id){
        $categoria=Categoria::findOrFail($id);
        $categoria->condicion='0';
        $categoria->update();
        return Redirect::to('almacen/categoria');
    }
}
