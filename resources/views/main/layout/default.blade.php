<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="{{ csrf_token() }}" name="csrf-token">
    <title>SMA 1 Kartikatama | @yield('title')</title>

    <link href="{{ asset('assets/image/logo.jpg') }}" rel="shortcut icon">
    <!-- Boostrap styles -->
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet">
    <!-- Boostrap icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- font awesome icon -->
    <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" referrerpolicy="no-referrer" rel="stylesheet" />
    {{-- data AOS --}}
    <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet" />
    <!-- Bootstrap styles js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    {{-- lightbox cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/css/lightbox.min.css" rel="stylesheet">
    <!-- custom styles  -->
    <link href="{{ asset('assets/css/css-content/user/GlobalMain.css') }}" rel="stylesheet">
    @stack('styles')
</head>

<body class="d-flex flex-column">
    <div class="d-flex flex-column flex-grow-1">
        <header>
            <nav class="navbar navbar-expand-lg nav-style fixed-top">
                <div class="container-fluid container">
                    <a class="navbar-brand" href="/">
                        <div class="d-flex align-items-center gap-3">
                            <img alt="Logo" class="d-inline-block align-text-top" height="60" src="{{ asset('assets/image/logo.jpg') }}" style="border-radius: 50%;" width="60">
                            <div class="name-sch ml-2" style="color:#221a3a">
                                <h5 class="fw-bold mb-0">SMAS Kartikatama</h5>
                                <p class="mb-0">Kota Metro</p>
                            </div>
                        </div>
                    </a>
                    <button aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler border-0" data-bs-target="#navbarNavDropdown" data-bs-toggle="collapse" type="button">
                        <h3 class="text-smas mb-0"><i class="fa-solid fa-arrow-down-short-wide"></i></h3>
                    </button>
                    <div class="navbar-collapse collapse text-center" id="navbarNavDropdown">
                        <ul class="navbar-nav d-flex align-items-center fw-bolder ms-auto">
                            <li class="nav-item position-relative">
                                <a aria-current="page" class="nav-link text-decoration-none text-dark position-relative active" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-decoration-none text-dark position-relative" href="/MainPpdb">PPDB</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
                                    Profil
                                </a>
                                <ul class="dropdown-menu position-absolute bg-white" style="border-bottom: 5px solid #4a397e">
                                    <li><a class="dropdown-item text-decoration-none text-dark" href="/History">Sejarah</a></li>
                                    <li><a class="dropdown-item text-decoration-none text-dark" href="/VisiMisi">Visi & Misi</a></li>
                                    <li><a class="dropdown-item text-decoration-none text-dark" href="/OrgStructure">Struktur Organisasi</a></li>
                                    <li><a class="dropdown-item text-decoration-none text-dark" href="/TeacherList">Guru & Staff</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
                                    Gallery
                                </a>
                                <ul class="dropdown-menu position-absolute bg-white" style="border-bottom: 5px solid #4a397e">
                                    <li><a class="dropdown-item text-decoration-none text-dark" href="/foto">Foto</a></li>
                                    <li><a class="dropdown-item text-decoration-none text-dark" href="">Video</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-decoration-none text-dark position-relative" href="/contact">Kontak</a>
                            </li>
                            @auth($guard)
                                <li class="nav-item">
                                    <a class="nav-link" href="/{{ $guard }}">{{ auth($guard)->user()->name }}</a>
                                </li>
                            @endauth
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link text-decoration-none text-smas fw-bold position-relative" href="/login/admin">Login</a>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main class="d-flex flex-column flex-grow-1 justify-content-center">
            @yield('content')
        </main>
        <footer class="text-white">
            <div class="bg-smas">
                <div class="container py-4">
                    <div class="row">
                        <div class="col-xl-4 mt-4">
                            <div class="d-flex gap-3">
                                <img alt="..." class="img-thumbnail p-0" height="90" src="{{ asset('assets/image/logo.jpg') }}" style="border-radius: 50%;" width="90">
                                <div>
                                    <h5 class="underline-animation">SMAS 1 Kartikatama</h5>
                                </div>
                            </div>
                            <p class="mb-0 mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus error non id quaerat impedit reiciendis saepe minima nesciunt placeat ex excepturi eveniet eum sunt modi, pariatur ipsum facilis provident aliquam!</p>
                        </div>
                        <div class="col-xl-4 mt-4">
                            <h5 class="underline-animation">Kontak</h5>
                            <div class="kontak mt-4">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-geo-alt-fill fs-5"></i>
                                    <p class="mb-0" style="font-size: small">Jl. Kapten Tendean, Margorejo, Kec. Metro Sel., Kota Metro, Lampung 34111</p>
                                </div>
                                <div class="d-flex align-items-center mt-2 gap-2">
                                    <i class="bi bi-envelope-fill fs-5"></i>
                                    <p class="mb-0" style="font-size: small">Smas-metro@sch.id</p>
                                </div>
                                <div class="d-flex align-items-center mt-2 gap-2">
                                    <i class="bi bi-telephone-fill fs-5"></i>
                                    <p class="mb-0" style="font-size: small">+0732-2289</p>
                                </div>
                                <div class="d-flex align-items-center mt-2 gap-2">
                                    <i class="bi bi-whatsapp fs-5"></i>
                                    <p class="mb-0" style="font-size: small">+628-1267-3298-763</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 mt-4">
                            <h5 class="underline-animation">Follow Kami</h5>
                            <div class="d-flex socmed mt-4 gap-3">
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
                <div class="copy-right d-flex align-items-center justify-content-center text-muted gap-2 py-2">
                    <i class="bi bi-c-circle"></i>
                    <p class="mb-0">SMK 1 Kartika</p>
                </div>
        </footer>
    </div>
    @stack('scripts-carousel')
    @stack('scripts')

    <script src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
    <script>
        // Add this JavaScript for toggling dropdown on click
        document.addEventListener("DOMContentLoaded", function() {
            var dropdowns = document.querySelectorAll('.dropdown');

            dropdowns.forEach(function(dropdown) {
                dropdown.addEventListener('click', function() {
                    dropdown.classList.toggle('show');
                });
            });

            window.onclick = function(event) {
                if (!event.target.matches('.dropdown-toggle')) {
                    dropdowns.forEach(function(dropdown) {
                        if (dropdown.classList.contains('show')) {
                            dropdown.classList.remove('show');
                        }
                    });
                }
            }
        });
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
