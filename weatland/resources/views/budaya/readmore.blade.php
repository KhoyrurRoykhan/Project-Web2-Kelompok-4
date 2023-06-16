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
    <title>Rumah Adat Kalimantan</title>
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
<div class="header_section" style="background-image: url({{ asset('img/banner-kuis.png') }})">
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





    <div class="container py-5">
        <div class="card shadow">
            <img src="{{ url('storage/' . $item->image) }}" alt="{{ $item->title }}" class="card-img-top">
            <div class="card-body">
                <span>
                    <h1 class="card-title">{{ $item->title }}</h1>
                </span>
                <p class="card-text" type="html" id="desc">{!! htmlspecialchars_decode($item->description) !!}</p>

                <center>
                    <div id="buttons" style="margin-bottom: 20px">
                        <form action="{{ route('budaya.rumahadat') }}">
                            <button
                                style="background-color: rgb(218, 75, 75); font-size: 20px; padding: 10px 20px; border-radius: 10px;"
                                class="continue">Kembali</button>
                        </form>
                    </div>
                </center>
            </div>
        </div>

    </div>


    <div class="footer_section layout_padding footer_main">
        <div class="container">
            <div class="social_icon">
                <ul>
                    <li><a href="#"><img src="{{ asset('css/css_landing_page/images/fb-icon.png') }}"></a></li>
                    <li><a href="#"><img src="{{ asset('css/css_landing_page/images/twitter-icon.png') }}"></a>
                    </li>
                    <li><a href="#"><img src="{{ asset('css/css_landing_page/images/linkedin-icon.png') }}"></a>
                    </li>
                    <li><a href="#"><img
                                src="{{ asset('css/css_landing_page/images/instagram-icon.png') }}"></a>
                    </li>
                </ul>
            </div>
            <div class="location_section">
                <ul>
                    <li><a href="#"><img src="{{ asset('css/css_landing_page/images/mail-icon.png') }}"><span
                                class="padding_left_15">demo@gmail.com</span></a></li>
                    <li><a href="#"><img src="{{ asset('css/css_landing_page/images/call-icon.png') }}"><span
                                class="padding_left_15">(+71 9876543210)</span></a></li>
                    <li><a href="#"><img src="{{ asset('css/css_landing_page/images/map-icon.png') }}"><span
                                class="padding_left_15">Location</span></a></li>
                </ul>
            </div>
            <!-- copyright section start -->
            <div class="copyright_section">
            </div>
            <!-- copyright section end -->
        </div>
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
