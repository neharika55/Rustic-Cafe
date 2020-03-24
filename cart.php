<?php include("db.php");

function getItemDetails($ITEMID, $ATTRIBUTE,$con){
    $ATTRIBUTE=strtoupper($ATTRIBUTE);
    $QUERY =  "SELECT ".$ATTRIBUTE." FROM ITEMS WHERE ID='$ITEMID'";
    return mysqli_fetch_assoc(mysqli_query($con,$QUERY))[$ATTRIBUTE];
}


?>
<html lang="en">
<head>
	<title>Shop Cart</title>
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
					Cart
				</h2>

				<span class="txt-m-201 cl0 flex-c-m flex-w">
					<a href="index.html" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
						Home
					</a>

					<span>
						/ Cart
					</span>
				</span>
			</div>
		</div>
	</section>

	<!-- content page -->
	<div class="bg0 p-tb-100">
		<div class="container">
			<form action="checkout.php" method="POST">
				<div class="wrap-table-shopping-cart">
					<table class="table-shopping-cart">
						<tr class="table_head bg12">
							<th class="column-1 p-l-30">Product</th>
							<th class="column-2">Price</th>
							<th class="column-3">Quantity</th>
							<th class="column-4">Total</th>
						</tr>
						
						<?php if(empty($_SESSION['CART'])){
						    echo "Your cart is empty";
						} else{
						    
						    
						    $SUM=0;
						    foreach ($_SESSION['CART'] as $ITEMID => $QUANTITY) {
                         
                         $PRICE=getItemDetails($ITEMID, "ITEMPRICE",$con)*$QUANTITY;
                         $SUM+=$PRICE;
                         echo '<tr class="table_row">
							<td class="column-1">
								<div class="flex-w flex-m">
									<div class="wrap-pic-w size-w-50 bo-all-1 bocl12 m-r-30">
										<img src="'.getItemDetails($ITEMID, "ITEMIMAGE",$con).'" alt="IMG">
									</div>

									<span>
										'.getItemDetails($ITEMID, "ITEMNAME",$con).'
									</span>
								</div>
							</td>
							<td class="column-2">
								$ '.getItemDetails($ITEMID, "ITEMPRICE",$con).'
							</td>
							<td class="column-3">
								<div class="wrap-num-product flex-w flex-m bg12 p-rl-10">
									<div class="btn-num-product-down flex-c-m fs-29"></div>

									<input class="txt-m-102 cl6 txt-center num-product" type="number" name="num-product1" value="'.$QUANTITY.'">

									<div class="btn-num-product-up flex-c-m fs-16"></div>
								</div>
							</td>
							<td class="column-4">
								<div class="flex-w flex-sb-m">
									<span>
										'.($PRICE).'$
									</span>

									<div class="fs-15 hov-cl10 pointer">
										<span class="lnr lnr-cross"></span>
									</div>
								</div>
							</td>
						</tr>';
                         
                         
                         
}
						    
						    
						    
						    
						    
						    
						    
						    
						    
						    
						    
						    
						}

?>


						

					
					</table>
				</div>

				<div class="flex-w flex-sb-m p-t-20">
					<div class="flex-w flex-m m-r-50 m-tb-10">
						<input class="size-a-31 bo-all-1 bocl15 txt-s-123 cl6 plh1 p-rl-20 focus1 m-r-30 m-tb-10" type="text" name="coupon" placeholder="Coupon Code">

						<div class="flex-c-m txt-s-105 cl0 bg10 size-a-32 hov-btn2 trans-04 pointer p-rl-10 m-tb-10">
							apply coupon
						</div>
					</div>

					<div class="flex-c-m txt-s-105 cl0 bg10 size-a-33 hov-btn2 trans-04 pointer p-rl-10 m-tb-10">
						update CART
					</div>
				</div>

				<div class="flex-col-l p-t-68">
					<span class="txt-m-123 cl3 p-b-18">
						CART TOTALS
					</span>
					
					<div class="flex-w flex-m bo-b-1 bocl15 w-full p-tb-18">
						<span class="size-w-58 txt-m-109 cl3">
							Subtotal
						</span>

						<span class="size-w-59 txt-m-104 cl6">
							<?php echo $SUM; ?>$
						</span>
					</div>

					<div class="flex-w flex-m bo-b-1 bocl15 w-full p-tb-18">
						<span class="size-w-58 txt-m-109 cl3">
							Total
						</span>

						<span class="size-w-59 txt-m-104 cl10">
							<?php echo $SUM; ?>$
						</span>
					</div>

					<button type="submit" class="flex-c-m txt-s-105 cl0 bg10 size-a-34 hov-btn2 trans-04 p-rl-10 m-t-43">
						proceed to checkout
					</button>
				</div>
			</form>
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