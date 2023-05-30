<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/styleregister.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Register | Wetland</title>
</head>
<body>
    <div>
        <header class="justify-content-center py-3  border-bottom"
            style="background-color: #3E54AC">
            <a href="/"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
                <span class="fs-4" style="color: aliceblue">Wetland</span>
            </a>


        </header>
    </div>

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
                        <form action="/sesi/create" method="POST">
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
</body>
</html>