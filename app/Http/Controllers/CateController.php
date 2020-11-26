<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CateController extends Controller
{
    public function index()
    {
        $cate = DB::table('categoria')->select('idcategoria','nombre','condicion')->get();
        return $cate;

       // return view('user.index', ['users' => $users]);
    }
}
