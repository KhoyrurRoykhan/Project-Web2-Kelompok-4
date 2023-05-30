<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body style="background-color: #ECF2FF">
    <nav class="navbar navbar-dark fixed-top shadow" style="background-color: #3E54AC">
        <div class="container-fluid">
            <div>
                <a class="navbar-brand" href="#"><b>Wetland</b></a>

            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h4 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Selamat Datang, {{ Auth::user()->name }}
                    </h4>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="/home">
                                <h5>Home</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('menu.flora') }}">
                                <h5>Flora</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('menu.fauna') }}">
                                <h5>Fauna</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('menu.budaya') }}">
                                <h5>Budaya</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('menu.quis') }}">
                                <h5>Quis</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">
                                <h5>Logout</h5>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container text-center mb-3" style="margin-top: 70px">
        <div class="">
            <div class="">
                <h3>Selamat Datang, {{ Auth::user()->name }}</h3>
                <br>
                <h4>"Selamat datang di halaman utama kami, di mana Anda dapat menjelajahi kekayaan flora, fauna, dan budaya yang memukau di Pulau Kalimantan!"</h4>
            </div>

        </div>
    </div>

    <div class="container">
        <center><div class="row m-4">
            <div class="col m-4">
                <div class="card shadow" style="width: 30rem;">
                    <center><img src="{{ URL('img/flora.png') }}" class="card-img-top" alt="..." style="width: 200px"></center>
                    <div class="card-body">
                      <h5 class="card-title">FLORA</h5>
                      <p class="card-text">Ayo jelajahi Flora yang berada di pulau Kalimantan</p>
                      <a href="{{ route('menu.flora') }}" class="btn btn-primary" style="background-color: #655DBB">Jelajahi</a>
                    </div>
                  </div>
            </div>

            <div class="col m-4">
                <div class="card shadow" style="width: 30rem;">
                    <center><img src="{{ URL('img/fauna.png') }}" class="card-img-top" alt="..." style="width: 200px"></center>
                    <div class="card-body">
                      <h5 class="card-title">FAUNA</h5>
                      <p class="card-text">Ayo jelajahi Fauna yang berada di pulau Kalimantan</p>
                      <a href="{{ route('menu.fauna') }}" class="btn btn-primary" style="background-color: #655DBB">Jelajahi</a>
                    </div>
                  </div>
            </div>
        </div></center>

        <center><div class="row m-4">
            <div class="col m-4">
                <div class="card shadow" style="width: 30rem;">
                    <center><img src="{{ URL('img/budaya.png') }}" class="card-img-top" alt="..." style="width: 200px"></center>
                    <div class="card-body">
                      <h5 class="card-title">BUDAYA</h5>
                      <p class="card-text">Ayo jelajahi Budaya yang berada di pulau Kalimantan</p>
                      <a href="{{ route('menu.budaya') }}" class="btn btn-primary" style="background-color: #655DBB">Jelajahi</a>
                    </div>
                  </div>
            </div>

            <div class="col m-4">
                <div class="card shadow" style="width: 30rem;">
                    <center><img src="{{ URL('img/quis.png') }}" class="card-img-top" alt="..." style="width: 250px; height: 200px"></center>
                    <div class="card-body">
                      <h5 class="card-title">KUIS</h5>
                      <p class="card-text">Ayo uji pengetahuanmu</p>
                      <a href="{{ route('menu.quis') }}" class="btn btn-primary" style="background-color: #655DBB">Uji Pengetahuan</a>
                    </div>
                  </div>
            </div>
        </div></center>
    </div>

    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="/" class="nav-link px-2 text-body-secondary">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
            </ul>
            <p class="text-center text-body-secondary">&copy; 2023 Weatland, Inc</p>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
