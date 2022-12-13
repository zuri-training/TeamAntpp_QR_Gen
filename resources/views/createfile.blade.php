<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}" />
        <title>Create Qr Code - QRGo</title>
    </head>
    <body>
        <header class="header">
            <div class="navbar">
                <div class="logo">
                    <img src="{{ asset('assets/images/transparent-logo.svg')}}" alt="QR Go Logo" />
                </div>
                <nav class="nav-links-parent">
                <li class="nav-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a href="{{ route('about') }}">About Us</a></li>
                <li class="nav-item"><a href="{{ route('contact') }}">Contact Us</a></li>
                </nav>
                <div>
                    <div class="profile">
                        <img src="images/profile-img.png" alt="" />
                        <div class="profile-details">
                            <div class="profile-dropdown">
                                <h4>
                                    <img
                                        class="arrow-down"
                                        src="images/keyboard_arrow_down.png"
                                        alt=""
                                    />
                                    {{Auth::user()->name}}
                                </h4>
                            </div>
                            <ul class="dropdown-content">
                                <li class="dropdown">
                                    <a href="#profile">Profile</a>
                                </li>
                                <li><a href="#create.html">Create QR</a></li>
                                <li><a href="#" class="logout">Log out</a></li>
                            </ul>
                            <div class="profile-email">
                                <p>{{Auth::user()->email}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="menubtn" src="images/menu.svg" alt="" />
            </div>
            <div class="white-line"></div>
            <div class="blue-line"></div>
        </header>

        <main class="create-qr">
            <aside class="sidebar">
                <ul>
                <li class="sidebar-link">
                        <img src="{{asset('images/create.svg')}}" alt="" />Create
                    </li>
                    <li class="sidebar-link">
                        <img src="{{asset('images/myqr.svg')}}" alt="" />My Qr
                    </li>
                    <li class="sidebar-link">
                        <img src="{{asset('images/settings.svg')}}" alt="" />Settings
                    </li>
                </ul>
            </aside>

            <section class="qr-flex">
                <div class="choose-file">
                    <h1>Upload files</h1>
                    <form  class="select-file"  action="{{route('generate.qr')}}" method="post">
                        @csrf
                        <img src="images/Upload file (Traced).svg" alt="" />
                        <p>Drag and drop file to create QR Code</p>
                        <label class="file-label" for="file"
                            >Browse files<input
                                type="file"
                                name="file"
                                id="file"
                               
                        /></label>
                        <input type="hidden" value="file" name="type">
                        <input type="submit" value="Generate" id="submit-url" /> 
                    </form>
                    
                </div>

                <div class="generated-qr">
                    <div class="qr">
                        <img src="images/qrcode.svg" alt="" />
                    </div>
                    <div class="track-clicks">
                        <input type="checkbox" name="track" id="track" />
                        <label for="track">Track clicks</label>
                    </div>
                    <div class="download-qr">
                        <h3>Download</h3>
                        <button class="jpg download">JPG</button>
                        <button class="png download">PNG</button>
                        <button class="png download">PDF</button>
                       
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
