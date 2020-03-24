<?php
include("auth.php");

if(empty($_SESSION['CART'])){
    header("Location: cart.php");
    exit();
}

if(isset($_POST['submitorder'])){
  //  $ORDERDETAILS = implode(', ', ); DIDN'T STORE THE KEY
    $ORDERDETAILS = http_build_query($_SESSION['CART'],'',', ');
    $SUM=$_SESSION['SUMPRICE'];
    $EMAIL=$_SESSION['EMAIL'];
    $QUERY="INSERT INTO ORDERS(PRICE,ORDERDETAILS,USEREMAIL) VALUES('$SUM','$ORDERDETAILS','$EMAIL')";
    $RESULT=mysqli_query($con,$QUERY);
    $ORDERID=mysqli_insert_id($con);
    unset($_SESSION['CART']);
    
}

function getItemDetails($ITEMID, $ATTRIBUTE,$con){
    $ATTRIBUTE=strtoupper($ATTRIBUTE);
    $QUERY =  "SELECT ".$ATTRIBUTE." FROM ITEMS WHERE ID='$ITEMID'";
    return mysqli_fetch_assoc(mysqli_query($con,$QUERY))[$ATTRIBUTE];
}





?>
<html lang="en">
<head>
	<title>Checkout</title>
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
					Checkout
				</h2>

				<span class="txt-m-201 cl0 flex-c-m flex-w">
					<a href="index.html" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
						Home
					</a>

					<span>
						/ Checkout
					</span>
				</span>
			</div>
		</div>
	</section>

	<!-- content page -->
	<div class="bg0 p-t-95 p-b-50">
		<div class="container">
			<!-- Login -->
		
			<!-- enter code -->
		

			<div class="row">
			

				<div class="col-md-12 col-lg-12 p-b-50">
					<div class="how-bor4 p-t-35 p-b-40 p-rl-30 m-t-5">
						<h4 class="txt-m-124 cl3 p-b-11">
							Your order
						<?php	
							
							if(isset($ORDERID)){
							    
							    echo ' ID is <span style="color:green;">'.$ORDERID.'</span></h4></div></div>';
							    
			    
		                      	} 
			
			?>	
						</h4>
						
			
			
		

						<div class="flex-w flex-sb-m txt-m-103 cl6 bo-b-1 bocl15 p-b-21 p-t-18 tohide">
							<span>
								Product
							</span>

							<span>
								Total
							</span>
						</div>
						
				<?php	 $SUM=0;
						    foreach ($_SESSION['CART'] as $ITEMID => $QUANTITY) {
                         
                         $PRICE=getItemDetails($ITEMID, "ITEMPRICE",$con)*$QUANTITY;
                         $SUM+=$PRICE;
					echo	'<div class="flex-w flex-sb-m txt-s-101 cl6 bo-b-1 bocl15 p-b-21 p-t-18 tohide">
							<span>
									'.getItemDetails($ITEMID, "ITEMNAME",$con).'
								<img class="m-rl-3" src="images/icons/icon-multiply.png" alt="icon">
								'.$QUANTITY.'
							</span>

							<span>
									'.($PRICE).'$
							</span>
						</div>';
						    }
						    $_SESSION['SUMPRICE']=$SUM;
						?>

				
					
					
					
					
					
					
					
					
					
						
						<!--  -->
						<div class="flex-w flex-m txt-m-103 bo-b-1 bocl15 p-tb-23 tohide">
							<span class="size-w-61 cl6">
								Subtotal
							</span>

							<span class="size-w-62 cl9 tohide">
								<?php echo $SUM; ?>$
							</span>
						</div>

						<div class="flex-w flex-m txt-m-103 p-tb-23 tohide">
							<span class="size-w-61 cl6">
								Total
							</span>

							<span class="size-w-62 cl10">
									<?php echo $SUM; ?>$
							</span>
						</div>

						<div class="bo-all-1 bocl15 p-b-25 m-b-30 tohide">
							<div class="flex-w flex-m bo-b-1 bocl15 p-rl-20 p-tb-16">
								<input class="m-r-15" id="radio1" type="radio" name="pay" value="payment" checked="checked">
								<label class="txt-m-103 cl6" for="radio1">
									Cash Payment
								</label>
							</div>

							<div class="content-payment bo-b-1 bocl15 p-rl-20 p-tb-15">
								<p class="txt-s-120 cl9">
									Please keep the exact change.
								</p>
							</div>

							<div class="flex-w flex-m p-rl-20 p-t-17 p-b-10">
								<input class="m-r-15" id="radio2" type="radio" name="pay" value="paypal" disabled>
								<label class="txt-m-103 cl6" for="radio2">
									Paypal
								</label>

								<div class="w-full p-l-29 p-t-16">
									<a href="#"><img src="images/icons/paypal.png" alt="IMG"></a>
								</div>
							</div>

							<div class="content-paypal bo-tb-1 bocl15 p-rl-20 p-tb-15 m-tb-10 dis-none">
								<p class="txt-s-120 cl9">
									Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.
								</p>
							</div>

							<div class="p-l-49">
								<a href="#" class="txt-s-120 cl6 hov-cl10 trans-04 p-t-10">
									What is paypal?
								</a>
							</div>								
						</div>
                        <form method="POST" class="tohide">
						<button type="submit" class="flex-c-m txt-s-105 cl0 bg10 size-a-21 hov-btn2 trans-04 p-rl-10">
							Place order
						</button>
						<input name="submitorder">
						</form>
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

	<!-- Footer -->
    <?php include("footer.php"); ?>
	


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	
	
	
		
<?php	if(isset($ORDERID)){
    
    echo '<script>
    $( ".tohide" ).each( function () {
   $(this).hide();
});
    </script>';
    
}
    
    ?>
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