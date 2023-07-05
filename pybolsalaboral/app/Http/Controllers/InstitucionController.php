<?php

namespace App\Http\Controllers;

use App\Models\Institucion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class InstitucionController extends Controller
{

    public function index(Request $request)
    {

        $texto = trim($request->get('texto'));
        $instituciones = DB::table('institucions')
            ->select('id', 'ins_num_cedes', 'ins_num_docentes', 'ins_anios_actividad', 'ins_num_estudiantes', 'ins_sitio_web', 'ins_nombre', 'ins_direccion', 'ins_correo', 'ins_celular')
            ->where('ins_num_cedes', 'LIKE', '%' . $texto . '%')
            ->orWhere('ins_num_docentes', 'LIKE', '%' . $texto . '%')
            //->orderBy('ins_num_cedes', 'asc')
            ->paginate(10);
        //$datos['instituciones'] = institucion::paginate(10);
        return view('institucion.index', compact('instituciones', 'texto'));
    }

    public function pdf()
    {
        $instituciones = Institucion::paginate(100);
        $pdf = Pdf::loadView('institucion.pdf',['instituciones'=>$instituciones])->setPaper('a4', 'landscape');
        return $pdf->stream();
        //return $pdf->download('instituciones.pdf');
    }

    public function create()
    {
        //
        return view('institucion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $campos = [
            'ins_num_cedes' => 'required|string|max:100',
            'ins_num_docentes' => 'required|string|max:100',
            'ins_anios_actividad' => 'required|string|max:100',
            'ins_num_estudiantes' => 'required|string|max:100',
            'ins_sitio_web' => 'required|string|max:100',
            'ins_nombre' => 'required|string|max:100',
            'ins_direccion' => 'required|string|max:100',
            'ins_correo' => 'required|string|max:100',
            'ins_celular' => 'required|string|max:100',

        ];
        $mensaje = [
            'ins_num_cedes.required' => 'La cede es requerida',
            'ins_num_docentes.required' => 'Los numeros de docentes es requerido',
            'ins_anios_actividad.required' => 'Los anios de actividad son requeridos',
            'ins_num_estudiantes.required' => 'Los numeros de estudiantes son requeridos',
            'ins_sitio_web.required' => 'El sitio web es requerido',
            'ins_nombre.required' => 'El nombre es requerido',
            'ins_direccion.required' => 'La direccion es requerida',
            'ins_correo.required' => 'El correo es requerido',
            'ins_celular.required' => 'El celular es requerido'
        ];

        $this->validate($request, $campos, $mensaje);

        $datosinstitucion = request()->except('_token');

        Institucion::insert($datosinstitucion);

        //return response()->json($datosinstitucion);
        return redirect('institucion')->with('mensaje', 'Empleado agregado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Institucion $institucion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //

        $institucion = Institucion::findOrFail($id);

        return view('institucion.edit', compact('institucion'));
        //return redirect('institucion');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //

        $campos = [
            'ins_num_cedes' => 'required|string|max:100',
            'ins_num_docentes' => 'required|string|max:100',
            'ins_anios_actividad' => 'required|string|max:100',
            'ins_num_estudiantes' => 'required|string|max:100',
            'ins_sitio_web' => 'required|string|max:100',
            'ins_nombre' => 'required|string|max:100',
            'ins_direccion' => 'required|string|max:100',
            'ins_correo' => 'required|string|max:100',
            'ins_celular' => 'required|string|max:100',

        ];
        $mensaje = [
            'ins_num_cedes.required' => 'La cede es requerida',
            'ins_num_docentes.required' => 'Los numeros de docentes es requerido',
            'ins_anios_actividad.required' => 'Los anios de actividad son requeridos',
            'ins_num_estudiantes.required' => 'Los numeros de estudiantes son requeridos',
            'ins_sitio_web.required' => 'El sitio web es requerido',
            'ins_nombre.required' => 'El nombre es requerido',
            'ins_direccion.required' => 'La direccion es requerida',
            'ins_correo.required' => 'El correo es requerido',
            'ins_celular.required' => 'El celular es requerido'
        ];

        $this->validate($request, $campos, $mensaje);

        $datosinstitucion = request()->except(['_token', '_method']);

        $institucion = Institucion::findOrFail($id);


        Institucion::where('id', '=', $id)->update($datosinstitucion);

        $institucion = Institucion::findOrFail($id);

        //return view('institucion.edit', compact('institucion'));
        return redirect('institucion')->with('mensaje', 'Empleado Modificado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        institucion::destroy($id);
        return redirect('institucion')->with('mensaje', 'Empleado Borrado');
    }
}
