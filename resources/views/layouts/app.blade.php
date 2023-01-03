<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name'))</title>
    <link rel="stylesheet" href="{{ asset('mazer2.0/assets/css/main/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('mazer2.0/assets/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('mazer2.0/assets/images/logo/favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('mazer2.0/assets/css/shared/iconly.css') }}">
</head>

<body>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                <div class="header-top">
                    <div class="container">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('mazer2.0/assets/images/logo/logo.svg') }}"
                                    alt="Logo"></a>
                        </div>
                        <div class="header-top-right"> @guest
                                @if (Route::has('login'))
                                    <li class="btn">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @endif @if (Route::has('register'))
                                        <li class="btn">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <div class="dropdown">
                                        <a href="#" id="topbarUserDropdown"
                                            class="user-dropdown d-flex align-items-center dropend dropdown-toggle "
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <div class="avatar avatar-md2">
                                                <img src="{{ asset('mazer2.0/assets/images/faces/1.jpg') }}" alt="Avatar">
                                            </div>
                                            <div class="text">
                                                <h6 class="user-dropdown-name">John Ducky</h6>
                                                <p class="user-dropdown-status text-sm text-muted">Member</p>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end shadow-lg"
                                            aria-labelledby="topbarUserDropdown">
                                            <li><a class="dropdown-item" href="#">My Account</a></li>
                                            <li><a class="dropdown-item" href="#">Settings</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#"
                                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">Logout</a>
                                            </li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </ul>
                                    </div>
                                @endguest
                                <!-- Burger button responsive -->
                                <a href="#" class="burger-btn d-block d-xl-none">
                                    <i class="bi bi-justify fs-3"></i>
                                </a>
                        </div>
                    </div>
                </div>
                <nav class="main-navbar">
                    <div class="container">
                        <ul>
                            <li class="menu-item  ">
                                <a href="#" class='menu-link'>
                                    <i class="bi bi-grid-fill"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="menu-item  has-sub">
                                <a href="#" class='menu-link'>
                                    <i class="bi bi-stack"></i>
                                    <span>Components</span>
                                </a>
                                <div class="submenu ">
                                    <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                                    <div class="submenu-group-wrapper">
                                        <ul class="submenu-group">
                                            <li class="submenu-item  ">
                                                <a href="#" class='submenu-link'>Alert</a>
                                            </li>
                                            <li class="submenu-item  ">
                                                <a href="#" class='submenu-link'>Badge</a>
                                            </li>
                                            <li class="submenu-item  ">
                                                <a href="#" class='submenu-link'>Breadcrumb</a>
                                            </li>
                                            <li class="submenu-item  ">
                                                <a href="#" class='submenu-link'>Button</a>
                                            </li>
                                            <li class="submenu-item  ">
                                                <a href="#" class='submenu-link'>Card</a>
                                            </li>
                                            <li class="submenu-item  ">
                                                <a href="#" class='submenu-link'>Carousel</a>
                                            </li>
                                            <li class="submenu-item  ">
                                                <a href="#" class='submenu-link'>Collapse</a>
                                            </li>
                                            <li class="submenu-item  ">
                                                <a href="#" class='submenu-link'>Dropdown</a>
                                            </li>
                                        </ul>
                                        <ul class="submenu-group">
                                            <li class="submenu-item  ">
                                                <a href="#" class='submenu-link'>List
                                                    Group</a>
                                            </li>
                                            <li class="submenu-item  ">
                                                <a href="#" class='submenu-link'>Modal</a>
                                            </li>
                                            <li class="submenu-item  ">
                                                <a href="#" class='submenu-link'>Navs</a>
                                            </li>
                                            <li class="submenu-item  ">
                                                <a href="#" class='submenu-link'>Pagination</a>
                                            </li>
                                            <li class="submenu-item  ">
                                                <a href="#" class='submenu-link'>Progress</a>
                                            </li>
                                            <li class="submenu-item  ">
                                                <a href="#" class='submenu-link'>Spinner</a>
                                            </li>
                                            <li class="submenu-item  ">
                                                <a href="#" class='submenu-link'>Tooltip</a>
                                            </li>
                                            <li class="submenu-item  has-sub">
                                                <a href="#" class='submenu-link'>Extra Components</a>
                                                <!-- 3 Level Submenu -->
                                                <ul class="subsubmenu">
                                                    <li class="subsubmenu-item ">
                                                        <a href="#" class="subsubmenu-link">Avatar</a>
                                                    </li>
                                                    <li class="subsubmenu-item ">
                                                        <a href="#" class="subsubmenu-link">Sweet Alert</a>
                                                    </li>
                                                    <li class="subsubmenu-item ">
                                                        <a href="#" class="subsubmenu-link">Toastify</a>
                                                    </li>
                                                    <li class="subsubmenu-item ">
                                                        <a href="#" class="subsubmenu-link">Rating</a>
                                                    </li>
                                                    <li class="subsubmenu-item ">
                                                        <a href="#" class="subsubmenu-link">Divider</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item active has-sub">
                                <a href="#" class='menu-link'>
                                    <i class="bi bi-grid-1x2-fill"></i>
                                    <span>Layouts</span>
                                </a>
                                <div class="submenu ">
                                    <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                                    <div class="submenu-group-wrapper">
                                        <ul class="submenu-group">
                                            <li class="submenu-item  ">
                                                <a href="#" class='submenu-link'>Default Layout</a>
                                            </li>
                                            <li class="submenu-item  ">
                                                <a href="#" class='submenu-link'>1
                                                    Column</a>
                                            </li>
                                            <li class="submenu-item  ">
                                                <a href="#" class='submenu-link'>Vertical
                                                    Navbar</a>
                                            </li>
                                            <li class="submenu-item  ">
                                                <a href="#" class='submenu-link'>RTL Layout</a>
                                            </li>
                                            <li class="submenu-item active ">
                                                <a href="#" class='submenu-link'>Horizontal
                                                    Menu</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <div class="content-wrapper container">
                @yield('content')
            </div>
            <footer>
                <div class="container">
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>Laravel Stater Kit by <a href="https://jabsainfotech.com">Jabsa Infotech(InnoWaysIT)</a>
                            </p>
                        </div>
                        <div class="float-end">
                            <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                    href="https://saugi.me">Saugi</a></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('mazer2.0/assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('mazer2.0/assets/js/app.js') }}"></script>
    <script src="{{ asset('mazer2.0/assets/js/pages/horizontal-layout.js') }}"></script>
    <script src="{{ asset('mazer2.0/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('mazer2.0/assets/js/pages/dashboard.js') }}"></script>
</body>

</html>
