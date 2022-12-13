<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - QR Go</title>
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
          <h3 class="signup"><a href="{{ route('login') }}">Login</h3>
          <h3 class="signup signup-active"><a href="javascript:void(0);">Sign up</a></h3>
            </div>

            <div class="details2">
              <P class="welcome">Generate a <span class="QR">QR GO</span></P>
              <p class="text">Get started and generate a QR code on the go </p>
        <div>
          <img class="logo-small" src="{{ asset('assets/images/QR GO LOGO.jpg') }}" alt=""/>
        </div>
            <div class="container">
              <form method="POST" action="{{ route('register') }}">
                @csrf
              <div>
                <x-input-label class="labell" for="name" :value="__('Name')" />
                <x-text-input id="email" class="inputt" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2 xerror" />
              </div>
              <div class="mt-4">
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
            <div class="mt-4">
                <x-input-label class="labell" for="password_confirmation" :value="__('Confirm Password')" />
                <x-text-input id="password" class="inputt"
                                type="password"
                                name="password_confirmation"
                                required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 xerror" />
            </div>         
                <input id="loginbtn" value="Create account" type="submit">
                <div class="create">
                  Already have an account?
                  <a href="{{ route('login') }}">Login</a>
                </div>
            </form>
            </div>
            </div>
    </div>
    </main>
</body>
</html>