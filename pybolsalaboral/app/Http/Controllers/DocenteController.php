<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class DocenteController extends Controller
{


    public function index(Request $request)
    {

        $texto = trim($request->get('texto'));
        $docentes = DB::table('docentes')
            ->select('id', 'dc_grado_academico', 'dc_anios_trabajo', 'dc_especialidad', 'dc_grado_estudios', 'dc_ps_id')
            ->where('dc_grado_academico', 'LIKE', '%' . $texto . '%')
            ->orWhere('dc_anios_trabajo', 'LIKE', '%' . $texto . '%')
            ->orWhere('dc_especialidad', 'LIKE', '%' . $texto . '%')
            //->orderBy('ps_nombre', 'asc')
            ->paginate(10);
        //$datos['docentes'] = docente::paginate(10);
        return view('docente.index', compact('docentes', 'texto'));
    }

    public function pdf()
    {
        $docentes = Docente::paginate(100);
        $pdf = Pdf::loadView('docente.pdf',['docentes'=>$docentes])->setPaper('a3', 'landscape');
        return $pdf->stream();

        //return $pdf->download('proveedores.pdf');
    }

    public function create()
    {
        //
        return view('docente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $campos = [
            'dc_grado_academico' => 'required|string|max:100',
            'dc_anios_trabajo' => 'required|string|max:100',
            'dc_especialidad' => 'required|string|max:100',
            'dc_grado_estudios' => 'required|string|max:100',
            'dc_ps_id' => 'required|string|max:100',


        ];
        $mensaje = [

            'dc_grado_academico.required' => 'El grado academico es requerido',
            'dc_anios_trabajo.required' => 'Los anios de trabajo requerido',
            'dc_especialidad.required' => 'La especialidad es requerida',
            'dc_grado_estudios.required' => 'El grado de estudio es requerido',
            'dc_ps_id.required' => 'El id de la persona es requerido',

        ];

        $this->validate($request, $campos, $mensaje);

        $datosdocente = request()->except('_token');

        docente::insert($datosdocente);

        //return response()->json($datosdocente);
        return redirect('docente')->with('mensaje', 'docente agregada con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(docente $docente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //

        $docente = Docente::findOrFail($id);

        return view('docente.edit', compact('docente'));
        //return redirect('proveedor');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //

        $campos = [
            'dc_grado_academico' => 'required|string|max:100',
            'dc_anios_trabajo' => 'required|string|max:100',
            'dc_especialidad' => 'required|string|max:100',
            'dc_grado_estudios' => 'required|string|max:100',
            'dc_ps_id' => 'required|string|max:100',


        ];
        $mensaje = [

            'dc_grado_academico.required' => 'El grado academico es requerido',
            'dc_anios_trabajo.required' => 'Los anios de trabajo requerido',
            'dc_especialidad.required' => 'La especialidad es requerida',
            'dc_grado_estudios.required' => 'El grado de estudio es requerido',
            'dc_ps_id.required' => 'El id de la persona es requerido',

        ];

        $this->validate($request, $campos, $mensaje);

        $datosdocente = request()->except(['_token', '_method']);

        $docente = Docente::findOrFail($id);


        Docente::where('id', '=', $id)->update($datosdocente);

        $docente = Docente::findOrFail($id);

        //return view('docente.edit', compact('docente'));
        return redirect('docente')->with('mensaje', 'docente Modificado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        docente::destroy($id);
        return redirect('docente')->with('mensaje', 'docente Borrado');
    }
}
