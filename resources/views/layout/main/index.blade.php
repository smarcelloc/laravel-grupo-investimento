<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layout.main.head')

    <!-- File CSS  -->
    <link rel="stylesheet" href="{{ asset(mix('/css/app.css')) }}">
    @stack('custom-css')
</head>

<body class="sb-nav-fixed">
    @include('layout.main.navbar')

    <div id="layoutSidenav">
        @include('layout.main.sidebar')
        <div id="layoutSidenav_content">
            <main>
                @yield('content')
            </main>
            @include('layout.main.footer')
        </div>
    </div>

    <!-- File JS  -->
    <script src="{{ asset(mix('/js/app.js')) }}"></script>
    @stack('custom-js')
</body>

</html>
