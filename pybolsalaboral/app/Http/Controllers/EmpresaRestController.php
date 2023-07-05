<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmpresaPostRequest;
use App\Models\Empresa;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class EmpresaRestController extends Controller
{

    public function index(){

        $empresas=Empresa::all();
        return response()->json($empresas,Response::HTTP_OK);

    }

    public function store(EmpresaPostRequest $request){

        $empresa=Empresa::create($request->all());
        return response()->json([
            'message'=>"Registro creado Correctamentre",
            'empresa'=>$empresa
        ],Response::HTTP_CREATED);
    }

    public function update(EmpresaPostRequest $request,$empresa){
        $empresa=Empresa::find($empresa);
        $empresa->update($request->only('ep_rubro', 'ep_anios_actividad', 'ep_num_trabajadores', 'ep_num_cedes', 'ep_sitio_web', 'ep_nombre', 'ep_direccion', 'ep_correo', 'ep_celular'));
        return response()->json([
            'message'=>"Registro actualizado correctamente",
            'proveedor'=>$empresa
        ],Response::HTTP_CREATED);
    }
    public function destroy($empresa){
        $empresa=Empresa::find($empresa);
        $empresa->delete();
        return response()->json([
            'message'=>"Registro eliminado correctamente"
        ],Response::HTTP_OK);
    }

}
