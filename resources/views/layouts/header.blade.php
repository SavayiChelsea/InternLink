
<header>
    <a href="{{ route('home') }}" class="logo">
        <img src="{{ URL('images/logo.png') }}" alt="Logo">
    </a>
    <ul class="navlist">
        <li><a href="{{ route('home') }}">Home</a></li>
        @if (Route::has('login'))
            @auth
                <li><a href="{{ route('internships') }}">Internships</a></li>
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            @else
                <!-- Add any other links for guests if needed -->
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
                <a href="signin" class="nav-btn" id="loginLink">Log in</a>
                @if (Route::has('register'))
                    <a href="register" class="nav-btn" id="registerLink">Register</a>
                @endif
            @endauth
        @endif
        <div class="bx bx-menu" id="menu-icon"></div>
    </div>








</header>
