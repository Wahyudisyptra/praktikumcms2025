<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('matakuliah.index') }}">Mata Kuliah</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('matakuliah.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="nav-link btn btn-link text-white" style="text-decoration: none;">Logout</button>
                    </form>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('matakuliah.create') }}">Tambah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('image.upload') }}">Upload</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
