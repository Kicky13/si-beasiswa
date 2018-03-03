<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Codefox - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
    <meta content="Coderthemes" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- C3 charts css -->
    <link href="/plugins/c3/c3.min.css" rel="stylesheet" type="text/css"/>

    <!-- App css -->
    <link href="/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet"/>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/core.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/components.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/pages.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/menu.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/responsive.css" rel="stylesheet" type="text/css"/>

    <script src="/assets/js/modernizr.min.js"></script>

</head>


<body>

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <!--<a href="index.html" class="logo"><span>Code<span>Fox</span></span><i class="mdi mdi-layers"></i></a>-->
            <!-- Image logo -->
            <a href="index.html" class="logo">
                        <span>
                            <img src="/assets/images/logo.png" alt="" height="20">
                        </span>
                <i>
                    <img src="/assets/images/logo_sm.png" alt="" height="28">
                </i>
            </a>
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">

                <!-- Navbar-left -->
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <button type="button" class="button-menu-mobile open-left waves-effect">
                            <i class="dripicons-menu"></i>
                        </button>
                    </li>
                </ul>

                <!-- Right(Notification) -->
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden-xs">
                        <form role="search" class="app-search">
                            <input type="text" placeholder="Search..."
                                   class="form-control">
                            <a href="#"><i class="fa fa-search"></i></a>
                        </form>
                    </li>

                    <li class="dropdown user-box">
                        <a href="#" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown"
                           aria-expanded="true">
                            <img src="/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                            <li><a href="javascript:void(0)">Profile</a></li>
                            <li><a href="javascript:void(0)"><span class="badge badge-info pull-right">4</span>Settings</a>
                            </li>
                            <li><a href="javascript:void(0)">Lock screen</a></li>
                            <li class="divider"></li>
                            <li><a href="javascript:void(0)">Logout</a></li>
                        </ul>
                    </li>

                </ul> <!-- end navbar-right -->

            </div><!-- end container -->
        </div><!-- end navbar -->
    </div>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="slimscroll-menu" id="remove-scroll">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metisMenu nav" id="side-menu">
                    <li class="menu-title">Navigation</li>
                    <li>
                        <a href="index.html"><i class="fi-air-play"></i><span
                                    class="badge badge-success pull-right">1</span> <span> Dashboard </span> </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="true"><i class="fi-briefcase"></i>
                            <span> UI Kit </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level nav" aria-expanded="true">
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-panels.html">Panels</a></li>
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-modals.html">Modals</a></li>
                            <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
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
                        <a href="javascript: void(0);" aria-expanded="true"><i class="fi-box"></i><span> Icons </span>
                            <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level nav" aria-expanded="true">
                            <li><a href="icons-colored.html">Colored Icons</a></li>
                            <li><a href="icons-materialdesign.html">Material Design</a></li>
                            <li><a href="icons-dripicons.html">Dripicons</a></li>
                            <li><a href="icons-fontawesome.html">Font awesome</a></li>
                            <li><a href="icons-feather.html">Feather Icons</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="true"><i
                                    class="fi-bar-graph-2"></i><span> Graphs </span> <span
                                    class="menu-arrow"></span></a>
                        <ul class="nav-second-level nav" aria-expanded="true">
                            <li><a href="chart-flot.html">Flot Chart</a></li>
                            <li><a href="chart-morris.html">Morris Chart</a></li>
                            <li><a href="chart-google.html">Google Chart</a></li>
                            <li><a href="chart-chartist.html">Chartist Charts</a></li>
                            <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
                            <li><a href="chart-c3.html">C3 Chart</a></li>
                            <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                            <li><a href="chart-knob.html">Jquery Knob</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="true"><i class="fi-disc"></i><span
                                    class="badge badge-primary pull-right">9</span> <span> Forms </span></a>
                        <ul class="nav-second-level nav" aria-expanded="true">
                            <li><a href="form-elements.html">Form Elements</a></li>
                            <li><a href="form-advanced.html">Form Advanced</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            <li><a href="form-pickers.html">Form Pickers</a></li>
                            <li><a href="form-wizard.html">Form Wizard</a></li>
                            <li><a href="form-mask.html">Form Masks</a></li>
                            <li><a href="form-summernote.html">Summernote</a></li>
                            <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
                            <li><a href="form-uploads.html">Multiple File Upload</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="true"><i class="fi-layout"></i>
                            <span> Tables </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level nav" aria-expanded="true">
                            <li><a href="tables-basic.html">Basic Tables</a></li>
                            <li><a href="tables-layouts.html">Tables Layouts</a></li>
                            <li><a href="tables-datatable.html">Data Table</a></li>
                            <li><a href="tables-responsive.html">Responsive Table</a></li>
                            <li><a href="tables-tablesaw.html">Tablesaw Table</a></li>
                            <li><a href="tables-editable.html">Editable Table</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">More</li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="true"><i class="fi-target"></i>
                            <span> Admin UI </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level nav" aria-expanded="true">
                            <li><a href="admin-grid.html">Grid</a></li>
                            <li><a href="admin-sweet-alert.html">Sweet Alert</a></li>
                            <li><a href="admin-widgets.html">Widgets</a></li>
                            <li><a href="admin-nestable.html">Nestable List</a></li>
                            <li><a href="admin-rangeslider.html">Range Slider</a></li>
                            <li><a href="admin-ratings.html">Ratings</a></li>
                        </ul>
                    </li>

                    <li><a href="calendar.html"><i class="fi-clock"></i> <span>Calendar</span> </a></li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="true"><i class="fi-map"></i> <span> Maps </span>
                            <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level nav" aria-expanded="true">
                            <li><a href="maps-google.html">Google Maps</a></li>
                            <li><a href="maps-vector.html">Vector Maps</a></li>
                            <li><a href="maps-mapael.html">Mapael Maps</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="true"><i
                                    class="fi-paper-stack"></i><span> Pages </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level nav" aria-expanded="true">
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
                        <a href="javascript:void(0);"><i class="fi-marquee-plus"></i><span> Extra Pages </span> <span
                                    class="menu-arrow"></span></a>
                        <ul class="nav-second-level nav" aria-expanded="true">
                            <li><a href="extras-about.html">About Us</a></li>
                            <li><a href="extras-contact.html">Contact</a></li>
                            <li><a href="extras-members.html">Members</a></li>
                            <li><a href="extras-timeline.html">Timeline</a></li>
                            <li><a href="extras-invoice.html">Invoice</a></li>
                            <li><a href="extras-maintenance.html">Maintenance</a></li>
                            <li><a href="extras-coming-soon.html">Coming Soon</a></li>
                            <li><a href="extras-faq.html">FAQ</a></li>
                            <li><a href="extras-pricing.html">Pricing</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="true"><i class="fi-share"></i>
                            <span>Multi Level</span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level nav" aria-expanded="true">
                            <li><a href="javascript: void(0);">Level 1.1</a></li>
                            <li><a href="javascript: void(0);" aria-expanded="true">Level 1.2 <span
                                            class="menu-arrow"></span></a>
                                <ul class="nav-third-level nav" aria-expanded="true">
                                    <li><a href="javascript: void(0);">Level 2.1</a></li>
                                    <li><a href="javascript: void(0);">Level 2.2</a></li>
                                </ul>
                            </li>
                        </ul>
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
    @yield('konten')
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
</div>
<!-- END wrapper -->


<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/metisMenu.min.js"></script>
<script src="/assets/js/waves.js"></script>
<script src="/assets/js/jquery.slimscroll.js"></script>
<script src="/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>

<!-- Counter js  -->
<script src="/plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="/plugins/counterup/jquery.counterup.min.js"></script>

<!--C3 Chart-->
<script type="text/javascript" src="/plugins/d3/d3.min.js"></script>
<script type="text/javascript" src="/plugins/c3/c3.min.js"></script>

<!-- Dashboard init -->
<script src="/assets/pages/jquery.dashboard.js"></script>

<!-- App js -->
<script src="/assets/js/jquery.core.js"></script>
<script src="/assets/js/jquery.app.js"></script>

</body>

<!-- Mirrored from coderthemes.com/codefox_1.1/dark_1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Apr 2017 12:30:28 GMT -->
</html>