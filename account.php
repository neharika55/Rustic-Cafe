<?php include("auth.php");?>
<html lang="en">
<head>
	<title>My Account</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<?php include("header.php"); ?>
	
	<!-- Title page -->
	<section class="how-overlay2 bg-img1" style="background-image: url(images/bg-07.jpg);">
		<div class="container">
			<div class="txt-center p-t-160 p-b-165">
				<h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
					My Account
				</h2>

				<span class="txt-m-201 cl0 flex-c-m flex-w">
					<a href="index.html" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
						Home
					</a>

					<span>
						/ My Account
					</span>
				</span>
			</div>
		</div>
	</section>

	<!-- content page -->
	<div class="bg0 p-t-95 p-b-70">
		<div class="container">
			<!-- Tab03 -->
			<div class="tab03">
				<div class="row">
					<div class="col-md-3 col-lg-2 p-b-30">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item p-b-16">
								<a class="nav-link active" data-toggle="tab" href="#dashboard" role="tab">Dashboard</a>
							</li>

							<li class="nav-item p-b-16">
								<a class="nav-link" data-toggle="tab" href="#orders" role="tab">Orders</a>
							</li>

							<li class="nav-item p-b-16">
								<a class="nav-link" data-toggle="tab" href="#downloads" role="tab">Downloads</a>
							</li>

							<li class="nav-item p-b-16">
								<a class="nav-link" data-toggle="tab" href="#addresses" role="tab">Addresses</a>
							</li>

							<li class="nav-item p-b-16">
								<a class="nav-link" data-toggle="tab" href="#account-details" role="tab">Account details</a>
							</li>

							<li class="nav-item p-b-16">
								<a class="nav-link" href="#">Logout</a>
							</li>
						</ul>
					</div>
						
					<div class="col-md-9 col-lg-10 p-b-30">
						<!-- Tab panes -->
						<div class="tab-content p-l-70 p-l-0-lg">
							<!-- - -->
							<div class="tab-pane fade show active" id="dashboard" role="tabpanel">
								<p class="txt-s-101 cl6 p-b-18">
									Hello <span class="txt-s-108">hienhtt3302</span> (not <span class="txt-s-108">hienhtt3302</span>? <a href="#" class="txt-s-101 cl6 hov-cl10">Sign out</a>)
								</p>

								<p>
									From your account dashboard you can view your recent orders, manage your shipping and billing addresses and edit your password and account details.
								</p>
							</div>

							<!-- - -->
							<div class="tab-pane fade" id="orders" role="tabpanel">
								<div class="bo-all-1 bocl15 flex-w flex-sb-m p-rl-30 p-tb-10 p-rl-15-ssm">
									<div class="flex-t p-tb-8 m-r-30">
										<img class="m-t-6 m-r-10" src="images/icons/icon-list.png" alt="IMG">
										<span class="size-w-53 txt-s-101 cl6">
											No order has been made yet.
										</span>
									</div>

									<a href="shop-sidebar-grid.html" class="flex-c-m txt-s-105 cl0 bg10 size-a-42 hov-btn2 trans-04 p-rl-10 m-tb-8">
										go shop
									</a>
								</div>
							</div>

							<!-- - -->
							<div class="tab-pane fade" id="downloads" role="tabpanel">
								<div class="bo-all-1 bocl15 flex-w flex-sb-m p-rl-30 p-tb-10 p-rl-15-ssm">
									<div class="flex-t p-tb-8 m-r-30">
										<img class="m-t-6 m-r-10" src="images/icons/icon-list2.png" alt="IMG">
										<span class="size-w-53 txt-s-101 cl6">
											No downloads available yet.
										</span>
									</div>

									<a href="shop-sidebar-grid.html" class="flex-c-m txt-s-105 cl0 bg10 size-a-42 hov-btn2 trans-04 p-rl-10 m-tb-8">
										go shop
									</a>
								</div>
							</div>

							<!-- - -->
							<div class="tab-pane fade" id="addresses" role="tabpanel">
								<p class="txt-s-101 cl6">
									The following addresses will be used on the checkout page by default.
								</p>

								<div class="flex-w flex-sb p-t-37">
									<div class="size-w-63 flex-t w-full-sm p-b-35">
										<div class="size-w-53 p-r-30">
											<h5 class="txt-m-109 cl3 p-b-7">
												Billing address
											</h5>

											<p class="txt-s-101 cl6">
												You have not set up this type of address yet.
											</p>
										</div>

										<a href="#" class="txt-s-115 cl10 hov12 hov-cl10 p-t-6">
											Edit
										</a>
									</div>

									<div class="size-w-63 flex-t w-full-sm p-b-35">
										<div class="size-w-53 p-r-30">
											<h5 class="txt-m-109 cl3 p-b-7">
												Shipping address
											</h5>

											<p class="txt-s-101 cl6">
												You have not set up this type of address yet.
											</p>
										</div>

										<a href="#" class="txt-s-115 cl10 hov12 hov-cl10 p-t-6">
											Edit
										</a>
									</div>
								</div>
							</div>

							<!-- - -->
							<div class="tab-pane fade" id="account-details" role="tabpanel">
								<form>
									<div class="row">
										<div class="col-sm-6 p-b-23">
											<div>
												<div class="txt-s-101 cl6 p-b-10">
													First Name <span class="cl12">*</span>
												</div>

												<input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="first-name">
											</div>
										</div>

										<div class="col-sm-6 p-b-23">
											<div>
												<div class="txt-s-101 cl6 p-b-10">
													Last Name <span class="cl12">*</span>
												</div>

												<input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="last-name">
											</div>
										</div>

										<div class="col-12 p-b-23">
											<div>
												<div class="txt-s-101 cl6 p-b-10">
													Email address <span class="cl12">*</span>
												</div>

												<input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="email" placeholder="example@abc.xyz">
											</div>
										</div>

										<h5 class="txt-m-109 cl3 p-rl-15 p-t-10 p-b-17">
											Password change
										</h5>

										<div class="col-12 p-b-23">
											<div>
												<div class="txt-s-101 cl6 p-b-10">
													Current password (leave blank to leave unchanged)
												</div>

												<input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="current-pw">
											</div>
										</div>

										<div class="col-12 p-b-23">
											<div>
												<div class="txt-s-101 cl6 p-b-10">
													New password (leave blank to leave unchanged)
												</div>

												<input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="new-pw">
											</div>
										</div>

										<div class="col-12 p-b-23">
											<div>
												<div class="txt-s-101 cl6 p-b-10">
													Confirm new password
												</div>

												<input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="cf-new-pw">
											</div>
										</div>

										<div class="flex-w p-rl-15 p-t-17">
											<button class="flex-c-m txt-s-105 cl0 bg10 size-a-43 hov-btn2 trans-04 p-rl-10">
												Save address
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Logo -->
	<div class="sec-logo bg0">
		<div class="container">
			<div class="flex-w flex-sa-m bo-t-1 bocl13 p-tb-60">
				<a href="#" class="dis-block how2 p-rl-15 m-tb-20">
					<img class="trans-04" src="images/icons/symbol-07.png" alt="IMG">
				</a>

				<a href="#" class="dis-block how2 p-rl-15 m-tb-20">
					<img class="trans-04" src="images/icons/symbol-08.png" alt="IMG">
				</a>

				<a href="#" class="dis-block how2 p-rl-15 m-tb-20">
					<img class="trans-04" src="images/icons/symbol-09.png" alt="IMG">
				</a>

				<a href="#" class="dis-block how2 p-rl-15 m-tb-20">
					<img class="trans-04" src="images/icons/symbol-10.png" alt="IMG">
				</a>

				<a href="#" class="dis-block how2 p-rl-15 m-tb-20">
					<img class="trans-04" src="images/icons/symbol-11.png" alt="IMG">
				</a>
			</div>
		</div>
	</div>

	<!-- Subscribe -->
	<section class="sec-subscribe bg13 p-t-65 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-md-5 p-tb-15">
					<div class="h-full flex-col-m">
						<h4 class="txt-m-110 cl3 p-b-4">
							Subscribe Newsletter.
						</h4>

						<p class="txt-s-101 cl6">
							Get e-mail updates about our latest shop and special offers.
						</p>
					</div>
				</div>

				<div class="col-md-7 p-tb-15">
					<form class="flex-w flex-m h-full">
						<input class="size-a-6 txt-s-106 cl6 plh0 p-rl-30 w-full-sm" type="text" name="email" placeholder="Your email address">
						<button class="bg10 size-a-5 txt-s-107 cl0 p-rl-15 trans-04 hov-btn2 mt-4 mt-sm-0">
							Subscribe
						</button>
					</form>
				</div>
			</div>
		</div>
	</section>

   <?php include("footer.php"); ?>
	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
<!--===============================================================================================-->
	<script src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>