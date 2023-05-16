<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body style="background-color: #ECF2FF">
    <nav class="navbar navbar-dark fixed-top" style="background-color: #3E54AC">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Wetland</a>
        <a class="navbar-brand" href="#">FAUNA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h4 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Selamat Datang, {{ Auth::user()->name }}</h4>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link" href="/home"><h5>Home</h5></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('menu.flora')}}"><h5>Flora</h5></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('menu.fauna')}}"><h5>Fauna</h5></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('menu.budaya')}}"><h5>Budaya</h5></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('menu.quis')}}"><h5>Quis</h5></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}"><h5>Logout</h5></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

  <div class="container text-center mb-3" style="margin-top: 70px">
    <div class="">
        <div class="">
            <h1>Selamat Datang, {{ Auth::user()->name }}</h1>
            <br>
            <h3>MENU FAUNA</h3>
        </div>
        <div class="container-sm mt-5">
          <div class="container text-center">
              <div class="row">
                  <div class="col m-3 rounded-5" style="background-color: #655DBB">
                      <a href="{{ route('fauna.faunakalimantan') }}"><img style="width: 200px" height="200px"
                              src="{{ URL('img/faunalist.png') }}"></a>
                      <h5 style="color: #ECF2FF">FAUNA KALIMANTAN</h5>
                  </div>
                  <div class="col m-3 rounded-5" style="background-color: #655DBB">
                      <a href="{{ route('fauna.faunavoice') }}"><img style="width: 200px" height="200px"
                              src="{{ URL('img/voiceanimal.png') }}"></a>
                      <h5 style="color: #ECF2FF">SUARA FAUNA</h5>
                  </div>
              </div>
          </div>
      </div>
        </div>
    </div>

      
        
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
