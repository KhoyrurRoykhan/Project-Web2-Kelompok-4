<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Wetland</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


</head>

<body>


    <header id="header" class="fixed-top" style="background-color: #3E54AC">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="index.html" style="color: aliceblue">Wetland</a></h1>

            <nav id="navbar" class="navbar">
                <ul>

                    <li><a href="{{ route('sesi.index') }}" style="color: aliceblue">Login</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="2000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url({{ asset('img/foto/slide1.jpg') }})">
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url({{ asset('img/foto/slide2.jpg') }})">
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url({{ asset('img/foto/slide3.jpeg') }})">
                </div>


            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section>

    <main id="main">


        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>Wetland</h2>
                    <h5>Aplikasi Edukasi Tentang Flora Fauna dan Budaya di Pulau Kalimantan Berbasis Website Sebagai
                        Media
                        Belajar Mandiri</h5>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <img src="{{ asset('img/patung.jpg') }}" class="img-fluid" alt=""
                            style="width: 600px; height: 600px;">


                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
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
                        <a href="{{ route('sesi.index') }}" class="btn-learn-more">Learn More</a>
                    </div>
                </div>

            </div>
        </section>
        <section id="features" class="features">
            <div class="container">
                <div class="section-title">
                    <h2>Fitur</h2>

                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 icon-box">
                        <div class="icon"><i class="bi bi-bug"></i></div>
                        <h4 class="title"><a href="">Fauna</a></h4>
                        <p class="description">Konten fauna di situs web ini mencakup informasi tentang habitat,
                            perilaku, kebiasaan makan, dan karakteristik unik dari berbagai spesies yang dapat ditemukan
                            di Kalimantan. Pengunjung juga dapat menikmati galeri foto dan video yang memperlihatkan
                            keindahan dan keunikan fauna Kalimantan.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box">
                        <div class="icon"><i class="bi bi-briefcase"></i></div>
                        <h4 class="title"><a href="">Benda</a></h4>
                        <p class="description">Konten tentang benda yang mencakup perhiasan,
                            senjata tradisional, alat musik, dan hiasan rumah tradisional. Informasi tentang sejarah,
                            fungsi, dan makna simbolis dari masing-masing benda adat juga disajikan dengan jelas.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box">
                        <div class="icon"><i class="bi bi-mic"></i></div>
                        <h4 class="title"><a href="">Voice Fauna</a></h4>
                        <p class="description">Konten tentang Voice Fauna yang meliputi suara burung,
                            mamalia, amfibi, serangga, dan reptil yang dapat ditemui di Kalimantan. Pengunjung dapat
                            menikmati berbagai jenis suara seperti kicauan burung, panggilan hewan, dan suara lingkungan
                            alam yang khas.

                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box">
                        <div class="icon"><i class="bi bi-house-door"></i></div>
                        <h4 class="title"><a href="">Rumah Adat</a></h4>
                        <p class="description">Konten rumah adat ini mencakup deskripsi singkat tentang arsitektur,
                            struktur, dan desain unik dari rumah adat yang berasal dari berbagai suku dan etnis di
                            Kalimantan. Kita dapat mempelajari tentang bahan bangunan yang digunakan, teknik
                            konstruksi tradisional, serta simbolisme dan kepercayaan yang terkait dengan rumah adat
                            tersebut.

                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box">
                        <div class="icon"><i class="bi bi-flower2"></i></div>
                        <h4 class="title"><a href="">Flora</a></h4>
                        <p class="description">Konten tentang flora ini meliputi berbagai spesies
                            tumbuhan yang ditemukan di Kalimantan, termasuk pohon, tumbuhan semak, tumbuhan berbunga,
                            tumbuhan air, dan tumbuhan epifit. Informasi yang diberikan mencakup deskripsi botani,
                            kegunaan, serta peran ekologis dari masing-masing spesies tumbuhan.

                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box">
                        <div class="icon"><i class="bi bi-book"></i></div>
                        <h4 class="title"><a href="">Quiz</a></h4>
                        <p class="description">Konten Quiz ini memberikan serangkaian pertanyaan yang berkaitan
                            dengan flora, fauna, dan budaya Kalimantan. Untuk menguji pemahaman
                            tentang berbagai spesies tumbuhan dan hewan yang ada di Kalimantan, serta pengetahuan
                            tentang budaya, tradisi, dan benda adat yang unik di wilayah ini.</p>
                    </div>
                    <center>
                        <div class="col-lg-4 col-md-6 icon-box">
                            <div class="icon"><i class="bi bi-universal-access"></i></div>
                            <h4 class="title"><a href="">Tari</a></h4>
                            <p class="description">Konten tari ini mencakup deskripsi singkat tentang berbagai jenis
                                tarian tradisional yang berasal dari suku dan etnis yang berbeda di Kalimantan.
                                Pengunjung dapat mempelajari gerakan, pola tarian, kostum, musik, dan makna simbolis
                                dari masing-masing tarian tradisional tersebut.

                            </p>
                        </div>
                    </center>
                </div>

            </div>
        </section>
        <section id="recent-photos" class="recent-photos">
            <div class="container">

                <div class="section-title">
                    <h2>Konten Lainya</h2>
                    <p>Konten lainya ...</p>
                </div>
                <div class="recent-photos-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        {{-- Benda --}}
                        <div class="swiper-slide">
                            <a href="{{ asset('img/benda/dohong.jpg') }}" class="glightbox">
                                <img src="{{ asset('img/benda/dohong.jpg') }}" class="img-fluid" alt=""
                                    style="width: 200px; height: 200px;">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="{{ asset('img/benda/mandau.jpg') }}" class="glightbox">
                                <img src="{{ asset('img/benda/mandau.jpg') }}" class="img-fluid" alt=""
                                    style="width: 200px; height: 200px;">
                            </a>
                        </div>

                        {{-- Rumah --}}
                        <div class="swiper-slide">
                            <a href="{{ asset('img/rumah/balai.jpg') }}" class="glightbox">
                                <img src="{{ asset('img/rumah/balai.jpg') }}" class="img-fluid" alt=""
                                    style="width: 200px; height: 200px;">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="{{ asset('img/rumah/baloy.jpeg') }}" class="glightbox">
                                <img src="{{ asset('img/rumah/baloy.jpeg') }}" class="img-fluid" alt=""
                                    style="width: 200px; height: 200px;">
                            </a>
                        </div>


                        {{-- Tari --}}
                        <div class="swiper-slide">
                            <a href="{{ asset('img/tari/baksa.jpg') }}" class="glightbox">
                                <img src="{{ asset('img/tari/baksa.jpg') }}" class="img-fluid" alt=""
                                    style="width: 200px; height: 200px;">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="{{ asset('img/tari/radap.jpg') }}" class="glightbox">
                                <img src="{{ asset('img/tari/radap.jpg') }}" class="img-fluid" alt=""
                                    style="width: 200px; height: 200px;">
                            </a>
                        </div>

                        {{-- Pakaian --}}
                        <div class="swiper-slide">
                            <a href="{{ asset('img/Pakaian/dayak.jpg') }}" class="glightbox">
                                <img src="{{ asset('img/Pakaian/dayak.jpg') }}" class="img-fluid" alt=""
                                    style="width: 200px; height: 200px;">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="{{ asset('img/Pakaian/baamar.jpg') }}" class="glightbox">
                                <img src="{{ asset('img/Pakaian/baamar.jpg') }}" class="img-fluid" alt=""
                                    style="width: 200px; height: 200px;">
                            </a>
                        </div>
                        {{-- Fauna --}}
                        <div class="swiper-slide">
                            <a href="{{ asset('img/florafauna/bekantan.jpg') }}" class="glightbox">
                                <img src="{{ asset('img/florafauna/bekantan.jpg') }}" class="img-fluid"
                                    alt="" style="width: 200px; height: 200px;">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="{{ asset('img/florafauna/utan.jpg') }}" class="glightbox">
                                <img src="{{ asset('img/florafauna/utan.jpg') }}" class="img-fluid" alt=""
                                    style="width: 200px; height: 200px;">
                            </a>
                        </div>

                        {{-- Flora --}}
                        <div class="swiper-slide">
                            <a href="{{ asset('img/florafauna/flora.jpg') }}" class="glightbox">
                                <img src="{{ asset('img/florafauna/flora.jpg') }}" class="img-fluid" alt=""
                                    style="width: 200px; height: 200px;">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="{{ asset('img/florafauna/flora2.jpg') }}" class="glightbox">
                                <img src="{{ asset('img/florafauna/flora2.jpg') }}" class="img-fluid" alt=""
                                    style="width: 200px; height: 200px;">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
            </div>

            </div>
        </section>

    </main>


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
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>


    <script src="{{ asset('js/main.js') }}"></script>


</body>

</html>
