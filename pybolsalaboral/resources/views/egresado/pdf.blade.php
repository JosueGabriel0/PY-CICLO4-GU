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
    <h2>Lista egresados</h2>

    <div id="main-container">

        <table style="border:solid 1px black">
            <thead style="background-color: #6864f4">
                <tr style="font-family: Arial, Helvetica, sans-serif">
                    <th style="border:solid 1px black" style="color: white">ID</th>
                    <th style="border:solid 1px black" style="color: white">Codigo</th>
                    <th style="border:solid 1px black" style="color: white">Anios de experiencia</th>
                    <th style="border:solid 1px black" style="color: white">Ruta del cv</th>
                    <th style="border:solid 1px black" style="color: white">Religion</th>
                    <th style="border:solid 1px black" style="color: white">Especialidad</th>
                    <th style="border:solid 1px black" style="color: white">Nivel academico</th>
                    <th style="border:solid 1px black" style="color: white">Persona ID</th>
                    <th style="border:solid 1px black" style="color: white">Institucion ID</th>


                </tr>
            </thead>
            <tbody>

                <tr style="font-family: Arial, Helvetica, sans-serif">
                    @if (count($egresados) <= 0)

                        <td>No hay resultados</td>
                    @else
                </tr>

                @foreach ($egresados as $egresado)
                    <tr style="font-family: Arial, Helvetica, sans-serif">
                        <td style="border:solid 1px black">
                            <span>
                                {{ $egresado->id }}
                            </span>
                        </td>
                        <td style="border:solid 1px black">{{ $egresado->eg_codigo }}</td>
                        <td style="border:solid 1px black">{{ $egresado->eg_anios_experiencia }}</td>
                        <td style="border:solid 1px black">{{ $egresado->eg_ruta_cv }}</td>
                        <td style="border:solid 1px black">{{ $egresado->eg_religion }}</td>
                        <td style="border:solid 1px black">{{ $egresado->eg_especialidad }}</td>
                        <td style="border:solid 1px black">{{ $egresado->eg_nivel_academico }}</td>
                        <td style="border:solid 1px black">{{ $egresado->eg_ps_id }}</td>
                        <td style="border:solid 1px black">{{ $egresado->eg_ins_id }}</td>

                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>

    </div>
</body>

</html>
