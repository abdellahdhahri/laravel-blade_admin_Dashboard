<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Votre Site</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Store</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link me-4 active" href="#billboard">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-4" href="#company-services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-4" href="#mobile-products">Products</a>
        </li>
        <li class="nav-item">
          <div class="users-items">
            <ul class="d-flex justify-content-end list-unstyled">
              @if (Auth::check())
                <li class="nav-item"><a class="nav-link me-4" href="#"> {{ auth()->user()->name }}</a></li>
                <li class="nav-item"><a class="nav-link me-4" href="{{ route('logout') }}">Logout</a></li>
              @else
                <li class="nav-item"><a class="nav-link me-4" href="{{ route('login') }}">Login</a></li>
                <li class="nav-item"><a class="nav-link me-4" href="{{ route('register') }}">Register</a></li>
              @endif
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Bootstrap JS (optional) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
