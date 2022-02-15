<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiantes;
use PDF;
use Log;

class ReporteController extends Controller
{
    //
    public function index()
    {
        $reportes = Estudiantes::with("padres_familia")->where("deleted", 0)->get();
        return view('reporte.reporte' , compact('reportes'));;
    }

    public function reporte(Request $request){

        $data = [
          'data' => $request['data']
        ];

        Log::info($data);
        $pdf = PDF::loadView('reporte.reporte', $data);
        return $pdf->setPaper('a4', 'landscape')->stream('descargar.pdf');
    }
}
