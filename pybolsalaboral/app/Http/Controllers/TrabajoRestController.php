<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrabajoPostRequest;
use App\Models\Trabajo;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class TrabajoRestController extends Controller
{

    public function index(){

        $trabajos=Trabajo::all();
        return response()->json($trabajos,Response::HTTP_OK);

    }

    public function store(TrabajoPostRequest $request){

        $trabajo=Trabajo::create($request->all());
        return response()->json([
            'message'=>"Registro creado Correctamentre",
            'trabajo'=>$trabajo
        ],Response::HTTP_CREATED);
    }

    public function update(TrabajoPostRequest $request,$trabajo){
        $trabajo=Trabajo::find($trabajo);
        $trabajo->update($request->only('tra_fecha_publicacion', 'tra_tipo', 'tra_categoria', 'tra_descripcion', 'tra_salario', 'tra_fecha_inicio', 'tra_fecha_fin', 'tra_requiere_experiencia', 'tra_datos_contacto', 'tra_modalidad_tiempo', 'tra_beneficios', 'tra_modalidad', 'tra_titulo', 'tra_antecedentes', 'tra_estado', 'tra_remunerado', 'ps_monto_remuneracion', 'tra_ep_id'));
        return response()->json([
            'message'=>"Registro actualizado correctamente",
            'proveedor'=>$trabajo
        ],Response::HTTP_CREATED);
    }
    public function destroy($trabajo){
        $trabajo=Trabajo::find($trabajo);
        $trabajo->delete();
        return response()->json([
            'message'=>"Registro eliminado correctamente"
        ],Response::HTTP_OK);
    }

}
