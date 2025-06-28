<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | SMA Dharma Karya</title>
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
    <script src="{{ asset('public/js/app.js') }}" defer></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Icon -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
</head>
<body>
    <header>
        <nav class="navbar">
            <a href="#" class="logo">SMA Dharma Karya</a>
            <ul class="nav-links">
                <li><a href="#beranda">Beranda</a></li>
                <li><a href="#profil">Profil</a></li>
                <li><a href="#galeri">Galeri</a></li>
                <li><a href="#kontak">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} SMA Dharma Karya. All rights reserved.</p>
    </footer>
</body>
</html>
