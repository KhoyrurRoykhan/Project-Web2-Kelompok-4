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
    <title>Fauna Kalimantan</title>
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



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        button {
            appearance: none;
            background: transparent;
            border: 0;
            color: #fff;
            cursor: pointer;
            font: inherit;
            font-weight: 500;
            line-height: 1;
            padding: 1em 1.5em;
            position: relative;
            transition: filter var(--motion-duration);
        }

        button:hover {
            filter: brightness(1.1);
        }

        button:active {
            filter: brightness(0.9);
        }

        button>span {
            display: block;
            position: relative;
            transition: transform var(--motion-duration) var(--motion-ease);
            z-index: 1;
        }

        button:hover>span {
            transform: scale(1.05);
        }

        button:active>span {
            transform: scale(0.95);
        }

        button>svg {
            fill: #de560c;
            position: absolute;
            top: -5%;
            left: -5%;
            width: 110%;
            height: 110%;
        }

        button>svg>path {
            transition: var(--motion-duration) var(--motion-ease);
        }

        button:hover>svg>path {
            d: path("M0,0 C0,-5 100,-5 100,0 C105,0 105,100 100,100 C100,105 0,105 0,100 C-5,100 -5,0 0,0");
        }

        button:active>svg>path {
            d: path("M0,0 C30,10 70,10 100,0 C95,30 95,70 100,100 C70,90 30,90 0,100 C5,70 5,30 0,0");
        }

        /* footer new */
    </style>

    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

</head>
<!--header section start -->
<div class="header_section" style="background-image: url({{ asset('img/banner-kuis.png') }})">
    <nav class="navbar navbar-dark bg-dark">
        {{-- <a class="logo ml-3" href="index.html"><img src="{{ asset('css/css_landing_page/images/logo.png') }}"></a> --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01"
            aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ml-3" id="navbarsExample01">
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



                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">

                            <h1 class="banner_taital_1">K U I S</h1>
                            <p class="banner_text">"Kuis flora fauna dan budaya Kalimantan akan membawa Anda dalam
                                perjalanan pengetahuan yang menarik. Jawab pertanyaan seputar pohon bakau, bekantan, dan
                                senjata tradisional suku Ngaju."</p>

                        </div>
                    </div>
                    {{-- <div class="carousel-item">
                     <div class="container">
                        
                        <h1 class="banner_taital_1">S u a r a - f a u n a - k a l i m a n t a n</h1>
                        <p class="banner_text">"Anda dapat mendengarkan suara-suara menarik dari fauna yang hidup di pulau Kalimantan. Nikmati pengalaman audio yang memukau dan mendekatkan Anda dengan keindahan alam dan keberagaman satwa-satwa Kalimantan."</p>
                        
                     </div>
                  </div> --}}

                </div>
            </div>
        </div>
    </div>
</div>
<!--banner section end -->
</div>
<!--header section end -->

<!-- about section start -->
<!-- about section start -->
<div class="container mb-3">
    <div class="text-center">
        <h1>Hallo {{ Auth::user()->name }}, Selamat datang di halaman kuis</h1>
        <br>
        <h4>Silahkan klik tombol mulai dibawah ini untuk memulai kuis!</h4>
    </div>

    <div class="text-right mt-4">
        @if (auth()->user()->level == 'admin')
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addItem">
                Tambah Soal
            </button>
        @endif
    </div>

    <div class="text-center">
        <form action="{{ route('startkuis') }}" method="get" style="display: inline">

            <button type="submit" style="width: 20%; height: 20%;">
                <span>Mulai Kuis!</span>
                <svg viewBox="-5 -5 110 110" preserveAspectRatio="none" aria-hidden="true">
                    <path d="M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0" />
                </svg>
            </button>

        </form>
    </div>

    <div class="container-sm mt-5 text-left" style="width: 50%">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        @if (auth()->user()->level == 'admin')
            @foreach ($items as $item)
                <div class="container mt-4" style="background-color: #655DBB; border-radius: 10px; padding: 10px">
                    <h5 style="color: #ECF2FF">{{ $item->soal }}</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                            id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1" style="color: #ECF2FF">
                            {{ $item->option_a }}
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                            id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2" style="color: #ECF2FF">
                            {{ $item->option_b }}
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                            id="flexRadioDefault3">
                        <label class="form-check-label" for="flexRadioDefault3" style="color: #ECF2FF">
                            {{ $item->option_c }}
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                            id="flexRadioDefault4">
                        <label class="form-check-label" for="flexRadioDefault4" style="color: #ECF2FF">
                            {{ $item->option_d }}
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                            id="flexRadioDefault5">
                        <label class="form-check-label" for="flexRadioDefault5" style="color: #ECF2FF"> Jawaban :
                            {{ $item->Jawaban }}
                        </label>
                    </div>

                    <div class="mt-3">
                        @if (auth()->user()->level == 'admin')
                            <form action="{{ route('mulaikuis.destroy', $item->id) }}" method="POST"
                                style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#editItem{{ $item->id }}">
                                Edit
                            </button>
                        @endif
                    </div>

                </div>



                <!-- Modal Edit -->
                <div class="modal" id="editItem{{ $item->id }}" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Fauna</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('mulaikuis.update', $item->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="title">Soal</label>
                                        <input type="text" class="form-control" name="soal" id="title"
                                            value="{{ $item->soal }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="description">Option A</label>
                                        <input type="text" name="option_a" id="option_a" cols="10"
                                            rows="5" class="form-control" value="{{ $item->option_a }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="description">Option B</label>
                                        <input type="text" name="option_b" id="option_b" cols="10"
                                            rows="5" class="form-control" value="{{ $item->option_b }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="description">Option C</label>
                                        <input type="text" name="option_c" id="option_c" cols="10"
                                            rows="5" class="form-control" value="{{ $item->option_c }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="description">Option D</label>
                                        <input type="text" name="option_d" id="option_d" cols="10"
                                            rows="5" class="form-control" value="{{ $item->option_d }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="description">Jawaban</label>
                                        <input type="text" name="Jawaban" id="Jawaban" cols="10"
                                            rows="5" class="form-control" value="{{ $item->Jawaban }}">
                                    </div>

                                    <button class="btn btn-primary" type="submit">Edit Kuis</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

    <div class="modal" id="addItem" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Soal Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('mulaikuis.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title">Soal</label>
                            <textarea class="form-control" name="soal" id="soal" cols="30" rows="5"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="description">Option A</label>
                            <input type="text" name="option_a" id="option_a" cols="10" rows="5"
                                class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="description">Option B</label>
                            <input type="text" name="option_b" id="option_b" cols="10" rows="5"
                                class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="description">Option C</label>
                            <input type="text" name="option_c" id="option_c" cols="10" rows="5"
                                class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="description">Option D</label>
                            <input type="text" name="option_d" id="option_d" cols="10" rows="5"
                                class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="description">Jawaban</label>
                            <input type="text" name="Jawaban" id="Jawaban" cols="10" rows="5"
                                class="form-control">
                        </div>
                        <button class="btn btn-primary" type="submit">Tambah Soal</button>
                    </form>

                </div>

            </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    </body>

</html>
