<nav class="d-flex navbar border-bottom bg-white navbar-expand-md">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home.index') }}">
            <img src="{{ asset('images/careclub.png') }}" alt="App Icon" style="width: 30px; height: 30px; margin-right: 5px;">{{ env('APP_NAME') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link @if(Route::is('home.index')) active  @endif" href="{{ route('home.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Route::is('home.donate')) active @endif" href="{{ route('home.donate') }}">Donate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Route::is('home.about')) active  @endif" href="{{ route('home.about') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Route::is('home.albums')) active @endif" href="{{ route('home.albums') }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Route::is('home.contact')) active @endif" href="{{ route('home.contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border rounded px-2 py-1 mt-1 ms-2 bg-light text-danger" href="https://www.instagram.com/careclub_foundation_07/" target="_blank">
                        <i class="fab fa-instagram fa-lg "></i>
                    </a>
                    
                    
                </li>
                <li class="nav-item">
                    <a class="nav-link border rounded px-2 py-1 ms-3" href="https://youtu.be/wmE8BaxMYp0" target="_blank">
                        <i class="fab fa-youtube fa-lg"></i>
                    </a>
                    
                    
                </li>
                <!-- Logout Button -->
                @auth
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger ms-2">
                            Logout
                        </button>
                    </form>
                </li>
                @endauth
                
            </ul>
        </div>
    </div>
</nav>
