<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class EmpresaController extends Controller
{

    public function index(Request $request)
    {

        $texto = trim($request->get('texto'));
        $empresas = DB::table('empresas')
            ->select('id', 'ep_rubro', 'ep_anios_actividad', 'ep_num_trabajadores', 'ep_num_cedes', 'ep_sitio_web', 'ep_nombre', 'ep_direccion', 'ep_correo', 'ep_celular')
            ->where('ep_rubro', 'LIKE', '%' . $texto . '%')
            ->orWhere('ep_anios_actividad', 'LIKE', '%' . $texto . '%')
            //->orderBy('ep_rubro', 'asc')
            ->paginate(10);
        //$datos['empresas'] = empresa::paginate(10);
        return view('empresa.index', compact('empresas', 'texto'));
    }

    public function pdf()
    {
        $empresas = Empresa::paginate(100);
        $pdf = Pdf::loadView('empresa.pdf',['empresas'=>$empresas])->setPaper('a4', 'landscape');
        return $pdf->stream();
        //return $pdf->download('empresas.pdf');
    }

    public function create()
    {
        //
        return view('empresa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $campos = [
            'ep_rubro' => 'required|string|max:100',
            'ep_anios_actividad' => 'required|string|max:100',
            'ep_num_trabajadores' => 'required|string|max:100',
            'ep_num_cedes' => 'required|string|max:100',
            'ep_sitio_web' => 'required|string|max:100',
            'ep_nombre' => 'required|string|max:100',
            'ep_direccion' => 'required|string|max:100',
            'ep_correo' => 'required|email|max:100',
            'ep_celular' => 'required|string|max:100',

        ];
        $mensaje = [

            'ep_rubro.required' => 'El rubro es requerido',
            'ep_anios_actividad.required' => 'Los anios de actividad son requeridos',
            'ep_num_trabajadores.required' => 'El numero de trabajadores es requerido',
            'ep_num_cedes.required' => 'El numero de cedes es requerido',
            'ep_sitio_web.required' => 'El sitio web es requerido',
            'ep_nombre.required' => 'El nombre es requerido',
            'ep_direccion.required' => 'La direccion es requerido',
            'ep_correo.required' => 'El correo es requerido',
            'ep_celular.required' => 'El celular es requerido'
        ];

        $this->validate($request, $campos, $mensaje);

        $datosempresa = request()->except('_token');

        Empresa::insert($datosempresa);

        //return response()->json($datosempresa);
        return redirect('empresa')->with('mensaje', 'Empleado agregado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //

        $empresa = Empresa::findOrFail($id);

        return view('empresa.edit', compact('empresa'));
        //return redirect('empresa');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //

        $campos = [
            'ep_rubro' => 'required|string|max:100',
            'ep_anios_actividad' => 'required|string|max:100',
            'ep_num_trabajadores' => 'required|string|max:100',
            'ep_num_cedes' => 'required|string|max:100',
            'ep_sitio_web' => 'required|string|max:100',
            'ep_nombre' => 'required|string|max:100',
            'ep_direccion' => 'required|string|max:100',
            'ep_correo' => 'required|email|max:100',
            'ep_celular' => 'required|string|max:100',

        ];
        $mensaje = [

            'ep_rubro.required' => 'El rubro es requerido',
            'ep_anios_actividad.required' => 'Los anios de actividad son requeridos',
            'ep_num_trabajadores.required' => 'El numero de trabajadores es requerido',
            'ep_num_cedes.required' => 'El numero de cedes es requerido',
            'ep_sitio_web.required' => 'El sitio web es requerido',
            'ep_nombre.required' => 'El nombre es requerido',
            'ep_direccion.required' => 'La direccion es requerido',
            'ep_correo.required' => 'El correo es requerido',
            'ep_celular.required' => 'El celular es requerido'
        ];

        $this->validate($request, $campos, $mensaje);

        $datosempresa = request()->except(['_token', '_method']);

        $empresa = Empresa::findOrFail($id);


        Empresa::where('id', '=', $id)->update($datosempresa);

        $empresa = Empresa::findOrFail($id);

        //return view('empresa.edit', compact('empresa'));
        return redirect('empresa')->with('mensaje', 'Empleado Modificado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Empresa::destroy($id);
        return redirect('empresa')->with('mensaje', 'Empleado Borrado');
    }
}
