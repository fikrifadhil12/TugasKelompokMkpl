<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Akun</title>
    <!-- Memasukkan file CSS Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Menyesuaikan warna hijau pada latar belakang header card */
        
        .card-header {
            background-color: #28a745;
            color: white;
            position: relative;
        }
        /* Menambahkan gaya untuk logo di sudut kiri atas */
        
        .logo {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 60px;
            /* Mengubah ukuran logo */
            height: auto;
        }
        /* Menyesuaikan ukuran font */
        
        .card-body {
            font-size: 16px;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card">
                    <div class="card-header">
                        <!-- Menambahkan logo di sudut kiri atas -->
                        <img src="{{ asset('login/brainstrom.png') }}" alt="Logo" class="logo">
                        <h3 class="text-dark text-center">Profil Akun</h3>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <!-- Gambar profil kosong -->
                            <img src="{{ asset('login/uyun.jpeg') }}" alt="Profil" class="img-fluid rounded-circle" style="width: 150px; height: 150px;">
                        </div>
                        <!-- Informasi profil -->
                        <div class="mb-3">
                            <strong>Nama    :</strong> {{ session('user_name') }}<br>
                            <strong>Email   :</strong> {{ session('user_email') }}
                        </div>
                        <!-- Menu pengaturan -->
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Pengaturan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Memasukkan file JavaScript Bootstrap (Popper.js diperlukan untuk beberapa komponen) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>