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
    <h2>Lista postulaciones</h2>

    <div id="main-container">

        <table style="border:solid 1px black">
            <thead style="background-color: #6864f4">
                <tr style="font-family: Arial, Helvetica, sans-serif">
                    <th style="border:solid 1px black" style="color: white">ID</th>
                    <th style="border:solid 1px black" style="color: white">Ruta CV</th>
                    <th style="border:solid 1px black" style="color: white">Puntaje</th>
                    <th style="border:solid 1px black" style="color: white">Estado</th>
                    <th style="border:solid 1px black" style="color: white">Egresado ID</th>
                    <th style="border:solid 1px black" style="color: white">Trabajo ID</th>

                </tr>
            </thead>
            <tbody>

                <tr style="font-family: Arial, Helvetica, sans-serif">
                    @if (count($postulaciones) <= 0)

                        <td>No hay resultados</td>
                    @else
                </tr>

                @foreach ($postulaciones as $postulacion)
                    <tr style="font-family: Arial, Helvetica, sans-serif">
                        <td style="border:solid 1px black">
                            <span>
                                {{ $postulacion->id }}
                            </span>
                        </td>
                        <td style="border:solid 1px black">{{ $postulacion->pos_ruta_cv }}</td>
                        <td style="border:solid 1px black">{{ $postulacion->pos_puntaje }}</td>
                        <td style="border:solid 1px black">{{ $postulacion->pos_estado }}</td>
                        <td style="border:solid 1px black">{{ $postulacion->pos_eg_id }}</td>
                        <td style="border:solid 1px black">{{ $postulacion->pos_tra_id }}</td>

                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>

    </div>
</body>

</html>
