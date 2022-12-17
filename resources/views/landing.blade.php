<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/cssheader.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/landing.css') }}"/>
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>Project QR-Go</title>
    <script src="https://kit.fontawesome.com/46d7328699.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('assets/js/hscript.js') }}"></script>   
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://project-qr-go.herokuapp.com/">
        <meta property="og:title" content="Project QR-Go">
        <meta property="og:description" content="QR Go is the easiest way to generate QR codes for websites and file downloads. Simply enter the URL or select the file, and QR Go will generate a QR code that can be scanned by any QR code reader">
        <meta property="og:image" content="https://project-qr-go.herokuapp.com/assets/images/QR%20Go.png">   
    </head>
<body>
    <header class="hheader">
        <div class="h-header">
            <nav class="h-nav-bar">
            <div class="h-nav-logo">
                <img class="h-connect" src="{{ asset('assets/images/transparent-logo1.svg') }}" alt="logo">
            </div>
            <ul class="h-nav-items" id="nav-lists">
                <li class="h-nav-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="h-nav-item"><a href="{{ route('about') }}">About Us</a></li>
                <li class="h-nav-item"><a href="{{ route('contact') }}">Contact Us</a></li>
                <br>
                <button class="h-started" onclick="window.location='{{ route('register') }}'">Get Started</button>   
            </ul>
            <div class="h-menu" onclick="menuOpen();">
                <div class="h-menu-list"></div>
                <div class="h-menu-list"></div>
                <div class="h-menu-list"></div>
            </div>
            <ul class="h-nav-overflow unsee">
                <li class="h-nav-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="h-nav-item"><a href="{{ route('about') }}">About Us</a></li>
                <li class="h-nav-item"><a href="{{ route('contact') }}">Contact Us</a></li>
                <br>
                <button class="h-started" onclick="window.location='{{ route('register') }}'">Get Started</button>   
            </ul>
            </nav>
            </div>
        </header>
        <section>
            <div class="white-line"></div>
            <div class="blue-line"></div>
            <div class="container-1">
                <div>
                    <P>
                    <span>Create a QR code</span> to both Safeguard your data and <span>advertise</span> your business or <span>idea.</span>
                    <img class="imagesmall" src="{{ asset('assets/images/image 6.png') }}" alt="logo">
                    <div class="text">
                        <p>
                            Our platform allows you to effortlessly generate QR codes,<br>
                            keep track of them, and analyze their performance through detailed statistics.
                        </p>
                        <button class="btn" onclick="window.location='{{ route('register') }}'">Get Started</button>
                        <button class="btn1" onclick="window.location='{{ route('home') }}'">Learn More</button>
                    </div>
                </P>
                </div>
                <div class="images">
                    <img class="images" src="{{ asset('assets/images/image 6.png') }}" alt="logo">
                </div>
        </section>
    
        <footer>
            <div class="socials">
                <img class="img1" src="{{ asset('assets/images/facebook-logo.svg') }}" alt="logo">
                <img class="img2" src="{{ asset('assets/images/twitter-logo.svg') }}" alt="logo">
                <img class="img3"src="{{ asset('assets/images/youtube-logo.svg') }}" alt="logo"><hr>
                </div>
        </footer>
</body>
</html>