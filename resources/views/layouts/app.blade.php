<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'SMA DHARMA KARYA')</title>
    
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-papZc05hrZrMQnOYsl7AAO1uhRUQvpDdL/tvpm37gNfjG3WqkItdq0zTJdX7qMBsH0q43MXO3FzDscX/2xz8Ug==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    
    @stack('styles')
</head>
<body>
    @yield('content')

    <!-- JS -->
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
