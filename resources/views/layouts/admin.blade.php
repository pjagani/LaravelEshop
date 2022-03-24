<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ !empty($title) ? $title : 'Eshop' }}</title>

    <meta name="description" content="">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('admin/img/favicon.png') }}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Bootstrap is included in its original form, unaltered -->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">

    <!-- Related styles of various icon packs and plugins -->
    <link rel="stylesheet" href="{{ asset('admin/css/plugins.css') }}">

    <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">

    <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

    <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
    <link rel="stylesheet" href="{{ asset('admin/css/themes.css') }}">
    <!-- END Stylesheets -->

    @stack('styles')
    <!-- Modernizr (browser feature detection library) -->
    <script src="{{ asset('admin/js/vendor/modernizr-3.3.1.min.js') }}"></script>
</head>

<body>
    <!-- Page Wrapper -->
    <!-- In the PHP version you can set the following options from inc/config file -->
    <!--
            Available classes:

            'page-loading'      enables page preloader
        -->
    <div id="page-wrapper" class="page-loading">
        <!-- Preloader -->
        <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
        <!-- Used only if page preloader enabled from inc/config (PHP version) or the class 'page-loading' is added in #page-wrapper element (HTML version) -->
        <div class="preloader">
            <div class="inner">
                <!-- Animation spinner for all modern browsers -->
                <div class="preloader-spinner themed-background hidden-lt-ie10"></div>

                <!-- Text for IE9 -->
                <h3 class="text-primary visible-lt-ie10"><strong>Loading..</strong></h3>
            </div>
        </div>
        <!-- END Preloader -->

        <!-- Page Container -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!--
                Available #page-container classes:

                'sidebar-light'                                 for a light main sidebar (You can add it along with any other class)

                'sidebar-visible-lg-mini'                       main sidebar condensed - Mini Navigation (> 991px)
                'sidebar-visible-lg-full'                       main sidebar full - Full Navigation (> 991px)

                'sidebar-alt-visible-lg'                        alternative sidebar visible by default (> 991px) (You can add it along with any other class)

                'header-fixed-top'                              has to be added only if the class 'navbar-fixed-top' was added on header.navbar
                'header-fixed-bottom'                           has to be added only if the class 'navbar-fixed-bottom' was added on header.navbar

                'fixed-width'                                   for a fixed width layout (can only be used with a static header/main sidebar layout)

                'enable-cookies'                                enables cookies for remembering active color theme when changed from the sidebar links (You can add it along with any other class)
            -->
        <div id="page-container" class="header-fixed-top sidebar-visible-lg-full">
            <!-- Alternative Sidebar -->
            <div id="sidebar-alt" tabindex="-1" aria-hidden="true">
                <!-- Toggle Alternative Sidebar Button (visible only in static layout) -->
                <a href="javascript:void(0)" id="sidebar-alt-close" onclick="App.sidebar('toggle-sidebar-alt');"><i
                        class="fa fa-times"></i></a>

                <!-- Wrapper for scrolling functionality -->
                <div id="sidebar-scroll-alt">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <!-- Profile -->
                        <div class="sidebar-section">
                            <h2 class="text-light">Profile</h2>
                            <form action="index.html" method="post" class="form-control-borderless"
                                onsubmit="return false;">
                                <div class="form-group">
                                    <label for="side-profile-name">Name</label>
                                    <input type="text" id="side-profile-name" name="side-profile-name"
                                        class="form-control" value="John Doe">
                                </div>
                                <div class="form-group">
                                    <label for="side-profile-email">Email</label>
                                    <input type="email" id="side-profile-email" name="side-profile-email"
                                        class="form-control" value="john.doe@example.com">
                                </div>
                                <div class="form-group">
                                    <label for="side-profile-password">New Password</label>
                                    <input type="password" id="side-profile-password" name="side-profile-password"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="side-profile-password-confirm">Confirm New Password</label>
                                    <input type="password" id="side-profile-password-confirm"
                                        name="side-profile-password-confirm" class="form-control">
                                </div>
                                <div class="form-group remove-margin">
                                    <button type="submit" class="btn btn-effect-ripple btn-primary"
                                        onclick="App.sidebar('close-sidebar-alt');">Save</button>
                                </div>
                            </form>
                        </div>
                        <!-- END Profile -->

                        <!-- Settings -->
                        <div class="sidebar-section">
                            <h2 class="text-light">Settings</h2>
                            <form action="index.html" method="post" class="form-horizontal form-control-borderless"
                                onsubmit="return false;">
                                <div class="form-group">
                                    <label class="col-xs-7 control-label-fixed">Notifications</label>
                                    <div class="col-xs-5">
                                        <label class="switch switch-success"><input type="checkbox"
                                                checked><span></span></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-7 control-label-fixed">Public Profile</label>
                                    <div class="col-xs-5">
                                        <label class="switch switch-success"><input type="checkbox"
                                                checked><span></span></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-7 control-label-fixed">Enable API</label>
                                    <div class="col-xs-5">
                                        <label class="switch switch-success"><input
                                                type="checkbox"><span></span></label>
                                    </div>
                                </div>
                                <div class="form-group remove-margin">
                                    <button type="submit" class="btn btn-effect-ripple btn-primary"
                                        onclick="App.sidebar('close-sidebar-alt');">Save</button>
                                </div>
                            </form>
                        </div>
                        <!-- END Settings -->
                    </div>
                    <!-- END Sidebar Content -->
                </div>
                <!-- END Wrapper for scrolling functionality -->
            </div>
            <!-- END Alternative Sidebar -->

            <!-- Main Sidebar -->
            @include('layouts.inc.sidebar')
            <!-- END Main Sidebar -->

            <!-- Main Container -->
            <div id="main-container">
                <!-- Header -->
                <!-- In the PHP version you can set the following options from inc/config file -->
                <!--
                        Available header.navbar classes:

                        'navbar-default'            for the default light header
                        'navbar-inverse'            for an alternative dark header

                        'navbar-fixed-top'          for a top fixed header (fixed main sidebar with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
                            'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                        'navbar-fixed-bottom'       for a bottom fixed header (fixed main sidebar with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
                            'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
                    -->
                <header class="navbar navbar-inverse navbar-fixed-top">
                    <!-- Left Header Navigation -->
                    <ul class="nav navbar-nav-custom">
                        <!-- Main Sidebar Toggle Button -->
                        <li>
                            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                <i class="fa fa-ellipsis-v fa-fw animation-fadeInRight" id="sidebar-toggle-mini"></i>
                                <i class="fa fa-bars fa-fw animation-fadeInRight" id="sidebar-toggle-full"></i>
                            </a>
                        </li>
                        <!-- END Main Sidebar Toggle Button -->

                        <!-- Header Link -->
                        <li class="hidden-xs animation-fadeInQuick">
                            <a href=""><strong>PAGES</strong></a>
                        </li>
                        <!-- END Header Link -->
                    </ul>
                    <!-- END Left Header Navigation -->

                    <!-- Right Header Navigation -->
                    <ul class="nav navbar-nav-custom pull-right">
                        <!-- Search Form -->
                        <li>
                            <form action="page_ready_search_results.html" method="post" class="navbar-form-custom">
                                <input type="text" id="top-search" name="top-search" class="form-control"
                                    placeholder="Search..">
                            </form>
                        </li>
                        <!-- END Search Form -->

                        <!-- Alternative Sidebar Toggle Button -->
                        <li>
                            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt');this.blur();">
                                <i class="gi gi-settings"></i>
                            </a>
                        </li>
                        <!-- END Alternative Sidebar Toggle Button -->

                        <!-- User Dropdown -->
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('admin/img/placeholders/avatars/avatar9.jpg') }}" alt="avatar">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-header">
                                    <strong>ADMINISTRATOR</strong>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-pencil-square fa-fw pull-right"></i>
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <i class="fa fa-power-off fa-fw pull-right"></i>
                                        Log out
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <!-- END User Dropdown -->
                    </ul>
                    <!-- END Right Header Navigation -->
                </header>
                <!-- END Header -->

                <!-- Page content -->
                @yield('content')
                <!-- END Page Content -->
            </div>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->
    </div>
    <!-- END Page Wrapper -->

    <!-- jQuery, Bootstrap, jQuery plugins and Custom JS code -->
    <script src="{{ asset('admin/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins.js') }}"></script>
    <script src="{{ asset('admin/js/app.js') }}"></script>
</body>

</html>
