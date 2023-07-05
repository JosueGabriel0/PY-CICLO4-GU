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
    <h2>Lista monitoreos</h2>

    <div id="main-container">

        <table style="border:solid 1px black">
            <thead style="background-color: #6864f4">
                <tr style="font-family: Arial, Helvetica, sans-serif">
                    <th style="border:solid 1px black" style="color: white">ID</th>
                    <th style="border:solid 1px black" style="color: white">Fecha</th>
                    <th style="border:solid 1px black" style="color: white">Duracion</th>
                    <th style="border:solid 1px black" style="color: white">Docente ID</th>
                    <th style="border:solid 1px black" style="color: white">Egresado ID</th>

                </tr>
            </thead>
            <tbody>

                <tr style="font-family: Arial, Helvetica, sans-serif">
                    @if (count($monitoreos) <= 0)

                        <td>No hay resultados</td>
                    @else
                </tr>

                @foreach ($monitoreos as $monitoreo)
                    <tr style="font-family: Arial, Helvetica, sans-serif">
                        <td style="border:solid 1px black">
                            <span>
                                {{ $monitoreo->id }}
                            </span>
                        </td>
                        <td style="border:solid 1px black">{{ $monitoreo->mt_fecha }}</td>
                        <td style="border:solid 1px black">{{ $monitoreo->mt_duracion }}</td>
                        <td style="border:solid 1px black">{{ $monitoreo->mt_dc_id }}</td>
                        <td style="border:solid 1px black">{{ $monitoreo->mt_eg_id }}</td>

                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>

    </div>
</body>

</html>
