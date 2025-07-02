<nav class="navbar navbar-expand-lg navbar-dark" style="background: #2563eb; box-shadow: 0 2px 12px rgba(0,0,0,0.10); position: fixed; top: 0; left: 0; width: 100%; z-index: 1000;">
    <div class="container">
        <a class="navbar-brand fw-bold fs-4" href="{{ route('home') }}">
            Home
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link{{ request()->routeIs('matakuliah.*') ? ' active' : '' }}" href="{{ route('matakuliah.index') }}">Mata Kuliah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link{{ request()->routeIs('image.upload') ? ' active' : '' }}" href="{{ route('image.upload') }}">Upload</a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="nav-link bg-transparent border-0" style="text-decoration: none;">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<p class="text-muted">Gunakan menu di atas untuk mengelola data mata kuliah, dosen, dan mahasiswa.</p>
