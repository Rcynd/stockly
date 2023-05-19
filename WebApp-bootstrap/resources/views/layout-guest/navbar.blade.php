<nav class="navbar navbar-expand-lg navbar-dark navbar-ln shadow-md fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ asset('') }}">Stockly</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                      <a class="nav-link {{ Request::is('/') ? 'active' :'' }}" aria-current="page" href="{{ asset('') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' :'' }}" href="{{ asset('about') }}">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('produk') ? 'active' :'' }}" href="{{ asset('produk') }}">Produk</a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        More
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Harga produk</a></li>
                        <li><a class="dropdown-item" href="#">Stock produk</a></li>
                        <li><a class="dropdown-item" href="#">Pesan produk</a></li>
                    </ul>
                </li> --}}
            </ul>
                @if (isset(auth()->user()->name))
                <a class="login-link me-2" href="{{ asset('login') }}">Dashboard</a>
                @else
                <a class="login-link me-2" href="{{ asset('login') }}">Login</a>
                @endif
            </ul>
        </div>
    </div>
</nav>