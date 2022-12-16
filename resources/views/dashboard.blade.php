<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{ asset('assets/css/create.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/footer.css') }}"/>
        <script type="text/javascript" src="{{ asset('assets/js/hscript.js') }}"></script>      
        <title>User Dashboard - QRGo</title>
        @if (Session()->has('deleteMsg'))
            <script>
                alert("QR Code deleted successfully!");
            </script>
        @endif
    </head>
    <body>
        <header class="header">
            <div class="navbar">
                <div class="logo">
                    <img src="{{ asset('assets/images/transparent-logo1.svg') }}" alt="QR Go Logo" />
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
                                <li><a href="#create.html">Create QR</a></li>
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
        <main class="create-qr">
            <aside class="sidebar">
                <ul>
                    <a href="{{route('qrhome')}}" style="color:grey">
                    <li class="sidebar-link">
                     <img src="{{asset('assets/images/create.svg')}}" alt="" />Create 
                    </li></a>
                    <a href="{{route('viewallqr')}}" style="color:grey">
                    <li class="sidebar-link">
                      <img src="{{asset('assets/images/myqr.svg')}}" alt="" />My Qr
                    </li></a>
                    <a href="{{route('profile.edit')}}" style="color:grey">
                    <li class="sidebar-link">
                        <img src="{{ asset('assets/images/settings.svg') }}" alt="" />Settings
                    </li></a>
                </ul>
            </aside>

            <section class="create">
                <div class="qr-method">
                    <h1>Create QR Code for</h1>
                    <div class="select-qr-method">
                    <a href="{{route('eventqr')}}">    
                    {{-- <a href="{{ route('') }}">See Am</a> --}}
                        <div class="url method">
                     
                            <img src="{{ asset('assets/images/bluelink.svg') }}" alt="" />
                            
                            <h2 style="color:black">EVENT</h2>
                        </div>
                        </a>
                        <a href="{{route('createqr.file')}}"> 
                        <div class="file method">
                         
                        <img src="{{ asset('assets/images/Vector.svg') }}" alt="" />
                       
                            <h2 style="color:black" >TICKET</h2> 
                        </div></a>
                    </div>
                    <div class="select-qr-method" style="padding-top: 0;"><a href=" {{ route('createqr.url') }}" class="see-url"><h2 style="transform: unset;" class="modal">Or Generic URL</h2></a></div>
                </div>

                <div class="recents">
                    <h2>Recent</h2>
                   <table>
                        <thead>
                            <tr class="table-heading">
                                <th>Name</th>
                                <th>Date</th>
                                <th>Clicks</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @if(count($myRecent) > 1)
                            @foreach ($myRecent as $myqrCode)
                        <tr>
                            <td>
                                <div>
                                    @if ($myqrCode->qr_type == "url")
                                        <img src="{{ asset('assets/images/link.svg') }}" alt="" class="method-img" />                                        
                                    @elseif ($myqrCode->qr_type == "file")
                                        <img src="{{ asset('assets/images/attach_file.svg') }}" alt="" class="method-img" />
                                    @elseif($myqrCode->qr_type == "event")
                                        <img src="{{ asset('assets/images/link.svg') }}" alt="" class="method-img" />
                                    @endif 
                                </div>
                                {{ ucfirst($myqrCode->label) }}
                            </td>
                            <td>{{ $myqrCode->created_at->toDateString()}}</td>
                            <td>{{$myqrCode->clicks}}</td>
                            <td><a href="/viewqr/{{$myqrCode->id}} " class="see-more">View</a></td>
                        </tr>
                            @endforeach
                        @else
                        <tr>
                            <h1>You Have No QR Generated Yet</h1>
                        </tr>
                        @endif
                    </table>
                    <div><a href="{{ route('viewallqr') }}" class="see-all">View All</a> </div>
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