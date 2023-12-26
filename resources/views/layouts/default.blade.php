<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="{{ csrf_token() }}" name="csrf-token">
        <title>SMA 1 Kartikatama | @yield('title')</title>
        <!-- Boostrap styles -->
        <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet">
        <!-- Boostrap icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" rel="stylesheet">
        <!-- Bootstrap styles js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <!-- custom styles  -->
        <link href="{{ asset('assets/css/default.css') }}" rel="stylesheet">
        @stack('styles')
    </head>

    <body class="d-flex flex-column">
        <div class="d-flex flex-column flex-grow-1">
            @yield('header')
            <main class="d-flex flex-column flex-grow-1 justify-content-center">
                @yield('content')
            </main>
            @yield('footer')
        </div>
        @stack('scripts')
    </body>

</html>
