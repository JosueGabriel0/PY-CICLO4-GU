<?php

namespace App\Http\Controllers;

use App\Models\Trabajo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class TrabajoController extends Controller
{

    public function index(Request $request)
    {

        $texto = trim($request->get('texto'));
        $trabajos = DB::table('trabajos')
            ->select('id', 'tra_fecha_publicacion', 'tra_tipo', 'tra_categoria', 'tra_descripcion', 'tra_salario', 'tra_fecha_inicio', 'tra_fecha_fin', 'tra_requiere_experiencia', 'tra_datos_contacto', 'tra_modalidad_tiempo', 'tra_beneficios', 'tra_modalidad', 'tra_titulo', 'tra_antecedentes', 'tra_estado', 'tra_remunerado', 'ps_monto_remuneracion', 'tra_ep_id')
            ->where('tra_fecha_publicacion', 'LIKE', '%' . $texto . '%')
            ->orWhere('tra_tipo', 'LIKE', '%' . $texto . '%')
            //->orderBy('tra_fecha_publicacion', 'asc')
            ->paginate(10);
        //$datos['trabajos'] = trabajo::paginate(10);
        return view('trabajo.index', compact('trabajos', 'texto'));
    }

    public function pdf()
    {
        $trabajos = Trabajo::paginate(100);
        $pdf = Pdf::loadView('trabajo.pdf',['trabajos'=>$trabajos])->setPaper('a3', 'landscape');
        return $pdf->stream();
        //return $pdf->download('trabajos.pdf');
    }

    public function create()
    {
        //
        return view('trabajo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $campos = [
            'tra_fecha_publicacion' => 'required|string|max:100',
            'tra_tipo' => 'required|string|max:100',
            'tra_categoria' => 'required|string|max:100',
            'tra_descripcion' => 'required|string|max:100',
            'tra_salario' => 'required|string|max:100',
            'tra_fecha_inicio' => 'required|string|max:100',
            'tra_fecha_fin' => 'required|string|max:100',
            'tra_requiere_experiencia' => 'required|string|max:100',
            'tra_datos_contacto' => 'required|string|max:100',
            'tra_modalidad_tiempo' => 'required|string|max:100',
            'tra_beneficios' => 'required|string|max:100',
            'tra_modalidad' => 'required|string|max:100',
            'tra_titulo' => 'required|string|max:100',
            'tra_antecedentes' => 'required|string|max:100',
            'tra_estado' => 'required|string|max:100',
            'tra_remunerado' => 'required|string|max:100',
            'ps_monto_remuneracion' => 'required|string|max:100',
            'tra_ep_id' => 'required|string|max:100',

        ];
        $mensaje = [
            'tra_fecha_publicacion.required' => 'La fecha de publicacion es requerida',
            'tra_tipo.required' => 'El tipo es requerido',
            'tra_categoria.required' => 'La categoria es requerida',
            'tra_descripcion.required' => 'La descripcion es requerida',
            'tra_salario.required' => 'El salario es requerido',
            'tra_fecha_inicio.required' => 'La fecha de inicio es requerida',
            'tra_fecha_fin.required' => 'La fecha de fin es requerida',
            'tra_requiere_experiencia.required' => 'El campo se "requiere experiencia" es requerida',
            'tra_datos_contacto.required' => 'Los datos del contacto son requeridos',
            'tra_modalidad_tiempo.required' => 'La modalidad de tiempo es requerida',
            'tra_beneficios.required' => 'Los beneficios son requeridos',
            'tra_modalidad.required' => 'La modalidad es requerida',
            'tra_titulo.required' => 'El titulo es requerido',
            'tra_antecedentes.required' => 'Los antecedentes son requeridos',
            'tra_estado.required' => 'El estado es requerido',
            'tra_remunerado.required' => 'La remuneracion es requerida',
            'ps_monto_remuneracion.required' => 'El monto de la remuneracion es requerida',
            'tra_ep_id.required' => 'El ID de la empresa es requerida'
        ];

        $this->validate($request, $campos, $mensaje);

        $datostrabajo = request()->except('_token');

        Trabajo::insert($datostrabajo);

        //return response()->json($datostrabajo);
        return redirect('trabajo')->with('mensaje', 'Empleado agregado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Trabajo $trabajo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //

        $trabajo = Trabajo::findOrFail($id);

        return view('trabajo.edit', compact('trabajo'));
        //return redirect('trabajo');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //

        $campos = [
            'tra_fecha_publicacion' => 'required|string|max:100',
            'tra_tipo' => 'required|string|max:100',
            'tra_categoria' => 'required|string|max:100',
            'tra_descripcion' => 'required|string|max:100',
            'tra_salario' => 'required|string|max:100',
            'tra_fecha_inicio' => 'required|string|max:100',
            'tra_fecha_fin' => 'required|string|max:100',
            'tra_requiere_experiencia' => 'required|string|max:100',
            'tra_datos_contacto' => 'required|string|max:100',
            'tra_modalidad_tiempo' => 'required|string|max:100',
            'tra_beneficios' => 'required|string|max:100',
            'tra_modalidad' => 'required|string|max:100',
            'tra_titulo' => 'required|string|max:100',
            'tra_antecedentes' => 'required|string|max:100',
            'tra_estado' => 'required|string|max:100',
            'tra_remunerado' => 'required|string|max:100',
            'ps_monto_remuneracion' => 'required|string|max:100',
            'tra_ep_id' => 'required|string|max:100',

        ];
        $mensaje = [
            'tra_fecha_publicacion.required' => 'La fecha de publicacion es requerida',
            'tra_tipo.required' => 'El tipo es requerido',
            'tra_categoria.required' => 'La categoria es requerida',
            'tra_descripcion.required' => 'La descripcion es requerida',
            'tra_salario.required' => 'El salario es requerido',
            'tra_fecha_inicio.required' => 'La fecha de inicio es requerida',
            'tra_fecha_fin.required' => 'La fecha de fin es requerida',
            'tra_requiere_experiencia.required' => 'El campo se "requiere experiencia" es requerida',
            'tra_datos_contacto.required' => 'Los datos del contacto son requeridos',
            'tra_modalidad_tiempo.required' => 'La modalidad de tiempo es requerida',
            'tra_beneficios.required' => 'Los beneficios son requeridos',
            'tra_modalidad.required' => 'La modalidad es requerida',
            'tra_titulo.required' => 'El titulo es requerido',
            'tra_antecedentes.required' => 'Los antecedentes son requeridos',
            'tra_estado.required' => 'El estado es requerido',
            'tra_remunerado.required' => 'La remuneracion es requerida',
            'ps_monto_remuneracion.required' => 'El monto de la remuneracion es requerida',
            'tra_ep_id.required' => 'El ID de la empresa es requerida'
        ];

        $this->validate($request, $campos, $mensaje);

        $datostrabajo = request()->except(['_token', '_method']);

        $trabajo = Trabajo::findOrFail($id);


        Trabajo::where('id', '=', $id)->update($datostrabajo);

        $trabajo = Trabajo::findOrFail($id);

        //return view('trabajo.edit', compact('trabajo'));
        return redirect('trabajo')->with('mensaje', 'Empleado Modificado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        trabajo::destroy($id);
        return redirect('trabajo')->with('mensaje', 'Empleado Borrado');
    }
}
