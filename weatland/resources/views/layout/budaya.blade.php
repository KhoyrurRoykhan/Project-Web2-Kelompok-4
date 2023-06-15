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
      <title>Budaya</title>
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
   <!--header section start -->
   <div class="header_section" style="background-image: url({{asset('img/banner-budaya.jpg')}})">
      <nav class="navbar navbar-dark bg-dark">
         <a class="logo" href="index.html"><img src="{{asset('css/css_landing_page/images/logo.png')}}"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
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
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        
                        <h1 class="banner_taital_1">R u m a h - a d a t</h1>
                        <p class="banner_text">"Jelajahi pesona rumah adat Kalimantan yang memukau dengan ukiran kayu yang indah dan desain unik. Terpesona oleh keanggunan rumah betang dan hiasan-hiasan yang menceritakan sejarah suku-suku Dayak dan Banjar"</p>
   
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        
                        <h1 class="banner_taital_1">p a k a i a n - a d a t</h1>
                        <p class="banner_text">"Jelajahi pesona pakaian adat Kalimantan yang memikat dengan corak dan hiasan yang indah. Dari kain tenun yang menakjubkan hingga motif tradisional yang unik."</p>
                        
                     </div>
                  </div>
                  <div class="carousel-item">
                    <div class="container">
                       
                       <h1 class="banner_taital_1">t a r i - t r a d i s i o n a l</h1>
                       <p class="banner_text">"Nikmati pesona tari tradisional Kalimantan yang memikat dengan gerakan yang mempesona dan kostum yang indah. Saksikanlah pertunjukan yang memukau dan jelajahi kebudayaan tari Kalimantan yang kaya dan menginspirasi."</p>
                       
                    </div>
                 </div>
                 <div class="carousel-item">
                    <div class="container">
                       
                       <h1 class="banner_taital_1">b e n d a - t r a d i s i o n a l</h1>
                       <p class="banner_text">"Selamat datang dalam perjalanan yang memukau ke dalam warisan budaya Kalimantan melalui menu Benda Tradisional Kalimantan. Di sini, Anda akan menemukan keunikan dan keindahan benda-benda tradisional Kalimantan"</p>
                       
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
        <h1 class="game_taital"><img style="width: 50px" src="{{asset('img/budaya.png')}}"> <span>Menu Budaya Kalimantan</span></h1>
        <div class="container">
          <div class="row">
              <div class="col-md-6">
                <h1 class="about_taital"><span>Rumah adat kalimantan</span></h1>
                <p>
                  Dalam menu Rumah Adat Kalimantan, kami mengundang Anda untuk memasuki dunia yang penuh warna dan keajaiban rumah-rumah adat Kalimantan. Melalui atap rumah tinggi, kolong yang terbuka, dan hiasan-hiasan yang indah, Anda akan merasakan nuansa yang khas dari setiap suku di Kalimantan. Rasakan sentuhan alami dari kayu-kayu yang menghiasi rumah betang dan desain yang menggambarkan harmoni antara manusia dan alam. Di sini, kami mempersembahkan keindahan rumah adat Kalimantan sebagai tempat suci yang menghubungkan manusia dengan leluhur dan alam semesta. Selamat menikmati petualangan budaya yang luar biasa ini.
              </p>
                <div class="read_bt"><a href="{{ route('budaya.rumahadat') }}">Ketahui Lebih Lanjut</a></div>
              </div>
              <div class="col-md-6 mt-5">
                <div class="mt-5"><img src="{{asset('img/menu-rumah-adat.png')}}" class="image_1"></div>
              </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
              <div class="col-md-6">
                <h1 class="about_taital"><span>Pakaian adat kalimantan</span></h1>
                <p>
                  Dalam menu Pakaian Adat Kalimantan, Anda akan menemukan pesona dan keindahan pakaian adat yang mencerminkan identitas budaya Kalimantan. Setiap pakaian adat memiliki keunikan tersendiri, dengan desain dan motif yang memikat. Dari pakaian adat suku Dayak yang megah dan berwarna-warni hingga keanggunan pakaian adat suku Banjar yang elegan, Anda akan terpesona oleh kerajinan tangan dan keindahan tekstil yang memadukan tradisi dan keindahan modern. Jelajahi keanekaragaman pakaian adat Kalimantan dan biarkan diri Anda terpesona oleh keindahan dan pesona budaya yang tak tertandingi.
                </p>
                <div class="read_bt"><a href="{{ route('budaya.pakaian') }}">Ketahui Lebih Lanjut</a></div>
              </div>
              <div class="col-md-6 mt-5">
                <div class="mt-5"><img src="{{asset('img/menu-pakaian-adat.png')}}" class="image_1"></div>
              </div>
          </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                  <h1 class="about_taital"><span>Tari Tradisional kalimantan</span></h1>
                  <p>
                     Dalam menu Tari Tradisional Kalimantan, Anda akan diajak untuk menyaksikan keindahan dan keberagaman tarian tradisional yang menghiasi budaya Kalimantan. Menari dengan lincah dan penuh semangat, tari-tari seperti Tari Giring-giring, Tari Baksa Kembang, dan Tari Kancet Papatai akan mempesona Anda dengan gerakan yang enerjik dan cerita yang terkandung di dalamnya. Mari bergabung dengan pertunjukan tari yang memukau dan merasakan keajaiban budaya Kalimantan melalui pergerakan yang elegan dan nuansa yang tak terlupakan.
                  </p>
                  <div class="read_bt"><a href="{{ route('budaya.tari') }}">Ketahui Lebih Lanjut</a></div>
                </div>
                <div class="col-md-6 mt-5">
                  <div class="mt-5"><img src="{{asset('img/menu tari tradisional.png')}}" class="image_1"></div>
                </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
                <div class="col-md-6">
                  <h1 class="about_taital"><span>benda tradisional kalimantan</span></h1>
                  <p>
                     Dalam menu Benda Tradisional Kalimantan, Anda akan terpesona oleh keragaman benda-benda tradisional yang mencerminkan kebudayaan Kalimantan. Lihatlah kerajinan tangan yang indah seperti anyaman tikar, ukiran kayu yang rumit, dan kerajinan perak yang memukau. Setiap benda tradisional memperlihatkan keahlian tangan yang diwariskan dari generasi ke generasi, menggambarkan kekayaan budaya dan keunikan suku-suku Kalimantan. Mari jelajahi dan menikmati keindahan serta makna dalam setiap benda tradisional yang ada di Kalimantan.
                  </p>
                  <div class="read_bt"><a href="{{ route('budaya.benda') }}">Ketahui Lebih Lanjut</a></div>
                </div>
                <div class="col-md-6 mt-5">
                  <div class="mt-5"><img src="{{asset('img/menu-benda-tradisional.png')}}" class="image_1"></div>
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
      <div class="footer_section layout_padding footer_main">
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

