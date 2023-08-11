<!DOCTYPE html>
<html lang="en">

<head>
  <title>Libros</title>
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
 <!--iconos-->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
</head> 
<body>
    
    @extends('layouts.template')
    
    @section('nav')
    @endsection
    
    @section('contenido')

    <div class="text-center mb-5 pt-3"> <h1>Libros</h1></div>
    <div style="text-align: center">
    

    <button type="button" class="btn btn-primary mb-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="{{url('Libros')}}">
      Agregar
    </button>
    <a class="btn btn-success mb-5" target="_blank" href="{{url('pdf_libros')}}">Reporte</a>
    
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar libros</h1>
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
          <form action="{{url('Libros')}}" method="POST" enctype="multipart/form-data">
            @csrf   
            <div class="mb-3">
                <label for="ISBN" class="form-label">ISBN</label>
                <input type="text" class="form-control" id="codigo libro" name="ISBN" value="{{old('ISBN')}}" required>
              </div>
            <div class="mb-3">
              <label for="titulo" class="form-label">Titulo</label>
              <input type="text" class="form-control" id="titulo" name="titulo" value="{{old('titulo')}}" pattern="[A-Za-z\s]+" required>
            </div>
            <div class="mb-3">
              <label for="autor" class="form-label">Autor</label>
              <input type="text" class="form-control" name="autor" id="autor" value="{{old('autor')}}" required>
            </div>
            <div class="mb-3">
              <label for="editorial" class="form-label">Editorial</label>
            <select class="form-select" type="text"  name="editorial" id="editorial" value="{{old('editorial')}}" required >
            <option value=""></option>
             @foreach($editorial as $editorial)
             <option value="{{ $editorial->id }}">{{ $editorial->nombre }}</option>
             @endforeach
            </select>
            </div>
              <div class="mb-3">
                <label for="categoria" class="form-label">Categoria</label>
              <select class="form-select" type="text"  name="categoria" id="Cateogria" value="{{old('categoria')}}" required >
              <option value=""></option>
              @foreach($categoria as $categoria)
             <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
             @endforeach
              </select>
              </div>
              <div class="mb-3">
                <label for="ejemplares" class="form-label">Ejemplares</label>
                <input type="number" class="form-control" name="ejemplares" id="ejemplares" value="{{old('ejemplares')}}" required>
              </div>
              <div class="mb-3">
                <label for="estado" class="form-label">Estado</label> 
              <select class="form-select" type="text"  name="estado" id="estado" value="{{old('estado')}}" required >
              <option value=""></option> 
              @foreach($estado as $estado)
             <option value="{{ $estado->id }}">{{ $estado->nombre }}</option>
             @endforeach
              </select>
              </div>
              <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" name="foto" id="foto" value="{{old('foto')}}">
              </div>
            <button type="submit" class="btn btn-success">Agregar libro</button>
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
              <th scope="col">ISBN</th>
              <th scope="col">Titulo</th>
              <th scope="col">Autor</th>
              <th scope="col">Editorial</th>
              <th scope="col">Categoria</th>
              <th scope="col">Ejemplares</th>
              <th scope="col">Estado</th>
              <th scope="col">Foto</th>
              <th scope="col">Editar</th>
              <th scope="col">Eliminar</th>
            </tr>
          </thead>

          <tbody>
              <tr>
            @foreach($libros as $libro)
              <td data-titulo="ISBN">{{ $libro->ISBN }}</td>
              <td data-titulo="Titulo">{{ $libro->titulo }}</td>
              <td data-titulo="Autor">{{ $libro->autor }}</td>
              <td data-titulo="Editorial">{{ $libro->editorial->nombre }}</td>
              <td data-titulo="Categoría">{{ $libro->categoria->nombre }}</td>
              <td data-titulo="Ejemplares">{{ $libro->ejemplares }}</td>
              <td data-titulo="Estado">{{ $libro->estado->nombre }}</td>
              <td data-titulo="Foto"><img src="{{ $libro->foto }}" alt="" class="img-fluid img-thumbnail" width= 80px ></td>
    
              <td><a href="{{ url('/Libros' .$libro->id. '/libros_edit') }}" class="btn btn-warning">Editar</a></td> 

              <td>
                <form action="{{ url('Libros' .$libro->id) }}" method="POST">
                  @method("DELETE")
                  @csrf
                  <button type="submit" class="btn btn-danger ">Eliminar</button>
                </form>
              </td>

             </tr>  
             @endforeach

          </tbody>
        </table>
      </div>


    @endsection

</body>
</html>

