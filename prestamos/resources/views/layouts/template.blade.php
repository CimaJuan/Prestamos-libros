<!DOCTYPE html>
<html lang="en">

<head>
  <title>Biblioteca</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- Bootstrap JavaScript Libraries -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <!-- Bootstrap JavaScript Libraries -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  <!--styles-->
 <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
 <link rel="stylesheet" href="css/style.css">

</head>
<body>

<body>
  
    <div>
        @yield('nav')
     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><h5>Biblioteca's Juan</h5></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="Inicio"><h6>Inicio</h6></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Libros"><h6>Libros</h6></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Prestamos"><h6>Prestamos</h6></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Bibliotecario"><h6>Bibliotecarios</h6></a>
              </li>
              
                <form action="{{url('welcome')}}" method="POST">
                  @csrf
                  <a class="btn" data-bs-toggle="button" href="#" onclick="this.closest('form').submit()">Cerrar Sesión</i></a>
                </form>
                
            </ul>
          </div>
        </div>
      </nav>

      
  
       <main>
        @yield('contenido')
       </main>
   
       <!-- Footer -->
  <footer class="text-center text-lg-start bg-white text-muted">
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <div class="me-5 d-none d-lg-block">
        <span>Biblioteca's Juan</span>
      </div>
      <div>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-github"></i>
        </a>
      </div>

    </section>
   
    <section class="">
      <div class="container text-center text-md-start mt-5">
        
        <div class="row mt-3">
          
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
           
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3 text-secondary"></i>Compañia de bibliotecas
            </h6>
            <p>
              Somos una biblioteca especializados en libros, lo que buscamos es que tu siempre tengas a la mano un libro
              con el cual puedas divertirte y tambien puedas adquirir mucho conocimiento
            </p>
          </div>
         
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
    
            <h6 class="text-uppercase fw-bold mb-4">
              Servicios
            </h6>
            <p>
              <a href="#!" class="text-reset">Angular</a>
            </p>
            <p>
              <a href="#!" class="text-reset">React</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel</a>
            </p>
          </div>
          
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
         
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
           
            <h6 class="text-uppercase fw-bold mb-4">Contactanos</h6>
            <p><i class="fas fa-home me-3 text-secondary"></i> San Francisco de Campeche</p>
            <p>
              <i class="fas fa-envelope me-3 text-secondary"></i>
              juansima267@gmail.com
            </p>
            <p><i class="fas fa-phone me-3 text-secondary"></i>+52 981-204-30-75</p>
      
          </div>
          
        </div>
        
      </div>
    </section>
    
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
      © 2023 Copyright:
      <p class="text-reset fw-bold">Ing. Juan Cima</p>
    </div>
  </footer>

</body>

</html>