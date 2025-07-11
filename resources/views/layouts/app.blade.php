<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'SMA Dharma Karya')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="icon" href="{{ asset('images/logo.png') }}" />
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="logo-nav">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" />
                <span>SMA Dharma Karya</span>
            </div>
            <ul class="nav-links">
                <li><a href="#beranda">Beranda</a></li>
                <li><a href="#profil">Profil</a></li>
                <li><a href="#prestasi">Prestasi</a></li>
                <li><a href="#testimoni">Testimoni</a></li>
                <li><a href="#kontak">Kontak</a></li>
            </ul>
        </div>
    </nav>

    <main>@yield('content')</main>

    <footer>
        &copy; {{ date('Y') }} SMA Dharma Karya. All rights reserved.
    </footer>

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
