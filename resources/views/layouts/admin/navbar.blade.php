<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                <i class="ri-menu-line wrapper-menu"></i>
                <a href="" class="header-logo">
                    <h4 class="logo-title text-uppercase">InnoWaysIT</h4>
                </a>
            </div>
            <div class="navbar-breadcrumb">
                <h5>{{ config('app.name') }}</h5>
            </div>
            <div class="d-flex align-items-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-label="Toggle navigation">
                    <i class="ri-menu-3-line"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-list align-items-center">

                        <li class="nav-item nav-icon dropdown caption-content">
                            <i class="fa fa-wallet text-primary mr-1"></i><i class="fas fa-rupee-sign"></i>
                            {{ '1,00,000' }}
                        </li>


                        <li class="nav-item nav-icon dropdown caption-content">
                            <a href="#" class="search-toggle dropdown-toggle  d-flex align-items-center"
                                id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <img src="{{ asset('storage/' . Auth::user()->photo) }}"
                                    class="img-fluid rounded-circle" alt="user">
                                <div class="caption ml-3">
                                    <h6 class="mb-0 line-height">{{ Auth::user()->name }}<i
                                            class="las la-angle-down ml-2"></i>
                                    </h6>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="dropdownMenuButton">
                                <li class="dropdown-item d-flex svg-icon">
                                    <svg class="svg-icon mr-0 text-primary" id="h-01-p" width="20"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <a href="{{ route('profile.show', Auth::user()) }}">My Profile</a>
                                </li>
                                <li class="dropdown-item d-flex svg-icon">
                                    <svg class="svg-icon mr-0 text-primary" id="h-02-p" width="20"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                    <a href="{{ route('profile.edit', Auth::user()) }}">Edit Profile</a>
                                </li>

                                <li class="dropdown-item  d-flex svg-icon border-top">
                                    <svg class="svg-icon mr-0 text-primary" id="h-05-p" width="20"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                    <form action="{{ route('logout') }}" method="post" id="logout-form" class="d-flex"
                                        onsubmit="return confirm('are you sure?');">
                                        @csrf
                                        <button type="submit" class="btn">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>


{{-- Bottom navigation only shows on mobile screen --}}
<div class="d-md-none ">
    <nav class="p-0 fixed-bottom p-2 bg-white">
        <div class="row">
            <div class="col-4 text-center">
                <a href="{{ route('home') }}" class="">
                    <div class="logo-title text-uppercase text-muted text-center"><i class="fa fa-home"></i> <br>
                        Home</div>
                </a>
            </div>
            <div class="col-4 text-center">
                <a href="{{ route('admin.dashboard.index') }}" class="">
                    <div class="logo-title text-uppercase text-muted text-center"><i class="fa fa-tachometer-alt"></i>
                        <br>
                        Dashboard</div>
                </a>
            </div>
            <div class="col-4 text-center">
                <a href="{{ route('profile.show', auth()->user()) }}" class="">
                    <div class="logo-title text-uppercase text-muted text-center"><i class="fa fa-user"></i> <br>
                        Profile</div>
                </a>
            </div>
        </div>

    </nav>
</div>
