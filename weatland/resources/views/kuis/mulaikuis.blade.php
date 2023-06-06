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
        <a class="navbar-brand" href="#">KUIS</a>
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

  <div class="container mb-3" style="margin-top: 70px">
        <div class="text-center">
            <h1>Selamat Datang, {{ Auth::user()->name }}</h1>
            <br>
            <h3>Kuis Flora, Fauna, dan Budaya di Pulau Kalimantan</h3>
        </div>

        <div class="text-right">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addItem">
                Tambah Soal
            </button>
        </div>

        <div class="container-sm mt-5 text-left" style="width: 50%">
          @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
            @foreach ($items as $item)
            <div class="container mt-4" style="background-color: #655DBB; border-radius: 10px; padding: 10px" >
              <h5 style="color: #ECF2FF">{{$item ->soal}}</h5>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1" style="color: #ECF2FF">
                  {{$item->option_a}}
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2" style="color: #ECF2FF">
                    {{$item->option_b}}
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                <label class="form-check-label" for="flexRadioDefault3" style="color: #ECF2FF">
                    {{$item->option_c}}
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                <label class="form-check-label" for="flexRadioDefault4" style="color: #ECF2FF">
                    {{$item->option_d}}
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                <label class="form-check-label" for="flexRadioDefault5" style="color: #ECF2FF">
                    {{$item->Jawaban}}
                </label>
              </div>

              <div class="mt-3">
                <form action="{{ route('mulaikuis.destroy', $item->id) }}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#editItem{{ $item->id }}">
                    Edit
                </button>
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
                                <label for="title">Judul Artikel</label>
                                <input type="text" class="form-control" name="soal" id="title"
                                    value="{{ $item->soal }}">
                            </div>
                            <div class="mb-3">
                                <label for="description">Option A</label>
                                <input type="text" name="option_a" id="option_a" cols="10" rows="5" class="form-control" value="{{$item->option_a}}">
                            </div>
                            <div class="mb-3">
                                <label for="description">Option B</label>
                                <input type="text" name="option_b" id="option_b" cols="10" rows="5" class="form-control" value="{{$item->option_b}}">
                            </div>
                            <div class="mb-3">
                                <label for="description">Option C</label>
                                <input type="text" name="option_c" id="option_c" cols="10" rows="5" class="form-control" value="{{$item->option_c}}">
                            </div>
                            <div class="mb-3">
                                <label for="description">Option D</label>
                                <input type="text" name="option_d" id="option_d" cols="10" rows="5" class="form-control" value="{{$item->option_d}}">
                            </div>
                            <div class="mb-3">
                              <label for="description">Jawaban</label>
                              <input type="text" name="Jawaban" id="option_d" cols="10" rows="5" class="form-control" value="{{$item->Jawaban}}">
                          </div>
                            <button class="btn btn-primary" type="submit">Edit Kuis</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    @endforeach
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
                            <label for="title">Nama Fauna</label>
                            <textarea class="form-control" name="soal" id="soal" cols="30" rows="5"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="description">Option A</label>
                            <input type="text" name="option_a" id="option_a" cols="10" rows="5" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="description">Option B</label>
                            <input type="text" name="option_b" id="option_b" cols="10" rows="5" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="description">Option C</label>
                            <input type="text" name="option_c" id="option_c" cols="10" rows="5" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="description">Option D</label>
                            <input type="text" name="option_d" id="option_d" cols="10" rows="5" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label for="description">Jawaban</label>
                          <input type="text" name="Jawaban" id="Jawaban" cols="10" rows="5" class="form-control">
                      </div>
                        <button class="btn btn-primary" type="submit">Tambah Soal</button>
                    </form>

                </div>

            </div>
        </div>
    </div>

    </div>
</div>

      
        
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
