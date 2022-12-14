<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/cssheader.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/contact.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/home.css') }}"/>

        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>Contact | QR-Go</title>
    <script src="https://kit.fontawesome.com/46d7328699.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('assets/js/hscript.js') }}"></script>      
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
                <li class="h-nav-item h-nav-active"><a href="{{ route('contact') }}">Contact Us</a></li>
                <br>
                <button class="h-started" onclick="window.location='{{ route('register') }}'">Get Started</button>   
            </ul>
            <div class="h-menu" onclick="menuOpen();">
                <div class="h-menu-list"></div>
                <div class="h-menu-list"></div>
                <div class="h-menu-list"></div>
            </div>
            <ul class="h-nav-overflow unsee">
                <li class="h-nav-item h-nav-active"><a href="{{ route('home') }}">Home</a></li>
                <li class="h-nav-item"><a href="{{ route('about') }}">About Us</a></li>
                <li class="h-nav-item"><a href="{{ route('contact') }}">Contact Us</a></li>
                <br>
                <button class="h-started" onclick="window.location='{{ route('register') }}'">Get Started</button>   
            </ul>
            </nav>
            </div>
        </header>
 <div class="white-line"></div>
 <div class="blue-line"></div>
        <main>
          
     
        <section class="section-1">
        <div class="article-image">
                <img src="{{ asset('assets/images/image 9.png') }}" alt="">
        </div>
        <article>
                <div class="contact-text">
                <h1>How can we help?</h1>
                <p style="width: unset;">We’d love to hear from you. Leave a message<br>
                    and we’ll respond as soon as possible</p>
            <form class="form-list" id="survey-form">
                <label id="name-label" for="name">Name</label>
                    <br>
                <input id="name" name="name" type="text" placeholder="Enter name" required>
                <label id="email-label" for="name">Email</label>
                    <br>
                <input id="email" name="email" type="email" placeholder="Enter email" required>
                <label>Message</label>
                    <br>
                <textarea id="message"class="input-textarea" name="message" placeholder="What can we help you with?"></textarea>
                    <br>
                <button class="submit" type="submit">Send</button>
            </form>
           </div>

            </article>
            
            
            <div class="line"></div>
        </section>
             
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
    </main>
    </body>
</html>