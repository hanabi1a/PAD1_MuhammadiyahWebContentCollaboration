<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$judul}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h2>Judul: {{ $judul }}</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th> judul kajian</th>
                <th> pemateri</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($kajians as $kj)
            <tr>
                <td>{{ $kj->judul_kajian }}</td>
                <td>{{ $kj->pemateri }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>