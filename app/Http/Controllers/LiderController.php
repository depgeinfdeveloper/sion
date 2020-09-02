<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LiderController extends Controller
{
    public function index()
    {
        return view('lider.index');
    }

    public function misMiembros()
    {

        $misMiembros = DB::table('users')
            ->where('users.id_nivel', 3)
            ->where('users.id_iglesia', Auth::user()->id_iglesia)
            ->where('users.id_region', Auth::user()->id_region)
            ->where('users.estado', 1)
            ->join('nivel', 'users.id_nivel', '=', 'nivel.id')
            ->select('users.id', 'users.estado', 'users.id_nivel', 'users.name', 'users.email', 'nivel.nombre as nombre_nivel')
            ->get();

        return view('lider.mis-miembros', compact('misMiembros'));
    }
}