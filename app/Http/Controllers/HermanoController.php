<?php

namespace App\Http\Controllers;

use App\Actividad;
use App\Indice;
use App\Reporte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HermanoController extends Controller
{
    public function index()
    {
        return view('hermano.index');
    }

}