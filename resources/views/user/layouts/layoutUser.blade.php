<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>SMA 1 Kartikatama | @yield('title')</title>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/kepsek.css') }}" rel="stylesheet">
    @stack('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet">
</head>

<body>
    <section>
        <nav class="navbar navbar-expand-lg nav-style fixed-top bg-body-tertiary">
            <div class="container-fluid container">
                <a class="navbar-brand" href="#">
                    <div class="d-flex align-items-center gap-3">
                        <img alt="Logo" class="d-inline-block align-text-top" height="60" src="{{ asset('assets/image/logo.jpg') }}" width="60">
                        <div class="ml-2 name-sch">
                            <h5 class="fw-bold mb-0">SMAS Kartikatama</h5>
                            <p class="mb-0">Kota Metro</p>
                        </div>
                    </div>
                </a>
                <button aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler border-0" data-bs-target="#navbarNavDropdown" data-bs-toggle="collapse" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse text-center" id="navbarNavDropdown" >
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a aria-current="page" class="nav-link active" href="/">Halaman Utama</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/ppdb">PPDB</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/profil">Profil</a>
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
                        <a href="/login">
                            <button class="btn ms-3 bg-smas">Login</button>
                        </a>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('konten')
        <footer class="text-white">
            <div class="bg-smas py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 mt-4">
                            <div class="d-flex gap-3">
                                <img alt="..." class="img-thumbnail" height="90" src="{{ asset('assets/image/logo.jpg') }}" width="90">
                                <div>
                                    <h5 class="underline-animation">SMAS 1 Kartikatama</h5>
                                </div>
                            </div>
                            <p class="mt-3 mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus error non id quaerat impedit reiciendis saepe minima nesciunt placeat ex excepturi eveniet eum sunt modi, pariatur ipsum facilis provident aliquam!</p>
                        </div>
                        <div class="col-xl-4 mt-4">
                            <h5 class="underline-animation">Kontak</h5>
                            <div class="kontak mt-4">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-geo-alt-fill fs-5"></i>
                                    <p class="mb-0" style="font-size: small">Jl. Kapten Tendean, Margorejo, Kec. Metro Sel., Kota Metro, Lampung 34111</p>
                                </div>
                                <div class="d-flex align-items-center gap-2 mt-2">
                                <i class="bi bi-envelope-fill fs-5"></i>
                                    <p class="mb-0" style="font-size: small">Smas-metro@sch.id</p>
                                </div>
                                <div class="d-flex align-items-center gap-2 mt-2">
                                    <i class="bi bi-telephone-fill fs-5 "></i>
                                    <p class="mb-0" style="font-size: small">+0732-2289</p>
                                </div>
                                <div class="d-flex align-items-center gap-2 mt-2">
                                    <i class="bi bi-whatsapp fs-5"></i>
                                    <p class="mb-0" style="font-size: small">+628-1267-3298-763</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 mt-4">
                            <h5 class="underline-animation">Follow Kami</h5>
                            <div class=" d-flex gap-3 mt-4 socmed">
                                <a href="">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <a href="">
                                    <i class="bi bi-youtube"></i>
                                </a>
                                <a href="">
                                    <i class="bi bi-instagram"></i>
                                </a>
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
