@vite('resources/css/app.css')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>



</head>

<body>
    <h2>Lista personas</h2>

    <div id="main-container">

        <table style="border:solid 1px black">
            <thead style="background-color: #6864f4">
                <tr style="font-family: Arial, Helvetica, sans-serif">
                    <th style="border:solid 1px black" style="color: white">ID</th>
                    <th style="border:solid 1px black" style="color: white">Nombre</th>
                    <th style="border:solid 1px black" style="color: white">Apellido Paterno</th>
                    <th style="border:solid 1px black" style="color: white">Apellido Materno</th>
                    <th style="border:solid 1px black" style="color: white">Edad</th>
                    <th style="border:solid 1px black" style="color: white">DNI</th>
                    <th style="border:solid 1px black" style="color: white">Correo</th>
                    <th style="border:solid 1px black" style="color: white">Celular</th>
                    <th style="border:solid 1px black" style="color: white">Direccion</th>
                    <th style="border:solid 1px black" style="color: white">Estado Civil</th>
                    <th style="border:solid 1px black" style="color: white">Fecha de nacimiento</th>
                    <th style="border:solid 1px black" style="color: white">Sexo</th>
                    <th style="border:solid 1px black" style="color: white">Usuario</th>
                    <th style="border:solid 1px black" style="color: white">Contrasenia</th>
                    <th style="border:solid 1px black" style="color: white">Rol</th>

                </tr>
            </thead>
            <tbody>

                <tr style="font-family: Arial, Helvetica, sans-serif">
                    @if (count($personas) <= 0)

                        <td>No hay resultados</td>
                    @else
                </tr>

                @foreach ($personas as $persona)
                    <tr style="font-family: Arial, Helvetica, sans-serif">
                        <td style="border:solid 1px black">
                            <span>
                                {{ $persona->id }}
                            </span>
                        </td>
                        <td style="border:solid 1px black">{{ $persona->ps_nombre }}</td>
                        <td style="border:solid 1px black">{{ $persona->ps_paterno }}</td>
                        <td style="border:solid 1px black">{{ $persona->ps_materno }}</td>
                        <td style="border:solid 1px black">{{ $persona->ps_edad }}</td>
                        <td style="border:solid 1px black">{{ $persona->ps_dni }}</td>
                        <td style="border:solid 1px black">{{ $persona->ps_correo }}</td>
                        <td style="border:solid 1px black">{{ $persona->ps_celular }}</td>
                        <td style="border:solid 1px black">{{ $persona->ps_direccion }}</td>
                        <td style="border:solid 1px black">{{ $persona->ps_estado_civil }}</td>
                        <td style="border:solid 1px black">{{ $persona->ps_fecha_nacimiento }}</td>
                        <td style="border:solid 1px black">{{ $persona->ps_sexo }}</td>
                        <td style="border:solid 1px black">{{ $persona->ps_usuario }}</td>
                        <td style="border:solid 1px black">{{ $persona->ps_password }}</td>
                        <td style="border:solid 1px black">{{ $persona->ps_rol }}</td>

                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>

    </div>
</body>

</html>
