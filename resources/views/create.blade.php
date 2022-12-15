<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}"/>
      
        <title>Create Qr Code - QRGo</title>
    </head>
    <body>
        <header class="header">
            <div class="navbar">
                <div class="logo">
                    <img src="{{ asset('assets/images/transparent-logo2.svg') }}" alt="QR Go Logo" />
                </div>
                <nav class="nav-links-parent">
                <li class="nav-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a href="{{ route('about') }}">About Us</a></li>
                <li class="nav-item"><a href="{{ route('contact') }}">Contact Us</a></li>
                </nav>
                <div>
                    <div class="profile">
                        <img src="{{ asset('assets/images/profile-img.png') }}" alt="" />
                        <div class="profile-details">
                            <div class="profile-dropdown">
                                <h4>
                                    <img
                                        class="arrow-down"
                                        src="{{ asset('assets/images/keyboard_arrow_down.png') }}"
                                        alt=""
                                    />
                                    {{Auth::user()->name}}
                                </h4>
                            </div>
                            <ul class="dropdown-content">
                                <li class="dropdown">
                                    <a href="#profile">Profile</a>
                                </li>
                                <li ><a href="{{route('qrhome')}}">Create QR</a></li>
                                <li  ><a href="{{route('logout')}}" class="logout">Log out</a></li>
                            </ul>
                            <div class="profile-email">
                                <p>{{Auth::user()->email}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="menubtn" src="{{ asset('assets/images/menu.svg') }}" alt="" />
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
                    <li class="sidebar-link"><a href="{{route('showscanp.qr')}}" style="color:grey">
                      <img src="{{asset('assets/images/qr-code-scan-icon.png')}}" alt="" />Scan Qr
                    </li></a>
                    <li class="sidebar-link"><a href="{{route('dashboard')}}" style="color:grey">
                      <img src="{{asset('assets/images/myqr.svg')}}" alt="" />My Qr
                    </li></a>
                    <li class="sidebar-link">
                        <img src="{{ asset('assets/images/menu.svg') }}" alt="" />Settings
                    </li>
                </ul>
            </aside>

            <section class="create">
                <div class="qr-method">
                    <h1>Create QR for</h1>
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
                        </tr>
                    </table>
                </div>
            </section>
        </main>

    </body>
</html>
