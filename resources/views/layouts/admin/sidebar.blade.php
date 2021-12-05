<div class="iq-sidebar  sidebar-default ">
    <div class="iq-sidebar-logo d-flex align-items-center">
        <a href="" class="header-logo">
            {{-- <img src="{{ asset('webkit/assets/images/logo.svg') }}" alt="logo"> --}}
            <h3 class="logo-title light-logo">{{ config('app.name') }}</h3>
        </a>
        <div class="iq-menu-bt-sidebar ml-0">
            <i class="las la-bars wrapper-menu"></i>
        </div>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="">
                    <a href="../backend/index.html" class="svg-icon">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span class="ml-4">Dashboards</span>
                    </a>
                </li>

                <li class=" ">
                    <a href="#admin" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" id="p-dash10" width="20" height="20"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <polyline points="17 11 19 13 23 9"></polyline>
                        </svg>
                        <span class="ml-4">Administration</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="admin" class="iq-submenu collapsed" data-parent="#admin">

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
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span class="ml-4">Manage Blog</span>
                    </a>
                </li>

                <li class="">
                    <a href="../backend/page-project.html" class="svg-icon">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                            <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2">
                            </path>
                            <rect x="6" y="14" width="12" height="8"></rect>
                        </svg>
                        <span class="ml-4">Projects</span>
                    </a>
                </li>
                <li class="">
                    <a href="../backend/page-task.html" class="svg-icon">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                            </path>
                            <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                        </svg>
                        <span class="ml-4">Task</span>
                    </a>
                </li>
                <li class="">
                    <a href="../backend/page-employee.html" class="svg-icon">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        <span class="ml-4">Employees</span>
                    </a>
                </li>
                <li class="">
                    <a href="../backend/page-desk.html" class="svg-icon">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                            </path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                        <span class="ml-4">Desk</span>
                    </a>
                </li>
                <li class="">
                    <a href="../backend/page-calender.html" class="svg-icon">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                        <span class="ml-4">Calender</span>
                    </a>
                </li>



                <li class=" ">
                    <a href="#otherpage" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z">
                            </path>
                        </svg>
                        <span class="ml-4">other page</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="otherpage" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">

                        <li class=" ">
                            <a href="#ui" class="collapse" data-toggle="collapse" aria-expanded="false">
                                <svg class="svg-icon" id="p-dash11" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                    </path>
                                </svg>
                                <span class="ml-4">UI Elements</span>
                                <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="ui" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class="">
                                    <a href="../backend/ui-avatars.html">
                                        <i class="las la-minus"></i><span>Avatars</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/ui-alerts.html">
                                        <i class="las la-minus"></i><span>Alerts</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/ui-badges.html">
                                        <i class="las la-minus"></i><span>Badges</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/ui-breadcrumb.html">
                                        <i class="las la-minus"></i><span>Breadcrumb</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/ui-buttons.html">
                                        <i class="las la-minus"></i><span>Buttons</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/ui-buttons-group.html">
                                        <i class="las la-minus"></i><span>Buttons Group</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/ui-boxshadow.html">
                                        <i class="las la-minus"></i><span>Box Shadow</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/ui-colors.html">
                                        <i class="las la-minus"></i><span>Colors</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/ui-cards.html">
                                        <i class="las la-minus"></i><span>Cards</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/ui-carousel.html">
                                        <i class="las la-minus"></i><span>Carousel</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/ui-grid.html">
                                        <i class="las la-minus"></i><span>Grid</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/ui-helper-classes.html">
                                        <i class="las la-minus"></i><span>Helper classes</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/ui-images.html">
                                        <i class="las la-minus"></i><span>Images</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/ui-list-group.html">
                                        <i class="las la-minus"></i><span>list Group</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/ui-media-object.html">
                                        <i class="las la-minus"></i><span>Media</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/ui-modal.html">
                                        <i class="las la-minus"></i><span>Modal</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/ui-notifications.html">
                                        <i class="las la-minus"></i><span>Notifications</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/ui-pagination.html">
                                        <i class="las la-minus"></i><span>Pagination</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/ui-popovers.html">
                                        <i class="las la-minus"></i><span>Popovers</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/ui-progressbars.html">
                                        <i class="las la-minus"></i><span>Progressbars</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/ui-typography.html">
                                        <i class="las la-minus"></i><span>Typography</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/ui-tabs.html">
                                        <i class="las la-minus"></i><span>Tabs</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/ui-tooltips.html">
                                        <i class="las la-minus"></i><span>Tooltips</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/ui-embed-video.html">
                                        <i class="las la-minus"></i><span>Video</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#auth" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <svg class="svg-icon" id="p-dash12" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                <span class="ml-4">Authentication</span>
                                <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="auth" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class="">
                                    <a href="../backend/auth-sign-in.html">
                                        <i class="las la-minus"></i><span>Login</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/auth-sign-up.html">
                                        <i class="las la-minus"></i><span>Register</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/auth-recoverpw.html">
                                        <i class="las la-minus"></i><span>Recover Password</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/auth-confirm-mail.html">
                                        <i class="las la-minus"></i><span>Confirm Mail</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/auth-lock-screen.html">
                                        <i class="las la-minus"></i><span>Lock Screen</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#form" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                <svg class="svg-icon" id="p-dash13" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                    </path>
                                    <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                                </svg>
                                <span class="ml-4">Forms</span>
                                <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="form" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class="">
                                    <a href="../backend/form-layout.html">
                                        <i class="las la-minus"></i><span class="">Form
                                            Elements</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/form-input-group.html" class="svg-icon">
                                        <i class="las la-minus"></i><span class="">Form
                                            Input</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/form-validation.html" class="svg-icon">
                                        <i class="las la-minus"></i><span class="">Form
                                            Validation</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/form-switch.html" class="svg-icon">
                                        <i class="las la-minus"></i><span class="">Form
                                            Switch</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/form-chechbox.html" class="svg-icon">
                                        <i class="las la-minus"></i><span class="">Form
                                            Checkbox</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/form-radio.html" class="svg-icon">
                                        <i class="las la-minus"></i><span class="">Form
                                            Radio</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/form-textarea.html" class="svg-icon">
                                        <i class="las la-minus"></i><span class="">Form
                                            Textarea</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#table" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <svg class="svg-icon" id="p-dash14" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg>
                                <span class="ml-4">Table</span>
                                <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="table" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class="">
                                    <a href="../backend/tables-basic.html">
                                        <i class="las la-minus"></i><span>Basic Tables</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/table-data.html">
                                        <i class="las la-minus"></i><span>Data Table</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/table-tree.html">
                                        <i class="las la-minus"></i><span>Table Tree</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#pricing" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <svg class="svg-icon" id="p-dash16" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                    <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                    <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                </svg>
                                <span class="ml-4">Pricing</span>
                                <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="pricing" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class="">
                                    <a href="../backend/pricing.html">
                                        <i class="las la-minus"></i><span>Pricing 1</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/pricing-2.html">
                                        <i class="las la-minus"></i><span>Pricing 2</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="../backend/timeline.html" class="svg-icon">
                                <svg class="svg-icon" id="p-dash016" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                                <span class="ml-4">Timeline</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="../backend/pages-invoice.html" class="svg-icon">
                                <svg class="svg-icon" id="p-dash07" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                <span class="ml-4">Invoice</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="#pages-error" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <svg class="svg-icon" id="p-dash17" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                                    </path>
                                    <line x1="12" y1="9" x2="12" y2="13"></line>
                                    <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                </svg>
                                <span class="ml-4">Error</span>
                                <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="pages-error" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class="">
                                    <a href="../backend/pages-error.html">
                                        <i class="las la-minus"></i><span>Error 404</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../backend/pages-error-500.html">
                                        <i class="las la-minus"></i><span>Error 500</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="active">
                            <a href="../backend/pages-blank-page.html">
                                <svg class="svg-icon" id="p-dash18" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                    <polyline points="13 2 13 9 20 9"></polyline>
                                </svg>
                                <span class="ml-4">Blank Page</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="../backend/pages-maintenance.html">
                                <svg class="svg-icon" id="p-dash19" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z">
                                    </path>
                                </svg>
                                <span class="ml-4">Maintenance</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div id="sidebar-bottom" class="position-relative sidebar-bottom">
            <div class="card border-none mb-0 shadow-none">
                <div class="card-body p-0">
                    <div class="sidebarbottom-content">
                        <h5 class="mb-3">Task Performed</h5>
                        <div id="circle-progress-6" class="sidebar-circle circle-progress circle-progress-primary mb-4"
                            data-min-value="0" data-max-value="100" data-value="90" data-type="percent"></div>
                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" id="customRadio6" name="customRadio-1" class="custom-control-input"
                                checked="">
                            <label class="custom-control-label" for="customRadio6">Performed task</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio7" name="customRadio-1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio7">Incomplete Task</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-5 pb-2"></div>
    </div>
</div>
