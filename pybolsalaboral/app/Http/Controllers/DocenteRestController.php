<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocentePostRequest;
use App\Models\Docente;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class DocenteRestController extends Controller
{

    public function index(){

        $docentes=Docente::all();
        return response()->json($docentes,Response::HTTP_OK);

    }

    public function store(DocentePostRequest $request){

        $docente=Docente::create($request->all());
        return response()->json([
            'message'=>"Registro creado Correctamentre",
            'docente'=>$docente
        ],Response::HTTP_CREATED);
    }

    public function update(DocentePostRequest $request,$docente){
        $docente=Docente::find($docente);
        $docente->update($request->only('dc_grado_academico', 'dc_anios_trabajo', 'dc_especialidad', 'dc_grado_estudios', 'dc_ps_id'));
        return response()->json([
            'message'=>"Registro actualizado correctamente",
            'proveedor'=>$docente
        ],Response::HTTP_CREATED);
    }
    public function destroy($docente){
        $docente=Docente::find($docente);
        $docente->delete();
        return response()->json([
            'message'=>"Registro eliminado correctamente"
        ],Response::HTTP_OK);
    }

}
