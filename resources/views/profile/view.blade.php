<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{ asset('assets/css/create.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/footer.css') }}"/>        
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
        {{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> --}}
        <script type="text/javascript" src="{{ asset('assets/js/hscript.js') }}"></script>      
                <style>
             div#social-links {
                
                max-width: 10%;
            }
            div#social-links  ul {
                display: flex;
                flex-direction:row;
                margin: 0 auto;
                
                
            } 
            div#social-links  li {
                display: grid;
                flex-direction:row;
                margin: 0 auto;
                
                
            }          
            div#social-links ul li a {
                padding: 0px;
                
                margin: 3px;
                font-size: 30px;
                color: #222;
                background-color: #ccc;
            }
            .enter-url,
            .select-file {
                display: flex;
                flex-direction: column;
                flex-basis: 30%;
                /* width: 100%; */
                max-width: 100%;
                gap: 0.2rem;
            }
            .generated-qr {
                display: flex;
                flex-direction: column;
                flex-basis: 60%;
                /* width: 100%; */
                right: 15%;
                max-width: 100%;
                border-radius: 1rem;
                border: 2px dashed var(--secondary-color-light);
                padding: 3rem;
                gap: 2rem;
            }
        </style>
        @if (Session()->has('success'))
            <script>
                alert("QR Code Has Been Generated Successfully")
            </script>
        @endif
        <title>My Account - QRGo</title>
    </head>
    <body>
        <header class="header">
            <div class="navbar">
                <div class="logo">
                    <img src="{{ asset('assets/images/transparent-logo.svg')}}" alt="QR Go Logo" />
                </div>
                <nav class="nav-links-parent unsee-mobile">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </nav>
                <div>
                    <div class="profile">
                        <img src="{{ asset('assets/images/profile-img.png') }}" alt="" />
                        <div class="profile-details">
                            <div class="profile-dropdown" onclick="profileDrop();">
                                <h4>
                                    <img
                                        class="arrow-down"
                                        src="{{ asset('assets/images/keyboard_arrow_down.png') }}"
                                        alt=""
                                    />
                                    {{Auth::user()->name}}
                                </h4>
                            </div>
                            <ul class="dropdown-content unsee unsee-mobile">
                                <li class="dropdown">
                                    <a href="{{route('profile.edit')}}">Profile</a>
                                </li>
                                <li><a href="{{ route('qrhome') }}">Create QR</a></li>
                                <li>
                                    <a onclick="document.getElementById('logout-form').submit();" class="logout">Log out</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                    </form>
                                </li>
                            </ul>
                            <div class="profile-email">
                                <p>{{Auth::user()->email}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="menubtn" src="{{ asset('assets/images/menu.svg') }}" alt="" onclick="mobileMenu();" />
            </div>
            <div class="white-line"></div>
            <div class="blue-line"></div>
        </header>
                        {{-- {{Session::get('data')}} --}}
                        {{-- <script> console.log( {{Session::get('data')}} ) </script> --}}
                  <main class="create-qr">
            <aside class="sidebar">
                <ul><a href="{{route('dashboard')}}" style="color:grey">
                    <li class="sidebar-link">
                     <img src="{{asset('assets/images/create.svg')}}" alt="" />Dashboard 
                    </li></a>
                    <li class="sidebar-link"><a href="{{route('viewallqr')}}" style="color:grey">
                      <img src="{{asset('assets/images/myqr.svg')}}" alt="" />My Qr
                    </li></a>
                    <li class="sidebar-link"><a href="{{route('showscanp.qr')}}" style="color:grey">
                      <img src="{{asset('assets/images/qr-code-scan-icon.png')}}" alt="" />Scan Qr
                    </li></a>
                   <a href="{{route('profile.edit')}}" style="color:grey">
                    <li class="sidebar-link">
                        <img src="{{ asset('assets/images/settings.svg') }}" alt="" />Settings
                    </li></a>
                </ul>
            </aside>

            <section class="qr-flex">
                <div class="enter-url">
                    <h1>Profile Information</h1>
                    <p>Update your account's profile information and email address.</p>
                </div>
                <div class="generated-qr">
                    <div class="download-qr">
                        <h3>Download</h3>
                        <form class="input-url" action="{{route('generate.qr')}}" method="post">
                            @csrf
                            @method('patch')
                        <div>
                            <label for="title"><strong>URL Title</strong></label>
                            <div class="input-group">
                                <img src="{{asset('assets/images/link.svg')}}" alt="" />
                                <input type="text" class="url" required name="title" placeholder="Enter Title"/>
                            </div>
                        </div>
                        <div>
                            <label for="title"><strong>URL Link</strong></label>
                            <div class="input-group">
                                <img src="{{asset('assets/images/link.svg')}}" alt="" />
                                <input
                                    type="link"
                                    class="url"
                                    name="url"
                                    placeholder="www.example.com"
                                />
                            </div>
                        </div>
                        <div class="track-clicks">
                            <input type="checkbox" name="track" id="track" />
                            <label for="track">Track clicks</label>
                        </div>
                        <input type="hidden" value="url" name="type">
                        <input type="submit" value="Generate" id="submit-url" />
                    </form>
                    </div>
                </div>
            </section>
        </main>
        <footer class="footer">
            <div class="footer-content">
                <div class="logo">
                    <img src="{{ asset('assets/images/white-qr-logo.svg') }}" alt="QR Go Logo">
                </div>
                <div class="footer-links">
                    <li><a href="{{ route('home') }}" >Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </div>
                <div class="socials">
                    <img src="{{ asset('assets/images/facebook-logo.svg') }}" alt="Facebook logo">
                    <img src="{{ asset('assets/images/twitter-logo.svg') }}" alt="Twitter logo">
                    <img src="{{ asset('assets/images/youtube-logo.svg') }}" alt="YouTube logo">
                </div>
            </div>
            <hr>
            <p>Copyright@2022 Zuri Project Phase Team Ant. All Rights Reserved</p>
        </footer>
        
    </body>
</html>


<section>
   

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="email" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
