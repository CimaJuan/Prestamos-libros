<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bibliotecarios</title>
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

    <div class="text-center mb-5 pt-3"> <h1> Editar Bibliotecario</h1></div>
    <div style="text-align: center">
          
          @if ($errors->any())
          <div class="alert alert-warning" role="alert">
              @foreach ($errors->all() as $error)
                <ul>{{ $error }}</ul>  
              @endforeach
          </div>
          @endif
          
          <div class="modal-body container col-6">
          
            <form action="{{url('/Bibliotecario' .$bibliotecarios->id)}}" method="POST" enctype="multipart/form-data">
                @method("PUT")
              @csrf
                <div class="mb-3">
                  <label for="" class="form-label">Foto</label>
                  <input type="file" class="form-control" id="foto" name="foto" value="{{ $bibliotecarios->foto }}" required>
                </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $bibliotecarios->nombre }}" required>
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" value="{{$bibliotecarios->telefono}}" required>
                  </div>

                <a href="{{url('Bibliotecario')}}" class="btn btn-secondary">Regresar</a>
          
                <button type="submit" class="btn btn-success">Guardar cambios</button>
              </form>

        </div>

          
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