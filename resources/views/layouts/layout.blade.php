<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Mi aplicación')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Hacer que el footer se quede al fondo */
    html, body {
      height: 100%;
    }

    .content {
      min-height: 100%;
      display: flex;
      flex-direction: column;
    }

    main {
      flex-grow: 1;
    }
  </style>
</head>

<body>

  <div class="content">

    <header class="d-flex justify-content-center pt-3 pb-3 bg-dark text-white">
      <h1>Apple Corner</h1>
    </header>

    <nav class="d-flex justify-content-between align-items-center p-3 bg-dark text-white" aria-label="Header navigation">
      <div class="d-flex">
        <a class="nav-link text-white" href="#">Inicio</a>
        <div class="dropdown">
          <button class="btn btn-link text-white dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Publicaciones
          </button>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Reseñas de productos</a>
            <a class="dropdown-item" href="#">Noticias de Apple</a>
            <a class="dropdown-item" href="#">Consejos y trucos</a>
            <a class="dropdown-item" href="#">Comparativas</a>
            <a class="dropdown-item" href="#">Tutoriales</a>
            <a class="dropdown-item" href="#">Accesorios Apple</a>
            <a class="dropdown-item" href="#">Apple en el trabajo y productividad</a>
          </div>
        </div>
      </div>

      <div class="d-flex">
        <a class="nav-link text-white" href="#">Iniciar sesión</a>
        <a class="nav-link text-white" href="#">Quiero participar en el blog</a>
      </div>
    </nav>

    <main class="m-5">
      @yield('content')
    </main>

    <footer class="bg-dark text-white py-4">
      <div class="container">
        <nav class="mb-3" aria-label="Footer navigation">
          <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Reseñas de productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Noticias de Apple</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Consejos y trucos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Comparativas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Tutoriales</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Accesorios Apple</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Apple en el trabajo y productividad</a>
            </li>
          </ul>
        </nav>
        <p class="text-center mb-0">&copy; {{ date('Y') }} Apple Corner. Todos los derechos reservados.</p>
      </div>
    </footer>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
