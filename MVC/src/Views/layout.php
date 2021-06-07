<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <title>FoxRooms</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/materialpro-lite/"/>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon.png">
    <!-- chartist CSS -->
    <link href=./assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href=./assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href=./assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href=./assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="./resources/css/style.min.css" rel="stylesheet">
    <link href="./resources/css/patch.css" rel="stylesheet">
</head>

<body>
<!-- Preloader - style you can find in spinners.css -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<?php if (http_response_code() != 404) {?>
<!-- Main wrapper - style you can find in pages.scss -->
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <!-- Topbar header - style you can find in pages.scss -->
    <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <!-- End Logo -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                <ul class="navbar-nav d-lg-none d-md-block ">
                    <li class="nav-item">
                        <a class="nav-toggler nav-link waves-effect waves-light text-white "
                           href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    </li>
                </ul>

                <!-- Right side toggle and nav items -->
                <ul class="navbar-nav">
                    <!-- User profile and search -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#"
                           id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="./assets/images/users/1.jpg" alt="user" class="profile-pic me-2">Markarn Doe
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown"></ul>
                    </li>
                </ul>
            </div>
            <div class="navbar-header" data-logobg="skin6">
                <!-- toggle and nav items -->
                <a class="nav-toggler waves-effect waves-light text-white d-block d-md-none"
                   href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            </div>
        </nav>
    </header>
    <!-- End Topbar header -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <!-- User Profile-->
                    <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link"
                                                href="/" aria-expanded="false"><i
                                    class="mdi me-2 mdi-gauge"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link"
                                                href="/customers" aria-expanded="false">
                            <i class="mdi me-2 mdi-account-check"></i><span class="hide-menu">Customers - Global</span></a>
                    </li>
                    <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link"
                                                href="/barstock" aria-expanded="false"><i
                                    class="mdi me-2 mdi-table"></i><span
                                    class="hide-menu">Stocks - Bar</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link"
                                                href="/chambres" aria-expanded="false"><i
                                    class="mdi me-2 mdi-emoticon"></i><span
                                    class="hide-menu">Chambres - Global</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link"
                                                href="piscines.html" aria-expanded="false"><i
                                    class="mdi me-2 mdi-earth"></i><span
                                    class="hide-menu">Piscine - Global</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link"
                                                href="restaurants.html" aria-expanded="false"><i
                                    class="mdi me-2 mdi-book-open-variant"></i><span class="hide-menu">Cartes - Restaurants</span></a>
                    </li>
                    <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link"
                                                href="pages-error-404.html" aria-expanded="false"><i
                                    class="mdi me-2 mdi-help-circle"></i><span
                                    class="hide-menu">Error 404</span></a>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
        <div class="sidebar-footer">
            <div class="row">
                <div class="col-4 link-wrap">
                    <!-- item-->
                    <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i
                                class="ti-settings"></i></a>
                </div>
                <div class="col-4 link-wrap">
                    <!-- item-->
                    <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i
                                class="mdi mdi-gmail"></i></a>
                </div>
                <div class="col-4 link-wrap">
                    <!-- item-->
                    <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i
                                class="mdi mdi-power"></i></a>
                </div>
            </div>
        </div>
    </aside>
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <?= $content; ?>
    </div>
</div>
<?php } else { echo $content; }?>
<!-- End Wrapper -->
<!-- All Jquery -->
<script src="./assets/plugins/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="./assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="./resources/js/app-style-switcher.js"></script>
<!--Wave Effects -->
<script src="./resources/js/waves.js"></script>
<!--Menu sidebar -->
<script src="./resources/js/sidebarmenu.js"></script>
<!-- This page plugins -->
<!-- chartist chart -->
<script src="./assets/plugins/chartist-js/dist/chartist.min.js"></script>
<script src="./assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
<!--c3 JavaScript -->
<script src="./assets/plugins/d3/d3.min.js"></script>
<script src="./assets/plugins/c3-master/c3.min.js"></script>
<!--Custom JavaScript -->
<script src="./resources/js/pages/dashboards/dashboard1.js"></script>
<script src="./resources/js/custom.js"></script>
</body>

</html>