<?php

namespace App\Http\Controllers;

use App\Indice;
use Illuminate\Http\Request;

class HermanoController extends Controller
{
    public function index()
    {
        return view('hermano.index');
    }

    public function registroReporte()
    {
         $categorias = Indice::all();
        return view('reporte.registro-reporte',compact('categorias'));
    }

    public function miReportes()
    {
        $categorias = Indice::all();
        return view('reporte.mis-reportes');
    }
}