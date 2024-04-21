<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Dashboard</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <img src="{{ asset('login/brainstrom.png') }}" alt="BrainStrom" width="60" height="60" class="d-inline-block align-top" />
        <a class="navbar-brand" href="#">BrainStrom</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#questions">Questions   |</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('profile') }}">Account   |</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('menu') }}">Menu   |</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('report') }}">Report   |</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#chat">Chat</a>
                </li>
            </ul>
            <!-- Search Bar -->
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="container mt-4">
        <!-- Bagian Posts -->
        <div id="posts">
            <h2>Artikel Terbaru</h2>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cara Mengatasi Layar Biru di Windows 11?</h5>
                    <p class="card-text">Tekan dan tahan tombol daya hingga komputer mati. Ini tidak masalah dilakukan karena tujuan dari mematikan dengan benar adalah memungkinkan komputer menyimpan semua data sementara. Itu sudah terlambat jika sistem sudah crash — satu-satunya
                        cara untuk melanjutkan adalah dengan memaksa komputer mati.</p>
                    <p class="card-text"><small class="text-muted">Diposting oleh Alif Rahmanda pada 2023-11-11</small></p>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Apa yang Salah dengan HTML?</h5>
                    <p class="card-text">Bukan Bahasa Pemrograman: HTML adalah bahasa markah, bukan bahasa pemrograman. Ini tidak memiliki fungsionalitas dinamis dan logis yang ditemukan dalam bahasa pemrograman seperti JavaScript, sehingga memerlukan integrasi dengan teknologi
                        lain untuk halaman web interaktif.</p>
                    <p class="card-text"><small class="text-muted">Diposting oleh Fadhlur Rahman pada 2023-11-10</small></p>
                </div>
            </div>

            <!-- Form Upload Post -->
            <form id="upload-post-form" class="mt-4">
                <h2>Unggah Posting Baru</h2>
                <div class="form-group">
                    <label for="post-title">Judul:</label>
                    <input type="text" class="form-control" id="post-title" required>
                </div>
                <div class="form-group">
                    <label for="post-content">Isi Posting:</label>
                    <textarea class="form-control" id="post-content" rows="5" required></textarea>
                </div>
                <button type="button" onclick="uploadPost()" class="btn btn-primary">Unggah Posting</button>
            </form>
        </div>

        <!-- Bagian Questions -->
        <div id="questions" class="mt-4">
            <h2>Pertanyaan dan Jawaban</h2>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bagaimana Cara Mencentang Elemen dengan CSS?</h5>
                    <p class="card-text">Apa cara terbaik untuk membuat elemen berada di tengah secara horizontal dan vertikal menggunakan CSS?</p>
                    <p class="card-text"><small class="text-muted">Ditanyakan oleh User123 pada 2023-11-09</small></p>

                    <!-- Form Reply -->
                    <form id="reply-form-1" class="mt-3">
                        <div class="form-group">
                            <label for="reply-content-1">Isi Reply:</label>
                            <textarea class="form-control" id="reply-content-1" rows="3" required></textarea>
                        </div>
                        <button type="button" onclick="sendReply(1)" class="btn btn-primary">Kirim Reply</button>
                    </form>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Bagaimana Cara Kerja Penanganan Acara di JavaScript?</h5>
                    <p class="card-text">Bisakah seseorang menjelaskan mekanisme penanganan acara di JavaScript?</p>
                    <p class="card-text"><small class="text-muted">Ditanyakan oleh DevMaster pada 2023-11-08</small></p>

                    <!-- Form Reply -->
                    <form id="reply-form-2" class="mt-3">
                        <div class="form-group">
                            <label for="reply-content-2">Isi Reply:</label>
                            <textarea class="form-control" id="reply-content-2" rows="3" required></textarea>
                        </div>
                        <button type="button" onclick="sendReply(2)" class="btn btn-primary">Kirim Reply</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JavaScript untuk Obrolan, Upload Post, dan Reply -->
    <script>
        function uploadPost() {
            var postTitle = document.getElementById('post-title').value;
            var postContent = document.getElementById('post-content').value;

            // Kirim data ke server atau lakukan operasi lain sesuai kebutuhan
            // Misalnya, tampilkan data atau simpan ke database
            console.log('Post Title:', postTitle);
            console.log('Post Content:', postContent);

            // Bersihkan formulir setelah mengirim post
            document.getElementById('upload-post-form').reset();
        }

        function sendReply(questionId) {
            var replyContent = document.getElementById('reply-content-' + questionId).value;

            // Kirim data ke server atau lakukan operasi lain sesuai kebutuhan
            // Misalnya, tampilkan data atau simpan ke database
            console.log('Reply Content:', replyContent, 'for Question ID:', questionId);

            // Bersihkan formulir setelah mengirim reply
            document.getElementById('reply-form-' + questionId).reset();
        }

        function kirimPesan() {
            var inputPesan = document.getElementById('message-input');
            var pesan = inputPesan.value;

            if (pesan.trim() !== '') {
                var pesanObrolan = document.getElementById('chat-messages');
                var pesanBaru = document.createElement('p');
                pesanBaru.textContent = 'Anda: ' + pesan;
                pesanObrolan.appendChild(pesanBaru);

                // Anda dapat menambahkan logika di sini untuk menangani respons dari server atau peserta lain
                // Untuk saat ini, mari simulasi respons sederhana
                setTimeout(function() {
                    var pesanRespons = document.createElement('p');
                    pesanRespons.textContent = 'ChatBot: Hai, saya ChatBot!'; // Respons simulasi
                    pesanObrolan.appendChild(pesanRespons);
                }, 1000);

                // Bersihkan kolom input setelah mengirim pesan
                inputPesan.value = '';
            }
        }
    </script>

</body>

</html>