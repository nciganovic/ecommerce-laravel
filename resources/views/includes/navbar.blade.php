<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">Buy&Sell Cars</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Link 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Link 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Link 3</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="{{ route("get_admin_social_media") }}">Social Media</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>

                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("get_register") }}">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("get_login") }}">Login</a>
                </li>
                @endguest
                
                @auth
                    @if(Auth::user()->is_admin == 1)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("get_admin_index") }}">Admin</a>
                    </li>
                    @elseif(Auth::user()->is_admin == 0)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("get_user_profile", Auth::user()->id) }}">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }} </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("logout") }}">Logout</a>
                    </li>
                    @endif
                @endauth
            </ul>
      </span>
        </div>
    </div>
</nav>