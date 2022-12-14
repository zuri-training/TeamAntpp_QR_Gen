<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/cssheader.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/home.css') }}"/>
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>Project QR-Go</title>
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
                <li class="h-nav-item h-nav-active"><a href="{{ route('home') }}">Home</a></li>
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
           
            <article>
                <h1><span>QR code</span> generator that makes all the <span>difference.</span></h1>
                <p>Monitor, share, download and generate your Qr Codes all in one place.</p>
                <div class="section-1-buttons">
                    <button onclick="window.location='{{ route('register') }}'" class="cta-btn">Get Started</button>
                    <button onclick="window.location='{{ route('about') }}'" class="learn-btn">Learn More</button>
                </div>
            </article>
            <div class="article-image">
                <img src="{{ asset('assets/images/cta-image.svg') }}" alt="QR code illustration">
            </div>
        </section>
        <section class="section-2">
            <h2>Create your Qr Code in matter of minutes.</h2>
            <div class="section-2-content">
                <div>
                    <img src="{{ asset('assets/images/choose-qr.svg') }}" alt="QR code choice illustration">
                    <h3>Choose the content of your Qr Code.</h3>
                    <p>Select either Url or File Upload</p>
                </div>
                <div>
                    <img src="{{ asset('assets/images/custom-qr.svg') }}" alt="Customize QR code illustration">
                    <h3>Customize and design</h3>
                    <p>Fill in all the information and use our QR generator to get a unique design</p>
                </div>
                <div>
                    <img src="{{ asset('assets/images/download-qr.svg') }}" alt="Download QR code illustration">
                    <h3>Download your QR code.</h3>
                    <p>Get your QR code in jpeg or PNG format, print it or show in digital form and Voila!</p>
                </div>
            </div>
            <img class="curvy-bg" src="{{ asset('assets/images/curvy-bg.svg') }}" alt="">
        </section>
        <section class="section-3">
            <article>
                <h2>Try QR Go Today!</h2>
                <p>Get started for free. Generate codes for anything you want. Have all digital information saved in a QR code. Sign in to create your own QR code now!</p>
                <div><button class="sign-in-btn" onclick="window.location='{{ route('login') }}'">Sign In</button></div>
            </article>
            <div class="section-3-logo">
                <img src="{{ asset('assets/images/transparent-logo.svg') }}" alt="">
            </div>
            <div class="line"></div>
        </section>
        <section class="section-4">
            <div class="section-4-bg">
                <div class="faq-banner"> Frequently Asked Questions</div>
            </div>
            <div class="section-4-content">
                <div class="section-4-flex">
                    <div class="faq-article-image">
                        <img src="{{ asset('assets/images/qr-code-illustration.svg') }}" alt="QR code illustration">
                    </div>
                    <article>
                        <h2>What is QR Code?</h2>
                        <p>A  QR code (Quick Response Code) is a type of barcode
                            that stores information and can be read by a digital device, 
                            such as a cell phone.</p>
                    </article>
                </div>
                <div class="section-4-flex">
                    <article>
                        <h2>Who uses QR Code?</h2>
                        <p>QR Codes are used by virtually everyone.
                            It has documents, links to pages and websites attached to it,
                            With a QR Coode information can be stored safely
                            for easy access.</p>
                    </article>
                    <div class="faq-article-image">
                        <img src="{{ asset('assets/images/qr-code-illustration-2.svg') }}" alt="QR code illustration">
                    </div>
                </div>
                <div class="section-4-flex">
                    <div class="faq-article-image">
                        <img src="{{ asset('assets/images/qr-code-illustration-3.svg') }}" alt="QR code illustration">
                    </div>
                    <article>
                        <h2>What kind of information
                            can i store on a QR Code?</h2>
                        <p>QR Codes are so versatile, they are able to
                            store a variety of information depending on your needs.
                            It can store a URL to make it easier for you to open a page on the web
                            with just a scan. It can also store contact details so you don’t have to
                            manually type the name, phone number, and email address to save it
                            to your phone.</p>
                    </article>
                </div>
            </div>
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