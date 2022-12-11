<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - QR Go</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/login.css') }}"/>
</head>
<body>
    <main>
    <div class="body">
        <div class="logo">
            <img src="{{ asset('assets/images/QR GO LOGO.jpg') }}" alt=""/>
        </div>
        <div class="section">      
            <div class="Head">
          <h3 class="signup signup-active"><a href="javascript:void(0);">Login</h3>
          <h3 class="signup"><a href="{{ route('register') }}">Sign up</a></h3>
            </div>

            <div class="details2">
              <P class="welcome">Welcome back to <span class="QR">QR GO</span></P>
       <p class="text">Login with your details you entered during registration </p></div>
        <div>
          <img class="logo-small" src="{{ asset('assets/images/QR GO LOGO.jpg') }}" alt=""/>
        </div>
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <div class="container">
              <form method="POST" action="{{ route('login') }}">
                @csrf
              <div>
                <x-input-label class="labell" for="email" :value="__('Email')" />
                <x-text-input id="email" class="inputt" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2 xerror" />
              </div>
              <div class="mt-4">
                <x-input-label class="labell" for="password" :value="__('Password')" />
                <x-text-input id="password" class="inputt"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 xerror" />
            </div>             
              <input class="inputt-checkbox" type="checkbox" id="remember" name="remember" value="">
                <label class="labell" for="remember">Remember Me</label>
                <span class="forgot"><a href="{{ route('password.request') }}">Forgot password?</a></span>
                <input id="loginbtn" value="Login" type="submit">
                <div class="create">
                  New here?
                  <a href="{{ route('register') }}">Create an account</a>
                </div>
            </form>
            </div>
            </div>
    </div>
    </main>
</body>
</html>
