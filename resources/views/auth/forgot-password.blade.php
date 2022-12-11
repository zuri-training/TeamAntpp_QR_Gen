<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot - QR Go</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/login.css') }}"/>
</head>
<body>
    <main>
    <div class="body">
        <div class="logo">
            <img src="{{ asset('assets/images/QR GO LOGO.jpg') }}" alt=""/>
        </div>
        <div class="section">      
            <div class="details2">
              <P class="welcome">Reset <span class="QR">Password</span></P>
       <p class="text">Just let us know your email address and choose a new one. </p></div>
        <div>
          <img class="logo-small" src="{{ asset('assets/images/QR GO LOGO.jpg') }}" alt=""/>
        </div>
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <div class="container">
              <form method="POST" action="{{ route('password.email') }}">
                @csrf
              <div>
                <x-input-label class="labell" for="email" :value="__('Email')" />
                <x-text-input id="email" class="inputt" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2 xerror" />
              </div>           
                <input id="loginbtn" value="Reset Password" type="submit">
                <div class="create">
                  Remember a password?
                  <a href="{{ route('login') }}">Login</a>
                </div>
            </form>
            </div>
        </div>
    </div>
    </main>
</body>
</html>
