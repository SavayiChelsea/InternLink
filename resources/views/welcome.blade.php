<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Intern Link</title>
        <link href="{{ URL::asset('css/homepage.css') }}" rel="stylesheet">


        <!---box icons link -->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

        <!---remix icons link -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>

        <!---google fonts link -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <!-- AOS CSSS-->

        <link rel="stylesheet" href= "https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <link href="{{ URL::asset('js/homepage.js') }}" rel="script">


    <header>
        <a href="{{ route('home') }}" class="logo">
            <img src="{{ URL('images/logo.png') }}" alt="Logo">
        </a>
        <ul class="navlist">
            <li><a href="{{ route('home') }}"> home</a></li>

            @if (Route::has('login'))
            @auth
                <li><a href="{{ route('internships') }}">Internships</a></li>
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            @else
                <li><a href="{{ route('signin') }}">Login</a></li>
                @if (Route::has('register'))
                    <li><a href="{{ route('register') }}">Register</a></li>
                @endif
            @endauth
        @endif
        </ul>
        <div class="right-content">
            @if (Route::has('login'))
            @auth
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <button type="submit" class="nav-btn">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="nav-btn">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="nav-btn">Register</a>
                @endif
            @endauth
        @endif
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>
    <!--- hero --->
    <section class="hero">
        <div class="hero-text">

            @yield('content')
            <h5 data-aos="fade-right" data-aos-duration="1400">#Looking for an internship? Search no further</h5>
            <h1 data-aos="zoom-in-left" data-aos-duration="1400" data-aos-delay="200">Intern Link</h1>
            <p data-aos="fade-right" data-aos-duration="1400" data-aos-delay="300">This website is your ultimate destination for finding the perfect internship opportunities. Whether you're a student looking to gain experience or an organization seeking talented interns, Intern Link connects you with endless possibilities. Start exploring today!</p>

            <div class="main-hero" data-aos="flip-down" data-aos-duration="1400" data-aos-delay="400">
                @auth
                <a href="{{ route('internships') }}" class="btn">Start your journey now</a>
            @else
                <a href="{{ route('register') }}" class="btn">Start your journey now</a>
            @endauth
            </div>

        </div>
        <div class="hero-img" data-aos="zoom-in" data-aos-duration="1400" >
            <img src="{{ URL('images/intern.png') }}" >
        </div>

    </section>
    <div class="icons">
        <a href="#" data-aos="fade-in" data-aos-duration="1400" data-aos-delay="600"><i class="ri-facebook-fill"></i></a>
        <a href="#" data-aos="fade-in" data-aos-duration="1400" data-aos-delay="700"><i class="ri-twitter-fill"></i></a>
        <a href="#" data-aos="fade-in" data-aos-duration="1400" data-aos-delay="800"><i class="ri-instagram-fill"></i></a>
    </div>

    <!--Javascript files-->
    <script src="{{asset('js/homepage.js')}}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        offset:1,
    });
    </script>

    </body>
