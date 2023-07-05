<?php

namespace App\Http\Controllers;

use App\Http\Requests\EgresadoPostRequest;
use App\Models\Egresado;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class EgresadoRestController extends Controller
{

    public function index(){

        $egresados=Egresado::all();
        return response()->json($egresados,Response::HTTP_OK);

    }

    public function store(EgresadoPostRequest $request){

        $egresado=Egresado::create($request->all());
        return response()->json([
            'message'=>"Registro creado Correctamentre",
            'egresado'=>$egresado
        ],Response::HTTP_CREATED);
    }

    public function update(EgresadoPostRequest $request,$egresado){
        $egresado=egresado::find($egresado);
        $egresado->update($request->only('eg_codigo', 'eg_anios_experiencia', 'eg_ruta_cv', 'eg_religion', 'eg_especialidad', 'eg_nivel_academico', 'eg_ps_id', 'eg_ins_id'));
        return response()->json([
            'message'=>"Registro actualizado correctamente",
            'proveedor'=>$egresado
        ],Response::HTTP_CREATED);
    }
    public function destroy($egresado){
        $egresado=Egresado::find($egresado);
        $egresado->delete();
        return response()->json([
            'message'=>"Registro eliminado correctamente"
        ],Response::HTTP_OK);
    }

}
