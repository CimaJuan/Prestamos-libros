<!DOCTYPE html>
<html lang="en">

<head>
  <title>Prestamos</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- Bootstrap JavaScript Libraries -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <!-- Bootstrap JavaScript Libraries -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  <!--styles-->
 <link rel="stylesheet" href="css/style.css">
 <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    
</head>
<body>

    @extends('layouts.template')
    
    @section('nav')
    @endsection
    
    @section('contenido')
    
    <div class="text-center mb-5 pt-3"> <h1>Prestamos</h1></div>
    <div style="text-align: center">
      
    <button type="button" class="btn btn-primary mb-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
      Agregar
    </button>
    <a class="btn btn-success mb-5" target="_blank" href="{{url('pdf_prestamos')}}">Reporte</a>
    
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Realizar prestamo</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          @if ($errors->any())
          <div class="alert alert-warning" role="alert">
              @foreach ($errors->all() as $error)
                <ul>{{ $error }}</ul>  
              @endforeach
          </div>
          @endif

        <div class="modal-body">
          <form action="{{url('Prestamos')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" value="{{old ('usuario') }}" required>
              </div>
            <div class="mb-3">
              <label for="fecha" class="form-label">Fecha</label>
              <input type="date" class="form-control" id="fecha" name="fecha" value="{{old ('fecha') }}" required >
            </div>
          <div class="mb-3">
            <label for="hora" class="form-label">Hora</label>
            <input type="time" class="form-control" id="hora" name="hora" value="{{old ('hora') }}" required>
          </div class="mb-3">
          <label for="libros" class="form-label" id="libros">Libros</label>
          <select class="form-select" name="libros" value="{{old ('libros') }}" required>
            <option></option>
            <option>Arte de tener razón, El</option>
            <option>Leyenda de los amigos</option>
            <option>Violencia obstétrica</option>
            <option>Siglo de las luces y las sombras</option>
            <option>Escribir en el agua</option>
            
          </select>
          <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" value="{{old ('cantidad') }}" required>
          </div>
          <button type="submit" class="btn btn-success">Realizar prestamo</button>
        </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
</div>
    
    <div class="container">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Usuario</th>
            <th scope="col">Fecha</th>
            <th scope="col">Hora</th>
            <th scope="col">Libro</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
    
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
            <td><a href="{{url('/Prestamos' .$prestamo->id. '/prestamos_edit')}}" class="btn btn-warning">Editar</a></td>

            <td>
              <form action="{{ url('Prestamos' .$prestamo->id) }}" method="POST">
                @method("DELETE")
                @csrf
                <button type="submit" class="btn btn-danger ">Eliminar</button>
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
    










    </div>
    @endsection

</body>
</html>