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
                    <a class="nav-link text-dark" href="{{ route('profile') }}"">Account   |</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#menu">Menu   |</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('report') }}">Report   |</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#study-menu">Study Menu    |</a>
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
            <h1>Welcome!</h1>
            

            <div class="card shadow p-3 mb-5 bg-body rounded">
                
                <div class="card-body">
                  
                  <p class="text-center">
                     Questions:
                    </p>
                <p class="text-center">If you are curious about what a question is, you can use it to respond or pose queries. Questions can be created by foreign or friend accounts. The purpose of creating questions is to assist others in seeking information, or you can utilize your arguments to respond to their inquiries.
                </p>
                <br>
                <p class="text-center">
                    Account: 
                   </p>
               <p class="text-center">The function of an account is to provide information about your own account. It includes features such as settings, where you can modify personal data, and the option to log out from the account.
               </p>
               <br>
               <p class="text-center">
                Menu: 
               </p>
           <p class="text-center">The menu refers to the display, procedure, and explanation of how to use Brainstorm.

           </p>
           <br>
               <p class="text-center">
                Report: 
               </p>
           <p class="text-center">The purpose of the report function is to aid you in submitting reports, such as issues with foreign accounts, system bugs, and others.

           </p>
           <br>
               <p class="text-center">
                Chat:  
               </p>
           <p class="text-center">The chat function allows access to the chatting feature with others. Additionally, it provides features such as making friends, making phone calls, and video calls. This feature is highly useful for engaging in discussions with others while learning together.

           </p>
                  
                </div>

                
              </div>
              
            
              <div class="d-flex justify-content-center">
                <a href="#" class="btn btn-light shadow p-3 mb-5 bg-body rounded">Search? You can search anything you desire within the Brainstorm site</a>
            </div>
         
            
        </div>

        <!-- Bagian Questions -->
        

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