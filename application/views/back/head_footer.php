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

	<link rel="stylesheet" href="<?php echo base_url('assets/css/sb-admin-2.min.css')?>">

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
								<a href="<?= base_url('index.php/admin/admin')?>">
									<img src="<?= base_url('assets/images/logo/LOGO.png')?>" alt="logo">
								</a>
							</div>
						</div>
						<!-- Start MAinmenu Area -->
						<div class="col-md-10 col-lg-10 col-6">
							<ul class="menu-extra">
								<li class="search search__open d-none d-sm-block" data-toggle="tooltip"
									data-placement="bottom" title="Search"><span class="ti-search"></span></li>
								<li data-toggle="modal" title="Profile Admin" data-target="#profilAdmin">
									<div class="modal fade" id="profilAdmin" tabindex="-1" role="dialog"
										aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Profil Admin</h5>
													<button type="button" class="close" data-dismiss="modal"
														aria-label="Close">
													</button>
												</div>
												<div class="modal-body">
													<table class="table table-borderless">
														<tbody>
															<tr>
																<td>Nama</td>
																<td><?php echo $this->session->userdata('nama')?></td>
															</tr>
															<tr>
																<td>Kontak</td>
																<td><?php echo $this->session->userdata('kontak')?></td>
															</tr>
															<tr>
																<td>Alamat</td>
																<td><?php echo $this->session->userdata('alamat')?></td>
															</tr>
														</tbody>
														</table>
												</div>
												<div class="modal-footer">
													<a href="<?= base_url('index.php/auth/logout')?>" type="button"
														class="btn btn-primary">Logout</a>
													<button type="button" class="btn btn-secondary"
														data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<span class="ti-user"></span></a>
								</li>
								<li class="toggle__menu md-block" data-toggle="tooltip" data-placement="bottom"
									title="Menu"><span class="ti-menu"></span></li>
							</ul>
						</div>
						<!-- End MAinmenu Area -->

						<div class="mobile-menu clearfix d-block d-lg-none">
							<nav id="mobile_dropdown">
								<ul class="sidebar-menu scrollable pos-r">
									<li class="nav-item mT-30 actived">
										<a class="sidebar-link" href="<?= base_url('index.php/Admin')?>">
											<span class="icon-holder">
												<i class="c-blue-500 ti-home"></i>
											</span>
											<span class="title">Dashboard</span>
										</a>
									</li>
									<li class="nav-item">
										<a class='sidebar-link' href="<?= base_url('index.php/admin/product')?>">
											<span class="icon-holder">
												<i class="c-blue-500 ti-share"></i>
											</span>
											<span class="title">Product</span>
										</a>
									</li>
									<li class="nav-item">
										<a class='sidebar-link' href="<?= base_url('index.php/admin/costumer')?>">
											<span class="icon-holder">
												<i class="c-deep-orange-500 ti-calendar"></i>
											</span>
											<span class="title">Customer</span>
										</a>
									</li>
									<li class="nav-item">
										<a class='sidebar-link' href="<?= base_url('index.php/admin/report')?>">
											<span class="icon-holder">
												<i class="c-indigo-500 ti-bar-chart"></i>
											</span>
											<span class="title">Reports</span>
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
				<div class="container">
					<div class="row">
						<div class="col-md-12">
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
							<a href="<?= base_url('index.php/admin/home')?>">
								<img src="<?= base_url('assets/images/logo/LOGO.png')?>" alt="logo">
							</a>
						</div>

						<div class="account ptb--30">
							<a class="sidebar-brand d-flex align-items-center justify-content-center"
								href="<?= base_url('index.php/admin/account')?>"><span class="ti-user"></span></a>
						</div>
					</div>

					<div class="sidebar">
						<div class="sidebar-inner">
							<!-- ### $Sidebar Menu ### -->
							<ul class="sidebar-menu scrollable pos-r">
								<li class="nav-item">
									<a class="sidebar-link" href="<?= base_url('index.php/Admin')?>">
										<span class="icon-holder">
											<i class="c-blue-500 ti-home"></i>
										</span>
										<span class="title">Dashboard</span>
									</a>
								</li>

								<!-- Divider -->
								<hr class="sidebar-divider my-3">

								<li class="nav-item">
									<a class='sidebar-link' href="#">
										<span class="icon-holder">
											<i class="c-blue-500 ti-share"></i>
										</span>
										<span class="title" data-toggle="collapse" data-target="#collapseOne"
											aria-expanded="false" aria-controls="collapseOne">Product</span>
										<div id="collapseOne" class="collapse" aria-labelledby="headingOne"
											data-parent="#accordionExample">
											<div class="card-body">
												<ul class="sidebar-menu scrollable pos-r">
													<!-- Sub menu (List product) -->
													<li class="nav-item">
														<a class="sidebar-link"
															href="<?= base_url('index.php/A_product')?>">
															<span class="icon-holder">
																<i class="c-blue-500 ti-list"></i>
															</span>
															<span class="title">Product List</span>
														</a>
													</li>
													<!-- Sub menu (List pembelian) -->
													<li class="nav-item">
														<a class="sidebar-link"
															href="<?= base_url('index.php/Admin/list_purchase')?>">
															<span class="icon-holder">
																<i class="c-blue-500 ti-list"></i>
															</span>
															<span class="title">Purchase List</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</a>
								</li>

								<!-- Divider -->
								<hr class="sidebar-divider my-3">

								<li class="nav-item">
									<a class='sidebar-link' href="<?= base_url('index.php/admin/costumer')?>">
										<span class="icon-holder">
											<i class="c-deep-orange-500 ti-calendar"></i>
										</span>
										<span class="title">Customer</span>
									</a>
								</li>

								<!-- Divider -->
								<hr class="sidebar-divider my-3">

								<li class="nav-item">
									<a class='sidebar-link' href="<?= base_url('index.php/admin/report')?>">
										<span class="icon-holder">
											<i class="c-indigo-500 ti-bar-chart"></i>
										</span>
										<span class="title">Reports</span>
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
		<div class="content-wrapper" style="min-height: 1589.56px;">
			<?php $this->load->view($isi) ?>
		</div>

	</div>
	<!-- End Content Area -->



	<!-- Start Footer Area -->
	<footer class="htc__foooter__area"
		style="background: rgba(0, 0, 0, 0) url(<?= base_url('assets/images/logo/cover.png')?>) no-repeat scroll center center / cover ;">
		<div class="container">
			<div class="row footer__container clearfix">
				<!-- Start Single Footer Widget -->
				<div class="col-md-6 col-lg-3 col-sm-6">
					<div class="ft__widget">
						<div class="ft__logo">
							<a href="<?= base_url('index.php/admin')?>">
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
									<form action="#" method="post" id="mc-embedded-subscribe-form"
										name="mc-embedded-subscribe-form" class="validate" novalidate>
										<div id="mc_embed_signup_scroll" class="htc__news__inner">
											<div class="news__input">
												<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL"
													placeholder="Email Address" required>
											</div>
											<div class="clearfix subscribe__btn"><input type="submit" value="Send"
													name="subscribe" id="mc-embedded-subscribe"
													class="bst__btn btn--white__color">

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
							<li><a href="https://twitter.com/devitemsllc" target="_blank"><i
										class="zmdi zmdi-twitter"></i></a></li>
							<li><a href="https://www.instagram.com/devitems/" target="_blank"><i
										class="zmdi zmdi-instagram"></i></a></li>
							<li><a href="https://www.facebook.com/devitems/?ref=bookmarks" target="_blank"><i
										class="zmdi zmdi-facebook"></i></a></li>
							<li><a href="https://plus.google.com/" target="_blank"><i
										class="zmdi zmdi-google-plus"></i></a></li>
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
								<li><a href="<?= base_url('index.php/admin')?>">Home</a></li>
								<li><a href="<?= base_url('index.php/admin/shop')?>">Product</a></li>
								<li><a href="<?= base_url('index.php/admin/contact')?>">Contact Us</a></li>
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
