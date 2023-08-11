<!DOCTYPE html>
<html lang="en">

<head>
  <title>Inicio</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- Bootstrap JavaScript Libraries -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <!-- Bootstrap JavaScript Libraries -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  <!--styles-->
  <link rel="stylesheet" href="style.css">
 <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

 
</head>
<body>
        @extends('layouts.template')
        
        @section('nav')
        @endsection
        
        @section('contenido')
        
        <header>
          
          <div id="carouselExampleDark" class="carousel carousel-light slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{asset('assets/img/Imagen_1.jpg')}}" class="d-block w-100" alt="">
                <div class="carousel-caption d-none d-md-block">
                  <a class="btn btn-outline-light btn-lg" href="Libros" role="button">Comencemos</a>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="20000">
                <img src="{{asset('assets/img/Imagen_2.jpg')}}" class="d-block w-100" alt="">
                <div class="carousel-caption d-none d-md-block">
                  <a class="btn btn-outline-light btn-lg" href="Libros" role="button">Comencemos</a>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="30000">
                <img src="{{asset('assets/img/Imagen_3.jpg')}}" class="d-block w-100" alt="">
                <div class="carousel-caption d-none d-md-block">
                  <a class="btn btn-outline-light btn-lg" href="Libros" role="button">Comencemos</a>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </header>
      
         @endsection
      

</body>
</html>