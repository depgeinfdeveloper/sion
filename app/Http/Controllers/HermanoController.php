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

    public function storeReporte(Request $request){

        if($request->indice == 1){

            foreach ($request->asistencia as $key => $indice) {
                if($indice == 0){

                }else{

                    $reporte = new Reporte();
                    $reporte->id_user = Auth::user()->id;
                    $reporte->id_indice = $request->indice;
                    $reporte->id_actividad = $key + 1;
                    $reporte->cantidad = $indice;

                   $actividad = Actividad::where('id', $key + 1)
                                        ->first()->toArray();
                    $reporte->klm_total = $indice * $actividad["kilometros"];
                    $reporte->fecha_reporte = $request->fecha_reporte;

                    $reporte->save();

                }

            }

            return "ok";
        } else if($request->indice == 1){

            return "opcion 2";

        }
        else if($request->indice == 3){

            return "opcion 3";

        }
        else if($request->indice == 4){

            return "opcion 2";

        }

    }
}