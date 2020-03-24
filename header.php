	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop">
					<div class="left-header">
						<!-- Logo desktop -->		
						<div class="logo">
							<a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
						</div>	
					</div>
						
					<div class="center-header">
						<!-- Menu desktop -->
						<div class="menu-desktop">
							<ul class="main-menu">
								<li class="active-menu">
									<a href="index.php">Home</a>
								</li>

							<!--	<li>
									<a href="account.php">Account</a>
								</li>-->

								<li>
									<a href="shop.php">Food Items</a>
								</li>

								<li>
									<a href="cart.php">Cart</a>
								
								</li>

								<li>
									<a href="checkout.php">Checkout</a>
								</li>

<?php if(isset($_SESSION['EMAIL'])) echo "<li><a href='logout.php'>Logout</a></li>"; ?>
							
							</ul>
						</div>
					</div>
						
					<div class="right-header">
						<!-- Icon header -->
						<div class="wrap-icon-header flex-w flex-r-m h-full wrap-menu-click p-t-8">
							<div class="h-full flex-m">
								<div class="icon-header-item flex-c-m trans-04 js-show-modal-search">
									<img src="images/icons/icon-search.png" alt="SEARCH">
								</div>
							</div>
								
							<div class="wrap-cart-header h-full flex-m m-l-10 menu-click">
								<div onlclick="window.location='cart.php';" class="icon-header-item flex-c-m trans-04 icon-header-noti" data-notify="<?php if(isset($_SESSION['CART'])) echo sizeof($_SESSION['CART']); else echo '0';?> ">
									<img src="images/icons/icon-cart-2.png" alt="CART">
								</div>

							</div>
						</div>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m h-full wrap-menu-click m-r-15">
				<div class="h-full flex-m">
					<div class="icon-header-item flex-c-m trans-04 js-show-modal-search">
						<img src="images/icons/icon-search.png" alt="SEARCH">
					</div>
				</div>

				<div class="wrap-cart-header h-full flex-m m-l-5 menu-click">
					<div class="icon-header-item flex-c-m trans-04 icon-header-noti" data-notify="2">
						<img src="images/icons/icon-cart-2.png" alt="CART">
					</div>

				
				</div>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="main-menu-m">
				<li>
					<a href="index.php">Home</a>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

			<!--	<li>
					<a href="account.php">Account</a>
				

					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>-->

				<li>
					<a href="shop.php">Food Items</a>
				

					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="cart.php">Cart</a>
				

					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>
				
					<li>
					<a href="checout.php">Checkout</a>
				

					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				

			
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
				<span class="lnr lnr-cross"></span>
			</button>
			
			<div class="container-search-header">
				<form class="wrap-search-header flex-w">
					<button class="flex-c-m trans-04">
						<span class="lnr lnr-magnifier"></span>
					</button>
					<input class="plh1" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>