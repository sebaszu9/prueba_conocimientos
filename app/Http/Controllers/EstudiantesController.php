<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiantes;
use App\Models\Padres;

class EstudiantesController extends Controller
{
    //
    public function index() {

        $estudiantes = Estudiantes::with("padres_familia")->where("deleted", 0)->get();

        return view('estudiantes.index', compact('estudiantes'));
    }

    public function create () {
        $padres = Padres::get();

        return view('estudiantes.create', compact('padres'));
    }

    public function store(Request $request) {

        try {
            $id = $request['id'];
            $data['nombres'] = $request['nombres'];
            $data['apellidos'] = $request['apellidos'];
            $data['edad'] = $request['edad'];
            $data['fecha_nacimiento'] = $request['fecha_nacimiento'];
            $data['padres'] = $request['padres'];
            $data['alergias'] = $request['alergias'];
            $data['medico'] = $request['medico'];

            Estudiantes::create($data);

            return redirect()->route('estudiantes.index'); 
            return response()->json([ 'message' => "Successfully created", 'success' => true ], 200);

        } catch (\Exception $e) {
            return response()->json([ 'message' => $e->getMessage(), 'success' => false, 'linea' => $e->getLine()], 500);
        }
    }

    public function edit($id) {

        $estudiante = Estudiantes::find($id);

        return view('estudiantes.edit', compact('estudiante'));
    }

    public function update(Request $request, $id) {
        $estudiante = Estudiantes::find($id);

        $estudiante->update($request->all());

        return redirect()->route('estudiantes.index');
    }

    public function destroy(Request $request) {
        Estudiantes::where('id',$request['id'])->update([
            'deleted'=> 1
        ]);

        return redirect()->route('estudiantes.index');
    }

    
}
