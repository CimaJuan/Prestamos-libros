<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de prestamos</title>

    <style> *{font-family: 'Josefin Sans', sans-serif; font-family: 'Preahvihear', sans-serif; font-family: 'Varela Round', sans-serif;} thead{ background-color: grey; } td, th{padding: 5px 30px; border:  1px solid grey;} .table{border-collapse: collapse;} </style>

</head>
<body>
    <h1 class="text-center p-3" style="text-align: center">Reporte de prestamos</h1>

    <table class="table" style="text-align: center">
        <thead>
          <tr>
            <th scope="col">Usuario</th>
            <th scope="col">Fecha</th>
            <th scope="col">Hora</th>
            <th scope="col">Libro</th>
            <th scope="col">Cantidad</th>
    
          </tr>
        </thead>
        <tbody>
          @foreach($prestamos as $prestamo)
          <tr>
            <td data-titulo="Usuario">{{$prestamo->usuario}}</td>
            <td data-titulo="Fecha">{{$prestamo->fecha}}</td>
            <td data-titulo="Hora">{{$prestamo->hora}}</td>
            <td data-titulo="Libro">{{$prestamo->libros}}</td>
            <td data-titulo="Cantidad">{{$prestamo->cantidad}}</td>
          @endforeach

        </tbody>
      </table>

</body>
</html>