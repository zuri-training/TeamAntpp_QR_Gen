<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}" />
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
        </style>
        @if (Session()->has('success'))
            <script>
                alert("QR Code Has Been Generated Successfully")
            </script>
        @endif
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
                                <li><a href="#create.html">Create QR</a></li>
                                <li><a href="#" class="logout">Log out</a></li>
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
                    <form  class="select-file"  action="{{route('generate.qr')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <img src="{{asset('assets/images/Upload file (Traced).svg')}}" alt="" />
                        <p>Drag and drop file to create QR Code</p>
                        <label class="file-label" for="file"
                            >Browse files<input
                                type="file"
                                name="files"
                                id="file"
                               
                        /></label>
                        <input type="hidden" value="file" name="type">
                        <input type="submit" value="Generate" id="submit-url" /> 
                    </form>
                    
                </div>

                <div class="generated-qr">
                    <div class="qr">
                        {{Session::get('data')}}
                    </div>
                    <div class="track-clicks">
                        <input type="checkbox" name="track" id="track" />
                        <label for="track">Track clicks</label>
                    </div>
                    <div class="download-qr">
                        <h3>Download</h3>
                        <a href="#" id="download_jpg" class="jpg download">JPG</a>
                        <a href="#" id="download_png" class="png download">PNG</a>
                        <a  class="png download" href="{{url('/downloadqrpdf/'. base64_encode(Session::get('data')))}}">PDF</a>
                        <strong>Share via social media</strong>
                        {!! Session::get('shareComponent') !!}
                    </div>
                </div>
            </section>
        </main>

                
        <script>
var svg = document.querySelector( "svg" );
//var svg= document.getElementById("svg");
var svgData = new XMLSerializer().serializeToString( svg );

var canvas = document.createElement( "canvas" );
var ctx = canvas.getContext( "2d" );

var img = document.createElement( "img" );
img.setAttribute( "src", "data:image/svg+xml;base64," + btoa( svgData ) );

img.onload = function() {
    ctx.drawImage( img, 0, 0 );
    
    // Now is done
    console.log( canvas.toDataURL( "image/png" ) );
    var imgsrc = canvas.toDataURL( "image/png" );
	var a = document.getElementById("download_png");
	a.download = "myqr.png"
    a.href = imgsrc;

    var imgjpg = canvas.toDataURL( "image/jpg" );
	var a = document.getElementById("download_jpg");
	a.download = "myqr.jpg"
    a.href = imgjpg;



}
    

</script>

    </body>
</html>
