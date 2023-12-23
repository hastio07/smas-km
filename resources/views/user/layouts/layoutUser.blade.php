<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>SMA 1 Kartikatama | @yield('title')</title>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/kepsek.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet">
</head>

<body>
    <section>
        <nav class="navbar navbar-expand-lg nav-style fixed-top">
            <div class="container-fluid container">
                <a class="navbar-brand" href="#">
                    <div class="d-flex align-items-center gap-3">
                        <img alt="Logo" class="d-inline-block align-text-top" height="60" src="{{ asset('assets/image/logo.png') }}" width="60">
                        <div class="ml-2">
                            <h5 class="fw-bold mb-0">SMAK Kartikatama</h5>
                            <p class="mb-0">Kota Metro</p>
                        </div>
                    </div>
                </a>
                <button aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler border-0" data-bs-target="#navbarNavDropdown" data-bs-toggle="collapse" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a aria-current="page" class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
                                Dropdown link
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <button class="btn btn-success ms-3">Login</button>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('konten')
        <footer class="text-white">
            <div class="bg-success py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="d-flex gap-3">
                                <img alt="..." class="img-thumbnail" height="90" src="{{ asset('assets/image/logo.png') }}" width="90">
                                <h2>Lorem Ipsum</h2>
                            </div>
                            <p class="mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus error non id quaerat impedit reiciendis saepe minima nesciunt placeat ex excepturi eveniet eum sunt modi, pariatur ipsum facilis provident aliquam!</p>
                        </div>
                        <div class="col-md-4">
                            ini bagian ul li
                        </div>
                        <div class="col-md-4 d-flex gap-3">
                            <div>
                                <i class="bi bi-facebook bg-primary fs-4 rounded p-2"></i>
                            </div>
                            <div>
                                <i class="bi bi-instagram fs-4 rounded p-2"></i>
                            </div>
                            <div>
                                <i class="bi bi-youtube bg-danger fs-4 rounded p-2"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="copy-right d-flex align-items-center justify-content-center text-muted gap-2 py-2">
                <i class="bi bi-c-circle"></i>
                <p class="mb-0">SMK 1 Kartika</p>
            </div>
        </footer>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
