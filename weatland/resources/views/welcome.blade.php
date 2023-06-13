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
      <title>Wetland</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- owl carousel style -->
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
            <a class="logo" href="index.html"><img src="{{asset('css/css_landing_page/images/logo.png')}}"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample01">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('sesi.index') }}">Masuk</a>
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
                     <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="container">
                           <h4 class="banner_taital">Welcome to</h4>
                           <h1 class="banner_taital_1">B o r n e o W e t l a n d</h1>
                           <p class="banner_text">"Alam semesta adalah galeri indah, dan fauna adalah lukisan hidup yang menghiasi keajaiban alam ini. Fauna adalah perwakilan kehidupan liar yang tak tergantikan. Lindungi mereka, jaga rumah kita bersama."</p>
                           <div class="book_bt"><a href="{{ route('sesi.index') }}">Masuk Sekarang</a></div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <h4 class="banner_taital">Welcome to</h4>
                           <h1 class="banner_taital_1">B o r n e o W e t l a n d</h1>
                           <p class="banner_text">"Temukan dan jelajahi spesies-spesies fauna yang menarik dari seluruh dunia. Dapatkan informasi tentang habitat, karakteristik, dan kehidupan mereka."</p>
                           <div class="book_bt"><a href="{{ route('sesi.index') }}">Masuk Sekarang</a></div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <h4 class="banner_taital">Welcome to</h4>
                           <h1 class="banner_taital_1">B o r n e o W e t l a n d</h1>
                           <p class="banner_text">"Temukan dan jelajahi kekayaan warisan budaya dari berbagai negara dan komunitas. Pelajari tentang tradisi, seni, adat istiadat, dan perayaan yang memperkaya dunia budaya."</p>
                           <div class="book_bt"><a href="{{ route('sesi.index') }}">Masuk Sekarang</a></div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <h4 class="banner_taital">Welcome to</h4>
                           <h1 class="banner_taital_1">B o r n e o W e t l a n d</h1>
                           <p class="banner_text">"Jangan lewatkan kesempatan untuk menguji pengetahuanmu tentang flora, fauna, dan budaya melalui kuis ini. Bersiaplah untuk mengeksplorasi dan belajar dengan penuh semangat."</p>
                           <div class="book_bt"><a href="{{ route('sesi.index') }}">Masuk Sekarang</a></div>
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
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <h1 class="about_taital"><span>Tentang Website ini</span></h1>
                  <p>
                    Website edukasi Flora Fauna dan Budaya di Pulau Kalimantan memberikan informasi yang
                    akurat dan mudah dipahami tentang spesies flora dan fauna di Kalimantan. Website ini
                    bertujuan untuk meningkatkan kesadaran tentang pentingnya pelestarian flora dan fauna serta
                    mempromosikan kekayaan alam Kalimantan.

                </p>
                <p>Website ini juga berupaya untuk memperkenalkan keanekaragaman budaya yang ada di Kalimantan,
                    termasuk tradisi, adat istiadat, seni, dan warisan budaya lainnya. Dengan menyajikan
                    informasi yang akurat dan mudah dipahami, tujuan utama website ini adalah mengedukasi
                    pengunjung mengenai flora, fauna, dan budaya Kalimantan.</p>

                <p>Melalui peningkatan kesadaran tentang pentingnya pelestarian flora dan fauna, website ini
                    berharap dapat menginspirasi pengunjung untuk menjadi agen perubahan dalam upaya pelestarian
                    alam. Dengan menyoroti kekayaan alam Kalimantan, website ini juga berperan dalam
                    mempromosikan ekowisata dan keberlanjutan lingkungan di wilayah tersebut.</p>

                <p>Selain itu, dengan memperkenalkan keanekaragaman budaya Kalimantan, website ini juga berupaya
                    untuk membangun pengertian, apresiasi, dan penghargaan terhadap warisan budaya yang unik di
                    Kalimantan. Tujuan akhirnya adalah mendorong pengunjung untuk mempelajari, menjaga, dan
                    mempromosikan kebudayaan lokal sebagai bagian yang tak terpisahkan dari identitas
                    Kalimantan.</p>
                  <div class="read_bt"><a href="{{ route('sesi.index') }}">Ketahui Lebih Lanjut</a></div>
               </div>
               <div class="col-md-6 mt-5">
                  <div><img src="{{asset('css/css_landing_page/images/img-1.jpg')}}" class="image_1"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      {{-- <!-- game section start -->
      <div class="game_section layout_padding">
         <div class="container">
            <h1 class="game_taital"><img src="images/icon-1.png"> <span>All games here</span></h1>
            <p class="game_text">established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
            <div class="game_section_2 layout_padding">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <div class="image_2">
                        <h1 class="number_text">01</h1>
                        <h1 class="game_text_1">Game</h1>
                        <p class="many_text">There are many variations of passages of Lorem Ipsum available, but the </p>
                     </div>
                     <div class="playnow_bt active"><a href="#">Play Now</a></div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="image_3">
                        <h1 class="number_text_1">02</h1>
                        <h1 class="game_text_1">Game</h1>
                        <p class="many_text">There are many variations of passages of Lorem Ipsum available, but the </p>
                     </div>
                     <div class="playnow_bt"><a href="#">Play Now</a></div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="image_4">
                        <h1 class="number_text_2">03</h1>
                        <h1 class="game_text_1">Game</h1>
                        <p class="many_text">There are many variations of passages of Lorem Ipsum available, but the </p>
                     </div>
                     <div class="playnow_bt"><a href="#">Play Now</a></div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="image_5">
                        <h1 class="number_text_3">04</h1>
                        <h1 class="game_text_1">Game</h1>
                        <p class="many_text">There are many variations of passages of Lorem Ipsum available, but the </p>
                     </div>
                     <div class="playnow_bt"><a href="#">Play Now</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div> --}}
      <!-- game section end -->
      <!-- play section start -->
      <div class="play_section layout_padding mt-5">
         <div class="container">
            <h1 class="play_taital"><span>Menu Website</span></h1>
            <p class="play_text">Selamat datang di website kami yang menyajikan fitur menarik tentang flora, fauna, dan budaya! kami juga menghadirkan fitur Kuis yang menguji pengetahuan Anda tentang flora, fauna, dan keanekaragaman hayati. Bukti kan keahlian Anda dalam menjawab pertanyaan menarik dan menantang, dan jadilah ahli di bidang ini!</p>
            <div class="game_section_2 layout_padding">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <div class="box_section">
                        <img src="{{asset('img/flora.png')}}" class="image_6">
                     </div>
                     <h2 class="register_text">Flora</h2>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="box_section">
                        <img src="{{asset('img/fauna.png')}}" class="image_6">
                     </div>
                     <h2 class="register_text">Fauna</h2>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="box_section">
                        <img src="{{asset('img/budaya.png')}}" class="image_6">
                     </div>
                     <h2 class="register_text">Budaya</h2>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="box_section">
                        <img src="{{asset('img/quis.png')}}" class="image_6">
                     </div>
                     <h2 class="register_text">Kuis</h2>
                  </div>
               </div>
               <div class="playnow_bt"><a href="{{ route('sesi.index') }}">Masuk Sekarang</a></div>
            </div>
         </div>
      </div>
      <!-- game section end -->

      
      <!-- casino section start -->
        {{-- <div class="casino_section layout_padding">
         <div class="container">
            <h1 class="casino_taital"><img src="{{asset('css/css_landing_page/images/icon-1.png')}}"> <span>Our Casino Price</span></h1>
            <p class="game_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
            <div class="casino_section_2 layout_padding">
               <div class="row">
                  <div class="col-sm-4">
                     <div class="box_main">
                        <h4 class="basic_text">Basic Plan</h4>
                        <h1 class="date_text"><span class="font_size_20">$</span><span class="font_size_40">15</span> /Month</h1>
                        <p class="lorem_text">Lorem Ipsum available, but the majority</p>
                     </div>
                     <div class="buynow_bt"><a href="#">Buy Now</a></div>
                  </div>
                  <div class="col-sm-4">
                     <div class="box_main">
                        <h4 class="basic_text">Standra Plan</h4>
                        <h1 class="date_text"><span class="font_size_20">$</span><span class="font_size_40">25</span> /Month</h1>
                        <p class="lorem_text">Lorem Ipsum available, but the majority</p>
                     </div>
                     <div class="buynow_bt"><a href="#">Buy Now</a></div>
                  </div>
                  <div class="col-sm-4">
                     <div class="box_main">
                        <h4 class="basic_text">Premium Plan</h4>
                        <h1 class="date_text"><span class="font_size_20">$</span><span class="font_size_40">35</span> /Month</h1>
                        <p class="lorem_text">Lorem Ipsum available, but the majority</p>
                     </div>
                     <div class="buynow_bt"><a href="#">Buy Now</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div> --}}
      <!-- casino section end -->
      <!-- client section start -->
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
      <!-- client section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <h1 class="touch_taital"><span>Pulau Kalimantan</span></h1>
            <div class="contact_section_2">
               <div>

                  <center><div class="">
                     <div class="map_main">
                        <div class="map-responsive">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8168627.043347212!2d108.75492143318564!3d1.4232561312629166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3200a51b0ce8057b%3A0xf81f7b0a97d0b88a!2sBorneo!5e0!3m2!1sen!2sid!4v1686618567048!5m2!1sen!2sid" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                     </div>
                  </div></center>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
      <div class="container">
         <div class="social_icon">
            <ul>
               <li><a href="#"><img src="{{asset('css/css_landing_page/images/fb-icon.png')}}"></a></li>
               <li><a href="#"><img src="{{asset('css/css_landing_page/images/twitter-icon.png')}}"></a></li>
               <li><a href="#"><img src="{{asset('css/css_landing_page/images/linkedin-icon.png')}}"></a></li>
               <li><a href="#"><img src="{{asset('css/css_landing_page/images/instagram-icon.png')}}"></a></li>
            </ul>
         </div>
         <div class="location_section">
            <ul>
               <li><a href="#"><img src="{{asset('css/css_landing_page/images/mail-icon.png')}}"><span class="padding_left_15">demo@gmail.com</span></a></li>
               <li><a href="#"><img src="{{asset('css/css_landing_page/images/call-icon.png')}}"><span class="padding_left_15">(+71 9876543210)</span></a></li>
               <li><a href="#"><img src="{{asset('css/css_landing_page/images/map-icon.png')}}"><span class="padding_left_15">Location</span></a></li>
            </ul>
         </div>
         <!-- copyright section start -->
         <div class="copyright_section">
         </div>
         <!-- copyright section end -->
      </div>
      <!-- footer section end -->
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

