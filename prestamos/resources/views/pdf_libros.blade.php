<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de libros</title>

    <style> *{font-family: 'Josefin Sans', sans-serif; font-family: 'Preahvihear', sans-serif; font-family: 'Varela Round', sans-serif;} thead{ background-color: grey; } td, th{padding: 5px 4px; border:  1px solid grey;} .table{border-collapse: collapse;} </style>

</head>
<body>
  
    <h1 class="text-center p-3" style="text-align: center">Reporte de libros</h1>

        <table class="table" style="text-align: center">
          <thead>
            <tr>
              <th>ISBN</th>
              <th>Titulo</th>
              <th>Autor</th>
              <th>Editorial</th>
              <th>Categoria</th>
              <th>Ejemplares</th>
              <th>Estado</th>
              <th>Foto</th>
            </tr>
          </thead>

          <tbody>
            @foreach($libros as $libro)
            <tr>
              <td>{{ $libro->ISBN }}</td>
              <td>{{ $libro->titulo }}</td>
              <td>{{ $libro->autor }}</td>
              <td>{{ $libro->editorial->nombre }}</td>
              <td>{{ $libro->categoria->nombre }}</td>
              <td>{{ $libro->ejemplares }}</td>
              <td>{{ $libro->estado->nombre }}</td>
              <td><img src="{{ $libro->foto }}" alt="" class="img-fluid img-thumbnail" width= 80px ></td>
            </tr>
              @endforeach
          </tbody>
        </table>



</body>
</html>