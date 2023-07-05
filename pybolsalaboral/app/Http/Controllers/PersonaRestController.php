<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonaPostRequest;
use App\Models\Persona;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class PersonaRestController extends Controller
{
    public function index(){

        $personas=Persona::all();
        return response()->json($personas,Response::HTTP_OK);

    }

    public function store(PersonaPostRequest $request){

        $persona=Persona::create($request->all());
        return response()->json([
            'message'=>"Registro creado Correctamentre",
            'persona'=>$persona
        ],Response::HTTP_CREATED);
    }

    public function update(PersonaPostRequest $request,$persona){
        $persona=Persona::find($persona);
        $persona->update($request->only('ps_nombre','ps_paterno','ps_materno','ps_edad','ps_dni','ps_correo','ps_celular','ps_direccion','ps_estado_civil','ps_fecha_nacimiento','ps_sexo','ps_usuario','ps_password','ps_rol'));
        return response()->json([
            'message'=>"Registro actualizado correctamente",
            'proveedor'=>$persona
        ],Response::HTTP_CREATED);
    }
    public function destroy($persona){
        $persona=Persona::find($persona);
        $persona->delete();
        return response()->json([
            'message'=>"Registro eliminado correctamente"
        ],Response::HTTP_OK);
    }

}
