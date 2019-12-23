<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(<?= base_url('assets/images/bg/7.jpg')?>) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Shop Page</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="<?php echo base_url('index.php/main') ?>">Home</a>
                                  <span class="brd-separetor">/</span>
                                  <span class="breadcrumb-item active">Shop Page</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area --> 
        <!-- Start Our Product Area -->
        <section class="htc__product__area shop__page ptb--130 bg__white">
            <div class="container">
                <div class="htc__product__container">
                    <!-- Start Product MEnu -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="filter__menu__container">
                                <div class="product__menu">
                                    <button data-filter="*"  class="is-checked">All</button>
                                    <button data-filter=".cat--1">Furnitures</button>
                                    <button data-filter=".cat--2">Bags</button>
                                    <button data-filter=".cat--3">Decoration</button>
                                    <button data-filter=".cat--4">Accessories</button>
                                </div>
                                <div class="filter__box">
                                    <a class="filter__menu" href="#">filter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Filter Menu -->
                    <div class="filter__wrap">
                        <div class="filter__cart">
                            <div class="filter__cart__inner">
                                <div class="filter__menu__close__btn">
                                    <a href="#"><i class="zmdi zmdi-close"></i></a>
                                </div>
                                <div class="filter__content">
                                    <!-- Start Single Content -->
                                    <div class="fiter__content__inner">
                                        <div class="single__filter">
                                            <h2>Sort By</h2>
                                            <ul class="filter__list">
                                                <li><a href="#default">Default</a></li>
                                                <li><a href="#accessories">Accessories</a></li>
                                                <li><a href="#bags">Bags</a></li>
                                                <li><a href="#chair">Chair</a></li>
                                                <li><a href="#decoration">Decoration</a></li>
                                                <li><a href="#fashion">Fashion</a></li>
                                            </ul>
                                        </div>
                                        <div class="single__filter">
                                            <h2>Size</h2>
                                            <ul class="filter__list">
                                                <li><a href="#xxl">XXL</a></li>
                                                <li><a href="#xl">XL</a></li>
                                                <li><a href="#x">X</a></li>
                                                <li><a href="#l">L</a></li>
                                                <li><a href="#m">M</a></li>
                                                <li><a href="#s">S</a></li>
                                            </ul>
                                        </div>
                                        <div class="single__filter">
                                            <h2>Tags</h2>
                                            <ul class="filter__list">
                                                <li><a href="#">All</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Bags</a></li>
                                                <li><a href="#">Chair</a></li>
                                                <li><a href="#">Decoration</a></li>
                                                <li><a href="#">Fashion</a></li>
                                            </ul>
                                        </div>
                                        <div class="single__filter">
                                            <h2>Price</h2>
                                            <ul class="filter__list">
                                                <li><a href="#">$0.00 - $50.00</a></li>
                                                <li><a href="#">$50.00 - $100.00</a></li>
                                                <li><a href="#">$100.00 - $150.00</a></li>
                                                <li><a href="#">$150.00 - $200.00</a></li>
                                                <li><a href="#">$300.00 - $500.00</a></li>
                                                <li><a href="#">$500.00 - $700.00</a></li>
                                            </ul>
                                        </div>
                                        <div class="single__filter">
                                            <h2>Color</h2>
                                            <ul class="filter__list sidebar__list">
                                                <li class="black"><a href="#"><i class="zmdi zmdi-circle"></i>Black</a></li>
                                                <li class="blue"><a href="#"><i class="zmdi zmdi-circle"></i>Blue</a></li>
                                                <li class="brown"><a href="#"><i class="zmdi zmdi-circle"></i>Brown</a></li>
                                                <li class="red"><a href="#"><i class="zmdi zmdi-circle"></i>Red</a></li>
                                                <li class="orange"><a href="#"><i class="zmdi zmdi-circle"></i>Orange</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- End Single Content -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Filter Menu -->
                    <!-- Start Product MEnu -->
                    <div class="row product__list">
                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-md-4 cat--1 col-sm-12">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="<?= base_url('assets/images/product/a.png')?>" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="<?= base_url('index.php/main/cart')?>"><span class="ti-shopping-cart"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add__to__wishlist">
                                        <a data-toggle="tooltip" title="Add To Wishlist" class="add-to-cart" href="<?= base_url('index.php/main/wishlist')?>"><span class="ti-heart"></span></a>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="<?= base_url('index.php/main/description')?>">Serum TerraCotta</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">Rp 1.900.000</li>
                                        <li class="new__price">Rp 1.800.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-md-4 cat--1 col-sm-12">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="<?= base_url('assets/images/product/b.png')?>" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="<?= base_url('index.php/main/cart')?>"><span class="ti-shopping-cart"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add__to__wishlist">
                                        <a data-toggle="tooltip" title="Add To Wishlist" class="add-to-cart" href="<?= base_url('index.php/main/wishlist')?>"><span class="ti-heart"></span></a>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="<?= base_url('index.php/main/description')?>">Baju Casual Set</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">Rp 650.000</li>
                                        <li class="new__price">Rp 500.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-md-4 col-sm-12 cat--2">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="<?= base_url('assets/images/product/v.png')?>" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="<?= base_url('index.php/main/cart')?>"><span class="ti-shopping-cart"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add__to__wishlist">
                                        <a data-toggle="tooltip" title="Add To Wishlist" class="add-to-cart" href="<?= base_url('index.php/main/wishlist')?>"><span class="ti-heart"></span></a>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="<?= base_url('index.php/main/description')?>">Parfum Lacoste</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">Rp 250.000</li>
                                        <li class="new__price">Rp 199.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-md-4 col-sm-12 cat--4">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="<?= base_url('assets/images/product/r.png')?>" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="<?= base_url('index.php/main/cart')?>"><span class="ti-shopping-cart"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add__to__wishlist">
                                        <a data-toggle="tooltip" title="Add To Wishlist" class="add-to-cart" href="<?= base_url('index.php/main/wishlist')?>"><span class="ti-heart"></span></a>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="<?= base_url('index.php/main/description')?>">Sling Bag Luana</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">Rp 370.000</li>
                                        <li class="new__price">Rp 350.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 cat--1 col-md-4 col-sm-12 cat--2">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="<?= base_url('assets/images/product/e.png')?>" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="<?= base_url('index.php/main/cart')?>"><span class="ti-shopping-cart"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add__to__wishlist">
                                        <a data-toggle="tooltip" title="Add To Wishlist" class="add-to-cart" href="<?= base_url('index.php/main/wishlist')?>"><span class="ti-heart"></span></a>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="<?= base_url('index.php/main/description')?>">Sendal IsrinIsran</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">Rp 150.000</li>
                                        <li class="new__price">Rp 100.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-md-4 col-sm-12 cat--3">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="<?= base_url('assets/images/product/f.png')?>" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="<?= base_url('index.php/main/cart')?>"><span class="ti-shopping-cart"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add__to__wishlist">
                                        <a data-toggle="tooltip" title="Add To Wishlist" class="add-to-cart" href="<?= base_url('index.php/main/wishlist')?>"><span class="ti-heart"></span></a>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="<?= base_url('index.php/main/description')?>">Casual Santai</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">Rp 350.000</li>
                                        <li class="new__price">Rp 259.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-md-4 col-sm-12 cat--2">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="<?= base_url('assets/images/product/g.png')?>" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="<?= base_url('index.php/main/cart')?>"><span class="ti-shopping-cart"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add__to__wishlist">
                                        <a data-toggle="tooltip" title="Add To Wishlist" class="add-to-cart" href="<?= base_url('index.php/main/wishlist')?>"><span class="ti-heart"></span></a>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="<?= base_url('index.php/main/description')?>">Tas BodyPack</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">Rp 579.000</li>
                                        <li class="new__price">Rp 520.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-md-4 col-sm-12 cat--2">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="<?= base_url('assets/images/product/h.png')?>" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="<?= base_url('index.php/main/cart')?>"><span class="ti-shopping-cart"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add__to__wishlist">
                                        <a data-toggle="tooltip" title="Add To Wishlist" class="add-to-cart" href="<?= base_url('index.php/main/wishlist')?>"><span class="ti-heart"></span></a>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="<?= base_url('index.php/main/description')?>">Sofa Mewah</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">Rp 2.000.000</li>
                                        <li class="new__price">Rp 1.800.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-md-4 col-sm-12 cat--4">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="<?= base_url('assets/images/product/i.png')?>" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="<?= base_url('index.php/main/cart')?>"><span class="ti-shopping-cart"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add__to__wishlist">
                                        <a data-toggle="tooltip" title="Add To Wishlist" class="add-to-cart" href="<?= base_url('index.php/main/wishlist')?>"><span class="ti-heart"></span></a>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="<?= base_url('index.php/main/description')?>">Smart Watch</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">Rp 700.000</li>
                                        <li class="new__price">Rp 600.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-md-4 col-sm-12 cat--3">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="<?= base_url('assets/images/product/j.png')?>" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="<?= base_url('index.php/main/cart')?>"><span class="ti-shopping-cart"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add__to__wishlist">
                                        <a data-toggle="tooltip" title="Add To Wishlist" class="add-to-cart" href="<?= base_url('index.php/main/wishlist')?>"><span class="ti-heart"></span></a>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="<?= base_url('index.php/main/description')?>">Casual Uniqlo</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">Rp 500.000</li>
                                        <li class="new__price">Rp 450.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-md-4 col-sm-12 cat--4">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="<?= base_url('assets/images/product/k.png')?>" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="<?= base_url('index.php/main/cart')?>"><span class="ti-shopping-cart"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add__to__wishlist">
                                        <a data-toggle="tooltip" title="Add To Wishlist" class="add-to-cart" href="<?= base_url('index.php/main/wishlist')?>"><span class="ti-heart"></span></a>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="<?= base_url('index.php/main/description')?>">Sneakers</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">Rp 359.000</li>
                                        <li class="new__price">Rp 329,000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-md-4 col-sm-12 cat--3">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="<?= base_url('assets/images/product/l.png')?>" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="<?= base_url('index.php/main/cart')?>"><span class="ti-shopping-cart"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add__to__wishlist">
                                        <a data-toggle="tooltip" title="Add To Wishlist" class="add-to-cart" href="<?= base_url('index.php/main/wishlist')?>"><span class="ti-heart"></span></a>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="<?= base_url('index.php/main/description')?>">Furniture</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">Rp 1.500.000</li>
                                        <li class="new__price">Rp 1.200.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-md-4 col-sm-12 cat--3">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="<?= base_url('assets/images/product/z.png')?>" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="<?= base_url('index.php/main/cart')?>"><span class="ti-shopping-cart"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add__to__wishlist">
                                        <a data-toggle="tooltip" title="Add To Wishlist" class="add-to-cart" href="<?= base_url('index.php/main/wishlist')?>"><span class="ti-heart"></span></a>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="<?= base_url('index.php/main/description')?>">Bucket HAT</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">Rp 150.000</li>
                                        <li class="new__price">Rp 100.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-md-4 col-sm-12 cat--4">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="<?= base_url('assets/images/product/n.png')?>" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="<?= base_url('index.php/main/cart')?>"><span class="ti-shopping-cart"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add__to__wishlist">
                                        <a data-toggle="tooltip" title="Add To Wishlist" class="add-to-cart" href="<?= base_url('index.php/main/wishlist')?>"><span class="ti-heart"></span></a>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="<?= base_url('index.php/main/description')?>">Laptop 99</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">Rp 12.000.000</li>
                                        <li class="new__price">Rp 10.000.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-md-4 col-sm-12 cat--4">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="<?= base_url('assets/images/product/o.png')?>" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="<?= base_url('index.php/main/cart')?>"><span class="ti-shopping-cart"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add__to__wishlist">
                                        <a data-toggle="tooltip" title="Add To Wishlist" class="add-to-cart" href="<?= base_url('index.php/main/wishlist')?>"><span class="ti-heart"></span></a>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="<?= base_url('index.php/main/description')?>">Iphone 99</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">Rp 120.000.000</li>
                                        <li class="new__price">Rp 100.000.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-md-4 col-sm-12 cat--3">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="<?= base_url('assets/images/product/p.png')?>" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="<?= base_url('index.php/main/cart')?>"><span class="ti-shopping-cart"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add__to__wishlist">
                                        <a data-toggle="tooltip" title="Add To Wishlist" class="add-to-cart" href="<?= base_url('index.php/main/wishlist')?>"><span class="ti-heart"></span></a>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="<?= base_url('index.php/main/description')?>">SK II Complete Package</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">Rp 2.500.000</li>
                                        <li class="new__price">Rp 2.000.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                    </div>
                    <!-- Start Load More BTn -->
                    <div class="row mt--60">
                        <div class="col-md-12">
                            <div class="htc__loadmore__btn">
                                <a href="#">load more</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Load More BTn -->
                </div>
            </div>
        </section>
        <!-- End Our Product Area -->