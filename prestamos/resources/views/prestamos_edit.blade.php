<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap JavaScript Libraries -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <!-- Bootstrap JavaScript Libraries -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  <!--styles-->
 <link rel="stylesheet" href="css/style.css">
 <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

<title>Editar prestamo</title>
</head>
<body>

    @extends('layouts.template')
    
    @section('nav')
    @endsection
    
    @section('contenido')

    <div class="text-center mb-5 pt-3"> <h1>Editar Prestamo</h1></div>
    <div style="text-align: center">
      

          @if ($errors->any())
          <div class="alert alert-warning" role="alert">
              @foreach ($errors->all() as $error)
                <ul>{{ $error }}</ul>  
              @endforeach
          </div>
          @endif

        <div class="modal-body container col-6" >
          <form action="{{url('Prestamos' .$prestamos->id )}}" method="POST" enctype="multipart/form-data">
            @method("PUT")
            @csrf
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" value="{{$prestamos->usuario}}" required >
              </div>
            <div class="mb-3">
              <label for="fecha" class="form-label">Fecha</label>
              <input type="date" class="form-control" id="fecha" name="fecha" value="{{$prestamos->fecha}}" required>
            </div>
          <div class="mb-3">
            <label for="hora" class="form-label">Hora</label>
            <input type="time" class="form-control" id="hora" name="hora" value="{{$prestamos->hora}}" required>
          </div class="mb-3">

          <div class="mb-3">
            <label for="libros" class="form-label">Libros</label>
            <input type="text" class="form-control" id="libros" name="libros" value="{{$prestamos->libros}}" required>
          </div class="mb-3">
          
          </select>
          <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" value="{{$prestamos->cantidad}}" required>
          </div>

          <a href="{{url('Prestamos')}}" class="btn btn-secondary">Regresar</a>

          <button type="submit" class="btn btn-success">Guardar cambios</button>
        </form>
          </div>
          
      </div>
    </div>
</div>
@endsection


<style>
  *{
  font-family: 'Josefin Sans', sans-serif;
  font-family: 'Preahvihear', sans-serif;
  font-family: 'Varela Round', sans-serif;
  }
</style>


</body>
</html>