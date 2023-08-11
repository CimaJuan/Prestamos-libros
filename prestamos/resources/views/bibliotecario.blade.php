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

    <div class="text-center mb-5 pt-3"> <h1>Bibliotecarios</h1></div>
    <div style="text-align: center">
    
    <button type="button" class="btn btn-primary mb-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
      Agregar
    </button>
    <a class="btn btn-success mb-5" target="_blank" href="{{url('pdf_bibliotecarios')}}">Reporte</a>
    
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Registrar bibliotecario</h1>
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
          
            <form action="{{url('Bibliotecario')}}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="mb-3">
                  <label for="" class="form-label">Foto</label>
                  <input type="file" class="form-control" id="foto" name="foto" value="{{old('foto')}}" required>
                </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}" required>
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" value="{{old('telefono')}}" required>
                  </div>
                  
                <button type="submit" class="btn btn-success">Registrar</button>
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
              <th scope="col">Foto</th>
              <th scope="col">Nombre</th>
              <th scope="col">Telefono</th>
              <th scope="col">Editar</th>
              <th scope="col">Eliminar</th>
            </tr>
          </thead>
          <tbody>
            @foreach($bibliotecarios as $bibliotecario)
            <tr>
              <td data-titulo="Foto"> <img src="{{ $bibliotecario->foto }}"  class="img-fluid img-thumbnail" width= 80px></td>
              <td data-titulo="Nombre">{{ $bibliotecario->nombre }}</td>
              <td data-titulo="Telefono">{{ $bibliotecario->telefono }}</td>
              <td><a href="{{ url('/Bibliotecario' .$bibliotecario->id. '/bibliotecarios_edit') }}" class="btn btn-warning">Editar</a></td>

              <td>
                <form action="{{ url('Bibliotecario' .$bibliotecario->id) }}" method="POST">
                  @method("DELETE")
                  @csrf
                  <button type="submit" class="btn btn-danger ">Eliminar</button>
                </form>
              </td>

            </tr>
            @endforeach
          </tbody>
        </table>

    @endsection


</body>
</html>