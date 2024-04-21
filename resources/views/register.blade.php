<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Pengaturan karakter dan tampilan halaman -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Judul halaman -->
    <title>Halaman Login</title>
    <!-- Menghubungkan dengan Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <!-- Menghubungkan dengan Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <!-- Menghubungkan dengan jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Gaya CSS internal untuk halaman -->
    <style>
        body {
            background-color: #ffffff;
        }
        
        .login-container {
            margin-top: 5%;
        }
        
        .login-form {
            background-color: #008a0c;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .login-divider {
            text-align: center;
            margin-top: 20px;
        }
        
        .login-divider span {
            position: relative;
            padding: 0 10px;
            color: #0c0c0c;
        }
        
        .login-divider span:before,
        .login-divider span:after {
            content: "";
            position: absolute;
            top: 50%;
            border-top: 2px solid #020101;
            width: 45%;
        }
        
        .login-divider span:before {
            right: 100%;
            margin-right: 10px;
        }
        
        .login-divider span:after {
            left: 100%;
            margin-left: 10px;
        }
        
        .form-control {
            border-radius: 10px;
        }
        
        .btn {
            border-radius: 10px;
        }
        
        .form-control:focus {
            border-color: #4CAF50;
            /* Ganti dengan warna yang Anda inginkan */
            box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.25);
            /* Efek shadow saat di-klik (focus) */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow p-2 fixed-top ">
        <div class="container">
            <!-- Brand dan logo -->
            <a class="navbar-brand mt-2" href="#" style="color: rgb(11, 11, 11)">
                <img src="{{ asset('login/brainstrom.png') }}" alt="" width="60" height="60" class="d-inline-block" class="font-weight-bold" /> BrainStrom
            </a>
            <!-- Tombol toggle untuk tampilan responsif pada layar kecil -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Daftar menu navigasi -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

            </div>
    </nav>

    <!-- Akhir Navbar -->
    <div class="container mt-5">
        <div class="row">
            <!-- Kolom tengah dengan lebar 4 dan offset 4 -->
            <div class="col-md-4 offset-md-4 login-container">
                <!-- Formulir login -->

{{-- 
                <form action="{{route('regist-user')}}" method="post">
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danfer">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <div class="col-md-6 right">
                        <div class="input-box">
                            <!-- <input type="checkbox" id="check"> -->
                            <div class="tempatRegistrasi">
                                <header>Create Account</header>
                                <div class="input-field">
                                    <input type="text" class="input" name="username" required autocomplete="off">
                                    <label for="username">Username</label>
                                    <span class="text-danger">@error('Username') {{$message}} @enderror</span>
                                </div>
                                <div class="input-field">
                                    <input type="text" class="input" name="email" required autocomplete="off">
                                    <label for="email">Email</label>
                                    <span class="text-danger">@error('Email') {{$message}} @enderror</span>
                                </div>
                                <div class="input-field">
                                    <input type="password" class="input" name="password" required autocomplete="off">
                                    <label for="password">Password</label>
                                    <span class="text-danger">@error('Password') {{$message}} @enderror</span>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign Up</button>
                                <br>
                                <a href="login">sudah punya akun? Masuk</a>
                            </div>
                        </div>
                    </div>
                </form> --}}




                <div class="login-form shadow p-3 mt-5">
                    <!-- Judul halaman registrasi -->
                                    <h3 class="text-center" style="color: rgb(0, 0, 0);">Register</h3>
                    <form action="{{ route('regist-user') }}" method="post">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if(session('fail'))
                            <div class="alert alert-danger" style="color: red;">{{ session('fail') }}</div>
                        @endif
                        @csrf

                        <!-- Grup formulir untuk input username -->
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" name="Username" class="form-control" id="username" placeholder="Masukkan username" />
                            <span class="text-danger">@error('Username') {{ $message }} @enderror</span>
                        </div>

                        <!-- Grup formulir untuk input email -->
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="Email" class="form-control" id="email" placeholder="Masukkan email" />
                            <span class="text-danger">@error('Email') {{ $message }} @enderror</span>
                        </div>

                        <!-- Grup formulir untuk input password -->
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="Password" class="form-control" id="password" placeholder="Masukkan password" />
                            <span class="text-danger">@error('Password') {{ $message }} @enderror</span>
                        </div>
                                        <!-- Tombol untuk melakukan registrasi -->
                        <button type="submit" class="btn btn-block" style="background-color: rgb(41, 241, 41);">
                            Register
                        </button>

                        <!-- Tombol untuk masuk dengan Google menggunakan ikon SVG -->
                        <button type="button" class="btn btn-block" style="background-color: rgb(41, 241, 41);" onclick="window.location.href='{{ url('/logiin') }}'">
                            Login
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Skrip jQuery untuk menangani pengalihan halaman -->
    {{-- <script>
        $(document).ready(function() {
            $("#btnNoHP").click(function() { // Menggunakan ID "btnNoHP"
                window.location.href = "noHP.html";
            });
        });
    </script> --}}

    <!-- Menghubungkan dengan jQuery, Popper.js, dan Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>