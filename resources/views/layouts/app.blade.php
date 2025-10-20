<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Perpustakaan Mini')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
    body {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        background-color: #ffffff; /* Latar belakang putih */
        color: #2c3e50; /* Warna teks gelap elegan */
    }

    .content-wrapper {
        flex: 1;
        background-color: #ffffff;
        color: #2c3e50;
    }

    .navbar {
        background-color: #ffffff; /* Navbar putih */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
        font-weight: bold;
        color: #2c3e50 !important;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .navbar-brand img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: white;
        padding: 3px;
    }

    .navbar-brand span {
        color: #2c3e50;
        font-weight: bold;
        font-size: 1.2rem;
    }

    .hero-section {
        background-color: #f8f9fa; /* Abu lembut */
        color: #2c3e50;
        padding: 3rem 0;
        margin-bottom: 2rem;
        text-align: center;
    }
    </style>
    @yield('styles')
</head>
<body>
    @include('components.navbar')

    <div class="content-wrapper">
        @yield('content')
    </div>

    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>
