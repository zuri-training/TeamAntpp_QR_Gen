<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/landing.css') }}"/>
        <title>QR-Go</title>
    <script src="https://kit.fontawesome.com/46d7328699.js" crossorigin="anonymous"></script>
    </head>
<body>
    <header>
        <div class="container">
            <nav class="nav-bar">
            <div class="nav-logo">
            <img class="connect" src="{{ asset('assets/images/transparent-logo1.svg') }}" alt="logo">
                <ul class="nav-items" id="nav-lists">
                    <li class="nav-item"><a href="#">Home</a></li>
                    <li class="nav-item"><a href="#">About Us</a></li>
                    <li class="nav-item"><a href="#">Contact Us</a></li>
                    <br>
                    <button class="started">Get Started</button>   
                </ul>
                <div class="menu" id="menu-bar">
                    <div class="menu-list"></div>
                    <div class="menu-list"></div>
                    <div class="menu-list"></div>
                </div>
            </nav>
        </header>
        <section>
            <div class="blue-line"></div>
            <div class="container-1">
                <P>
                    <span>Create a QR code</span> to<br>
                    both Safeguard your data<br>
                    and <span>advertise</span> your business or<br>
                    <span>idea.</span>
                </P>
            <div class="images">
                <img class="images" src="{{ asset('assets/images/image 6.png') }}" alt="logo">
            <div class="text">
                    <p>
                        Our platform allows you to effortlessly generate QR codes,<br>
                        keep track of them, and analyze their performance<br>
                        through detailed statistics.
                    </p>
                    <button class="btn">Get Started</button>
                    <button class="btn1">Learn More</button>
                </div>
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