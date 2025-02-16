<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f3e7;
      color: #4a4a4a;
    }

    .header {
      background-color: #ffcad4;
      color: #6d6875;
      padding: 20px;
      text-align: center;
      font-weight: bold;
      font-size: 1.8rem;
    }

    .navbar {
      background-color: #ffcad4;
    }

    .navbar a {
      color: #6d6875;
      font-weight: 500;
    }

    .navbar a:hover {
      color: #2d2a32;
    }

    .btn-custom {
      background-color: #ff9aa2;
      color: white;
      border: none;
      transition: 0.3s;
    }

    .btn-custom:hover {
      background-color: #ff758f;
    }

    .content-container {
      background-color: #ffffff;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    footer {
      background-color: #ffcad4;
      color: #6d6875;
      padding: 15px;
      text-align: center;
      margin-top: 30px;
    }
  </style>
</head>

<body>

  <header class="header">
    Blog 💖
  </header>
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="/">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="/api">Documentación</a></li>
          @if(Cookie::get('user_session'))
          <li class="nav-item">
            <a class="btn btn-custom me-2" href="{{ route('admin') }}">Dashboard</a>
          </li>
          <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="btn btn-custom">Cerrar sesión</button>
            </form>
          </li>
          @else
          <li class="nav-item">
            <a class="btn btn-custom me-2" href="{{ route('login') }}">Iniciar sesión</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-custom" href="{{ route('register') }}">Registrarse</a>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>

  <main class="container my-5">
    <div class="content-container">
      @yield('content')
    </div>
  </main>

  <footer>
    &copy; {{ date('Y') }} Blog
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
