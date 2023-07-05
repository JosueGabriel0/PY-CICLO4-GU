<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdministradorPostRequest;
use App\Models\Administrador;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class AdministradorRestController extends Controller
{

    public function index(){

        $administradores=Administrador::all();
        return response()->json($administradores,Response::HTTP_OK);

    }

    public function store(AdministradorPostRequest $request){

        $administrador=Administrador::create($request->all());
        return response()->json([
            'message'=>"Registro creado Correctamentre",
            'administrador'=>$administrador
        ],Response::HTTP_CREATED);
    }

    public function update(AdministradorPostRequest $request,$administrador){
        $administrador=Administrador::find($administrador);
        $administrador->update($request->only('ad_puesto', 'ad_salario', 'ad_fecha_ultimo_acceso', 'ps_id'));
        return response()->json([
            'message'=>"Registro actualizado correctamente",
            'proveedor'=>$administrador
        ],Response::HTTP_CREATED);
    }
    public function destroy($administrador){
        $administrador=Administrador::find($administrador);
        $administrador->delete();
        return response()->json([
            'message'=>"Registro eliminado correctamente"
        ],Response::HTTP_OK);
    }

}
