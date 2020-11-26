<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\roles;

class rolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = roles::all();
        return view('seguridad/roles.index', ["table" =>  $table ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('seguridad/roles.create',[]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|min:3|max:100',
            
        ]);
 
        $mRol = new roles($request->all());
        

        $mRol->save();

        // Regresa a lista de productos
        Session::flash('message', 'Rol creado!');
        return Redirect::to('seguridad/roles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modelo = roles::find($id);
        return view('seguridad/roles.show', ["modelo" => $modelo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modelo = roles::find($id);
        return view('seguridad/roles.edit', ["modelo" => $modelo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|min:20|max:100',
           
        ]);

        $mRoles = roles::find($id);
        $mRoles->fill($request->all());
        

        $mRoles->save();

        Session::flash('message', 'Rol actualizado!');
        return Redirect::to('seguridad/roles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mRoles = roles::find($id);
        $mRoles->delete();
        Session::flash('message', 'Rol eliminado!');
        return Redirect::to('seguridad/roles');
    }
}
