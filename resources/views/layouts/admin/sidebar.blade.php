<div class="iq-sidebar  sidebar-default ">
    <div class="iq-sidebar-logo d-flex align-items-center">
        <a href="" class="header-logo">
            {{-- <img src="{{ asset('webkit/assets/images/logo.svg') }}" alt="logo"> --}}
            <h3 class="logo-title light-logo text-capitalize">{{ config('app.name') }}</h3>
        </a>
        <div class="iq-menu-bt-sidebar ml-0">
            <i class="las la-bars wrapper-menu"></i>
        </div>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="">
                    <a href="{{ route('home') }}" class="svg-icon">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <span class="ml-4">Home</span>
                    </a>
                </li>
                @role('ADMIN')
                    <li class="">
                        <a href="{{ route('admin.dashboard.index') }}" class="svg-icon">
                            <i class="fa fa-tachometer-alt"></i>
                            <span class="ml-4">Dashboard</span>
                        </a>
                    </li>

                    <li class=" ">
                        <a href="#admin" class="collapsed" data-toggle="collapse" aria-expanded="false">
                            <svg class="svg-icon" id="p-dash10" width="20" height="20"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="8.5" cy="7" r="4"></circle>
                                <polyline points="17 11 19 13 23 9"></polyline>
                            </svg>
                            <span class="ml-4">Administration</span>
                            <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                            <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                        </a>
                        <ul id="admin" class="iq-submenu collapse" data-parent="#admin">

                            <li class="">
                                <a href="{{ route('admin.roles.index') }}">
                                    <i class="las la-minus"></i><span>Role List</span>
                                </a>
                            </li>

                            <li class="">
                                <a href="{{ route('admin.permissions.index') }}">
                                    <i class="las la-minus"></i><span>Permission List</span>
                                </a>
                            </li>

                            <li class="">
                                <a href="{{ route('admin.users.index') }}">
                                    <i class="las la-minus"></i><span>User List</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="{{ route('admin.blogs.index') }}" class="svg-icon">
                            <i class="fas fa-comment svg-icon"></i>
                            <span class="ml-4">Manage Blog</span>
                        </a>
                    </li>

                    @if (App\Models\Blog::count())
                        <div id="sidebar-bottom" class="position-relative sidebar-bottom">
                            <div class="card border-none mb-0 shadow-none">
                                <div class="card-body p-0">
                                    <div class="sidebarbottom-content">
                                        <h5 class="mb-3">Active Blogs</h5>
                                        <div id="circle-progress-6"
                                            class="sidebar-circle circle-progress circle-progress-primary mb-4"
                                            data-min-value="0" data-max-value="{{ App\Models\Blog::count() }}"
                                            data-value="{{ App\Models\Blog::whereStatus('ACTIVE')->count() }}"
                                            data-type="percent">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endrole

                @role('USER')
                    <li class="">
                        <a href="" class="svg-icon">
                            <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            <span class="ml-4">Dashboard</span>
                        </a>
                    </li>
                @endrole

                <li class="">
                    <a href="{{ route('profile.show', auth()->user()->id) }}" class="svg-icon">
                        <i class="fas fa-user svg-icon"></i>
                        <span class="ml-4">Profile</span>
                    </a>
                </li>

                <li class="">
                    <a href="{{ route('webkit') }}" class="svg-icon">
                        <i class="fa fa-file" aria-hidden="true"></i>
                        <span class="ml-4">Blank (b4 webkit)</span>
                    </a>
                </li>

                <li class="">
                    <a href="{{ route('mazer') }}" class="svg-icon">
                        <i class="fa fa-file" aria-hidden="true"></i>
                        <span class="ml-4">Blank (b5 Mazer 2.0)</span>
                    </a>
                </li>


                <li class="">
                    <a href="{{ route('profile.show', auth()->user()->id) }}" class="svg-icon text-danger">
                        <i class="fas fa-sign-out-alt fa-rotate-180 svg-icon"></i>
                        <span class="ml-4">Log out</span>
                    </a>
                </li>
            </ul>
        </nav>



        <div class="pt-5 pb-2"></div>
    </div>
</div>
