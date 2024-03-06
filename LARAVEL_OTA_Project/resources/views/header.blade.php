<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>Welcome to OTA</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand fw-bold" href="#">LOGO</a>
    
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
    
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{ url('/home') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Hotel
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li> <a class="dropdown-item" href="{{ url('/hoteldetails') }}">Hotel Details</a></li>
                    <li> <a class="dropdown-item" href="{{ url('/hotellist') }}">Hotel List</a></li>
                    <li><a class="dropdown-item" href="#">Pages</a></li>
                  </ul>
                </li>
        
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Ture
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Ture-1</a></li>
                    <li><a class="dropdown-item" href="#">Ture</a></li>
                    <li><a class="dropdown-item" href="#">Pages</a></li>
                  </ul>
                </li>
        
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Pages
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Pages-1</a></li>
                    <li> <a class="dropdown-item" href="{{ url('/contact') }}">Contact</a></li>
                    <li><a class="dropdown-item" href="{{ url('/checkout') }}">Checkout</a></li>
                  </ul>
                </li>
        
              </ul>
            </div>
                  <!-- Adjusted src attribute to a direct path -->
    
                    <img src="{{ asset('images/logo2.png') }}" alt="" style="width: 40px; height: 40px; margin-right: 15px;">
                    <h6 style="margin-right: 15px;">USD</h6>
                    <a href="singup">
                    <button class="btn btn-outline-success me-2" type="button">Sign Up</button>
                    </a>
                    <a href="#" class="fas fa-shopping-cart" style="font-size: 24px; color: #000; text-decoration: none; margin-left: 15px;"></a>
                </div>
            </nav>
  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  </body>
