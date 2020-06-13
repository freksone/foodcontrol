<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoinTableController extends Controller
{
    function index()
    {
     $data = DB::table('comidas')
       ->join('empleados', 'empleados.Area', '=', 'comidas.Area')
       ->select('comidas.Comida', 'comidas.Area', 'empleados.Nombre', 'comidas.Horario')
       ->get();
     return view('join_table', compact('data'));

    }
}
?>
