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
            @media only screen and (max-width: 962px){
                .qr-method h1, .qr-flex h1 {
                    text-align: left;
                    font-size: 1.5em;
                }
                .generated-qr {
                    padding: 3rem 1rem;
                }
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

            <section class="qr-flex" style="flex-wrap: wrap;">
                <div class="enter-url">
                    <h1>Profile Information</h1>
                    <p>Update your account's profile information and email address.</p>
                </div>
                <div class="generated-qr" style="margin-bottom: 30px;">
                    <div class="download-qr">
                        <form class="input-url" action="{{route('profile.update')}}" method="post">
                            @csrf
                            @method('patch')
                        <div>
                            <label for="name"><strong>Name</strong></label>
                            <div class="input-group">
                                <img src="{{asset('assets/images/link.svg')}}" alt="" />
                                <input type="text" class="url" id="name" name="name" required :value="old('name', $user->name)" autofocus autocomplete="name" />
                                <x-input-error class="xerror" :messages="$errors->get('name')" />
                            </div>
                        </div>
                        <div>
                            <label for="name"><strong>Email</strong></label>
                            <div class="input-group">
                                <img src="{{asset('assets/images/link.svg')}}" alt="" />
                                <input type="text" class="url" id="email" name="email" type="email" :value="old('email', $user->email)" required autocomplete="email" />
                                <x-input-error class="xerror" :messages="$errors->get('email')" />
                            </div>
                        </div>
                        <input type="submit" value="Save" id="submit-profile" />
                        @if (session('status') === 'profile-updated')
                            <p
                                x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)"
                                style="color: gray;"
                            >{{ __('Saved.') }}</p>
                        @endif
                    </form>
                    </div>
                </div>


                 <div class="enter-url">
                    <h1>Update Password</h1>
                    <p>Ensure your account is using a long, random password to stay secure.</p>
                </div>
                <div class="generated-qr" style="margin-bottom: 30px;">
                    <div class="download-qr">
                        <form class="input-url" action="{{ route('password.update') }}" method="post">
                            @csrf
                            @method('put')
                        <div>
                            <label for="current_password"><strong>Current Password</strong></label>
                            <div class="input-group">
                                <img src="{{asset('assets/images/link.svg')}}" alt="" />
                                <input class="url" id="current_password" name="current_password" type="password" autocomplete="current-password" />
                                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="xerror" />
                            </div>
                        </div>
                        <div>
                            <label for="password"><strong>New Password</strong></label>
                            <div class="input-group">
                                <img src="{{asset('assets/images/link.svg')}}" alt="" />
                                <input type="password" class="url" id="password" name="password" autocomplete="new-password" />
                                <x-input-error :messages="$errors->updatePassword->get('password')" class="xerror" />
                            </div>
                        </div>
                        <div>
                            <label for="password_confirmation"><strong>Confirm Password</strong></label>
                            <div class="input-group">
                                <img src="{{asset('assets/images/link.svg')}}" alt="" />
                                <input type="password" class="url" id="password_confirmation" name="password_confirmation" autocomplete="new-password" />
                                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="xerror" />
                            </div>
                        </div>
                        <input type="submit" value="Generate" id="submit-url" />
                        @if (session('status') === 'password-updated')
                            <p
                                x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600"
                            >{{ __('Saved.') }}</p>
                        @endif
                    </form>
                    </div>
                </div>

                 <div class="enter-url">
                    <h1>Delete Account</h1>
                    <p>Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.</p>
                </div>
                    
                <div class="generated-qr" style="margin-bottom: 30px;">
                    <div class="download-qr">
                        <x-danger-button
                            x-data=""
                            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                        >{{ __('Delete Account') }}</x-danger-button>

                        <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                        <form method="post" action="{{ route('profile.destroy') }}" class="input-url">
                            @csrf
                            @method('delete')
                            <h3>Are you sure your want to delete your account?</h3>
                            <p style="color: gray;">
                                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                            </p>
                        <div>
                            <label for="password"><strong>Password</strong></label>
                            <div class="input-group">
                                <img src="{{asset('assets/images/link.svg')}}" alt="" />
                                <input type="password" class="url" name="password" placeholder="Password" />
                                <x-input-error :messages="$errors->userDeletion->get('password')" class="xerror" />
                            </div>
                        </div>
                        <div>
                            <div style="margin-top: 2rem; display: flex; justify-content: flex-end">
                                <x-secondary-button x-on:click="$dispatch('close')">
                                    {{ __('Cancel') }}
                                </x-secondary-button>

                                <x-danger-button style="margin-left: 2rem;">
                                    {{ __('Delete Account') }}
                                </x-danger-button>
                            </div>
                        </div>
                         </form>
                    </x-modal>
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



