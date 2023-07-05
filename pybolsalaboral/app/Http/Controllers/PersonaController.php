<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class PersonaController extends Controller
{

    public function index(Request $request)
    {

        $texto = trim($request->get('texto'));
        $personas = DB::table('personas')
            ->select('id', 'ps_nombre', 'ps_paterno', 'ps_materno', 'ps_edad', 'ps_dni', 'ps_correo', 'ps_celular', 'ps_direccion', 'ps_estado_civil', 'ps_fecha_nacimiento', 'ps_sexo', 'ps_usuario', 'ps_password', 'ps_rol')
            ->where('ps_nombre', 'LIKE', '%' . $texto . '%')
            ->orWhere('ps_paterno', 'LIKE', '%' . $texto . '%')
            ->orWhere('ps_dni', 'LIKE', '%' . $texto . '%')
            //->orderBy('ps_nombre', 'asc')
            ->paginate(10);
        //$datos['personas'] = Persona::paginate(10);
        return view('persona.index', compact('personas', 'texto'));
    }

    public function pdf()
    {
        $personas = Persona::paginate(100);
        $pdf = Pdf::loadView('persona.pdf',['personas'=>$personas])->setPaper('a3', 'landscape');
        return $pdf->stream();

        //return $pdf->download('proveedores.pdf');
    }

    public function create()
    {
        //
        return view('persona.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $campos = [
            'ps_nombre' => 'required|string|max:100',
            'ps_paterno' => 'required|string|max:100',
            'ps_materno' => 'required|string|max:100',
            'ps_edad' => 'required|string|max:100',
            'ps_dni' => 'required|string|max:100',
            'ps_correo' => 'required|email',
            'ps_celular' => 'required|string|max:100',
            'ps_direccion' => 'required|string|max:100',
            'ps_estado_civil' => 'required|string|max:100',
            'ps_fecha_nacimiento' => 'required|string|max:100',
            'ps_sexo' => 'required|string|max:100',
            'ps_usuario' => 'required|string|max:100',
            'ps_password' => 'required|string|max:100',
            'ps_rol' => 'required|string|max:100',

        ];
        $mensaje = [

            'ps_nombre.required' => 'El nombre es requerido',
            'ps_paterno.required' => 'El apellido paterno es requerido',
            'ps_materno.required' => 'El apellido materno es requerido',
            'ps_edad.required' => 'La edad es requerida',
            'ps_dni.required' => 'El dni es requerido',
            'ps_correo.required' => 'El correo es requerido',
            'ps_celular.required' => 'El celular es requerido',
            'ps_direccion.required' => 'La direccion es requerida',
            'ps_estado_civil.required' => 'El estado civil es requerido',
            'ps_fecha_nacimiento.required' => 'La fecha de nacimiento es requerida',
            'ps_sexo.required' => 'El sexo es requerido',
            'ps_usuario.required' => 'El usuario es requerido',
            'ps_password.required' => 'El password es requerido',
            'ps_rol.required' => 'El rol es requerido'
        ];

        $this->validate($request, $campos, $mensaje);

        $datosPersona = request()->except('_token');

        Persona::insert($datosPersona);

        //return response()->json($datosPersona);
        return redirect('persona')->with('mensaje', 'Persona agregada con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //

        $persona = Persona::findOrFail($id);

        return view('persona.edit', compact('persona'));
        //return redirect('proveedor');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //

        $campos = [
            'ps_nombre' => 'required|string|max:100',
            'ps_paterno' => 'required|string|max:100',
            'ps_materno' => 'required|string|max:100',
            'ps_edad' => 'required|string|max:100',
            'ps_dni' => 'required|string|max:100',
            'ps_correo' => 'required|email',
            'ps_celular' => 'required|string|max:100',
            'ps_direccion' => 'required|string|max:100',
            'ps_estado_civil' => 'required|string|max:100',
            'ps_fecha_nacimiento' => 'required|string|max:100',
            'ps_sexo' => 'required|string|max:100',
            'ps_usuario' => 'required|string|max:100',
            'ps_password' => 'required|string|max:100',
            'ps_rol' => 'required|string|max:100',

        ];
        $mensaje = [

            'ps_nombre.required' => 'El nombre es requerido',
            'ps_paterno.required' => 'El apellido paterno es requerido',
            'ps_materno.required' => 'El apellido materno es requerido',
            'ps_edad.required' => 'La edad es requerida',
            'ps_dni.required' => 'El dni es requerido',
            'ps_correo.required' => 'El correo es requerido',
            'ps_celular.required' => 'El celular es requerido',
            'ps_direccion.required' => 'La direccion es requerida',
            'ps_estado_civil.required' => 'El estado civil es requerido',
            'ps_fecha_nacimiento.required' => 'La fecha de nacimiento es requerida',
            'ps_sexo.required' => 'El sexo es requerido',
            'ps_usuario.required' => 'El usuario es requerido',
            'ps_password.required' => 'El password es requerido',
            'ps_rol.required' => 'El rol es requerido'
        ];

        $this->validate($request, $campos, $mensaje);

        $datosPersona = request()->except(['_token', '_method']);

        $persona = Persona::findOrFail($id);


        Persona::where('id', '=', $id)->update($datosPersona);

        $persona = Persona::findOrFail($id);

        //return view('persona.edit', compact('persona'));
        return redirect('persona')->with('mensaje', 'Persona Modificada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Persona::destroy($id);
        return redirect('persona')->with('mensaje', 'Persona Borrada');
    }
}
