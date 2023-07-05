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
    <h2>Lista administradores</h2>

    <div id="main-container">

        <table style="border:solid 1px black">
            <thead style="background-color: #6864f4">
                <tr style="font-family: Arial, Helvetica, sans-serif">
                    <th style="border:solid 1px black" style="color: white">ID</th>
                    <th style="border:solid 1px black" style="color: white">Puesto</th>
                    <th style="border:solid 1px black" style="color: white">Salario</th>
                    <th style="border:solid 1px black" style="color: white">Fecha de ultimo acceso</th>
                    <th style="border:solid 1px black" style="color: white">ID persona</th>

                </tr>
            </thead>
            <tbody>

                <tr style="font-family: Arial, Helvetica, sans-serif">
                    @if (count($administradores) <= 0)

                        <td>No hay resultados</td>
                    @else
                </tr>

                @foreach ($administradores as $administrador)
                    <tr style="font-family: Arial, Helvetica, sans-serif">
                        <td style="border:solid 1px black">
                            <span>
                                {{ $administrador->id }}
                            </span>
                        </td>
                        <td style="border:solid 1px black">{{ $administrador->ad_puesto }}</td>
                        <td style="border:solid 1px black">{{ $administrador->ad_salario }}</td>
                        <td style="border:solid 1px black">{{ $administrador->ad_fecha_ultimo_acceso }}</td>
                        <td style="border:solid 1px black">{{ $administrador->ps_id  }}</td>


                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>

    </div>
</body>

</html>
