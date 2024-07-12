<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>

<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

    <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin5">

                <a class="navbar-brand" href="index.html">

                    <b class="logo-icon">
                        <img src="{{ url('public/assets/app/assets/images/logo-icon.png')}}" alt="homepage" class="dark-logo" />
                        <img src="{{ url('public/assets/app/assets/images/logo-light-icon.png')}}" alt="homepage" class="light-logo" />
                    </b>

                    <span class="logo-text">
                        <img src="{{ url('public/assets/app/assets/images/logo-text.png')}}" alt="homepage" class="dark-logo" />
                        <img src="{{ url('public/assets/app/assets/images/logo-light-text.png')}}" class="light-logo" alt="homepage" />
                    </span>
                </a>

                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                        class="ti-menu ti-close"></i></a>
            </div>
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                <ul class="navbar-nav float-start me-auto">
                    <li class="nav-item search-box">
                        {{-- <a class="nav-link waves-effect waves-dark"
                            href="javascript:void(0)"><i class="ti-search"></i></a>
                        <form class="app-search position-absolute">
                            <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                class="srh-btn"><i class="ti-close"></i></a>
                        </form> --}}
                    </li>
                </ul>

                <ul class="navbar-nav float-end">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ url('public/assets/app/assets/images/users/1.jpg')}}" alt="user" class="rounded-circle" width="31">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('users.edit',Auth::guard('admin')->user()->id) }}"><i class="ti-user m-r-5 m-l-5"></i>
                                My Profile</a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal"><i class="fa fa-power-off m-r-5 m-l-5"></i>
                                Logout</a>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

    <aside class="left-sidebar" data-sidebarbg="skin6">

        <div class="scroll-sidebar">

            <nav class="sidebar-nav">
                <ul id="sidebarnav">

                    <li>

                        <div class="user-profile d-flex no-block dropdown m-t-20">
                            <div class="user-pic"><img src="{{ url('public/assets/app/assets/images/users/1.jpg')}}" alt="users"
                                    class="rounded-circle" width="40" /></div>
                            <div class="user-content hide-menu m-l-10">
                                <a href="#" class="" id="Userdd" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <h5 class="m-b-0 user-name font-medium">{{ Auth::guard('admin')->user()->username }} <i
                                            class="fa fa-angle-down"></i></h5>
                                    <span class="op-5 user-email">{{ Auth::guard('admin')->user()->email }}</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="Userdd">
                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                            class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal"><i
                                            class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                </div>
                            </div>
                        </div>

                    </li>
                    {{-- <li class="p-15 m-t-10"><a href="javascript:void(0)"
                            class="btn d-block w-100 create-btn text-white no-block d-flex align-items-center"><i
                                class="fa fa-plus-square"></i> <span class="hide-menu m-l-5">Create New</span> </a>
                    </li> --}}

                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                            href="{{ URL::to('dashboard') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                class="hide-menu">Dashboard</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link  {{ request()->routeIs('users*') ? 'active' : '' }}"
                            href="{{ URL::to('users') }}" aria-expanded="false"><i
                                class="mdi mdi-account-network"></i><span class="hide-menu">Users</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link  {{ request()->routeIs('extensions*') ? 'active' : '' }}"
                            href="#composer require phpoffice/phpspreadsheet" aria-expanded="false"><i class="mdi mdi-border-all"></i><span
                                class="hide-menu">Extensions</span></a></li>
                </ul>

            </nav>

        </div>

    </aside>
