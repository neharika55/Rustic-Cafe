<?php include("db.php"); ?>
<html lang="en">
<head>
	<title>Shop Grid</title>
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
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
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
					shop
				</h2>

				<span class="txt-m-201 cl0 flex-c-m flex-w">
					<a href="index.html" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
						Home
					</a>

					<span>
						/ Products
					</span>
				</span>
			</div>
		</div>
	</section>
	
	<!-- Content page -->
	<div class="bg0 p-t-85 p-b-95">
		<div class="container">

			<!-- Shop grid -->
			<div class="shop-grid">
				<div class="row">
				<?php 
				$QUERY = "SELECT * FROM `ITEMS`";
                $RESULT = mysqli_query($con,$QUERY) or die(mysqli_error());
               while ($ROWS = mysqli_fetch_array($RESULT, MYSQLI_NUM)) {
               echo  '<div class="col-sm-6 col-md-4 col-lg-3 p-b-30">
						<div class="block1">
							<div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
								<img src="'.$ROWS[4].'" alt="IMG">

								<div style="background-color:white; opacity: 0.9;" class="block1-content flex-col-c-m p-b-46">
									<a href="product-single.html" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
										'.$ROWS[1].'
									</a>

									<span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
										$'.$ROWS[2].'
									</span>

									<div class="block1-wrap-icon flex-c-m flex-w trans-05">
										<a href="product-single.html" class="block1-icon flex-c-m wrap-pic-max-w">
											<img src="images/icons/icon-view.png" alt="ICON">
										</a>

										<a href="#" onclick=addToCart('.$ROWS[0].',1) class="block1-icon flex-c-m wrap-pic-max-w js-addcart-b1">
											<img src="images/icons/icon-cart.png" alt="ICON">
										</a>

										<a href="wishlist.html" class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
											<img class="icon-addwish-b1" src="images/icons/icon-heart.png" alt="ICON">
											<img class="icon-addedwish-b1" src="images/icons/icon-heart2.png" alt="ICON">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>';   
                 
}
				
				?>
				
					

				
				
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

	<!-- Footer -->
	<?php include("footer.php"); ?>

	
	<script>
	    function addToCart(PRODUCTID,PRODUCTQUANTITY){
	        
	        
	        $.ajax({
    url: "ajax_cart.php",
    data: { 
        "ITEMID": PRODUCTID, 
        "QUANTITY": PRODUCTQUANTITY
    },
    cache: false,
    type: "GET",
    success: function(response) {
    alert(response);
    },
    error: function(xhr) {

    }
});
	        
	        
	    }
	</script>

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
	<script src="vendor/noui/nouislider.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>