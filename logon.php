<?php include("db.php");

if(isset($_SESSION['EMAIL'])){
    header("Location: account.php");
    exit();
}


if(isset($_POST['REGISTER'])){
      
      $EMAIL = stripslashes($_REQUEST['EMAIL']); // removes backslashes
	  $EMAIL = strtolower(mysqli_real_escape_string($con,$EMAIL)); //escapes special characters in a string
	  $PASSWORD = stripslashes($_REQUEST['PASSWORD']);
	  $PASSWORD = mysqli_real_escape_string($con,$PASSWORD);
	  
	  $PHONENO = stripslashes($_REQUEST['PHONENO']);
	  $PHONENO = mysqli_real_escape_string($con,$PHONENO);
	  
	  $CITY = stripslashes($_REQUEST['CITY']);
	  $CITY = mysqli_real_escape_string($con,$CITY);
	  
	  $ADDRESS = stripslashes($_REQUEST['ADDRESS']);
	  $ADDRESS = mysqli_real_escape_string($con,$ADDRESS);
	  
	  $NAME = stripslashes($_REQUEST['NAME']);
	  $NAME = mysqli_real_escape_string($con,$NAME);
	  $QUERY = "SELECT * FROM `USERS` WHERE EMAIL='$EMAIL'";
	  $RESULT = mysqli_query($con,$QUERY);
      $ROWCOUNT = mysqli_num_rows($RESULT);
        if($ROWCOUNT){
            $ERROR="<span style='color:red'>Email already used.</span>";
         } else{
            $FNAME = $NAME;
            $LNAME = NULL;
            $NAME=explode(" ",$NAME);
            if(sizeof($NAME>1)){
                $FNAME=$NAME[0];
                $LNAME=$NAME[1];
            } 
            $PASSWORD = md5($PASSWORD);
            $QUERY = "INSERT INTO USERS(FNAME,LNAME,EMAIL,PASSWORD) VALUES('$FNAME','$LNAME','$EMAIL','$PASSWORD')";
            $RESULT = mysqli_query($con,$QUERY);
             if($RESULT){
              $_SESSION['EMAIL'] = $EMAIL;  
			  header('Location: account.php'); exit();
                } else{
                $ERROR = "<span style='color:red'>User Registration Failed.</span>";
            }
        }
}    

if(isset($_POST['LOGIN'])){
        $EMAIL = stripslashes($_REQUEST['EMAIL']); // removes backslashes
		$EMAIL = strtolower(mysqli_real_escape_string($con,$EMAIL)); //escapes special characters in a string
		$PASSWORD = stripslashes($_REQUEST['PASSWORD']);
		$PASSWORD = mysqli_real_escape_string($con,$PASSWORD);
		
        $QUERY = "SELECT * FROM `USERS` WHERE EMAIL='$EMAIL' and PASSWORD='".md5($PASSWORD)."'";
		$RESULT = mysqli_query($con,$QUERY) or die(mysqli_error());
		$ROWS = mysqli_num_rows($RESULT);
        if($ROWS==1){   
			$_SESSION['EMAIL'] = $EMAIL;  
			header('Location: account.php'); exit();
           } else{
            $ERROR="<span style='color:red'>Wrong email or password.</span>";
         }
}


?>
<html lang="en">
<head>
	<title>Customer Logon</title>
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
	<div class="bg0 p-t-95 p-b-50">
		<div class="container">
			<div class="row">
			    <?php if(isset($ERROR)) echo "<center>".$ERROR."</center>"; ?>
				<div class="col-md-6 p-b-50">
					<div class="p-r-15 p-rl-0-lg">
						<h4 class="txt-m-124 cl3 p-b-28">
							Login
						</h4>

						<form class="how-bor3 p-rl-30 p-tb-32" method="POST">
						    <input name="LOGIN">
							<div class="p-b-24">
								<div class="txt-s-101 cl6 p-b-10">
									Username or email address <span class="cl12">*</span>
								</div>

								<input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1" type="email" name="EMAIL">
							</div>

							<div class="p-b-24">
								<div class="txt-s-101 cl6 p-b-10">
									Password <span class="cl12">*</span>
								</div>

								<input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1" type="password" name="PASSWORD">
							</div>

							<div class="flex-w flex-m p-t-15 p-b-10">
								<button class="flex-c-m txt-s-105 cl0 bg10 size-a-39 hov-btn2 trans-04 p-rl-10 m-r-18">
									Login
								</button>

							
							</div>

						
						</form>
					</div>
				</div>

				<div class="col-md-6 p-b-50">
					<div class="p-l-15 p-rl-0-lg">
						<h4 class="txt-m-124 cl3 p-b-28">
							Register
						</h4>

						<form class="how-bor3 p-rl-30 p-t-32 p-b-66" method="POST">
						    <input name="REGISTER">
						    
						    <div class="p-b-24">
								<div class="txt-s-101 cl6 p-b-10">
									Full Name
								</div>

								<input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1" type="text" name="NAME">
							</div>
							
							
							 <div class="p-b-24">
								<div class="txt-s-101 cl6 p-b-10">
									Phone Number
								</div>

								<input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1" type="text" name="PHONENO">
							</div>
							
							
							 <div class="p-b-24">
								<div class="txt-s-101 cl6 p-b-10">
									CITY
								</div>

								<input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1" type="text" name="CITY">
							</div>
							
							
							 <div class="p-b-24">
								<div class="txt-s-101 cl6 p-b-10">
									ADDRESS
								</div>

								<input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1" type="text" name="ADDRESS">
							</div>
						    
						    
						    
							<div class="p-b-24">
								<div class="txt-s-101 cl6 p-b-10">
									Email address
								</div>

								<input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1" type="email" name="EMAIL">
							</div>

							<div class="p-b-24">
								<div class="txt-s-101 cl6 p-b-10">
									Password <span class="cl12">*</span>
								</div>

								<input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1" type="text" name="PASSWORD">
							</div>

							<div class="flex-w flex-m p-t-15">
								<button class="flex-c-m txt-s-105 cl0 bg10 size-a-39 hov-btn2 trans-04 p-rl-10 m-r-18">
									Register
								</button>
							</div>
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