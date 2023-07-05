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
    <h2>Lista empresas</h2>

    <div id="main-container">

        <table style="border:solid 1px black">
            <thead style="background-color: #6864f4">
                <tr style="font-family: Arial, Helvetica, sans-serif">
                    <th style="border:solid 1px black" style="color: white">ID</th>
                    <th style="border:solid 1px black" style="color: white">Rubro</th>
                    <th style="border:solid 1px black" style="color: white">Anios de actividad</th>
                    <th style="border:solid 1px black" style="color: white">Numero de trabajadores</th>
                    <th style="border:solid 1px black" style="color: white">Numero de cedes</th>
                    <th style="border:solid 1px black" style="color: white">Sitio web</th>
                    <th style="border:solid 1px black" style="color: white">Nombre</th>
                    <th style="border:solid 1px black" style="color: white">Direccion</th>
                    <th style="border:solid 1px black" style="color: white">Correo</th>
                    <th style="border:solid 1px black" style="color: white">Celular</th>

                </tr>
            </thead>
            <tbody>

                <tr style="font-family: Arial, Helvetica, sans-serif">
                    @if (count($empresas) <= 0)

                        <td>No hay resultados</td>
                    @else
                </tr>

                @foreach ($empresas as $empresa)
                    <tr style="font-family: Arial, Helvetica, sans-serif">
                        <td style="border:solid 1px black">
                            <span>
                                {{ $empresa->id }}
                            </span>
                        </td>
                        <td style="border:solid 1px black">{{ $empresa->ep_rubro }}</td>
                        <td style="border:solid 1px black">{{ $empresa->ep_anios_actividad }}</td>
                        <td style="border:solid 1px black">{{ $empresa->ep_num_trabajadores }}</td>
                        <td style="border:solid 1px black">{{ $empresa->ep_num_cedes }}</td>
                        <td style="border:solid 1px black">{{ $empresa->ep_sitio_web }}</td>
                        <td style="border:solid 1px black">{{ $empresa->ep_nombre }}</td>
                        <td style="border:solid 1px black">{{ $empresa->ep_direccion }}</td>
                        <td style="border:solid 1px black">{{ $empresa->ep_correo }}</td>
                        <td style="border:solid 1px black">{{ $empresa->ep_celular }}</td>

                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>

    </div>
</body>

</html>
