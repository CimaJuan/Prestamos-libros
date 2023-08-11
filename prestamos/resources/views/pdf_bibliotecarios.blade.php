<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Reportes de bibliotecarios</title>

    <style> *{font-family: 'Josefin Sans', sans-serif; font-family: 'Preahvihear', sans-serif; font-family: 'Varela Round', sans-serif;} thead{ background-color: grey; } td, th{padding: 5px 80px; border:  1px solid grey;} .table{border-collapse: collapse;} </style>
    
</head>
<body>
    <h1 class="text-center p-3" style="text-align: center">Reporte de Bibliotecarios</h1>

    <table class="table" style="text-align: center">
        <thead>
          <tr>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Telefono</th>
          </tr>
        </thead>
        <tbody>
          @foreach($bibliotecarios as $bibliotecario)
          <tr>
            <td> <img src="{{ $bibliotecario->foto }}" class="img-fluid img-thumbnail" width= 80px></td>
            <td>{{ $bibliotecario->nombre }}</td>
            <td>{{ $bibliotecario->telefono }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>

</body>
</html>