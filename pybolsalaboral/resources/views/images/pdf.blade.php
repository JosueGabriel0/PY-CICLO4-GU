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
    <h2>Lista images</h2>

    <div id="main-container">

        <table style="border:solid 1px black">
            <thead style="background-color: #6864f4">
                <tr style="font-family: Arial, Helvetica, sans-serif">
                    <th style="border:solid 1px black" style="color: white">ID</th>
                    <th style="border:solid 1px black" style="color: white">url</th>
                    <th style="border:solid 1px black" style="color: white">imageable_id</th>
                    <th style="border:solid 1px black" style="color: white">imageable_type</th>
                </tr>
            </thead>
            <tbody>

                <tr style="font-family: Arial, Helvetica, sans-serif">
                    @if (count($images) <= 0)

                        <td>No hay resultados</td>
                    @else
                </tr>

                @foreach ($images as $image)
                    <tr style="font-family: Arial, Helvetica, sans-serif">
                        <td style="border:solid 1px black">
                            <span>
                                {{ $image->id }}
                            </span>
                        </td>
                        <td style="border:solid 1px black">{{ $image->url }}</td>
                        <td style="border:solid 1px black">{{ $image->imageable_id }}</td>
                        <td style="border:solid 1px black">{{ $image->imageable_type }}</td>

                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>

    </div>
</body>

</html>
