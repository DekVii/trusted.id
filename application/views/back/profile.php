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
    <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="details-left-sidebar">
                            <div class="details-top">
                                <!--Start Blog Thumb -->
                                <div class="details-thumb-wrap">
                                    <div class="details-thumb">
                                        <img src="<?= base_url('assets/images/blog/big-images/1.jpg')?>" alt="blog images">
                                    </div>
                                    <div class="upcoming-date">
                                        14<span class="upc-mth">Sep,2017</span>
                                    </div>
                                </div>
                                <!--End Blog Thumb -->
                                <h2>It is a long established fact that a reader will</h2>
                                <div class="blog-admin-and-comment">
                                    <p>BY : <a href="#">ADMIN</a></p>
                                    <p class="separator">|</p>
                                    <p>3 COMMENTS</p>
                                </div>
                                <!-- Start Blog Pra -->
                                <div class="details-pra">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore d aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo conse Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>

                                    <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore d aliqua. Ut enim ad minim veniam, </blockquote>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dol orea magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit</p>
                                </div>
                                <!-- End Blog Pra -->
                                <!-- Start Blog Tags -->
                                <div class="postandshare">
                                    <div class="post">
                                        <p>TAGS :</p>
                                    </div>
                                    <div class="blog-social-icon">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                            <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Blog Tags -->
                                <!-- Start Blog Comment Area -->
                                <div class="our-blog-comment mt--20">
                                    <div class="blog-comment-inner">
                                        <h2 class="section-title-2">COMMENTS (03)</h2>
                                        <!-- Start Single Comment -->
                                        <div class="single-blog-comment">
                                            <div class="blog-comment-thumb">
                                                <img src="<?= base_url('assets/images/comment/big-images/1.jpg')?>" alt="comment images">
                                            </div>
                                            <div class="blog-comment-details">
                                                <div class="comment-title-date">
                                                    <h2><a href="#">Martin Payet</a></h2>
                                                    <div class="reply">
                                                        <p>14 Sep 2017 / <a href="#">REPLY</a></p>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi ut labore et dolo magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                            </div>
                                        </div>
                                        <!-- End Single Comment -->
                                        <!-- Start Single Comment -->
                                        <div class="single-blog-comment comment-reply">
                                            <div class="blog-comment-thumb">
                                                <img src="<?= base_url('assets/images/comment/big-images/2.jpg')?>" alt="comment images">
                                            </div>
                                            <div class="blog-comment-details">
                                                <div class="comment-title-date">
                                                    <h2><a href="#">Martin Payet</a></h2>
                                                    <div class="reply">
                                                        <p>14 Sep 2017 / <a href="#">REPLY</a></p>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi ut labore et dolo magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                            </div>
                                        </div>
                                        <!-- End Single Comment -->
                                        <!-- Start Single Comment -->
                                        <div class="single-blog-comment">
                                            <div class="blog-comment-thumb">
                                                <img src="<?= base_url('assets/images/comment/big-images/3.jpg')?>" alt="comment images">
                                            </div>
                                            <div class="blog-comment-details">
                                                <div class="comment-title-date">
                                                    <h2><a href="#">Martin Payet</a></h2>
                                                    <div class="reply">
                                                        <p>14 Sep 2017 / <a href="#">REPLY</a></p>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi ut labore et dolo magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                            </div>
                                        </div>
                                        <!-- End Single Comment -->
                                    </div>
                                </div>
                                <!-- End Blog Comment Area -->
                                <!-- Start Reply Form -->
                                <div class="our-reply-form-area mt--20">
                                    <h2 class="section-title-2">LEAVE A REPLY</h2>
                                    <div class="reply-form-inner mt--40">
                                        <div class="reply-form-box">
                                            <div class="reply-form-box-inner">
                                                <div class="rfb-single-input">
                                                    <input type="text" placeholder="Name*">
                                                </div>
                                                <div class="rfb-single-input">
                                                    <input type="email" placeholder="Email*">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reply-form-box">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                        <div class="blog__details__btn">
                                            <a class="htc__btn btn--gray" href="#">submit</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Reply Form -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4  smt-30 xmt-40">
                        <div class="blod-details-right-sidebar">
                            <div class="category-search-area">
                                <input placeholder="Search......" type="text">
                                <a class="srch-btn" href="#"><i class="zmdi zmdi-search"></i></a>    
                            </div>
                            <!-- Start Category Area -->
                            <div class="our-category-area mt--60">
                                <h2 class="section-title-2">CATEGORY</h2>
                                <ul class="categore-menu">
                                    <li><a href="#"><i class="zmdi zmdi-caret-right"></i>Admin <span>20</span></a></li>
                                </ul>
                            </div>
                            <!-- End Category Area -->
                            <!-- Start Letaest Blog Area -->
                            <div class="our-recent-post mt--60">
                                <h2 class="section-title-2">LATEST POST</h2>
                                <div class="our-recent-post-wrap">
                                    <!-- Start Single Post -->
                                    <div class="single-recent-post">
                                        <div class="recent-thumb">
                                            <a href="<?= base_url('index.php/main/details')?>"><img src="<?= base_url('assets/images/blog/big-images/1.jpg')?>" alt="post images"></a>
                                        </div>
                                        <div class="recent-details">
                                            <div class="recent-post-dtl">
                                                <h6><a href="<?= base_url('index.php/main/details')?>">Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do.</a></h6>
                                            </div>
                                            <div class="recent-post-time">
                                                <p>14 SEP 2017</p>
                                                <p class="separator">|</p>
                                                <p>5 : 00 PM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Post -->
                                    <!-- Start Single Post -->
                                    <div class="single-recent-post">
                                        <div class="recent-thumb">
                                            <a href="<?= base_url('index.php/main/details')?>"><img src="<?= base_url('assets/images/blog/big-images/2.jpg')?>" alt="post images"></a>
                                        </div>
                                        <div class="recent-details">
                                            <div class="recent-post-dtl">
                                                <h6><a href="<?= base_url('index.php/main/details')?>">Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do.</a></h6>
                                            </div>
                                            <div class="recent-post-time">
                                                <p>14 SEP 2017</p>
                                                <p class="separator">|</p>
                                                <p>5 : 00 PM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Post -->
                                    <!-- Start Single Post -->
                                    <div class="single-recent-post">
                                        <div class="recent-thumb">
                                            <a href="<?= base_url('index.php/main/details')?>"><img src="<?= base_url('assets/images/blog/big-images/3.jpg')?>" alt="post images"></a>
                                        </div>
                                        <div class="recent-details">
                                            <div class="recent-post-dtl">
                                                <h6><a href="<?= base_url('index.php/main/details')?>">Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do.</a></h6>
                                            </div>
                                            <div class="recent-post-time">
                                                <p>14 SEP 2017</p>
                                                <p class="separator">|</p>
                                                <p>5 : 00 PM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Post -->
                                </div>
                            </div>
                            <!-- End Letaest Blog Area -->
                            <!-- Start Tag -->
                            <div class="our-blog-tag">
                                <h2 class="section-title-2">TAGS</h2>
                                <ul class="tag-menu mt-40">
                                    <li><a href="#">Planning</a></li>
                                    <li><a href="#">Consulting</a></li>
                                    <li><a href="#">Investment</a></li>
                                    <li><a href="#">Investment</a></li>
                                    <li><a href="#">planning</a></li>
                                    <li><a href="#">Management</a></li>
                                </ul>
                            </div>
                            <!-- End Tag -->
                        </div>
                    </div>
                </div>
            </div>
    </section>

      </div>
        <!-- End Content Area -->
        


        <!-- Start Footer Area -->
        <footer class="htc__foooter__area" style="background: rgba(0, 0, 0, 0) url(<?= base_url('assets/images/bg/1.jpg')?>) no-repeat scroll center center / cover ;">
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
                                    <img alt="big images" src="<?= base_url('assets/images/product/big-img/1.jpg')?>">
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