<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TRUSTED.ID</title>
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

    <!-- Modernizr JS -->
    <script src="<?php echo base_url('assets/js/assets/modernizr-2.8.3.min.js')?>"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper fixed__footer">
        <!-- Start Header Style -->
        <header id="header" class="htc-header">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-lg-2 col-6">
                            <div class="logo">
                                <a href="<?= base_url('index.php/main')?>">
                                    <img src="<?= base_url('assets/images/logo/LOGO.png')?>" alt="logo">
                                </a>
                            </div>
                        </div>
                        <!-- Start MAinmenu Ares -->
                        <div class="col-md-8 col-lg-8 d-none d-md-block">
                            <nav class="mainmenu__nav  d-none d-lg-block">
                                <ul class="main__menu">
                                    <li class="drop"><a href="<?= base_url('index.php/main')?>">Home</a>
                                    </li>
                                    <li><a href="<?= base_url('index.php/main/about')?>">About</a></li>
                                    <li class="drop"><a href="<?= base_url('index.php/main/blog')?>">Blog</a>
                                        <ul class="dropdown">
                                                <li><a href="<?= base_url('index.php/main/blog')?>">blog</a></li>
                                                <li><a href="<?= base_url('index.php/main/details')?>">blog details</a></li>
                                        </ul>
                                    </li>
                                    <li class="drop"><a href="<?= base_url('index.php/main/shop')?>">Shop</a>
                                    </li>
                                    <li class="drop"><a href="#">pages</a>
                                        <ul class="dropdown">
                                            <li><a href="<?= base_url('index.php/main')?>">Home</a></li>
                                            <li><a href="<?= base_url('index.php/main/about')?>">about</a></li>
                                            <li><a href="<?= base_url('index.php/main/shop')?>">shop</a></li>
                                            <li><a href="<?= base_url('index.php/main/description')?>">product details</a></li>
                                            <li><a href="<?= base_url('index.php/main/cart')?>">cart</a></li>
                                            <li><a href="<?= base_url('index.php/main/wishlist')?>">wishlist</a></li>
                                            <li><a href="<?= base_url('index.php/main/checkout')?>">checkout</a></li>
                                            <li><a href="<?= base_url('index.php/main/team')?>">team</a></li>
                                            <li><a href="<?= base_url('index.php/main/account')?>">login & register</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?= base_url('index.php/main/contact')?>">contact</a></li>
                                </ul>
                            </nav>
                            
                            <div class="mobile-menu clearfix d-block d-lg-none">
                                <nav id="mobile_dropdown">
                                    <ul>
                                        <li><a href="<?= base_url('index.php/main')?>">Home</a></li>
                                        <li><a href="<?= base_url('index.php/main/about')?>">About</a></li>
                                        <li><a href="<?= base_url('index.php/main/blog')?>">blog</a>
                                            <ul>
                                                <li><a href="<?= base_url('index.php/main/blog')?>">blog</a></li>
                                                <li><a href="<?= base_url('index.php/main/details')?>">blog details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages</a>
                                            <ul>
                                            <li><a href="<?= base_url('index.php/main')?>">Home</a></li>
                                            <li><a href="<?= base_url('index.php/main/about')?>">about</a></li>
                                            <li><a href="<?= base_url('index.php/main/shop')?>">shop</a></li>
                                            <li><a href="<?= base_url('index.php/main/description')?>">product details</a></li>
                                            <li><a href="<?= base_url('index.php/main/cart')?>">cart</a></li>
                                            <li><a href="<?= base_url('index.php/main/wishlist')?>">wishlist</a></li>
                                            <li><a href="<?= base_url('index.php/main/checkout')?>">checkout</a></li>
                                            <li><a href="<?= base_url('index.php/main/team')?>">team</a></li>
                                            <li><a href="<?= base_url('index.php/main/account')?>">login & register</a></li>
                                        </ul>
                                        </li>
                                        <li><a href="<?= base_url('index.php/main/contact')?>">contact</a></li>
                                    </ul>
                                </nav>
                            </div>  
                        </div>
                        <!-- End MAinmenu Ares -->
                        <div class="col-md-3 col-lg-2 col-6">  
                            <ul class="menu-extra">
                                <li class="search search__open d-none d-sm-block" data-toggle="tooltip" data-placement="bottom" title="Search"><span class="ti-search"></span></li>
                                <li><a href="<?= base_url('index.php/main/account')?>" data-toggle="tooltip" data-placement="bottom" title="Account"><span class="ti-user"></span></a></li>
                                <li class="cart__menu"><span class="ti-shopping-cart" data-toggle="tooltip" data-placement="bottom" title="Cart"></span></li>
                                <li class="toggle__menu d-none d-md-block" data-toggle="tooltip" data-placement="bottom" title="Menu"><span class="ti-menu"></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
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
                        <p>Lorem ipsum dolor sit amet consectetu adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                    <ul class="sidebar__thumd">
                        <li><a href="#"><img src="<?= base_url('assets/images/sidebar-img/a.jpg')?>" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="<?= base_url('assets/images/sidebar-img/2.jpg')?>" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="<?= base_url('assets/images/sidebar-img/3.jpg')?>" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="<?= base_url('assets/images/sidebar-img/4.jpg')?>" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="<?= base_url('assets/images/sidebar-img/5.jpg')?>" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="<?= base_url('assets/images/sidebar-img/6.jpg')?>" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="<?= base_url('assets/images/sidebar-img/7.jpg')?>" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="<?= base_url('assets/images/sidebar-img/8.jpg')?>" alt="sidebar images"></a></li>
                    </ul>
                    <div class="offset__widget">
                        <div class="offset__single">
                            <h4 class="offset__title">Language</h4>
                            <ul>
                                <li><a href="#"> Engish </a></li>
                                <li><a href="#"> French </a></li>
                                <li><a href="#"> German </a></li>
                            </ul>
                        </div>
                        <div class="offset__single">
                            <h4 class="offset__title">Currencies</h4>
                            <ul>
                                <li><a href="#"> USD : Dollar </a></li>
                                <li><a href="#"> EUR : Euro </a></li>
                                <li><a href="#"> POU : Pound </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="offset__sosial__share">
                        <h4 class="offset__title">Follow Us On Social</h4>
                        <ul class="off__soaial__link">
                            <li><a class="bg--twitter" href="https://twitter.com/devitemsllc" target="_blank" title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>
                            
                            <li><a class="bg--instagram" href="https://www.instagram.com/devitems/" target="_blank" title="Instagram"><i class="zmdi zmdi-instagram"></i></a></li>

                            <li><a class="bg--facebook" href="https://www.facebook.com/devitems/?ref=bookmarks" target="_blank" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>

                            <li><a class="bg--googleplus" href="https://plus.google.com/" target="_blank" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a></li>

                            <li><a class="bg--google" href="#" target="_blank" title="Google"><i class="zmdi zmdi-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Offset MEnu -->
            <!-- Start Cart Panel -->
            <div class="shopping__cart">
                <div class="shopping__cart__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <div class="shp__cart__wrap">
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="<?= base_url('assets/images/product/sm-img/1.jpg')?>" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="<?= base_url('index.php/main/about')?>description.html">BO&Play Wireless Speaker</a></h2>
                                <span class="quantity">QTY: 1</span>
                                <span class="shp__price">$105.00</span>
                            </div>
                            <div class="remove__btn">
                                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="<?= base_url('assets/images/product/sm-img/2.jpg')?>" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="<?= base_url('index.php/main/description')?>">Brone Candle</a></h2>
                                <span class="quantity">QTY: 1</span>
                                <span class="shp__price">$25.00</span>
                            </div>
                            <div class="remove__btn">
                                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                    </div>
                    <ul class="shoping__total">
                        <li class="subtotal">Subtotal:</li>
                        <li class="total__price">$130.00</li>
                    </ul>
                    <ul class="shopping__btn">
                        <li><a href="<?= base_url('index.php/main/cart')?>">View Cart</a></li>
                        <li class="shp__checkout"><a href="<?= base_url('index.php/main/checkout')?>">Checkout</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Cart Panel -->
        </div>
        <!-- End Offset Wrapper -->
        
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 1589.56px;">
            <?php $this->load->view($page) ?>
        </div>
        <!-- /.content-wrapper -->


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
                                <h1>Serum TerraCotta</h1>
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
                                        <span class="new-price">Rp 1.900.000</span>
                                        <span class="old-price">Rp 1.800.000</span>
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

</body>

</html>