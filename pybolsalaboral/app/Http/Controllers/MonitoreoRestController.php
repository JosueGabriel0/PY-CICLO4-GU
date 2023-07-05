<?php

namespace App\Http\Controllers;

use App\Http\Requests\MonitoreoPostRequest;
use App\Models\Monitoreo;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class MonitoreoRestController extends Controller
{

    public function index(){

        $monitoreos=Monitoreo::all();
        return response()->json($monitoreos,Response::HTTP_OK);

    }

    public function store(MonitoreoPostRequest $request){

        $monitoreo=Monitoreo::create($request->all());
        return response()->json([
            'message'=>"Registro creado Correctamentre",
            'monitoreo'=>$monitoreo
        ],Response::HTTP_CREATED);
    }

    public function update(MonitoreoPostRequest $request,$monitoreo){
        $monitoreo=Monitoreo::find($monitoreo);
        $monitoreo->update($request->only('mt_fecha', 'mt_duracion', 'mt_dc_id', 'mt_eg_id'));
        return response()->json([
            'message'=>"Registro actualizado correctamente",
            'proveedor'=>$monitoreo
        ],Response::HTTP_CREATED);
    }
    public function destroy($monitoreo){
        $monitoreo=Monitoreo::find($monitoreo);
        $monitoreo->delete();
        return response()->json([
            'message'=>"Registro eliminado correctamente"
        ],Response::HTTP_OK);
    }

}
