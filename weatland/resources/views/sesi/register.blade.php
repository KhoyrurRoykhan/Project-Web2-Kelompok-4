<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/styleregister.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Register | Wetland</title>

    {{-- modifikaasi --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css" />
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/css_landing_page/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/css_landing_page/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('css/css_landing_page/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('css/css_landing_page/images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('css/css_landing_page/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="{{asset('css/css_landing_page/css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/css_landing_page/css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body>
    <!--header section start -->
    <div class="header_section">
        <nav class="navbar navbar-dark bg-dark">
            <a class="logo" href="/"><img src="{{asset('img/logo bw.png')}}"></a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarsExample01">
              <ul class="navbar-nav mr-auto">
                 <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#">Flora</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#">Fauna</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#">Budaya</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#">Kuis</a>
                 </li>
              </ul>
           </div>
        </nav>
     </div>
     <!--header section end -->

    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <!-------Image-------->
                    <img src="#" alt="">
                    <div class="text">
                        <h3 style="color: aliceblue">Mari buat akun untuk mengenal Flora, Fauna, dan Budaya di Pulau Kalimantan</h3>
                    </div>
                </div>
                <div class="col-md-6 right">
                     <div class="input-box">
                        <header><h2>Daftar</h2></header>
                        @if (session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session()->has('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                        <form action="{{ route('daftar.akun' )}}" method="POST">
                            @csrf
                            <div class="input-field">
                                <input type="text" class="input" name="name"  required autocomplete="off">
                                <label for="name" class="form-label">Nama</label>
                            </div>
                            <div class="input-field">
                                <input type="text" class="input" name="email"  required autocomplete="off">
                                <label for="email" class="form-label">Email</label>
                            </div>
                            <div class="input-field">
                                <input type="password" class="input" name="password" required>
                                <label for="password" class="form-label">Password</label>
                            </div>
                            <div class="input-field">
                                <input type="submit" class="submit" value="Daftar">
                                
                            </div>
                            <div class="signin">
                                <span>Sudah punya akun? <a href="/sesi">Masuk disini</a></span>
                            </div>
                        </form>
                     </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Javascript files-->
     <script src="{{asset('css/css_landing_page/js/jquery.min.js')}}"></script>
     <script src="{{asset('css/css_landing_page/js/popper.min.js')}}"></script>
     <script src="{{asset('css/css_landing_page/js/bootstrap.bundle.min.js')}}"></script>
     <script src="{{asset('css/css_landing_page/js/jquery-3.0.0.min.js')}}"></script>
     <script src="{{asset('css/css_landing_page/js/plugin.js')}}"></script>
     <!-- sidebar -->
     <script src="{{asset('css/css_landing_page/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
     <script src="{{asset('css/css_landing_page/js/custom.js')}}"></script>
     <!-- javascript --> 
     <script src="{{asset('css/css_landing_page/js/owl.carousel.js')}}"></script>
     <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> 
     <script type="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2//2.0.0-beta.2.4/owl.carousel.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
     <script src="../../assets/js/vendor/popper.min.js"></script>
     <script src="../../dist/js/bootstrap.min.js"></script>
</body>
</html>