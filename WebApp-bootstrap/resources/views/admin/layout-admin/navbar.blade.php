<nav class="navbar navbar-expand-lg navbar-dark navbar-ln shadow-md fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ asset('dashboard') }}">Stockly</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                      <a class="nav-link {{ Request::is('dashboard') ? 'active' :'' }}" aria-current="page" href="{{ asset('') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' :'' }}" href="{{ asset('about') }}">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('produk') ? 'active' :'' }}" href="{{ asset('produk') }}">Produk</a>
                </li>
                @can('admin')
                <li class="nav-item dropdown float-end">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Admin Page
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ asset('produk-adm') }}">produk</a></li>
                        <li><a class="dropdown-item" href="#">Harga produk</a></li>
                        <li><a class="dropdown-item" href="#">Stock produk</a></li>
                        <li><a class="dropdown-item" href="#">Pesan produk</a></li>
                    </ul>
                </li>
                @endcan
            </ul>
                <a class="login-link me-2" onClick="return confirm('Yakin ingin logout?')" href="{{ asset('logout') }}" >logout</a>
            </ul>
        </div>
    </div>
</nav>
<h2 class="text-center mt-5 pt-3">Selamat Datang {{ auth()->user()->name }} ;)</h2>