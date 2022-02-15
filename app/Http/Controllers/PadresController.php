<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiantes;
use App\Models\Padres;

class PadresController extends Controller
{
    //
    public function index() {

        $padres = padres::where("deleted", 0)->get();

        return view('padres.index', compact('padres'));
    }

    public function create () {
        return view('padres.create');
    }

    public function store(Request $request) {

        try {
            $id = $request['id'];
            $data['nombres'] = $request['nombres'];
            $data['apellidos'] = $request['apellidos'];
            $data['edad'] = $request['edad'];
            $data['fecha_nacimiento'] = $request['fecha_nacimiento'];

            Padres::create($data);

            return redirect()->route('padres.index'); 
            return response()->json([ 'message' => "Successfully created", 'success' => true ], 200);

        } catch (\Exception $e) {
            return response()->json([ 'message' => $e->getMessage(), 'success' => false, 'linea' => $e->getLine()], 500);
        }
    }

    public function edit($id) {

        $padre = Padres::find($id);

        return view('padres.edit', compact('padre'));
    }

    public function update(Request $request, $id) {
        $padre = Padres::find($id);

        $padre->update($request->all());

        return redirect()->route('padres.index');
    }

    public function destroy(Request $request) {
        Padres::where('id',$request['id'])->update([
            'deleted'=> 1
        ]);

        return redirect()->route('padres.index');
    }
}
