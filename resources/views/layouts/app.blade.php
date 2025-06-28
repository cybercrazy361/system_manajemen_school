<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SMA Dharma Karya')</title>
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
    <link rel="icon" href="{{ asset('public/images/logo.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar glass">
        <div class="logo">
            <img src="{{ asset('public/images/logo.png') }}" alt="Logo">
            <span>SMA Dharma Karya</span>
        </div>
        <ul class="nav-links">
            <li><a href="#beranda">Beranda</a></li>
            <li><a href="#profil">Profil</a></li>
            <li><a href="#prestasi">Prestasi</a></li>
            <li><a href="#kontak">Kontak</a></li>
        </ul>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="footer-content">
            &copy; {{ date('Y') }} SMA Dharma Karya. All rights reserved.
        </div>
    </footer>
    <script src="{{ asset('public/js/app.js') }}" defer></script>
</body>
</html>
