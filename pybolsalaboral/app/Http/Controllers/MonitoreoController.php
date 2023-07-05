<?php

namespace App\Http\Controllers;

use App\Models\Monitoreo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class MonitoreoController extends Controller
{

    public function index(Request $request)
    {

        $texto = trim($request->get('texto'));
        $monitoreos = DB::table('monitoreos')
            ->select('id', 'mt_fecha', 'mt_duracion', 'mt_dc_id', 'mt_eg_id')
            ->where('mt_fecha', 'LIKE', '%' . $texto . '%')
            ->orWhere('mt_duracion', 'LIKE', '%' . $texto . '%')
            //->orderBy('mt_fecha', 'asc')
            ->paginate(10);
        //$datos['monitoreos'] = monitoreo::paginate(10);
        return view('monitoreo.index', compact('monitoreos', 'texto'));
    }

    public function pdf()
    {
        $monitoreos = Monitoreo::paginate(100);
        $pdf = Pdf::loadView('monitoreo.pdf',['monitoreos'=>$monitoreos]);
        return $pdf->stream();
        //return $pdf->download('monitoreos.pdf');
    }

    public function create()
    {
        //
        return view('monitoreo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $campos = [
            'mt_fecha' => 'required|string|max:100',
            'mt_duracion' => 'required|string|max:100',
            'mt_dc_id' => 'required|string|max:100',
            'mt_eg_id' => 'required|string|max:100',

        ];
        $mensaje = [
            'mt_fecha.required' => 'La fecha es requerida',
            'mt_duracion.required' => 'La duracion es requerida',
            'mt_dc_id.required' => 'El ID del docente es requerido',
            'mt_eg_id.required' => 'El ID del egresado es requerido'
        ];

        $this->validate($request, $campos, $mensaje);

        $datosmonitoreo = request()->except('_token');

        Monitoreo::insert($datosmonitoreo);

        //return response()->json($datosmonitoreo);
        return redirect('monitoreo')->with('mensaje', 'Empleado agregado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Monitoreo $monitoreo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //

        $monitoreo = Monitoreo::findOrFail($id);

        return view('monitoreo.edit', compact('monitoreo'));
        //return redirect('monitoreo');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //

        $campos = [
            'mt_fecha' => 'required|string|max:100',
            'mt_duracion' => 'required|string|max:100',
            'mt_dc_id' => 'required|string|max:100',
            'mt_eg_id' => 'required|string|max:100',

        ];
        $mensaje = [
            'mt_fecha.required' => 'La fecha es requerida',
            'mt_duracion.required' => 'La duracion es requerida',
            'mt_dc_id.required' => 'El ID del docente es requerido',
            'mt_eg_id.required' => 'El ID del egresado es requerido'
        ];

        $this->validate($request, $campos, $mensaje);

        $datosmonitoreo = request()->except(['_token', '_method']);

        $monitoreo = Monitoreo::findOrFail($id);


        Monitoreo::where('id', '=', $id)->update($datosmonitoreo);

        $monitoreo = Monitoreo::findOrFail($id);

        //return view('monitoreo.edit', compact('monitoreo'));
        return redirect('monitoreo')->with('mensaje', 'Empleado Modificado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        monitoreo::destroy($id);
        return redirect('monitoreo')->with('mensaje', 'Empleado Borrado');
    }
}
