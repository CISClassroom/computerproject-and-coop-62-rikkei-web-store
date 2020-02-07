<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Adminox - Responsive Web App Kit</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- C3 charts css -->
        <link href="../plugins/c3/c3.min.css" rel="stylesheet" type="text/css"  />

        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Bootstrap Dropdown Hover CSS -->
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet">

        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                                <span>
                                    <img src="assets/images/logo.png" alt="" height="25">
                                </span>
                        <i>
                            <img src="assets/images/logo_sm.png" alt="" height="28">
                        </i>
                    </a>
                </div>

                <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-bell noti-icon"></i>
                                <span class="badge badge-pink noti-icon-badge">4</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><span class="badge badge-danger float-right">5</span>Notification</h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                                    <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1 min ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="icon-user"></i></div>
                                    <p class="notify-details">New user registered.<small class="text-muted">1 min ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="icon-like"></i></div>
                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1 min ago</small></p>
                                </a>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Welcome ! John</small> </h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-settings"></i> <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-lock-open"></i> <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-power"></i> <span>Logout</span>
                                </a>

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="dripicons-menu"></i>
                            </button>
                        </li>
                        <li class="hide-phone app-search">
                            <form role="search" class="">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Navigation</li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fi-air-play"></i><span class="badge badge-success pull-right">2</span> <span> Dashboard </span>
                                </a>
                                <ul class="nav-second-level" aria-expanded=false>
                                    <li><a href="index.html">Dashboard 1</a></li>
                                    <li><a href="dashboard-2.html">Dashboard 2</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="fi-target"></i> <span> Admin UI </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="admin-grid.html">Grid</a></li>
                                    <li><a href="admin-sweet-alert.html">Sweet Alert</a></li>
                                    <li><a href="admin-tiles.html">Tiles Box</a></li>
                                    <li><a href="admin-nestable.html">Nestable List</a></li>
                                    <li><a href="admin-rangeslider.html">Range Slider</a></li>
                                    <li><a href="admin-ratings.html">Ratings</a></li>
                                    <li><a href="admin-filemanager.html">File Manager</a></li>
                                    <li><a href="admin-lightbox.html">Lightbox</a></li>
                                    <li><a href="admin-scrollbar.html">Scroll bar</a></li>
                                    <li><a href="admin-slider.html">Slider</a></li>
                                    <li><a href="admin-treeview.html">Treeview</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-briefcase"></i> <span> UI Kit </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-panels.html">Panels</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                                    <li><a href="ui-spinners.html">Spinners</a></li>
                                    <li><a href="ui-ribbons.html">Ribbons</a></li>
                                    <li><a href="ui-portlets.html">Portlets</a></li>
                                    <li><a href="ui-tabs.html">Tabs</a></li>
                                    <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                    <li><a href="ui-notifications.html">Notification</a></li>
                                    <li><a href="ui-carousel.html">Carousel</a>
                                    <li><a href="ui-video.html">Video</a>
                                    <li><a href="ui-tooltips-popovers.html">Tooltips & Popovers</a></li>
                                    <li><a href="ui-images.html">Images</a></li>
                                    <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="tickets.html"><i class="fi-help"></i><span class="badge badge-danger pull-right">New</span> <span> Tickets </span></a>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-box"></i><span> Icons </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="icons-colored.html">Colored Icons</a></li>
                                    <li><a href="icons-materialdesign.html">Material Design</a></li>
                                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                                    <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                    <li><a href="icons-feather.html">Feather Icons</a></li>
                                    <li><a href="icons-simple-line.html">Simple line Icons</a></li>
                                    <li><a href="icons-flags.html">Flag Icons</a></li>
                                    <li><a href="icons-file.html">File Icons</a></li>
                                    <li><a href="icons-pe7.html">PE7 Icons</a></li>
                                    <li><a href="icons-typicons.html">Typicons</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-bar-graph-2"></i><span> Graphs </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="chart-flot.html">Flot Chart</a></li>
                                    <li><a href="chart-morris.html">Morris Chart</a></li>
                                    <li><a href="chart-google.html">Google Chart</a></li>
                                    <li><a href="chart-echart.html">Echarts</a></li>
                                    <li><a href="chart-chartist.html">Chartist Charts</a></li>
                                    <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
                                    <li><a href="chart-c3.html">C3 Chart</a></li>
                                    <li><a href="chart-justgage.html">Justgage Charts</a></li>
                                    <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                                    <li><a href="chart-knob.html">Jquery Knob</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-mail"></i><span> Email </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="email-inbox.html">Inbox</a></li>
                                    <li><a href="email-read.html">Read Email</a></li>
                                    <li><a href="email-compose.html">Compose Email</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="taskboard.html"><i class="fi-paper"></i> <span> Task Board </span></a>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-disc"></i><span class="badge badge-warning pull-right">12</span> <span> Forms </span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-advanced.html">Form Advanced</a></li>
                                    <li><a href="form-layouts.html">Form Layouts</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-pickers.html">Form Pickers</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                    <li><a href="form-mask.html">Form Masks</a></li>
                                    <li><a href="form-summernote.html">Summernote</a></li>
                                    <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
                                    <li><a href="form-typeahead.html">Typeahead</a></li>
                                    <li><a href="form-x-editable.html">X Editable</a></li>
                                    <li><a href="form-uploads.html">Multiple File Upload</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-layout"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-layouts.html">Tables Layouts</a></li>
                                    <li><a href="tables-datatable.html">Data Tables</a></li>
                                    <li><a href="tables-foo-tables.html">Foo Tables</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="tables-tablesaw.html">Tablesaw Tables</a></li>
                                    <li><a href="tables-editable.html">Editable Tables</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">More</li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-map"></i> <span> Maps </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="maps-google.html">Google Maps</a></li>
                                    <li><a href="maps-google-full.html">Full Google Map</a></li>
                                    <li><a href="maps-vector.html">Vector Maps</a></li>
                                    <li><a href="maps-mapael.html">Mapael Maps</a></li>
                                </ul>
                            </li>

                            <li><a href="calendar.html"><i class="fi-clock"></i> <span>Calendar</span> </a></li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-paper-stack"></i><span> Pages </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="page-starter.html">Starter Page</a></li>
                                    <li><a href="page-login.html">Login</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-logout.html">Logout</a></li>
                                    <li><a href="page-recoverpw.html">Recover Password</a></li>
                                    <li><a href="page-lock-screen.html">Lock Screen</a></li>
                                    <li><a href="page-confirm-mail.html">Confirm Mail</a></li>
                                    <li><a href="page-404.html">Error 404</a></li>
                                    <li><a href="page-404-alt.html">Error 404-alt</a></li>
                                    <li><a href="page-500.html">Error 500</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);"><i class="fi-marquee-plus"></i><span> Extra Pages </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="extras-about.html">About Us</a></li>
                                    <li><a href="extras-contact.html">Contact</a></li>
                                    <li><a href="extras-companies.html">Companies</a></li>
                                    <li><a href="extras-members.html">Members</a></li>
                                    <li><a href="extras-members-2.html">Membars 2</a></li>
                                    <li><a href="extras-timeline.html">Timeline</a></li>
                                    <li><a href="extras-invoice.html">Invoice</a></li>
                                    <li><a href="extras-maintenance.html">Maintenance</a></li>
                                    <li><a href="extras-coming-soon.html">Coming Soon</a></li>
                                    <li><a href="extras-faq.html">FAQ</a></li>
                                    <li><a href="extras-pricing.html">Pricing</a></li>
                                    <li><a href="extras-profile.html">Profile</a></li>
                                    <li><a href="extras-email-template.html">Email Templates</a></li>
                                    <li><a href="extras-search-result.html">Search Results</a></li>
                                    <li><a href="extras-sitemap.html">Site Map</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="todo.html"><i class="fi-layers"></i> <span> Todo </span></a>
                            </li>

                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left">Dashboard</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Adminox</a></li>
                                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Dashboard 1</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-custom">
                                    <i class="mdi mdi-currency-usd widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Total Revenue</p>
                                        <h2 class="font-600"><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup">65841</span></h2>
                                        <p class="m-0">Jan - Apr 2017</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-custom">
                                    <i class="mdi mdi-account-multiple widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Total Unique Visitors</p>
                                        <h2 class="font-600"><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup">236521</span></h2>
                                        <p class="m-0">Jan - Apr 2017</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-custom">
                                    <i class="mdi mdi-crown widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Number of Transactions</p>
                                        <h2 class="font-600"><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup">563698</span></h2>
                                        <p class="m-0">Jan - Apr 2017</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-custom">
                                    <i class="mdi mdi-auto-fix widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Conversation Rate</p>
                                        <h2 class="font-600"><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup">2.07</span>%</h2>
                                        <p class="m-0">Jan - Apr 2017</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0 m-b-30">Revenue Comparison</h4>

                                    <div class="text-center">
                                        <h5 class="font-normal text-muted">You have to pay</h5>
                                        <h3 class="m-b-30"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> 25643 <small>USD</small></h3>
                                    </div>

                                    <div class="chart-container">
                                        <div class="" style="height:280px" id="platform_type_dates_donut"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0 m-b-30">Visitors Overview</h4>

                                    <div class="text-center">
                                        <h5 class="font-normal text-muted">You have to pay</h5>
                                        <h3 class="m-b-30"><i class="mdi mdi-arrow-down-bold-hexagon-outline text-danger"></i> 5623 <small>USD</small></h3>
                                    </div>

                                    <div class="chart-container">
                                        <div class="" style="height:280px" id="user_type_bar"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0 m-b-30">Goal Completion</h4>

                                    <div class="text-center">
                                        <h5 class="font-normal text-muted">You have to pay</h5>
                                        <h3 class="m-b-30"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> 12548 <small>USD</small></h3>
                                    </div>

                                    <div class="chart-container">
                                        <div class="chart has-fixed-height" style="height:280px" id="page_views_today"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Recent Candidates</b></h4>
                                    <p class="text-muted font-14 m-b-20">
                                        Your awesome text goes here.
                                    </p>

                                    <div class="table-responsive">
                                        <table class="table table-hover m-0 table-actions-bar">

                                            <thead>
                                            <tr>
                                                <th>
                                                    <div class="btn-group dropdown">
                                                        <button type="button" class="btn btn-secondary btn-xs dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="caret"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                                        </div>
                                                    </div>
                                                </th>
                                                <th>Name</th>
                                                <th>Location</th>
                                                <th>Job Timing</th>
                                                <th>Salary</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/users/avatar-2.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm" />
                                                </td>

                                                <td>
                                                    <h5 class="m-b-0 m-t-0 font-600">Tomaslau</h5>
                                                    <p class="m-b-0"><small>Web Designer</small></p>
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-map-marker text-primary"></i> New York
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-clock text-success"></i> Full Time
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-currency-usd text-warning"></i> 3265
                                                </td>

                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="mdi mdi-pencil"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="mdi mdi-close"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="assets/images/users/avatar-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm" />
                                                </td>

                                                <td>
                                                    <h5 class="m-b-0 m-t-0 font-600">Erwin E. Brown</h5>
                                                    <p class="m-b-0"><small>Programmer</small></p>
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-map-marker text-primary"></i> California
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-clock text-success"></i> Part Time
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-currency-usd text-warning"></i> 1365
                                                </td>

                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="mdi mdi-pencil"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="mdi mdi-close"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/users/avatar-4.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm" />
                                                </td>

                                                <td>
                                                    <h5 class="m-b-0 m-t-0 font-600">Margeret V. Ligon</h5>
                                                    <p class="m-b-0"><small>Web Designer</small></p>
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-map-marker text-primary"></i> New York
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-clock text-success"></i> Full Time
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-currency-usd text-warning"></i> 115248
                                                </td>

                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="mdi mdi-pencil"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="mdi mdi-close"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/users/avatar-5.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm" />
                                                </td>

                                                <td>
                                                    <h5 class="m-b-0 m-t-0 font-600">Jose D. Delacruz</h5>
                                                    <p class="m-b-0"><small>Web Developer</small></p>
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-map-marker text-primary"></i> New York
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-clock text-success"></i> Part Time
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-currency-usd text-warning"></i> 2451
                                                </td>

                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="mdi mdi-pencil"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="mdi mdi-close"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="assets/images/users/avatar-8.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm" />
                                                </td>

                                                <td>
                                                    <h5 class="m-b-0 m-t-0 font-600">Luke J. Sain</h5>
                                                    <p class="m-b-0"><small>Web Designer</small></p>
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-map-marker text-primary"></i> Australia
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-clock text-success"></i> Part Time
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-currency-usd text-warning"></i> 3265
                                                </td>

                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="mdi mdi-pencil"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="mdi mdi-close"></i></a>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            <!-- end col -->

                            <div class="col-lg-3">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0 m-b-30">Total Unique Visitors</h4>

                                    <div class="widget-chart text-center">

                                        <div id="donut-chart" style="height: 270px;"></div>

                                        <div class="row text-center m-t-30">
                                            <div class="col-6">
                                                <h3 data-plugin="counterup">1,507</h3>
                                                <p class="text-muted m-b-5">Visitors Male</p>
                                            </div>
                                            <div class="col-6">
                                                <h3 data-plugin="counterup">854</h3>
                                                <p class="text-muted m-b-5">Visitors Female</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="col-lg-3">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0 m-b-30">Number of Transactions</h4>

                                    <div class="widget-chart text-center">

                                        <div id="pie-chart" style="height: 270px;"></div>

                                        <div class="row text-center m-t-30">
                                            <div class="col-6">
                                                <h3 data-plugin="counterup">2,854</h3>
                                                <p class="text-muted m-b-5">Payment Done</p>
                                            </div>
                                            <div class="col-6">
                                                <h3 data-plugin="counterup">22</h3>
                                                <p class="text-muted m-b-5">Payment Due</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!--- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2017 © Adminox. - Coderthemes.com
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- Counter js  -->
        <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>

        <!--C3 Chart-->
        <script type="text/javascript" src="../plugins/d3/d3.min.js"></script>
        <script type="text/javascript" src="../plugins/c3/c3.min.js"></script>

        <!--Echart Chart-->
        <script src="../plugins/echart/echarts-all.js"></script>

        <!-- Dashboard init -->
        <script src="assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
