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
      <title>Flora Kalimantan</title>
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



      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

   </head>
   <!--header section start -->
   <div class="header_section" style="background-image: url({{asset('img/banner-flora.png')}})">
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
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        
                        <h1 class="banner_taital_1">F l o r a - K a l i m a n t a n</h1>
                        <p class="banner_text">"Jelajahi flora yang hidup di berbagai ekosistem, seperti hutan hujan tropis, padang rumput, gurun, pegunungan, dan lain-lain. Temukan adaptasi unik tumbuhan terhadap lingkungan di mana mereka tumbuh."</p>
   
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
         <h1 class="game_taital"><img style="width: 50px" src="{{asset('img/flora.png')}}"> <span>Flora Kalimantan :</span></h1>
         <div class="container">
             <div class="row">
                 @if (session()->has('success'))
             <div class="alert alert-success">
                 {{ session()->get('success') }}
             </div>
             @endif
             @if (auth()->user()->level == 'admin')
                 <button class="btn btn-primary" style="width: 20%" data-bs-toggle="modal" data-bs-target="#addItem">
                     Tambah Flora
                 </button>
             @endif
             </div>
         </div>
         
         @foreach ($items as $item)
         <div class="container">
           <div class="row">
               <div class="col-md-6">
                 <h1 class="about_taital"><span>{{ $item->title }}</span></h1>
                 <p>
                     {!! htmlspecialchars_decode(substr($item->description, 0, 100)) !!}
               </p>
               <div>
                 <div class="read_bt mr-3"><a href="{{ route('readmore.flora', ['id' => $item->id]) }}">Baca Lebih Lanjut</a></div>
                 <div class="read_bt mr-3">
                     @if (auth()->user()->level == 'admin')
                                 <form action="{{ route('flora.destroy', $item->id) }}" method="POST"
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
               </div>
               <div class="col-md-6 mt-5">
                 <div class="mt-2"><img src="{{ url('storage/' . $item->image) }}" class="image_1"></div>
               </div>
           </div>
         </div>
 
         <!-- Modal Edit -->
         <div class="modal" id="editItem{{ $item->id }}" tabindex="-1">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title">Edit Artikel</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal"
                             aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                         <form action="{{ route('flora.update', $item->id) }}" method="post"
                             enctype="multipart/form-data">
                             @csrf
                             @method('PUT')
                             <div class="mb-3">
                                 <label for="title">Judul Artikel</label>
                                 <input type="text" class="form-control" name="title"
                                     id="title{{ $item->id }}" value="{{ $item->title }}">
                             </div>
                             <div class="mb-3">
                                 <label for="image">Image</label>
                                 <input type="file" accept="image/*" class="form-control" name="image"
                                     id="image{{ $item->id }}">
                             </div>
                             <div class="mb-3">
                                 <label for="description">Deskripsi</label>
                                 <textarea name="description" id="editdesc{{ $item->id }}" cols="30" rows="5" class="form-control">{{ $item->description }}</textarea>
                             </div>
                             <button class="btn btn-primary" type="submit">Edit Artikel</button>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
         <script>
             ClassicEditor
                 .create(document.querySelector('#editdesc{{ $item->id }}'))
                 .catch(error => {
                     console.error(error);
                 });
 
             function openEditModal(id) {
                 var titleInput = document.querySelector('#title' + id);
                 var descInput = document.querySelector('#editdesc' + id);
                 var titleValue = titleInput.value;
                 var descValue = descInput.value;
 
                 // Set value to modal form
                 var modalTitle = document.querySelector('#editItem' + id + ' .modal-title');
                 var modalDesc = document.querySelector('#editItem' + id + ' #editdesc' + id);
                 modalTitle.textContent = 'Edit Artikel - ' + titleValue;
                 modalDesc.value = descValue;
             }
         </script>
         @endforeach
 
 
         <div class="modal" id="addItem" tabindex="-1">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title">Tambah Fauna Baru</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                         <form action="{{ route('flora.store') }}" method="post" enctype="multipart/form-data">
                             @csrf
                             <div class="mb-3">
                                 <label for="title">Nama Fauna</label>
                                 <input type="text" class="form-control" name="title" id="title">
                             </div>
                             <div class="mb-3">
                                 <label for="image">Image</label>
                                 <input type="file" accept="image/*" class="form-control" name="image" id="image">
                             </div>
                             <div class="mb-3">
                                 <label for="description">Deskripsi</label>
                                 <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
                             </div>
                             <button class="btn btn-primary" type="submit">Tambah Fauna</button>
                         </form>
 
                     </div>
                     <script>
                         ClassicEditor
                             .create(document.querySelector('#description'))
                             .catch(error => {
                                 console.error(error);
                             });
     
                         function openEditModal(id) {
                             var titleInput = document.querySelector('#title' + id);
                             var descInput = document.querySelector('#editdesc' + id);
                             var titleValue = titleInput.value;
                             var descValue = descInput.value;
     
                             // Set value to modal form
                             var modalTitle = document.querySelector('#editItem' + id + ' .modal-title');
                             var modalDesc = document.querySelector('#editItem' + id + ' #editdesc' + id);
                             modalTitle.textContent = 'Edit Artikel - ' + titleValue;
                             modalDesc.value = descValue;
                         }
                     </script>
 
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

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
   </body>
</html>

