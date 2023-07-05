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
    <h2>Lista trabajos</h2>

    <div id="main-container">

        <table style="border:solid 1px black">
            <thead style="background-color: #6864f4">
                <tr style="font-family: Arial, Helvetica, sans-serif">
                    <th style="border:solid 1px black" style="color: white">ID</th>
                    <th style="border:solid 1px black" style="color: white">Fecha de Publicacion</th>
                    <th style="border:solid 1px black" style="color: white">Tipo</th>
                    <th style="border:solid 1px black" style="color: white">Categoria</th>
                    <th style="border:solid 1px black" style="color: white">Descripcion</th>
                    <th style="border:solid 1px black" style="color: white">Salario</th>
                    <th style="border:solid 1px black" style="color: white">Fecha de inicio</th>
                    <th style="border:solid 1px black" style="color: white">Fecha de fin</th>
                    <th style="border:solid 1px black" style="color: white">Requiere experiencia</th>
                    <th style="border:solid 1px black" style="color: white">Datos de contacto</th>
                    <th style="border:solid 1px black" style="color: white">Modalidad de tiempo</th>
                    <th style="border:solid 1px black" style="color: white">Beneficios</th>
                    <th style="border:solid 1px black" style="color: white">Modalidad</th>
                    <th style="border:solid 1px black" style="color: white">Titulo</th>
                    <th style="border:solid 1px black" style="color: white">Antecedentes</th>
                    <th style="border:solid 1px black" style="color: white">Estado</th>
                    <th style="border:solid 1px black" style="color: white">Remunerado</th>
                    <th style="border:solid 1px black" style="color: white">Monto de remuneracion</th>

                </tr>
            </thead>
            <tbody>

                <tr style="font-family: Arial, Helvetica, sans-serif">Empresa ID
                    @if (count($trabajos) <= 0)

                        <td>No hay resultados</td>
                    @else
                </tr>

                @foreach ($trabajos as $trabajo)
                    <tr style="font-family: Arial, Helvetica, sans-serif">
                        <td style="border:solid 1px black">
                            <span>
                                {{ $trabajo->id }}
                            </span>
                        </td>
                        <td style="border:solid 1px black">{{ $trabajo->tra_fecha_publicacion }}</td>
                        <td style="border:solid 1px black">{{ $trabajo->tra_tipo }}</td>
                        <td style="border:solid 1px black">{{ $trabajo->tra_categoria }}</td>
                        <td style="border:solid 1px black">{{ $trabajo->tra_descripcion }}</td>
                        <td style="border:solid 1px black">{{ $trabajo->tra_salario }}</td>
                        <td style="border:solid 1px black">{{ $trabajo->tra_fecha_inicio }}</td>
                        <td style="border:solid 1px black">{{ $trabajo->tra_fecha_fin }}</td>
                        <td style="border:solid 1px black">{{ $trabajo->tra_requiere_experiencia }}</td>
                        <td style="border:solid 1px black">{{ $trabajo->tra_datos_contacto }}</td>
                        <td style="border:solid 1px black">{{ $trabajo->tra_modalidad_tiempo }}</td>
                        <td style="border:solid 1px black">{{ $trabajo->tra_beneficios }}</td>
                        <td style="border:solid 1px black">{{ $trabajo->tra_modalidad }}</td>
                        <td style="border:solid 1px black">{{ $trabajo->tra_titulo }}</td>
                        <td style="border:solid 1px black">{{ $trabajo->tra_antecedentes }}</td>
                        <td style="border:solid 1px black">{{ $trabajo->tra_estado }}</td>
                        <td style="border:solid 1px black">{{ $trabajo->tra_remunerado }}</td>
                        <td style="border:solid 1px black">{{ $trabajo->ps_monto_remuneracion }}</td>

                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>

    </div>
</body>

</html>
