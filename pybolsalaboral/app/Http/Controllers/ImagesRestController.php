<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImagesPostRequest;
use App\Models\Images;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class ImagesRestController extends Controller
{

    public function index(){

        $images=Images::all();
        return response()->json($images,Response::HTTP_OK);

    }

    public function store(ImagesPostRequest $request){

        $images=Images::create($request->all());
        return response()->json([
            'message'=>"Registro creado Correctamentre",
            'images'=>$images
        ],Response::HTTP_CREATED);
    }

    public function update(ImagesPostRequest $request,$images){
        $images=Images::find($images);
        $images->update($request->only('url', 'imageable_id', 'imageable_type'));
        return response()->json([
            'message'=>"Registro actualizado correctamente",
            'proveedor'=>$images
        ],Response::HTTP_CREATED);
    }
    public function destroy($images){
        $images=Images::find($images);
        $images->delete();
        return response()->json([
            'message'=>"Registro eliminado correctamente"
        ],Response::HTTP_OK);
    }

}
