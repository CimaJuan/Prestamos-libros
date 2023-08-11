<!DOCTYPE html>
<html lang="en">

<head>
    <title>Editar libro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap JavaScript Libraries -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <!-- Bootstrap JavaScript Libraries -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
 
 <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
 <!--iconos-->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
 <!--styles-->
 <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
    
@extends('layouts.template')
    
    @section('nav')
    @endsection
    
    @section('contenido')

    <div class="text-center mb-5 pt-3"> <h1> Editar Libro</h1></div>
    <div style="text-align: center ">

    @if ($errors->any())
          <div class="alert alert-warning" role="alert">
              @foreach ($errors->all() as $error)
                <ul>{{ $error }}</ul>  
              @endforeach
          </div>
          @endif

          <div class="modal-body container col-10">
          <form action="{{url('/Libros' .$libros->id )}}" method="POST" enctype="multipart/form-data">
            @method("PUT")
            @csrf
            <div class="mb-3">
                <label for="ISBN" class="form-label">ISBN</label>
                <input type="text" class="form-control" id="codigo libro" name="ISBN" value="{{ $libros->ISBN }}" required>
              </div>
            <div class="mb-3">
              <label for="titulo" class="form-label">Titulo</label>
              <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $libros->titulo }}" required>
            </div>
            <div class="mb-3">
              <label for="autor" class="form-label">Autor</label>
              <input type="text" class="form-control" name="autor" id="autor" value="{{ $libros->autor }}" required>
            </div>
            <div class="mb-3">
              <label for="editorial" class="form-label">Editorial</label>
            <select class="form-select" type="text"  name="editorial" id="editorial" value="" required  >
            <option value=""></option>
             @foreach($editorial as $editorial)
             <option value="{{ $editorial->id }}" @if ($editorial->id == $libros->editorial_id) {{'selected'}} @endif > {{ $editorial->nombre }} </option>
             @endforeach
            </select>

            </div>
              <div class="mb-3">
                <label for="categoria" class="form-label">Categoria</label>
              <select class="form-select" type="text"  name="categoria" id="Cateogria" value="" required >
              <option value=""></option>
              @foreach($categoria as $categoria)
             <option value="{{ $categoria->id }}" @if ($categoria->id == $libros->categoria_id) {{'selected'}} @endif
                >{{ $categoria->nombre }}</option>
             @endforeach
              </select>
              </div>

              <div class="mb-3">
                <label for="ejemplares" class="form-label">Ejemplares</label>
                <input type="number" class="form-control" name="ejemplares" id="ejemplares" value="{{$libros->ejemplares}}" required>
              </div>
              <div class="mb-3">
                <label for="estado" class="form-label">Estado</label>
              <select class="form-select" type="text"  name="estado" id="estado" value="" required >
              <option value=""></option>
              @foreach($estado as $estado)
             <option value="{{ $estado->id }}" @if ($estado->id == $libros->estado_id){{'selected'}} @endif
               >{{ $estado->nombre }}</option>
             @endforeach
              </select> 
              </div>
              <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" name="foto" id="foto" value="{{ $libros->foto }}">
              </div>

              <a href="{{url('Libros')}}" class="btn btn-secondary">Regresar</a>
              <button type="submit" class="btn btn-success">guardar cambios</button>  
          </form> 
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