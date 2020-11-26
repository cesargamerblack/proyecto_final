<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\roles;
use App\Http\Requests\UsuarioFormRequest;
use App\Http\Requests\UpdateFormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function __construct()
    {
        //desabilitar el accseso
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if ($request) {
            $query = trim($request->get('searchText'));
            $usuario = DB::table('users')
                ->where('name', 'LIKE', '%' . $query . '%')
                ->orderBy('id', 'desc')
                ->paginate(6);
            return view('seguridad.usuario.index', ["usuarios" => $usuario, "searchText" => $query]);
        }
    }

    public function create(){
        //$roles = roles::orderBy('nombre')->get()->pluck('nombre','id');
        return view('seguridad/usuario.create',[]);
    
    }

    public function store(UsuarioFormRequest $request){
        $usuario =new User();
        $usuario->name=$request->get('name');
        $usuario->email=$request->get('email');
        $usuario->password=bcrypt($request->get('password'));
        $usuario->save();
        return Redirect::to('seguridad/usuario');
    }

    public function edit($id)
    {
       // return view('almacen.categoria.edit');
        return view("seguridad.usuario.edit",["usuarios"=>User::findOrFail($id)]);
    }
    public function update(UpdateFormRequest $request,$id)
    {
        $usuario=User::findOrFail($id);
        $usuario->name=$request->get('name');
        $usuario->email=$request->get('email');
        $usuario->password=bcrypt($request->get('password'));
        $usuario->update();
        return Redirect::to('seguridad/usuario');
    }
    public function destroy($id){
        $usuario=DB::table('users')->where('id','=',$id)->delete();       
        return Redirect::to('seguridad/usuario');
    }
}
