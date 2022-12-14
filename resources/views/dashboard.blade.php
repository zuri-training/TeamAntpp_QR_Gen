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
                                    <a href="#profile">Profile</a>
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
                    <a href="{{route('profile')}}" style="color:grey">
                    <li class="sidebar-link">
                        <img src="{{ asset('assets/images/settings.svg') }}" alt="" />Settings
                    </li></a>
                </ul>
            </aside>

            <section class="create">
                <div class="qr-method">
                    <h1>Create QR Code</h1>
                    <div class="select-qr-method">
                    <a href="{{route('createqr.url')}}">    
                        <div class="url method">
                     
                            <img src="{{ asset('assets/images/bluelink.svg') }}" alt="" />
                            
                            <h2 style="color:black">URL</h2>
                        </div>
                        </a>
                        <a href="{{route('createqr.file')}}"> 
                        <div class="file method">
                         
                        <img src="{{ asset('assets/images/Vector.svg') }}" alt="" />
                       
                            <h2 style="color:black" >File</h2> 
                        </div></a>
                    </div>
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
                        <tr>
                            <td>
                                <div>
                                    <img
                                        src="{{ asset('assets/images/link.svg') }}"
                                        alt=""
                                        class="method-img"
                                    />
                                </div>
                                https://www.somefancyurl.com
                            </td>
                            <td>12-Nov-2022</td>
                            <td>122</td>
                            <td><a href="#seeoneroute" class="see-more">View</a></td>
                        </tr>
                        <tr>
                            <td>
                                <div>
                                    <img
                                        class="method-img"
                                        src="{{ asset('assets/images/attach_file.svg') }}"
                                        alt=""
                                    />
                                </div>
                                myselfie.jpg
                            </td>
                            <td>12-Nov-2022</td>
                            <td>122</td>
                            <td><a href="#seeoneroute" class="see-more">View</a></td>
                        </tr>
                        <tr>
                            <td>
                                <div>
                                    <img
                                        src="{{ asset('assets/images/attach_file.svg') }}"
                                        alt=""
                                        class="method-img"
                                    />
                                </div>
                                myselfie.jpg
                            </td>
                            <td>12-Nov-2022</td>
                            <td>Not tracked</td>
                            <td><a href="#seeoneroute" class="see-more">View</a></td>
                        </tr>
                    </table>
                    <a href="{{route('viewallqr')}}" class="see-more">View All</a>
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