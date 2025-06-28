<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | SMA Dharma Karya</title>
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
    <script src="{{ asset('public/js/app.js') }}" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <a href="#beranda" class="logo">SMA Dharma Karya</a>
                <input type="checkbox" id="menu-toggle">
                <label for="menu-toggle" class="menu-icon">&#9776;</label>
                <ul class="nav-links">
                    <li><a href="#beranda">Beranda</a></li>
                    <li><a href="#profil">Profil</a></li>
                    <li><a href="#galeri">Galeri</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} SMA Dharma Karya. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
