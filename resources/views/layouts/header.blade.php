
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
                <a href="#" class="nav-btn" id="loginLink">Log in</a>
                @if (Route::has('register'))
                    <a href="#" class="nav-btn" id="registerLink">Register</a>
                @endif
            @endauth
        @endif
        <div class="bx bx-menu" id="menu-icon"></div>
    </div>

    <!-- Modal -->
    <div id="registerModal" class="modal" style="display: none;">
        <div class="modal-content">
            <span class="close" onclick="closeRegisterModal()">&times;</span>
            <p>Register as:</p>
            <div class="button-container">
                <button onclick="window.location.href='{{ route('register.student') }}'">Student</button>
                <button onclick="window.location.href='{{ route('register.employer') }}'">Employer</button>
            </div>
        </div>
    </div>

    <!-- Added script to handle modal display -->
    <script>
        function showRegisterModal() {
            document.getElementById('registerModal').style.display = "block";
        }

        function closeRegisterModal() {
            document.getElementById('registerModal').style.display = "none";
        }

        document.addEventListener('DOMContentLoaded', (event) => {
            const registerLink = document.getElementById('registerLink');
            registerLink.addEventListener('click', function(event) {
                event.preventDefault();
                showRegisterModal();
            });

            const registerHeroLink = document.getElementById('registerHeroLink');
            registerHeroLink.addEventListener('click', function(event) {
                event.preventDefault();
                showRegisterModal();
            });
        });
    </script>

    <!-- Login modal -->
    <div id="loginModal" class="modal" style="display: none;">
        <div class="modal-content">
            <span class="close" onclick="closeLoginModal()">&times;</span>
            <p>Login as:</p>
            <div class="button-container">
                <button onclick="window.location.href='{{ route('signin.student') }}'">Student</button>
                <button onclick="window.location.href='{{ route('signin.employer') }}'">Employer</button>
            </div>
        </div>
    </div>

    <!-- Added script to handle modal display -->
    <script>
        function showLoginModal() {
            document.getElementById('loginModal').style.display = "block";
        }

        function closeLoginModal() {
            document.getElementById('loginModal').style.display = "none";
        }

        document.addEventListener('DOMContentLoaded', (event) => {
            const loginLink = document.getElementById('loginLink');
            loginLink.addEventListener('click', function(event) {
                event.preventDefault();
                showLoginModal();
            });
        });
    </script>
</header>
