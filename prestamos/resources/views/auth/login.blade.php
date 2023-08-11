<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap JavaScript Libraries -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>

    <form action="{{route('login')}}" method="POST">
        @csrf
    <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
              <div class="border border-3 border-primary"></div>
              <div class="card bg-white">
                <div class="card-body p-5">
                  <form class="mb-3 mt-md-4">
                    <h2 class="fw-bold mb-2 text-uppercase ">Iniciar sesion</h2>
                    <p class=" mb-5">Ingresa tu correo y contraseña</p>
                    <div class="mb-3">
                      <label for="email" class="form-label ">Correo electrónico</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="correoelectronico@gmail.com">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label ">Contraseña</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="*******">
                    </div>
                   
                    <div class="d-grid">
                      <button class="btn btn-outline-dark" type="submit">Ingresar</button>
                    </div>
                  </form>
                  
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </form>

</body>
</html>
