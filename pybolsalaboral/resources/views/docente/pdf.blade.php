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
    <h2>Lista docentes</h2>

    <div id="main-container">

        <table style="border:solid 1px black">
            <thead style="background-color: #6864f4">
                <tr style="font-family: Arial, Helvetica, sans-serif">
                    <th style="border:solid 1px black" style="color: white">ID</th>
                    <th style="border:solid 1px black" style="color: white">Grado academico</th>
                    <th style="border:solid 1px black" style="color: white">Años de trabajo</th>
                    <th style="border:solid 1px black" style="color: white">Especialidad</th>
                    <th style="border:solid 1px black" style="color: white">Grado de estudios</th>
                    <th style="border:solid 1px black" style="color: white">Persona ID</th>


                </tr>
            </thead>
            <tbody>

                <tr style="font-family: Arial, Helvetica, sans-serif">
                    @if (count($docentes) <= 0)

                        <td>No hay resultados</td>
                    @else
                </tr>

                @foreach ($docentes as $docente)
                    <tr style="font-family: Arial, Helvetica, sans-serif">
                        <td style="border:solid 1px black">
                            <span>
                                {{ $docente->id }}
                            </span>
                        </td>
                        <td style="border:solid 1px black">{{ $docente->dc_grado_academico }}</td>
                        <td style="border:solid 1px black">{{ $docente->dc_anios_trabajo }}</td>
                        <td style="border:solid 1px black">{{ $docente->dc_especialidad }}</td>
                        <td style="border:solid 1px black">{{ $docente->dc_grado_estudios }}</td>
                        <td style="border:solid 1px black">{{ $docente->dc_ps_id }}</td>


                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>

    </div>
</body>

</html>
