<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Studiova')</title>

    <link rel="shortcut icon" href="{{ asset('assets/images/logos/favicon.svg') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/aos-master/dist/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>

<body>

    @include('layouts.navbar')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

    <!-- JS -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/libs/aos-master/dist/aos.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- Iconify -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

    @stack('scripts')

</body>
</html>