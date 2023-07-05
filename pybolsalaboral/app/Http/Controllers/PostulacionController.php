<?php

namespace App\Http\Controllers;

use App\Models\Postulacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class PostulacionController extends Controller
{

    public function index(Request $request)
    {

        $texto = trim($request->get('texto'));
        $postulaciones = DB::table('postulacions')
            ->select('id', 'pos_ruta_cv', 'pos_puntaje', 'pos_estado', 'pos_eg_id', 'pos_tra_id')
            ->where('pos_ruta_cv', 'LIKE', '%' . $texto . '%')
            ->orWhere('pos_puntaje', 'LIKE', '%' . $texto . '%')
            //->orderBy('pos_ruta_cv', 'asc')
            ->paginate(10);
        //$datos['postulaciones'] = postulacion::paginate(10);
        return view('postulacion.index', compact('postulaciones', 'texto'));
    }

    public function pdf()
    {
        $postulaciones = Postulacion::paginate(100);
        $pdf = Pdf::loadView('postulacion.pdf',['postulaciones'=>$postulaciones]);
        return $pdf->stream();
        //return $pdf->download('postulaciones.pdf');
    }

    public function create()
    {
        //
        return view('postulacion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $campos = [
            'pos_ruta_cv' => 'required|max:10000|mimes:pdf',
            'pos_puntaje' => 'required|string|max:100',
            'pos_estado' => 'required|string|max:100',
            'pos_eg_id' => 'required|string|max:100',
            'pos_tra_id' => 'required|string|max:100',

        ];
        $mensaje = [
            'pos_ruta_cv.required' => 'La ruta del cv es requerida',
            'pos_puntaje.required' => 'El puntaje es requedido',
            'pos_estado.required' => 'El estado es requerido',
            'pos_eg_id.required' => 'El ID del egresado es requerido',
            'pos_tra_id.required' => 'El ID del trabajo es requerido'
        ];

        $this->validate($request, $campos, $mensaje);

        $datospostulacion = request()->except('_token');

        Postulacion::insert($datospostulacion);

        //return response()->json($datospostulacion);
        return redirect('postulacion')->with('mensaje', 'Empleado agregado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Postulacion $postulacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //

        $postulacion = Postulacion::findOrFail($id);

        return view('postulacion.edit', compact('postulacion'));
        //return redirect('postulacion');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //

        $campos = [
            'pos_ruta_cv' => 'required|string|max:100',
            'pos_puntaje' => 'required|string|max:100',
            'pos_estado' => 'required|string|max:100',
            'pos_eg_id' => 'required|string|max:100',
            'pos_tra_id' => 'required|string|max:100',

        ];
        $mensaje = [
            'pos_ruta_cv.required' => 'La ruta del cv es requerida',
            'pos_puntaje.required' => 'El puntaje es requedido',
            'pos_estado.required' => 'El estado es requerido',
            'pos_eg_id.required' => 'El ID del egresado es requerido',
            'pos_tra_id.required' => 'El ID del trabajo es requerido'
        ];

        $this->validate($request, $campos, $mensaje);

        $datospostulacion = request()->except(['_token', '_method']);

        $postulacion = Postulacion::findOrFail($id);


        Postulacion::where('id', '=', $id)->update($datospostulacion);

        $postulacion = Postulacion::findOrFail($id);

        //return view('postulacion.edit', compact('postulacion'));
        return redirect('postulacion')->with('mensaje', 'Empleado Modificado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        postulacion::destroy($id);
        return redirect('postulacion')->with('mensaje', 'Empleado Borrado');
    }
}
