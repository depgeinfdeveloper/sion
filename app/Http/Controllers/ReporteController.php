<?php

namespace App\Http\Controllers;

use App\Indice;
use App\Reporte;
use App\Actividad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReporteController extends Controller
{

    public function registroReporte()
    {
        if (Auth::user()->id_nivel == 1 || Auth::user()->id_nivel == 2) {

            $categorias = Indice::whereIn('id', array(1,2,3,4))->get();

            return view('reporte.registro-reporte', compact('categorias'));

        } else if (Auth::user()->id_nivel == 3 || Auth::user()->id_nivel == 4 || Auth::user()->id_nivel == 5) {

            $categorias = Indice::whereIn('id', array(3,4))->get();
            return view('reporte.registro-reporte', compact('categorias'));

        }
    }

    public function miReportes()
    {

        return view('reporte.mis-reportes');

    }

    public function storeReporte(Request $request)
    {

        // if ($request->indice == 1) {

            foreach ($request->asistencia as $key => $indice) {
                if ($indice == 0) {
                } else {

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
            return back();

        // } else if ($request->indice == 2) {

        //     return "opcion 2";
        // } else if ($request->indice == 3) {

        //     return "opcion 3";
        // } else if ($request->indice == 4) {

        //     return "opcion 2";
        // }
    }
}
