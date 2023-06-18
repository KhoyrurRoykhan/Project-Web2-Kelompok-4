<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Fauna | Wetland</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- owl carousel style -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css" />
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/css_landing_page/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/css_landing_page/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('css/css_landing_page/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('css/css_landing_page/images/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/css_landing_page/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/css_landing_page/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css_landing_page/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
</head>
<!--header section start -->
<div class="header_section">
    <nav class="navbar navbar-dark bg-dark">
        {{-- <a class="logo" href="index.html"><img src="{{ asset('css/css_landing_page/images/logo.png') }}"></a> --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01"
            aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home.home') }}">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('menu.flora') }}">Flora</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('menu.fauna') }}">Fauna</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('menu.budaya') }}">Budaya</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('menu.quis') }}">Kuis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Keluar</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--banner section start -->
    <div class="banner_section layout_padding">
        <div class="container-fluid">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">

                            <h1 class="banner_taital_1">F a u n a - K a l i m a n t a n</h1>
                            <p class="banner_text">"Telusuri beragam habitat yang ada di Kalimantan, mulai dari hutan
                                hujan tropis, sungai-sungai yang mengalir, hingga rawa-rawa yang luas. Lihatlah
                                bagaimana fauna Kalimantan beradaptasi dengan lingkungan hidup mereka yang khas."</p>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">

                            <h1 class="banner_taital_1">S u a r a - f a u n a - k a l i m a n t a n</h1>
                            <p class="banner_text">"Anda dapat mendengarkan suara-suara menarik dari fauna yang hidup di
                                pulau Kalimantan. Nikmati pengalaman audio yang memukau dan mendekatkan Anda dengan
                                keindahan alam dan keberagaman satwa-satwa Kalimantan."</p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--banner section end -->
</div>
<!--header section end -->

<!-- about section start -->
<div class="about_section layout_padding">
    <h1 class="game_taital"><img style="width: 50px" src="{{ asset('img/fauna.png') }}"> <span>Menu Fauna</span></h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="about_taital"><span>Fauna Kalimantan</span></h1>
                <p>
                    Menu fauna Kalimantan memberikan kesempatan bagi para pengunjung untuk menjelajahi keanekaragaman
                    alam yang menakjubkan. Dari hutan hujan yang lebat hingga sungai-sungai yang membelah daratan, Anda
                    dapat menemukan spesies-spesies langka yang unik dan melihat keajaiban alam yang luar biasa.
                    Jelajahi kehidupan liar orangutan, badak bercula satu, gajah Sumatera, dan banyak lagi. Rasakan
                    getaran alam saat Anda menyusuri sungai dan temui ikan-ikan eksotis serta mungkin melihat buaya
                    muara yang menakjubkan. Dalam menu fauna Kalimantan, petualangan dan keajaiban alam menanti Anda.
                </p>
                <div class="read_bt"><a href="{{ route('fauna.faunakalimantan') }}">Ketahui Lebih Lanjut</a></div>
            </div>
            <div class="col-md-6 mt-5">
                <div class="mt-5"><img src="{{ asset('img/menu-fauna-kalimantan.png') }}" class="image_1"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="about_taital"><span>Suara Fauna Kalimantan</span></h1>
                <p>
                    Dalam menu suara fauna Kalimantan, Anda akan terpesona oleh ragam suara yang unik dan menggugah dari
                    hewan-hewan khas pulau ini. Dengarkanlah riakannya yang berirama, ketukan burung-burung bernyanyi di
                    hutan-hutan Kalimantan, atau mungkin seruan kuat orangutan yang menggema di antara pepohonan lebat.
                    Anda juga dapat merasakan kehadiran sungai melalui suara gemericik air yang tenang, sambil mendengar
                    kicauan burung air dan desiran sayap burung air berterbangan rendah. Menu suara fauna Kalimantan
                    mengajak Anda untuk membenamkan diri dalam keindahan suara alam dan menghargai keberagaman suara
                    yang hanya dapat ditemukan di pulau ini.
                </p>
                <div class="read_bt"><a href="{{ route('fauna.faunavoice') }}">Ketahui Lebih Lanjut</a></div>
            </div>
            <div class="col-md-6 mt-5">
                <div class="mt-5"><img src="{{ asset('img/menu-suara-fauna.png') }}" class="image_1"></div>
            </div>
        </div>
    </div>
</div>
<!-- about section end -->





{{-- <!-- client section start -->
      <div class="client_section layout_padding">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="casino_taital"><span>Fauna Kalimantan</span></h1>
                     <div class="image_7"><img style="width:130px;" src="{{asset('img/faunalist.png')}}"></div>
                     <h4 class="jone_text">Fauna Kalimantan</h4>
                     <p class="ipsum_text">Telusuri beragam habitat yang ada di Kalimantan, mulai dari hutan hujan tropis, sungai-sungai yang mengalir, hingga rawa-rawa yang luas. Lihatlah bagaimana fauna Kalimantan beradaptasi dengan lingkungan hidup mereka yang khas.</p>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                    <h1 class="casino_taital"><span>Voice Fauna</span></h1>
                    <div class="image_7"><img style="width:130px;" src="{{asset('img/voiceanimal.png')}}"></div>
                    <h4 class="jone_text">Voice Fauna</h4>
                    <p class="ipsum_text"> Anda dapat mendengarkan suara-suara menarik dari fauna yang hidup di pulau Kalimantan. Nikmati pengalaman audio yang memukau dan mendekatkan Anda dengan keindahan alam dan keberagaman satwa-satwa Kalimantan. Mari jelajahi dunia suara fauna Kalimantan!</p>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                    <div class="container">
                        <h1 class="casino_taital"><span>Flora</span></h1>
                        <div class="image_7"><img style="width:130px;" src="{{asset('img/flora.png')}}"></div>
                        <h4 class="jone_text">Flora</h4>
                        <p class="ipsum_text"> Jelajahi flora yang hidup di berbagai ekosistem, seperti hutan hujan tropis, padang rumput, gurun, pegunungan, dan lain-lain. Temukan adaptasi unik tumbuhan terhadap lingkungan di mana mereka tumbuh.</p>
                      </div>
                  </div>
               </div>
               <div class="carousel-item">
                <div class="container">
                  <div class="container">
                      <h1 class="casino_taital"><span>Benda</span></h1>
                      <div class="image_7"><img style="width:130px;" src="{{asset('img/benda.png')}}"></div>
                      <h4 class="jone_text">Benda</h4>
                      <p class="ipsum_text">Anda dapat menjelajahi keunikan dan keindahan benda-benda tradisional dari Kalimantan. Mari kita melangkah ke dalam warisan budaya yang kaya dan menikmati keberagaman seni dan kerajinan yang ada di pulau ini. Saksikanlah pesona benda-benda khas Kalimantan!</p>
                    </div>
                </div>
             </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- client section end --> --}}

<!-- footer section start -->
<div class="footer_section footer_main">

    @extends('layout.footer')
    @section('konten')
    @endsection
    <!-- footer section end -->
    <!-- Javascript files-->
    <script src="{{ asset('css/css_landing_page/js/jquery.min.js') }}"></script>
    <script src="{{ asset('css/css_landing_page/js/popper.min.js') }}"></script>
    <script src="{{ asset('css/css_landing_page/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('css/css_landing_page/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('css/css_landing_page/js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('css/css_landing_page/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('css/css_landing_page/js/custom.js') }}"></script>
    <!-- javascript -->
    <script src="{{ asset('css/css_landing_page/js/owl.carousel.js') }}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script type="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2//2.0.0-beta.2.4/owl.carousel.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    </body>

</html>
