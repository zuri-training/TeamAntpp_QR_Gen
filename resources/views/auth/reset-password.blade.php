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
       <p class="text">Choose a new password. Make sure to keep it secure. </p></div>
        <div>
          <img class="logo-small" src="{{ asset('assets/images/QR GO LOGO.jpg') }}" alt=""/>
        </div>
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <div class="container">
              <form method="POST" action="{{ route('password.store', $token) }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
              <div>
                <x-input-label class="labell" for="email" :value="__('Email')" />
                <x-text-input id="email" class="inputt" type="email" name="email" :value="old('email', $email)" required autofocus />
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
                                name="password"
                                required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 xerror" />
            </div>            
                <input id="loginbtn" value="Change Password" type="submit">
            </form>
            </div>
        </div>
    </div>
    </main>
</body>
</html>