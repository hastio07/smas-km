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
    <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/themify-icons/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">

    <!-- CSS for this page only -->
    <link href="{{ asset('vendor/chart.js/dist/Chart.min.css') }}" rel="stylesheet">
    @stack('thispageonly')
    <!-- End CSS  -->

    <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-override.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dark.min.css') }}" rel="stylesheet">
    @stack('styles')
</head>

<body>
    <div id="app">
        <div class="shadow-header"></div>
        <header class="header-navbar fixed">
            <div class="toggle-mobile action-toggle"><i class="fas fa-bars"></i></div>
            <div class="header-wrapper">
                <div class="header-left">
                    <div class="theme-switch-icon"></div>
                </div>
                <div class="header-content">
                    <div class="notification dropdown">
                        <a aria-expanded="false" data-bs-toggle="dropdown" href="#">
                            <i class="far fa-envelope"></i>
                        </a>
                        <ul class="dropdown-menu medium">
                            <li class="menu-header">
                                <a class="dropdown-item" href="#">Message</a>
                            </li>
                            <li class="menu-content ps-menu">
                                <a href="#">
                                    <div class="message-image">
                                        <img alt="user1" class="rounded-circle w-100" src="../assets/images/avatar1.png">
                                    </div>
                                    <div class="message-content read">
                                        <div class="subject">
                                            John
                                        </div>
                                        <div class="body">
                                            Please call me at 9pm
                                        </div>
                                        <div class="time">Just now</div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message-image">
                                        <img alt="user1" class="rounded-circle w-100" src="../assets/images/avatar2.png">
                                    </div>
                                    <div class="message-content">
                                        <div class="subject">
                                            Michele
                                        </div>
                                        <div class="body">
                                            Please come to my party
                                        </div>
                                        <div class="time">3 hours ago</div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message-image">
                                        <img alt="user1" class="rounded-circle w-100" src="../assets/images/avatar1.png">
                                    </div>
                                    <div class="message-content read">
                                        <div class="subject">
                                            Brad
                                        </div>
                                        <div class="body">
                                            I have something to discuss, please call me soon
                                        </div>
                                        <div class="time">3 hours ago</div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message-image">
                                        <img alt="user1" class="rounded-circle w-100" src="../assets/images/avatar2.png">
                                    </div>
                                    <div class="message-content">
                                        <div class="subject">
                                            Anel
                                        </div>
                                        <div class="body">
                                            Sorry i'm late
                                        </div>
                                        <div class="time">8 hours ago</div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message-image">
                                        <img alt="user1" class="rounded-circle w-100" src="../assets/images/avatar2.png">
                                    </div>
                                    <div class="message-content">
                                        <div class="subject">
                                            Mary
                                        </div>
                                        <div class="body">
                                            Please answer my question last night
                                        </div>
                                        <div class="time">Last month</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="notification dropdown">
                        <a aria-expanded="false" data-bs-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span class="badge">12</span>
                        </a>
                        <ul class="dropdown-menu medium">
                            <li class="menu-header">
                                <a class="dropdown-item" href="#">Notification</a>
                            </li>
                            <li class="menu-content ps-menu">
                                <a href="#">
                                    <div class="message-icon text-danger">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>
                                    <div class="message-content read">
                                        <div class="body">
                                            There's incoming event, don't miss it!!
                                        </div>
                                        <div class="time">Just now</div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message-icon text-info">
                                        <i class="fas fa-info"></i>
                                    </div>
                                    <div class="message-content read">
                                        <div class="body">
                                            Your licence will expired soon
                                        </div>
                                        <div class="time">3 hours ago</div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message-icon text-success">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="message-content">
                                        <div class="body">
                                            Successfully register new user
                                        </div>
                                        <div class="time">8 hours ago</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown dropdown-menu-end">
                        <a aria-expanded="false" class="user-dropdown" data-bs-toggle="dropdown" href="#">
                            <div class="label">
                                <span></span>
                                <div>Admin</div>
                            </div>
                            <img alt="user"srcset="" class="img-user" src="../assets/images/avatar1.png">
                        </a>
                        <ul class="dropdown-menu small">
                            <li class="menu-header">
                                <a class="dropdown-item" href="#">Notifikasi</a>
                            </li>
                            <li class="menu-content ps-menu">
                                <a href="#">
                                    <div class="description">
                                        <i class="ti-user"></i> Profile
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="description">
                                        <i class="ti-settings"></i> Setting
                                    </div>
                                </a>
                                <a href="/logout" id="logout">
                                    <div class="description">
                                        <i class="ti-power-off"></i> Logout
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <nav class="main-sidebar ps-menu">
            <div class="sidebar-toggle action-toggle">
                <a href="#">
                    <i class="fas fa-bars"></i>
                </a>
            </div>
            <div class="sidebar-opener action-toggle">
                <a href="#">
                    <i class="ti-angle-right"></i>
                </a>
            </div>
            <div class="sidebar-header">
                <div class="text">AR</div>
                <div class="close-sidebar action-toggle">
                    <i class="ti-close"></i>
                </div>
            </div>
            <div class="sidebar-content">
                <ul>
                    <li class="active">
                        <a class="link" href="/admin">
                            <i class="ti-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="link" href="/guru">
                            <i class="ti-home"></i>
                            <span>Manage Guru</span>
                        </a>
                    </li>
                    <li>
                        <a class="main-menu has-dropdown" href="#">
                            <i class="ti-desktop"></i>
                            <span>UI Elements</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a class="link" href="element-ui.html"><span>Elements</span></a></li>
                            <li><a class="link" href="element-accordion.html"><span>Accordion</span></a></li>
                            <li><a class="link" href="element-tabs-collapse.html"><span>Tabs & Collapse</span></a></li>
                            <li><a class="link" href="element-card.html"><span>Card</span></a></li>
                            <li><a class="link" href="element-button.html"><span>Buttons</span></a></li>
                            <li><a class="link" href="element-alert.html"><span>Alert</span></a></li>
                            <li><a class="link" href="element-themify-icons.html"><span>Themify Icons</span></a></li>
                            <li><a class="link" href="element-modal.html"><span>Modal</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="main-menu has-dropdown" href="#">
                            <i class="ti-book"></i>
                            <span>Form</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a class="link" href="form-element.html">
                                    <span>Form Element</span></a>
                            </li>
                            <li><a class="link" href="form-datepicker.html">
                                    <span>Datepicker</span></a>
                            </li>
                            <li><a class="link" href="form-select2.html">
                                    <span>Select2</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="main-menu has-dropdown" href="#">
                            <i class="ti-notepad"></i>
                            <span>Utilities</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a class="link" href="error-404.html" target="_blank"><span>Error 404</span></a></li>
                            <li><a class="link" href="error-403.html" target="_blank"><span>Error 403</span></a></li>
                            <li><a class="link" href="error-500.html" target="_blank"><span>Error 500</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="main-menu has-dropdown" href="#">
                            <i class="ti-layers-alt"></i>
                            <span>Pages</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a class="link" href="pages-blank.html"><span>Blank</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="main-menu has-dropdown" href="#">
                            <i class="ti-hummer"></i>
                            <span>Auth</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a class="link" href="auth-login.html" target="_blank"><span>Login</span></a></li>
                            <li><a class="link" href="auth-register.html" target="_blank"><span>Register</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="main-menu has-dropdown" href="#">
                            <i class="ti-write"></i>
                            <span>Tables</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a class="link" href="table-basic.html"><span>Table Basic</span></a></li>
                            <li><a class="link" href="table-datatables.html"><span>DataTables</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="link" href="charts.html">
                            <i class="ti-bar-chart"></i>
                            <span>Charts</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="main-content">
            <div class="content-wraper">
                @yield('main-content')
            </div>
        </div>
        <div class="settings">
            <div class="settings-icon-wrapper">
                <div class="settings-icon">
                    <i class="ti ti-settings"></i>
                </div>
            </div>
            <div class="settings-content">
                <ul>
                    <li class="fix-header">
                        <div class="fix-header-wrapper">
                            <div class="form-check form-switch lg">
                                <label class="form-check-label" for="settingsFixHeader">Fixed Header</label>
                                <input class="form-check-input toggle-settings" id="settingsFixHeader" name="Header" type="checkbox">
                            </div>
                        </div>
                    </li>
                    <li class="fix-footer">
                        <div class="fix-footer-wrapper">
                            <div class="form-check form-switch lg">
                                <label class="form-check-label" for="settingsFixFooter">Fixed Footer</label>
                                <input class="form-check-input toggle-settings" id="settingsFixFooter" name="Footer" type="checkbox">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="theme-switch">
                            <label for="">Theme Color</label>
                            <div>
                                <div class="form-check form-check-inline lg">
                                    <input class="form-check-input lg theme-color" id="light" name="ThemeColor" type="radio" value="light">
                                    <label class="form-check-label" for="light">Light</label>
                                </div>
                                <div class="form-check form-check-inline lg">
                                    <input class="form-check-input lg theme-color" id="dark" name="ThemeColor" type="radio" value="dark">
                                    <label class="form-check-label" for="dark">Dark</label>
                                </div>

                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="fix-footer-wrapper">
                            <div class="form-check form-switch lg">
                                <label class="form-check-label" for="settingsFixFooter">Collapse Sidebar</label>
                                <input class="form-check-input toggle-settings" id="settingsFixFooter" name="Sidebar" type="checkbox">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <footer>
            Copyright © 2022 &nbsp <a class="ml-1" href="https://www.youtube.com/c/mulaidarinull" target="_blank"> Mulai Dari Null </a> <span> . All rights Reserved</span>
        </footer>
        <div class="overlay action-toggle">
        </div>
    </div>
    @stack('scripts')
    <script>
        const btnLogout = document.getElementById('logout');
        btnLogout.addEventListener('click', (e) => {
            e.preventDefault();
            const url = e.target.getAttribute('href');
            const form = document.createElement('form');
            form.action = url;
            form.method = 'POST';
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const csrfInput = document.createElement('input');
            csrfInput.type = 'hidden';
            csrfInput.name = '_token';
            csrfInput.value = csrfToken;
            form.appendChild(csrfInput);
            document.body.appendChild(form);
            form.submit();
        });
    </script>
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('vendor/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script>
    <!-- js for this page only -->
    <script src="{{ asset('vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('assets/js/page/index.js') }}"></script>
    <!-- ======= -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        Main.init()
    </script>
</body>

</html>
