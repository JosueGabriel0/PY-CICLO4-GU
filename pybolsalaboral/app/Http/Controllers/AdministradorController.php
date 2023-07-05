<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class AdministradorController extends Controller
{

    public function index(Request $request)
    {

        $texto = trim($request->get('texto'));
        $administradores = DB::table('administradors')
            ->select('id', 'ad_puesto', 'ad_salario', 'ad_fecha_ultimo_acceso', 'ps_id')
            ->where('ad_puesto', 'LIKE', '%' . $texto . '%')
            ->orWhere('ad_fecha_ultimo_acceso', 'LIKE', '%' . $texto . '%')
            //->orderBy('ad_puesto', 'asc')
            ->paginate(10);
        //$datos['administradores'] = Administrador::paginate(10);
        return view('administrador.index', compact('administradores', 'texto'));
    }

    public function pdf()
    {
        $administradores = Administrador::paginate(100);
        $pdf = Pdf::loadView('administrador.pdf',['administradores'=>$administradores]);
        return $pdf->stream();
        //return $pdf->download('administradores.pdf');
    }

    public function create()
    {
        //
        return view('administrador.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $campos = [
            'ad_puesto' => 'required|string|max:100',
            'ad_salario' => 'required|string|max:100',
            'ad_fecha_ultimo_acceso' => 'required|string|max:100',
            'ps_id' => 'required|string|max:100',


        ];
        $mensaje = [
            //'required' => 'El :attribute es requerido',
            'ad_puesto.required' => 'El puesto es requerido',
            'ad_salario.required' => 'El salario es requerido',
            'ad_fecha_ultimo_acceso.required' => 'La fecha de ultimo acceso es requerida',
            'ps_id.required' => 'El id de la persona es requerida',

        ];

        $this->validate($request, $campos, $mensaje);

        $datosAdministrador = request()->except('_token');

        Administrador::insert($datosAdministrador);

        //return response()->json($datosAdministrador);
        return redirect('administrador')->with('mensaje', 'Empleado agregado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Administrador $administrador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //

        $administrador = Administrador::findOrFail($id);

        return view('administrador.edit', compact('administrador'));
        //return redirect('administrador');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //

        $campos = [
            'ad_puesto' => 'required|string|max:100',
            'ad_salario' => 'required|string|max:100',
            'ad_fecha_ultimo_acceso' => 'required|string|max:100',
            'ps_id' => 'required|string|max:100',


        ];
        $mensaje = [
            //'required' => 'El :attribute es requerido',
            'ad_puesto.required' => 'El puesto es requerido',
            'ad_salario.required' => 'El salario es requerido',
            'ad_fecha_ultimo_acceso.required' => 'La fecha de ultimo acceso es requerida',
            'ps_id.required' => 'El id de la persona es requerida',

        ];

        $this->validate($request, $campos, $mensaje);

        $datosAdministrador = request()->except(['_token', '_method']);

        $administrador = Administrador::findOrFail($id);


        Administrador::where('id', '=', $id)->update($datosAdministrador);

        $administrador = Administrador::findOrFail($id);

        //return view('administrador.edit', compact('administrador'));
        return redirect('administrador')->with('mensaje', 'Empleado Modificado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Administrador::destroy($id);
        return redirect('administrador')->with('mensaje', 'Empleado Borrado');
    }
}
