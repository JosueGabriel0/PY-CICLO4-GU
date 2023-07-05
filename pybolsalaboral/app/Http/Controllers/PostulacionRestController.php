<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostulacionPostRequest;
use App\Models\Postulacion;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class PostulacionRestController extends Controller
{

    public function index(){

        $postulaciones=Postulacion::all();
        return response()->json($postulaciones,Response::HTTP_OK);

    }

    public function store(PostulacionPostRequest $request){

        $postulacion=Postulacion::create($request->all());
        return response()->json([
            'message'=>"Registro creado Correctamentre",
            'postulacion'=>$postulacion
        ],Response::HTTP_CREATED);
    }

    public function update(PostulacionPostRequest $request,$postulacion){
        $postulacion=Postulacion::find($postulacion);
        $postulacion->update($request->only('pos_ruta_cv', 'pos_puntaje', 'pos_estado', 'pos_eg_id', 'pos_tra_id'));
        return response()->json([
            'message'=>"Registro actualizado correctamente",
            'proveedor'=>$postulacion
        ],Response::HTTP_CREATED);
    }
    public function destroy($postulacion){
        $postulacion=Postulacion::find($postulacion);
        $postulacion->delete();
        return response()->json([
            'message'=>"Registro eliminado correctamente"
        ],Response::HTTP_OK);
    }

}
