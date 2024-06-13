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
    
      <div class="wrapper">
        <h1>Sign Up</h1>
        <form action="/Register/Register" method="post">
            @csrf
            <input type= "text" name="name" @error('name') is-invalid @enderror id="name" placeholder="Name" required value=" {{ old('name') }} " >
            @error('name')
            <div class="invalid">
                {{ $message }}
            </div>  
            @enderror
            <input type= "text" name="username" @error('username') is-invalid @enderror id="username" placeholder="Username" required value=" {{ old('username') }} " >
            @error('username')
            <div class="invalid">
                {{ $message }}
            </div>  
            @enderror
            <input type= "email" name="email" @error('email') is-invalid @enderror id="email" placeholder="Email address" required value=" {{ old('email') }} " >
            @error('email')
            <div class="invalid">
                {{ $message }}
            </div>  
            @enderror
            <input type= "password" name="password" @error('password') is-invalid @enderror id="password" placeholder="Password" required >
            @error('password')
            <div class="invalid">
                {{ $message }}
            </div>  
            @enderror
        <div class="terms">
            <input type="checkbox" id="checkbox">
            <label for="checkbox">I agree to these <a 
                href="#">Terms & Conditions</a></label>
        </div>
            <button type="submit">Register</button>
        </form>
        <div class="member">
            Alreaady a member? <a href="/Login/Login">
                Login here
            </a>
        </div>
      </div>

</body>
</html>
    