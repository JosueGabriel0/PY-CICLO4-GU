<?php

namespace App\Http\Controllers;

use App\Models\Egresado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class EgresadoController extends Controller
{

    public function index(Request $request)
    {

        $texto = trim($request->get('texto'));
        $egresados = DB::table('egresados')
            ->select('id', 'eg_codigo', 'eg_anios_experiencia', 'eg_ruta_cv', 'eg_religion', 'eg_especialidad', 'eg_nivel_academico', 'eg_ps_id', 'eg_ins_id')
            ->where('eg_codigo', 'LIKE', '%' . $texto . '%')
            ->orWhere('eg_anios_experiencia', 'LIKE', '%' . $texto . '%')
            //->orderBy('eg_codigo', 'asc')
            ->paginate(10);
        //$datos['egresados'] = egresado::paginate(10);
        return view('egresado.index', compact('egresados', 'texto'));
    }

    public function pdf()
    {
        $egresados = Egresado::paginate(100);
        $pdf = Pdf::loadView('egresado.pdf',['egresados'=>$egresados]);
        return $pdf->stream();
        //return $pdf->download('egresados.pdf');
    }

    public function create()
    {
        //
        return view('egresado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $campos = [
            'eg_codigo' => 'required|string|max:100',
            'eg_anios_experiencia' => 'required|string|max:100',
            'eg_ruta_cv' => 'required|string|max:100',
            'eg_religion' => 'required|string|max:100',
            'eg_especialidad' => 'required|string|max:100',
            'eg_nivel_academico' => 'required|string|max:100',
            'eg_ps_id' => 'required|string|max:100',
            'eg_ins_id' => 'required|string|max:100',

        ];
        $mensaje = [
            'eg_codigo.required' => 'El codigo es requerido',
            'eg_anios_experiencia.required' => 'Los anios de experiencia son requeridos',
            'eg_ruta_cv.required' => 'La ruta del cv es requerido',
            'eg_religion.required' => 'La religion es requerida',
            'eg_especialidad.required' => 'La especialidad es requerida',
            'eg_nivel_academico.required' => 'El nivel academico es requerido',
            'eg_ps_id.required' => 'El ID de la persona es requerido',
            'eg_ins_id.required' => 'El ID de la institucion es requerido'

        ];

        $this->validate($request, $campos, $mensaje);

        $datosegresado = request()->except('_token');

        Egresado::insert($datosegresado);

        //return response()->json($datosegresado);
        return redirect('egresado')->with('mensaje', 'Empleado agregado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Egresado $egresado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //

        $egresado = Egresado::findOrFail($id);

        return view('egresado.edit', compact('egresado'));
        //return redirect('egresado');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //

        $campos = [
            'eg_codigo' => 'required|string|max:100',
            'eg_anios_experiencia' => 'required|string|max:100',
            'eg_ruta_cv' => 'required|string|max:100',
            'eg_religion' => 'required|string|max:100',
            'eg_especialidad' => 'required|string|max:100',
            'eg_nivel_academico' => 'required|string|max:100',
            'eg_ps_id' => 'required|string|max:100',
            'eg_ins_id' => 'required|string|max:100',

        ];
        $mensaje = [
            'eg_codigo.required' => 'El codigo es requerido',
            'eg_anios_experiencia.required' => 'Los anios de experiencia son requeridos',
            'eg_ruta_cv.required' => 'La ruta del cv es requerido',
            'eg_religion.required' => 'La religion es requerida',
            'eg_especialidad.required' => 'La especialidad es requerida',
            'eg_nivel_academico.required' => 'El nivel academico es requerido',
            'eg_ps_id.required' => 'El ID de la persona es requerido',
            'eg_ins_id.required' => 'El ID de la institucion es requerido'

        ];

        $this->validate($request, $campos, $mensaje);

        $datosegresado = request()->except(['_token', '_method']);

        $egresado = Egresado::findOrFail($id);


        Egresado::where('id', '=', $id)->update($datosegresado);

        $egresado = Egresado::findOrFail($id);

        //return view('egresado.edit', compact('egresado'));
        return redirect('egresado')->with('mensaje', 'Empleado Modificado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Egresado ::destroy($id);
        return redirect('egresado')->with('mensaje', 'Empleado Borrado');
    }
}
