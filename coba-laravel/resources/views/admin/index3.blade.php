	<link rel="stylesheet" href="{{ asset('css/login.css') }}">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
	
	<form action="/spp/index" method="POST">
        @csrf
		<div class="wrapper">
			<h1>Login</h1>
			<div class ="input-box">
				<input type="text" name="username" placeholder="Masukkan username"
				required>
				<i class='bx bxs-user'></i>
                 </div>
                 <div class="input-box">
				 <input type="password" name="password" placeholder="Masukkan password" required>
				 <i class='bx bxs-lock-alt'></i>
                </div>
				<button type="submit" class="btn">Login</button>
				<div class="register-link">
				<p>Klik login untuk dapat mengakses halaman utama</p>
            </div>		
	</form>
        </div>
</body>



