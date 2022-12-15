<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      
        <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}" />
    
        @if (Session()->has('success'))
            <script>
                alert("QR Code Readed Successfully")
            </script>
        @endif
        <title>Scan Qr Code - QRGo</title>
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
                        <img src="{{asset('assets/images/profile-img.png')}}" alt="" />
                        <div class="profile-details">
                            <div class="profile-dropdown">
                                <h4>
                                    <img
                                        class="arrow-down"
                                        src="{{asset('assets/images/keyboard_arrow_down.png')}}"
                                        alt=""
                                    />
                                    {{Auth::user()->name}}
                                </h4>
                            </div>
                            <ul class="dropdown-content">
                                <li class="dropdown">
                                    <a href="#profile">Profile</a>
                                </li>
                                <li  ><a href="{{route('qrhome')}}">Create QR</a></li>
                                <li  ><a href="{{route('logout')}}" class="logout">Log out</a></li>
                            </ul>
                            <div class="profile-email">
                                <p>{{Auth::user()->email}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="menubtn" src="{{asset('assets/images/menu.svg')}}" alt="" />
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
                        <img src="{{asset('assets/images/settings.svg')}}" alt="" />Settings
                    </li>
                </ul>
            </aside>

            <section class="qr-flex">
                <div class="choose-file">
                    <h1>Upload files</h1>
                    
                    <form  class="select-file"  action="{{route('decode.qr')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <img src="{{asset('assets/images/Upload file (Traced).svg')}}" alt="" />
                        <p>Drag and drop file to Read QR Code</p>
                        <label class="file-label" for="file"
                            >Browse files<input
                                type="file"
                                name="image"
                                id="file"
                               
                        /></label>
                       
                        <input type="submit" value="Scan" id="submit-url" /> 
                    </form>
                       
                </div>
                
             
                <div class="scan-qr">
                @if (!Session()->has('data'))
                <h3>Result will be displayed here</h3>
                @endif
                    <div class="qr">
                       <p> {{Session::get('data')}}</p>
                    </div>
                    <div class="track-clicks">
                     
                    </div>
                    <div class="download-qr">
                       
                    </div>
                </div>
            </section>
        </main>

      

    </body>
</html>
