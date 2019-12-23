<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Uniqlo-Minimalist eCommerce Bootstrap 4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/images/favicon.ico')?>">
    <link rel="apple-touch-icon" href="<?php echo base_url('assets/apple-touch-icon.png')?>">
    
    <!-- Bootstrap Fremwork Main Css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <!-- All Plugins css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins.css')?>">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/shortcode/shortcodes.css')?>">
    <!-- Theme main style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css')?>">
    <!-- User style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css')?>">
    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/sb-admin-2.min.css')?>" >

    <!-- Modernizr JS -->
    <script src="<?php echo base_url('assets/js/assets/modernizr-2.8.3.min.js')?>"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start Header Style -->
        <header id="header" class="htc-header">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-lg-2 col-6">
                            <div class="logo">
                                <a href="<?= base_url('index.php/main/admin')?>">
                                    <img src="<?= base_url('assets/images/logo/LOGO.png')?>" alt="logo">
                                </a>
                            </div>
                        </div>
                        <!-- Start MAinmenu Area -->
                        <div class="col-md-10 col-lg-10 col-6">  
                            <ul class="menu-extra">
                                <li class="search search__open d-none d-sm-block" data-toggle="tooltip" data-placement="bottom" title="Search"><span class="ti-search"></span></li>
                                <li data-toggle="tooltip" data-placement="bottom" title="Profile Admin"><a href="<?= base_url('index.php/main/profile')?>"><span class="ti-user"></span></a></li>
                                <li class="toggle__menu md-block" data-toggle="tooltip" data-placement="bottom" title="Menu"><span class="ti-menu"></span></li>
                            </ul>
                        </div>
                        <!-- End MAinmenu Area -->
                        
                            <div class="mobile-menu clearfix d-block d-lg-none">
                                <nav id="mobile_dropdown">
                                    <ul class="sidebar-menu scrollable pos-r">
                                        <li class="nav-item mT-30 actived">
                                        <a class="sidebar-link" href="<?= base_url('index.php/main/admin')?>">
                                            <span class="icon-holder">
                                            <i class="c-blue-500 ti-home"></i>
                                            </span>
                                            <span class="title">Dashboard</span>
                                        </a>
                                        </li>
                                        <li class="nav-item">
                                        <a class='sidebar-link' href="<?= base_url('index.php/main/admin')?>">
                                            <span class="icon-holder">
                                            <i class="c-brown-500 ti-email"></i>
                                            </span>
                                            <span class="title">Order</span>
                                        </a>
                                        </li>
                                        <li class="nav-item">
                                        <a class='sidebar-link' href="<?= base_url('index.php/main/admin')?>">
                                            <span class="icon-holder">
                                            <i class="c-blue-500 ti-share"></i>
                                            </span>
                                            <span class="title">Product</span>
                                        </a>
                                        </li>
                                        <li class="nav-item">
                                        <a class='sidebar-link' href="<?= base_url('index.php/main/admin')?>">
                                            <span class="icon-holder">
                                            <i class="c-deep-orange-500 ti-calendar"></i>
                                            </span>
                                            <span class="title">Customer</span>
                                        </a>
                                        </li>
                                        <li class="nav-item">
                                        <a class='sidebar-link' href="<?= base_url('index.php/main/admin')?>">
                                            <span class="icon-holder">
                                            <i class="c-deep-purple-500 ti-comment-alt"></i>
                                            </span>
                                            <span class="title">Chat</span>
                                        </a>
                                        </li>
                                        <li class="nav-item">
                                        <a class='sidebar-link' href="<?= base_url('index.php/main/admin')?>">
                                            <span class="icon-holder">
                                            <i class="c-indigo-500 ti-bar-chart"></i>
                                            </span>
                                            <span class="title">Reports</span>
                                        </a>
                                        </li>
                                        <li class="nav-item">
                                        <a class='sidebar-link' href="<?= base_url('index.php/main/admin')?>">
                                            <span class="icon-holder">
                                            <i class="c-light-blue-500 ti-pencil"></i>
                                            </span>
                                            <span class="title">Integrations</span>
                                        </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div> 
                        </div> 
                </div>
            </div>
            <!-- End Mainmenu Area -->
            
        </header>
        <!-- End Header Style -->
        
        <div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
        <div class="offset__wrapper">
            <!-- Start Search Popap -->
            <div class="search__area">
                <div class="container" >
                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="search__inner">
                                <form action="#" method="get">
                                    <input placeholder="Search here... " type="text">
                                    <button type="submit"></button>
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Search Popap -->
            <!-- Start Offset MEnu -->
            <div class="offsetmenu">
                <div class="offsetmenu__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <div class="off__contact">
                        <div class="logo">
                            <a href="<?= base_url('index.php/main/home')?>">
                                <img src="<?= base_url('assets/images/logo/LOGO.png')?>" alt="logo">
                            </a>
                        </div>
                        
                        <div class="account ptb--30">
                           <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('index.php/main/account')?>"><span class="ti-user"></span></a>
                        </div>
                    </div>

                    <div class="sidebar">
                        <div class="sidebar-inner">
                        <!-- ### $Sidebar Menu ### -->
                        <ul class="sidebar-menu scrollable pos-r">
                            <li class="nav-item">
                                <a class="sidebar-link" href="index.html">
                                    <span class="icon-holder">
                                    <i class="c-blue-500 ti-home"></i>
                                    </span>
                                    <span class="title">Dashboard</span>
                                </a>
                            </li>
                            <!-- Divider -->
                            <hr class="sidebar-divider my-3">

                            <li class="nav-item">
                            <a class='sidebar-link' href="email.html">
                                <span class="icon-holder">
                                <i class="c-brown-500 ti-email"></i>
                                </span>
                                <span class="title">Order</span>
                            </a>
                            </li>
                            
                            <!-- Divider -->
                            <hr class="sidebar-divider my-3">

                            <li class="nav-item">
                            <a class='sidebar-link' href="compose.html">
                                <span class="icon-holder">
                                <i class="c-blue-500 ti-share"></i>
                                </span>
                                <span class="title">Product</span>
                            </a>
                            </li>

                            <!-- Divider -->
                            <hr class="sidebar-divider my-3">

                            <li class="nav-item">
                            <a class='sidebar-link' href="calendar.html">
                                <span class="icon-holder">
                                <i class="c-deep-orange-500 ti-calendar"></i>
                                </span>
                                <span class="title">Customer</span>
                            </a>
                            </li>
                            
                            <!-- Divider -->
                            <hr class="sidebar-divider my-3">

                            <li class="nav-item">
                            <a class='sidebar-link' href="chat.html">
                                <span class="icon-holder">
                                <i class="c-deep-purple-500 ti-comment-alt"></i>
                                </span>
                                <span class="title">Chat</span>
                            </a>
                            </li>

                            <!-- Divider -->
                            <hr class="sidebar-divider my-3">

                            <li class="nav-item">
                            <a class='sidebar-link' href="charts.html">
                                <span class="icon-holder">
                                <i class="c-indigo-500 ti-bar-chart"></i>
                                </span>
                                <span class="title">Reports</span>
                            </a>
                            </li>

                            <!-- Divider -->
                            <hr class="sidebar-divider my-3">

                            <li class="nav-item">
                            <a class='sidebar-link' href="forms.html">
                                <span class="icon-holder">
                                <i class="c-light-blue-500 ti-pencil"></i>
                                </span>
                                <span class="title">Integrations</span>
                            </a>
                            </li>
                            
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Offset MEnu -->
        </div>
        <!-- End Offset Wrapper -->


        <!-- Start Content Area -->
        <section class="htc__product__area bg__white ptb--130">
            <div class="container ">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Annual)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                            </div>
                            <div class="col">
                            <div class="progress progress-sm mr-2">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <!-- Content Row -->

            <div class="row">

                <!-- Area Chart -->
                <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Pie Chart -->
                <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                        <i class="fas fa-circle text-primary"></i> Direct
                        </span>
                        <span class="mr-2">
                        <i class="fas fa-circle text-success"></i> Social
                        </span>
                        <span class="mr-2">
                        <i class="fas fa-circle text-info"></i> Referral
                        </span>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- Content Column -->
                <div class="col-lg-6 mb-4">

                <!-- Project Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                    </div>
                    <div class="card-body">
                    <h4 class="small font-weight-bold">Server Migration <span class="float-right">20%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Sales Tracking <span class="float-right">40%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Customer Database <span class="float-right">60%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Payout Details <span class="float-right">80%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Account Setup <span class="float-right">Complete!</span></h4>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>
                </div>

                <!-- Color System -->
                <div class="row">
                    <div class="col-lg-6 mb-4">
                    <div class="card bg-primary text-white shadow">
                        <div class="card-body">
                        Primary
                        <div class="text-white-50 small">#4e73df</div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                    <div class="card bg-success text-white shadow">
                        <div class="card-body">
                        Success
                        <div class="text-white-50 small">#1cc88a</div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                    <div class="card bg-info text-white shadow">
                        <div class="card-body">
                        Info
                        <div class="text-white-50 small">#36b9cc</div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                    <div class="card bg-warning text-white shadow">
                        <div class="card-body">
                        Warning
                        <div class="text-white-50 small">#f6c23e</div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                    <div class="card bg-danger text-white shadow">
                        <div class="card-body">
                        Danger
                        <div class="text-white-50 small">#e74a3b</div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                    <div class="card bg-secondary text-white shadow">
                        <div class="card-body">
                        Secondary
                        <div class="text-white-50 small">#858796</div>
                        </div>
                    </div>
                    </div>
                </div>

                </div>

                <div class="col-lg-6 mb-4">

                <!-- Illustrations -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                    </div>
                    <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
                    </div>
                    <p>Add some quality, svg illustrations to your project courtesy of <a target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a constantly updated collection of beautiful svg images that you can use completely free and without attribution!</p>
                    <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on unDraw &rarr;</a>
                    </div>
                </div>

                <!-- Approach -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                    </div>
                    <div class="card-body">
                    <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce CSS bloat and poor page performance. Custom CSS classes are used to create custom components and custom utility classes.</p>
                    <p class="mb-0">Before working with this theme, you should become familiar with the Bootstrap framework, especially the utility classes.</p>
                    </div>
                </div>

                </div>
            </div>

            </div>
        </section>

      </div>
        <!-- End Content Area -->
        


        <!-- Start Footer Area -->
        <footer class="htc__foooter__area" style="background: rgba(0, 0, 0, 0) url(<?= base_url('assets/images/logo/cover.png')?>) no-repeat scroll center center / cover ;">
            <div class="container">
                <div class="row footer__container clearfix">
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-6 col-lg-3 col-sm-6">
                        <div class="ft__widget">
                            <div class="ft__logo">
                                <a href="<?= base_url('index.php/main')?>">
                                    <img src="<?= base_url('assets/images/logo/LOGO.png')?>" alt="footer logo">
                                </a>
                            </div>
                            <div class="footer__details">
                                <p>Get 10% discount with notified about the latest news and updates.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-6 col-lg-3 col-sm-6 smb-30 xmt-30">
                        <div class="ft__widget">
                            <h2 class="ft__title">Newsletter</h2>
                            <div class="newsletter__form">
                                <div class="input__box">
                                    <div id="mc_embed_signup">
                                        <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" novalidate>
                                            <div id="mc_embed_signup_scroll" class="htc__news__inner">
                                                <div class="news__input">
                                                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email Address" required>
                                                </div>
                                                <div class="clearfix subscribe__btn"><input type="submit" value="Send" name="subscribe" id="mc-embedded-subscribe" class="bst__btn btn--white__color">

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>        
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-6 col-lg-3 col-sm-6 smt-30 xmt-30">
                        <div class="ft__widget contact__us">
                            <h2 class="ft__title">Contact Us</h2>
                            <div class="footer__inner">
                                <p> 319 Clematis St. <br> Suite 100 WPB, FL 33401 </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-6 col-lg-2 lg-offset-1 col-sm-6 smt-30 xmt-30">
                        <div class="ft__widget">
                            <h2 class="ft__title">Follow Us</h2>
                            <ul class="social__icon">
                                <li><a href="https://twitter.com/devitemsllc" target="_blank"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/devitems/" target="_blank"><i class="zmdi zmdi-instagram"></i></a></li>
                                <li><a href="https://www.facebook.com/devitems/?ref=bookmarks" target="_blank"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href="https://plus.google.com/" target="_blank"><i class="zmdi zmdi-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                </div>
                <!-- Start Copyright Area -->
                <div class="htc__copyright__area">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="copyright__inner">
                                <div class="copyright">
                                    <p>© 2018 <a href="https://freethemescloud.com/" target="_blank">Free themes Cloud</a>
                                    All Right Reserved.</p>
                                </div>
                                <ul class="footer__menu">
                                    <li><a href="<?= base_url('index.php/main')?>">Home</a></li>
                                    <li><a href="<?= base_url('index.php/main/shop')?>">Product</a></li>
                                    <li><a href="<?= base_url('index.php/main/contact')?>">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Copyright Area -->
            </div>
        </footer>
        <!-- End Footer Area -->
    </div>
    <!-- Body main wrapper end -->
    <!-- QUICKVIEW PRODUCT -->
    <div id="quickview-wrapper">
        <!-- Modal -->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal__container" role="document">
                <div class="modal-content">
                    <div class="modal-header modal__header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <!-- Start product images -->
                            <div class="product-images">
                                <div class="main-image images">
                                    <img alt="big images" src="<?= base_url('assets/images/product/big-img/x.jpg')?>">
                                </div>
                            </div>
                            <!-- end product images -->
                            <div class="product-info">
                                <h1>Simple Fabric Bags</h1>
                                <div class="rating__and__review">
                                    <ul class="rating">
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                    </ul>
                                    <div class="review">
                                        <a href="#">4 customer reviews</a>
                                    </div>
                                </div>
                                <div class="price-box-3">
                                    <div class="s-price-box">
                                        <span class="new-price">$17.20</span>
                                        <span class="old-price">$45.00</span>
                                    </div>
                                </div>
                                <div class="quick-desc">
                                    Designed for simplicity and made from high quality materials. Its sleek geometry and material combinations creates a modern look.
                                </div>
                                <div class="select__color">
                                    <h2>Select color</h2>
                                    <ul class="color__list">
                                        <li class="red"><a title="Red" href="#">Red</a></li>
                                        <li class="gold"><a title="Gold" href="#">Gold</a></li>
                                        <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                        <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                    </ul>
                                </div>
                                <div class="select__size">
                                    <h2>Select size</h2>
                                    <ul class="color__list">
                                        <li class="l__size"><a title="L" href="#">L</a></li>
                                        <li class="m__size"><a title="M" href="#">M</a></li>
                                        <li class="s__size"><a title="S" href="#">S</a></li>
                                        <li class="xl__size"><a title="XL" href="#">XL</a></li>
                                        <li class="xxl__size"><a title="XXL" href="#">XXL</a></li>
                                    </ul>
                                </div>
                                <div class="social-sharing">
                                    <div class="widget widget_socialsharing_widget">
                                        <h3 class="widget-title-modal">Share this product</h3>
                                        <ul class="social-icons">
                                            <li><a target="_blank" title="rss" href="#" class="rss social-icon"><i class="zmdi zmdi-rss"></i></a></li>
                                            <li><a target="_blank" title="Linkedin" href="#" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a></li>
                                            <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                                            <li><a target="_blank" title="Tumblr" href="#" class="tumblr social-icon"><i class="zmdi zmdi-tumblr"></i></a></li>
                                            <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="addtocart-btn">
                                    <a href="#">Add to cart</a>
                                </div>
                            </div><!-- .product-info -->
                        </div><!-- .modal-product -->
                    </div><!-- .modal-body -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div>
        <!-- END Modal -->
    </div>
    <!-- END QUICKVIEW PRODUCT -->
    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="<?php echo base_url('assets/js/assets/jquery-1.12.4.min.js')?>"></script>
    <!-- Bootstrap Framework js -->
    <script src="<?php echo base_url('assets/js/popper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <!-- All js plugins included in this file. -->
    <script src="<?php echo base_url('assets/js/plugins.js')?>"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="<?php echo base_url('assets/js/main.js')?>"></script>
    
    <!-- Page level plugins -->
    <script src="<?php echo base_url('assets/assets/js/chart.js/Chart.min.js')?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('assets/js/demo/chart-area-demo.js')?>"></script>
    <script src="<?php echo base_url('assets/js/demo/chart-pie-demo.js')?>"></script>

</body>

</html>