<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class ImagesController extends Controller
{

    public function index(Request $request)
    {

        $texto = trim($request->get('texto'));
        $images = DB::table('images')
            ->select('id', 'url', 'imageable_id', 'imageable_type')
            ->where('url', 'LIKE', '%' . $texto . '%')
            ->orWhere('imageable_id', 'LIKE', '%' . $texto . '%')
            //->orderBy('url', 'asc')
            ->paginate(10);
        //$datos['images'] = images::paginate(10);
        return view('images.index', compact('images', 'texto'));
    }

    public function pdf()
    {
        $images = Images::paginate(100);
        $pdf = Pdf::loadView('images.pdf',['images'=>$images]);
        return $pdf->stream();
        //return $pdf->download('images.pdf');
    }

    public function create()
    {
        //
        return view('images.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $campos = [

            'url' => 'required|string|max:100',
            'imageable_id' => 'required|string|max:100',
            'imageable_type' => 'required|string|max:100',

        ];
        $mensaje = [

            'url.required' => 'El url es requerido',
            'imageable_id.required' => 'El imageable ID es requerido',
            'imageable_type.required' => 'El imageable type es requerido'

        ];

        $this->validate($request, $campos, $mensaje);


        $datosimages = request()->except('_token');

        Images::insert($datosimages);

        //return response()->json($datosimages);
        return redirect('images')->with('mensaje', 'Empleado agregado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(images $images)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //

        $images = Images::findOrFail($id);

        return view('images.edit', compact('images'));
        //return redirect('images');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //

        $campos = [

            'url' => 'required|string|max:100',
            'imageable_id' => 'required|string|max:100',
            'imageable_type' => 'required|string|max:100',

        ];
        $mensaje = [

            'url.required' => 'El url es requerido',
            'imageable_id.required' => 'El imageable ID es requerido',
            'imageable_type.required' => 'El imageable type es requerido'

        ];

        $this->validate($request, $campos, $mensaje);

        $datosimages = request()->except(['_token', '_method']);

        $images = Images::findOrFail($id);


        Images::where('id', '=', $id)->update($datosimages);

        $images = Images::findOrFail($id);

        //return view('images.edit', compact('images'));
        return redirect('images')->with('mensaje', 'Empleado Modificado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Images::destroy($id);
        return redirect('images')->with('mensaje', 'Empleado Borrado');
    }
}
