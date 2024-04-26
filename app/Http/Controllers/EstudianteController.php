<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Estudiante::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //validar el request
        $request->validate([
            'nombre'=>'required|string',
            'apellido'=>'required|string',
            'carnet'=>'required|unique:estudiantes,carnet',
            'direccion'=> 'required|string',
            'edad'=> 'required|numeric',
            'tutor'=> 'required',
            'curso'=>'required',
        ]);

        $estudiante = new Estudiante;

        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->carnet = $request->carnet;
        $estudiante->direccion = $request->direccion;
        $estudiante->edad = $request->edad;
        $estudiante->tutor = $request->tutor;
        $estudiante->curso = $request->curso;

        $estudiante->save();

        return $estudiante;

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $estudiante = Estudiante::find($id);
        if(is_null($estudiante)){
            return response()->json('Hubo un error en la consulta', 404);
        }

        return $estudiante;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estudiante $estudiante)
    {
         //validar el request
         $request->validate([
            'nombre'=>'required|string',
            'apellido'=>'required|string',
            'direccion'=> 'required|string',
            'edad'=> 'required|numeric',
            'tutor'=> 'required',
            'curso'=>'required',
        ]);

        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->direccion = $request->direccion;
        $estudiante->edad = $request->edad;
        $estudiante->tutor = $request->tutor;
        $estudiante->curso = $request->curso;

        $estudiante->update();

        return $estudiante;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $estudiante = Estudiante::find($id);
        if(is_null($estudiante)){
            return response()->json('Hubo un error en la consulta', 404);
        }

        $estudiante->delete();
        return response()->noContent();
    }
}
