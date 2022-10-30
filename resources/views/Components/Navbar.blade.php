<nav class="navbar navbar-expand-md bg-dark navbar-dark shadow sticky-top">
  <div class="container">
    <a class="navbar-brand" href="{{ route('branda') }}">Dmovie</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link @if(Request::is('/')) active @endif" aria-current="page" href="{{ route('branda') }}">
            Branda
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">
            <i class="bi bi-graph-up-arrow"></i> Trending Film
          </a>
        </li>
        @guest
        <li class="nav-item">
          <a class="nav-link @if(Request::is('masuk')) active @endif" href="{{ route('login') }}"><i class="bi bi-box-arrow-in-right"></i> Masuk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(Request::is('daftar')) active @endif" href="{{ route('daftar') }}"><i class="bi bi-person-badge"></i> Daftar</a>
        </li>
        @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hi {{ Str::before(Auth::user()->nama_lengkap,' ') }}
          </a>
          <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
            <li><a class="dropdown-item" href="/dashboard">
                <i class="bi bi-person-badge"></i>
                Riwayat Nonton {{ Str::before(Auth::user()->nama_lengkap,' ') }}
              </a></li>
            <li><a class="dropdown-item" href="#">
                <i class="bi bi-gear"></i>
                Pengaturan Akun
              </a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="{{ route('keluar') }}">
                <i class="bi bi-box-arrow-in-right"></i>
                Keluar
              </a></li>
          </ul>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
