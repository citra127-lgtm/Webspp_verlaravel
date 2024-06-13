<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>REGISTER</title>
</head>
<body>
    
    @if(session()->has('success'))
        {{ session('success')}}
    @endif

    @if(session()->has('loginError'))
        {{ session('loginError')}}
    @endif
      <div class="wrapper">
        <h1>Login</h1>
        <form action="/Login/Login" method="post">
            @csrf
            <input type= "email" name="email" @error('email') is-invalid @enderror id="email" placeholder="email" autofocus required value="{{ old('email') }}">
            @error ('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <input type= "password" name="password" id="password" placeholder="Password" required>
            <div class="recover">
                <a href="#">Forgot Password</a>
            </div>
        <button type="submit">Login</button>
        </form>
        <div class="member">
            not alreaady member? <a href="/Register/Register">
                Register here
            </a>
        </div>
      </div>

</body>
</html>