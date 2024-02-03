<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <title>ISP - Internet Service Provider | Admin Panel</title>
        <!-- General CSS Files -->
        <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
        <!-- Template CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

        <!-- Custom style CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
        <link rel='shortcut icon' type='image/x-icon' href='{{ asset('assets/img/favicon.ico') }}' />
    </head>

    <body>
        <div class="loader"></div>
        <div id="app">
            <div class="main-wrapper main-wrapper-1">
                <div class="navbar-bg"></div>

                <nav class="navbar navbar-expand-lg main-navbar sticky">
                    <div class="form-inline mr-auto">
                        <ul class="navbar-nav mr-3">
                            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
                                                    collapse-btn"> <i data-feather="align-justify"></i></a></li>
                            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a></li>
                            <li>
                            <form class="form-inline mr-auto">
                                <div class="search-element">
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                                <button class="btn" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                </div>
                            </form>
                            </li>
                        </ul>
                    </div>

                    <ul class="navbar-nav navbar-right">
                        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                            class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
                            <span class="badge headerBadge1">
                                6 </span> </a>
                            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                            <div class="dropdown-header">
                                Messages
                                <div class="float-right">
                                <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-message">
                                <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar
                                                            text-white"> <img alt="image" src="{{ asset('assets/img/users/user-1.png') }}" class="rounded-circle">
                                </span> <span class="dropdown-item-desc"> <span class="message-user">John
                                    Deo</span>
                                    <span class="time messege-text">Please check your mail !!</span>
                                    <span class="time">2 Min Ago</span>
                                </span>
                                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                    <img alt="image" src="{{ asset('assets/img/users/user-2.png') }}" class="rounded-circle">
                                </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                                    Smith</span> <span class="time messege-text">Request for leave
                                    application</span>
                                    <span class="time">5 Min Ago</span>
                                </span>
                                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                    <img alt="image" src="{{ asset('assets/img/users/user-5.png') }}" class="rounded-circle">
                                </span> <span class="dropdown-item-desc"> <span class="message-user">Jacob
                                    Ryan</span> <span class="time messege-text">Your payment invoice is
                                    generated.</span> <span class="time">12 Min Ago</span>
                                </span>
                                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                    <img alt="image" src="{{ asset('assets/img/users/user-4.png') }}" class="rounded-circle">
                                </span> <span class="dropdown-item-desc"> <span class="message-user">Lina
                                    Smith</span> <span class="time messege-text">hii John, I have upload
                                    doc
                                    related to task.</span> <span class="time">30
                                    Min Ago</span>
                                </span>
                                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                    <img alt="image" src="{{ asset('assets/img/users/user-3.png') }}" class="rounded-circle">
                                </span> <span class="dropdown-item-desc"> <span class="message-user">Jalpa
                                    Joshi</span> <span class="time messege-text">Please do as specify.
                                    Let me
                                    know if you have any query.</span> <span class="time">1
                                    Days Ago</span>
                                </span>
                                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                    <img alt="image" src="{{ asset('assets/img/users/user-2.png') }}" class="rounded-circle">
                                </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                                    Smith</span> <span class="time messege-text">Client Requirements</span>
                                    <span class="time">2 Days Ago</span>
                                </span>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                            </div>
                        </li>
                        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                            class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>
                            </a>
                            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                            <div class="dropdown-header">
                                Notifications
                                <div class="float-right">
                                <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-icons">
                                <a href="#" class="dropdown-item dropdown-item-unread"> <span
                                    class="dropdown-item-icon bg-primary text-white"> <i class="fas
                                                                fa-code"></i>
                                </span> <span class="dropdown-item-desc"> Template update is
                                    available now! <span class="time">2 Min
                                    Ago</span>
                                </span>
                                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="far
                                                                fa-user"></i>
                                </span> <span class="dropdown-item-desc"> <b>You</b> and <b>Dedik
                                    Sugiharto</b> are now friends <span class="time">10 Hours
                                    Ago</span>
                                </span>
                                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-success text-white"> <i
                                    class="fas
                                                                fa-check"></i>
                                </span> <span class="dropdown-item-desc"> <b>Kusnaedi</b> has
                                    moved task <b>Fix bug header</b> to <b>Done</b> <span class="time">12
                                    Hours
                                    Ago</span>
                                </span>
                                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-danger text-white"> <i
                                    class="fas fa-exclamation-triangle"></i>
                                </span> <span class="dropdown-item-desc"> Low disk space. Let's
                                    clean it! <span class="time">17 Hours Ago</span>
                                </span>
                                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="fas
                                                                fa-bell"></i>
                                </span> <span class="dropdown-item-desc"> Welcome to Otika
                                    template! <span class="time">Yesterday</span>
                                </span>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                            </div>
                        </li>
                        <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="{{ asset('assets/img/user.png') }}"
                                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
                            <div class="dropdown-menu dropdown-menu-right pullDown">
                            <div class="dropdown-title">Hello Sarah Smith</div>
                            <a href="profile.html" class="dropdown-item has-icon"> <i class="far
                                                        fa-user"></i> Profile
                            </a> <a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                                Activities
                            </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                                Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ url('logout') }}" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>
                            </div>
                        </li>
                    </ul>
                </nav>

                <div class="main-sidebar sidebar-style-2">
                    <aside id="sidebar-wrapper">
                        <div class="sidebar-brand">
                            <a href="index.html"> <img alt="image" src="{{ asset('assets/img/logo.png') }}" class="header-logo" /> <span
                                class="logo-name">Internet</span>
                            </a>
                        </div>
                        <ul class="sidebar-menu">
                            <li class="menu-header">Main</li>

                            <li class="dropdown active">
                                <a href="{{ url('/admin/dashboard') }}" class="nav-link">
                                    <i data-feather="monitor"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a class="nav-link" href="vector-map.html">
                                    <i class="fa-solid fa-money-bill"></i>
                                    <span>Bill  Generate</span>
                                </a>
                            </li>

                            <li>
                                <a class="nav-link" href="vector-map.html">
                                    <i class="fa-solid fa-money-bill"></i>
                                    <span>Bill  Collection</span>
                                </a>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="menu-toggle nav-link has-dropdown">
                                    <i class="fa-solid fa-users"></i>
                                    <span>Human Resource</span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="{{ route('designation.list') }}">Designation List</a></li>
                                    <li><a class="nav-link" href="{{ route('go.employeelist') }}">Employee List</a></li>
                                    <li><a class="nav-link" href="{{ route('go.dailyattendance') }}">Daily Attendance</a></li>
                                    <li><a class="nav-link" href="{{ route('go.monthlyattendance') }}">Monthly Attendance</a></li>
                                    <li><a class="nav-link" href="{{ route('go.attendancehistory') }}">Attendance History</a></li>
                                    <li><a class="nav-link" href="{{ route('go.loanmanagement') }}">Loan Management</a></li>
                                    <li><a class="nav-link" href="{{ route('go.salarymanagement') }}">Salary Sheet</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="menu-toggle nav-link has-dropdown">
                                    <i class="fa-solid fa-file-invoice"></i>
                                    <span>Accounts</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="chat.html">Income Head</a></li>
                                    <li><a class="nav-link" href="portfolio.html">Expense Head</a></li>
                                    <li><a class="nav-link" href="blog.html">Others Head</a></li>
                                    <li><a class="nav-link" href="calendar.html">All Transactions</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="menu-toggle nav-link has-dropdown">
                                    <i class="fa-solid fa-users"></i>
                                    <span>Supplier</span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="email-inbox.html">Supplier List</a></li>
                                    <li><a class="nav-link" href="email-compose.html">Supplier Payments</a></li>
                                </ul>
                            </li>

                            <li class="menu-header">Customer</li>

                            <li class="dropdown">
                                <a href="#" class="menu-toggle nav-link has-dropdown">
                                    <i class="fa-solid fa-users"></i>
                                    <span>Customer</span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="alert.html">All Customer</a></li>
                                    <li><a class="nav-link" href="badge.html">Online Customer</a></li>
                                    <li><a class="nav-link" href="breadcrumb.html">Offline Customer</a></li>
                                    <li><a class="nav-link" href="buttons.html">Free Customer</a></li>
                                    <li><a class="nav-link" href="collapse.html">Left Custormer</a></li>
                                    <li><a class="nav-link" href="dropdown.html">Customer Due</a></li>
                                    <li><a class="nav-link" href="list-group.html">Customer Payment</a></li>
                                </ul>
                            </li>


                            <li class="dropdown">
                                <a href="#" class="menu-toggle nav-link has-dropdown">
                                    <i class="fa-solid fa-users"></i>
                                    <span>Reseller</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="avatar.html">All Reseller</a></li>
                                    <li><a class="nav-link" href="card.html">Reseller Customer</a></li>
                                    <li><a class="nav-link" href="modal.html">Reseller Payments</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="nav-link" href="blank.html">
                                    <i class="fa-solid fa-gears"></i>
                                    <span>Support & Tickets</span>
                                </a>
                            </li>

                            <li class="menu-header">Report</li>

                            <li class="dropdown">
                                <a href="#" class="menu-toggle nav-link has-dropdown">
                                    <i class="fa-solid fa-book"></i>
                                    <span>Reporting</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="basic-form.html">Daily Report</a></li>
                                    <li><a class="nav-link" href="forms-advanced-form.html">Financial Statement</a></li>
                                    <li><a class="nav-link" href="forms-editor.html">BTRC Report</a></li>
                                </ul>
                            </li>


                            <li class="dropdown">
                                <a href="#" class="menu-toggle nav-link has-dropdown">
                                    <i class="fa-solid fa-comment-sms"></i>
                                    <span>SMS Service</span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="basic-table.html">SMS Template</a></li>
                                    <li><a class="nav-link" href="advance-table.html">Send SMS</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="nav-link" href="vector-map.html">
                                    <i class="fa-solid fa-user"></i>
                                    <span>User List</span>
                                </a>
                            </li>

                        </ul>
                    </aside>
                </div>

                <!-- Main Content -->
                <div class="main-content">

                    <section class="section">
                        <div class="row ">
                            @yield('content')



                        </div>
                    </section>

                    <div class="settingSidebar">
                        <a href="javascript:void(0)" class="settingPanelToggle">
                            <i class="fa fa-spin fa-cog"></i>
                        </a>
                        <div class="settingSidebar-body ps-container ps-theme-default">
                            <div class=" fade show active">
                            <div class="setting-panel-header">Setting Panel
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Select Layout</h6>
                                <div class="selectgroup layout-color w-50">
                                <label class="selectgroup-item">
                                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                                    <span class="selectgroup-button">Light</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                                    <span class="selectgroup-button">Dark</span>
                                </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                                <div class="selectgroup selectgroup-pills sidebar-color">
                                <label class="selectgroup-item">
                                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                    data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                    data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                                </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Color Theme</h6>
                                <div class="theme-setting-options">
                                <ul class="choose-theme list-unstyled mb-0">
                                    <li title="white" class="active">
                                    <div class="white"></div>
                                    </li>
                                    <li title="cyan">
                                    <div class="cyan"></div>
                                    </li>
                                    <li title="black">
                                    <div class="black"></div>
                                    </li>
                                    <li title="purple">
                                    <div class="purple"></div>
                                    </li>
                                    <li title="orange">
                                    <div class="orange"></div>
                                    </li>
                                    <li title="green">
                                    <div class="green"></div>
                                    </li>
                                    <li title="red">
                                    <div class="red"></div>
                                    </li>
                                </ul>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <div class="theme-setting-options">
                                <label class="m-b-0">
                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                    id="mini_sidebar_setting">
                                    <span class="custom-switch-indicator"></span>
                                    <span class="control-label p-l-10">Mini Sidebar</span>
                                </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <div class="theme-setting-options">
                                <label class="m-b-0">
                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                    id="sticky_header_setting">
                                    <span class="custom-switch-indicator"></span>
                                    <span class="control-label p-l-10">Sticky Header</span>
                                </label>
                                </div>
                            </div>
                            <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                <i class="fas fa-undo"></i> Restore Default
                                </a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <footer class="main-footer">
                    <div class="footer-left">
                        
                    </div>
                    <div class="footer-right">
                    </div>
                </footer>
            </div>
        </div>
        <!-- General JS Scripts -->
        <script src="{{ asset('assets/js/app.min.js') }}"></script>
        <!-- JS Libraies -->
        <script src="{{ asset('assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
        <!-- Page Specific JS File -->
        <script src="{{ asset('assets/js/page/index.js') }}"></script>
        <script src="{{ asset('assets/js/page/advance-table.js') }}"></script>
        <!-- Template JS File -->
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
        <!-- Custom JS File -->
        <script src="{{ asset('assets/js/custom.js') }}"></script>
    </body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>