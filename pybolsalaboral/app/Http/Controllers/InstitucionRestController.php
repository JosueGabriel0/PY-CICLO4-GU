<?php

namespace App\Http\Controllers;

use App\Http\Requests\InstitucionPostRequest;
use App\Models\Institucion;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class InstitucionRestController extends Controller
{

    public function index(){

        $instituciones=Institucion::all();
        return response()->json($instituciones,Response::HTTP_OK);

    }

    public function store(InstitucionPostRequest $request){

        $institucion=Institucion::create($request->all());
        return response()->json([
            'message'=>"Registro creado Correctamentre",
            'institucion'=>$institucion
        ],Response::HTTP_CREATED);
    }

    public function update(InstitucionPostRequest $request,$institucion){
        $institucion=Institucion::find($institucion);
        $institucion->update($request->only('ins_num_cedes', 'ins_num_docentes', 'ins_anios_actividad', 'ins_num_estudiantes', 'ins_sitio_web', 'ins_nombre', 'ins_direccion', 'ins_correo', 'ins_celular'));
        return response()->json([
            'message'=>"Registro actualizado correctamente",
            'proveedor'=>$institucion
        ],Response::HTTP_CREATED);
    }
    public function destroy($institucion){
        $institucion=Institucion::find($institucion);
        $institucion->delete();
        return response()->json([
            'message'=>"Registro eliminado correctamente"
        ],Response::HTTP_OK);
    }

}
