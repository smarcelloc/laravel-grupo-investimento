<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layout.login.head')

    <!-- File CSS  -->
    <link rel="stylesheet" href="{{ asset(mix('/css/app.css')) }}">
    @stack('custom-css')
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light">@yield('title')</h3>
                                </div>
                                <div class="card-body">
                                    @yield('content')
                                </div>
                                <div class="card-footer text-center py-3">
                                    @yield('footer')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- File JS  -->
    <script src="{{ asset(mix('/js/app.js')) }}"></script>
    @stack('custom-js')
</body>

</html>
