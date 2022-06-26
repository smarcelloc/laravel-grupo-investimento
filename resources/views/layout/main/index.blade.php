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
    @include('layout.main.sidebar')

    <!-- File JS  -->
    <script src="{{ asset(mix('/js/app.js')) }}"></script>
    @stack('custom-js')
</body>

</html>
