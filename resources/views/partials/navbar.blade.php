<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" style="height: 30px; width:30px" alt="">Layanan Angkutan Kota Banyuwangi</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">        
        <ul class="navbar-nav ms-auto">
              @auth
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ auth()->user()->name }}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                      <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                      </form>                      
                    </li>
                  </ul>
                </li>
              @else
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('register') ? 'active' : '' }}" href="/register">Daftar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="/login">Masuk</a>
                </li>              
              @endauth
          </ul>     
        </div>
    </div>
  </nav>