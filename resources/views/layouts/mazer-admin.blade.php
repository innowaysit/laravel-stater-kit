<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name'))</title>

    <link rel="stylesheet" href="{{ asset('mazer2.0/assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer2.0/assets/css/main/app-dark.css') }}">
    <link rel="shortcut icon" href="{{ asset('mazer2.0/assets/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('mazer2.0/assets/images/logo/favicon.png') }}" type="image/png">

    <link rel="stylesheet" href="{{ asset('mazer2.0/assets/css/shared/iconly.css') }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            @include('layouts.mazer-admin.sidebar')
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Profile Statistics</h3>
            </div>
            <div class="page-content">
                @yield('content')
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="https://saugi.me">Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('mazer2.0/assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('mazer2.0/assets/js/app.js') }}"></script>

    <!-- Need: Apexcharts -->
    <script src="{{ asset('mazer2.0/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('mazer2.0/assets/js/pages/dashboard.js') }}"></script>

</body>

</html>
