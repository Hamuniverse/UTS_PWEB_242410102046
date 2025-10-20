<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('dashboard') }}">
            <img src="{{ asset('images/unej.png') }}" alt="Logo" width="35" height="35" class="rounded-circle">
            <span>Perpustakaan Universitas Jember</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}?username={{ request()->query('username', 'Guest') }}">
                        <i class="bi bi-house-door"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('pengelolaan') ? 'active' : '' }}" href="{{ route('pengelolaan') }}">
                        <i class="bi bi-journal-text"></i> Pengelolaan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('profile') ? 'active' : '' }}" href="{{ route('profile') }}?username={{ request()->query('username', 'Guest') }}">
                        <i class="bi bi-person-circle"></i> Profile
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
