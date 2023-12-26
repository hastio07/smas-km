@extends('layouts.default')

@section('title', 'Admin')
@push('styles')
    <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/themify-icons/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">

    <!-- CSS for this page only -->
    <link href="{{ asset('vendor/chart.js/dist/Chart.min.css') }}" rel="stylesheet">
    <!-- End CSS  -->

    <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-override.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dark.min.css') }}" rel="stylesheet">
@endpush
@section('content')
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
                            <!-- <li class="menu-header">
                                            <a class="dropdown-item" href="#">Notifikasi</a>
                                        </li> -->
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
                        <a class="link" href="index.html">
                            <i class="ti-home"></i>
                            <span>Dashboard</span>
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
            <div class="title">
                Dashboard
            </div>
            <div class="content-wrapper">
                <div class="row same-height">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>Monthly Sales</h4>
                            </div>
                            <div class="card-body">
                                <canvas height="642" id="myChart" width="1388"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Statistics</h4>
                            </div>
                            <div class="card-body">
                                <div class="progress-wrapper">
                                    <h4>Progress 25%</h4>
                                    <div class="progress progress-bar-small">
                                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" class="progress-bar progress-bar-small" role="progressbar" style="width: 25%">
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-wrapper">
                                    <h4>Progress 45%</h4>
                                    <div class="progress progress-bar-small">
                                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" class="progress-bar progress-bar-small bg-pink" role="progressbar" style="width: 45%">
                                        </div>
                                    </div>
                                </div>
                                <canvas height="842" id="myChart2" width="1388"></canvas>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="row same-height">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header-statistics">
                                <h5>Monthly Statistics</h5>
                                <p>Based On Major Browser</p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="small-font table-striped table-hover table-sm table">
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Google Chrome</td>
                                                <td>5120</td>
                                                <td><i class="fa fa-caret-up text-success"></i></td>

                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Mozilla Firefox</td>
                                                <td>4000</td>
                                                <td><i class="fa fa-caret-up text-success"></i></td>

                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Safari</td>
                                                <td>8800</td>
                                                <td><i class="fa fa-caret-down text-danger"></i></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Opera Mini</td>
                                                <td>4123</td>
                                                <td><i class="fa fa-caret-up text-success"></i></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Interest</h4>
                            </div>
                            <div class="card-body">
                                <canvas height="842" id="myChart3" width="1388"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="row same-height">
                    <div class="col-md-4">
                        <div class="card">
                            <!-- <div class="float-label">
                                    <h6>Sales</h6>
                                    <h4>$1500</h4>
                                </div> -->
                            <div class="card-body">
                                <div id="apex-chart"></div>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <!-- <div class="float-label">
                                    <h6>Profit</h6>
                                    <h4>$500</h4>
                                </div> -->
                            <span></span>

                            <div class="card-body">
                                <div id="apex-chart-bar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Activities</h4>
                            </div>
                            <div class="card-body">
                                <ul class="timeline-xs">
                                    <li class="timeline-item success">
                                        <div class="margin-left-15">
                                            <div class="text-muted text-small">
                                                2 minutes ago
                                            </div>
                                            <p>
                                                <a class="text-info" href="">
                                                    Bambang
                                                </a>
                                                has completed his account.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="margin-left-15">
                                            <div class="text-muted text-small">
                                                12:30
                                            </div>
                                            <p>
                                                Staff Meeting
                                            </p>
                                        </div>
                                    </li>
                                    <li class="timeline-item danger">
                                        <div class="margin-left-15">
                                            <div class="text-muted text-small">
                                                11:11
                                            </div>
                                            <p>
                                                Completed new layout.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="timeline-item info">
                                        <div class="margin-left-15">
                                            <div class="text-muted text-small">
                                                Thu, 12 Jun
                                            </div>
                                            <p>
                                                Contacted
                                                <a class="text-info" href="">
                                                    Microsoft
                                                </a>
                                                for license upgrades.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="margin-left-15">
                                            <div class="text-muted text-small">
                                                Tue, 10 Jun
                                            </div>
                                            <p>
                                                Started development new site
                                            </p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="margin-left-15">
                                            <div class="text-muted text-small">
                                                Sun, 11 Apr
                                            </div>
                                            <p>
                                                Lunch with
                                                <a class="text-info" href="">
                                                    Mba Inem
                                                </a>
                                                .
                                            </p>
                                        </div>
                                    </li>
                                    <li class="timeline-item warning">
                                        <div class="margin-left-15">
                                            <div class="text-muted text-small">
                                                Wed, 25 Mar
                                            </div>
                                            <p>
                                                server Maintenance.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Chat</h4>
                            </div>
                            <div class="card-body small-padding">
                                <div class="panel-discussion ps-chat">
                                    <ol class="discussion">
                                        <li class="messages-date">
                                            Sunday, Feb 9, 12:58
                                        </li>
                                        <li class="self">
                                            <div class="message">
                                                <div class="message-name">
                                                    Mas Bambang
                                                </div>
                                                <div class="message-text">
                                                    Hi, Mba Inem
                                                </div>
                                                <div class="message-avatar">
                                                    <img alt="" src="../assets/images/avatar1.png">
                                                </div>
                                            </div>
                                            <div class="message">
                                                <div class="message-name">
                                                    Mba Inem
                                                </div>
                                                <div class="message-text">
                                                    How are you?
                                                </div>
                                                <div class="message-avatar">
                                                    <img alt="" src="../assets/images/avatar1.png">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="other">
                                            <div class="message">
                                                <div class="message-name">
                                                    Mba Inem
                                                </div>
                                                <div class="message-text">
                                                    Hi, i am good
                                                </div>
                                                <div class="message-avatar">
                                                    <img alt="" src="../assets/images/avatar2.png">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="self">
                                            <div class="message">
                                                <div class="message-name">
                                                    Mas Bambang
                                                </div>
                                                <div class="message-text">
                                                    Glad to see you ;)
                                                </div>
                                                <div class="message-avatar">
                                                    <img alt="" src="../assets/images/avatar1.png">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="messages-date">
                                            Sunday, Feb 9, 13:10
                                        </li>
                                        <li class="other">
                                            <div class="message">
                                                <div class="message-name">
                                                    Mba Inem
                                                </div>
                                                <div class="message-text">
                                                    What do you think about my new Dashboard?
                                                </div>
                                                <div class="message-avatar">
                                                    <img alt="" src="../assets/images/avatar2.png">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="messages-date">
                                            Sunday, Feb 9, 15:28
                                        </li>
                                        <li class="other">
                                            <div class="message">
                                                <div class="message-name">
                                                    Mba Inem
                                                </div>
                                                <div class="message-text">
                                                    Alo...
                                                </div>
                                                <div class="message-avatar">
                                                    <img alt="" src="../assets/images/avatar2.png">
                                                </div>
                                            </div>
                                            <div class="message">
                                                <div class="message-name">
                                                    Mba Inem
                                                </div>
                                                <div class="message-text">
                                                    Are you there?
                                                </div>
                                                <div class="message-avatar">
                                                    <img alt="" src="../assets/images/avatar2.png">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="self">
                                            <div class="message">
                                                <div class="message-name">
                                                    Mas Bambang
                                                </div>
                                                <div class="message-text">
                                                    Hi, i am here
                                                </div>
                                                <div class="message-avatar">
                                                    <img alt="" src="../assets/images/avatar1.png">
                                                </div>
                                            </div>
                                            <div class="message">
                                                <div class="message-name">
                                                    Mba Inem
                                                </div>
                                                <div class="message-text">
                                                    Your Dashboard is great
                                                </div>
                                                <div class="message-avatar">
                                                    <img alt="" src="../assets/images/avatar1.png">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="messages-date">
                                            Friday, Feb 7, 23:39
                                        </li>
                                        <li class="other">
                                            <div class="message">
                                                <div class="message-name">
                                                    Mba Inem
                                                </div>
                                                <div class="message-text">
                                                    How does the binding and digesting work in ReactJS?, Bang?
                                                </div>
                                                <div class="message-avatar">
                                                    <img alt="" src="../assets/images/avatar2.png">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="self">
                                            <div class="message">
                                                <div class="message-name">
                                                    Mas Bambang
                                                </div>
                                                <div class="message-text">
                                                    oh that's your question?
                                                </div>
                                                <div class="message-avatar">
                                                    <img alt="" src="../assets/images/avatar1.png">
                                                </div>
                                            </div>
                                            <div class="message">
                                                <div class="message-name">
                                                    Mas Bambang
                                                </div>
                                                <div class="message-text">
                                                    little reduntant, no?
                                                </div>
                                                <div class="message-avatar">
                                                    <img alt="" src="../assets/images/avatar1.png">
                                                </div>
                                            </div>
                                            <div class="message">
                                                <div class="message-name">
                                                    Mas Bambang
                                                </div>
                                                <div class="message-text">
                                                    literally we get the question daily
                                                </div>
                                                <div class="message-avatar">
                                                    <img alt="" src="../assets/images/avatar1.png">
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                                <div class="message-bar">
                                    <div class="message-inner">
                                        <a class="link icon-only" href="#"><i class="fa fa-camera"></i></a>
                                        <div class="message-area">
                                            <textarea placeholder="Message"></textarea>
                                        </div>
                                        <a class="link" href="#">
                                            Send
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
@endsection

@push('scripts')
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
@endpush
