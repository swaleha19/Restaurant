<?php session_start(); ?>
<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Savory &mdash; Free Website Template, Free HTML5 Template by GetTemplates.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="../css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../css/magnific-popup.css">

	<!-- Bootstrap DateTimePicker -->
	<link rel="stylesheet" href="../css/bootstrap-datetimepicker.min.css">



	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="../css/style.css">

	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="../js/respond.min.js"></script>
	<![endif]-->

	</head>
	<style media="screen">
		.mt20{
			margin:30px;
		}
	input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
	margin: 0;
}
.button7 {
    background: #31bb4e;
    background-image: -webkit-linear-gradient(top, #31bb4e, #3faa2e);
    background-image: -moz-linear-gradient(top, #31bb4e, #3faa2e);
    background-image: -ms-linear-gradient(top, #31bb4e, #3faa2e);
    background-image: -o-linear-gradient(top, #31bb4e, #3faa2e);
    background-image: linear-gradient(top, #31bb4e, #3faa2e);
    -webkit-border-radius: 28;
    -moz-border-radius: 28;
		font-size: x-large;
    border-radius: 28px;
    color: #ffffff;
    border: 0px;
    padding: 4px 20px 4px 20px;
    text-decoration: none;
}


.button7:hover {
	background: #259a25;
	background-image: -webkit-linear-gradient(top, #259a25, #afaf45);
	background-image: -moz-linear-gradient(top, #259a25, #afaf45);
	background-image: -ms-linear-gradient(top, #259a25, #afaf45);
	background-image: -o-linear-gradient(top, #259a25, #afaf45);
	background-image: linear-gradient(top, #259a25, #afaf45);
	text-decoration: none;
}
.button7:focus{
	outline: none;
}
.form-control{
	height: 36px;
	width:100%;
}
.warning{
	color:red;
}
	</style>
	<body>

	<div class="gtco-loader"></div>

	<div id="page">


	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">

			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="home.php">Savory <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li class="active"><a href="cart.php">Cart</a></li>
						<li class="has-dropdown">
							<a href="services.php">Services</a>
							<ul class="dropdown">
								<li><a href="#">Food Catering</a></li>
								<li><a href="#">Wedding Celebration</a></li>
								<li><a href="#">Birthday's Celebration</a></li>
							</ul>
						</li>
						<li><a href="contact.html">Contact</a></li>
						<li class="btn-cta"><a href="#"><span>Reservation</span></a></li>
					</ul>
				</div>
			</div>

		</div>
	</nav>

	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">


					<div class="row row-mt-15em">
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1 class="cursive-font">It's our pleasure to serve!</h1>
						</div>

					</div>


				</div>
			</div>
		</div>
	</header>



	<div id="gtco-features">
		<div class="gtco-container">
			<div class="container-fluid">
        <div class="row">
  				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
  					<h2 class="cursive-font">Your Cart</h2>

  				</div>
  			</div>
        <div class='row cursive-font' style='color:white; font-size:x-large;'>
          <div class='col-sm-4 col-lg-8' >
        <?php if (isset($_SESSION['cart_id'])) {
					include 'api/connection.php';
					$qr="SELECT c.quantity,f.food_name,f.food_price,fc.food_category_image as image FROM `cart_details` c
					right outer join
					(SELECT * FROM food_name)f
					ON (c.cart_id='$_SESSION[cart_id]' AND c.food_id=f.food_id)
					RIGHT OUTER JOIN
					(SELECT * FROM food_category WHERE food_category_id IN(SELECT food_category_id FROM food_name WHERE food_id IN(SELECT food_id FROM cart_details WHERE cart_id='1')))fc
					ON (c.cart_id='$_SESSION[cart_id]' AND c.food_id=f.food_id AND fc.food_category_id=f.food_category_id)";
					$result = mysqli_query($con,$qr);
					$tot=0;
					$itot=0;
					while ($row=mysqli_fetch_assoc($result)) {
						$itot=$row['food_price']*$row['quantity'];
						echo "
						<div class='row mt20'>
						<div class='col-lg-2 col-sm-0 col-xs-2 ' > <img src='../FoodCatPic/$row[image]' alt='image' width='100%'> </div>
						<div class='col-lg-4 col-sm-3 col-xs-3 ' >$row[food_name]</div>
						<div class='col-lg-2 col-sm-1 col-xs-2 ' style='padding:0;'>Rs.$row[food_price]</div>
						<div class='col-lg-1 col-sm-1 col-xs-1 ' style='padding:0;'>x</div>
						<div class='col-lg-1 col-sm-1 col-xs-1 ' style='padding:0;' >$row[quantity]</div>
						<div class='col-lg-2 col-sm-2 col-xs-2'>
						=&nbsp;&nbsp;$itot
						</div>
						</div>
						";
						$tot+=$itot;
					}
         ?>

			    </div>
			    <div class='col-lg-4 col-sm-4 ' >
						<div class='col-lg-6 col-sm-2'>
							TOTAL
						</div>
						<div class='col-lg-6 col-sm-2' style='text-align:right;'>
							<?php echo"$tot";?>
						</div>
						<br><br><br>
						<input type="button" name="" value="Complete Order" class="button7" style="float:right;">
					</div>
					<?php
				} else {?>
						<div class='col-lg-6 col-sm-2'>
							No items recognised
						</div>
						<div class='col-lg-6 col-sm-2'>
							<a href="home.php" style="color:white"> Click Here to go to menu </a>
						</div>
			  </div>
			<?php } ?>
			</div>
<!--
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2 class="cursive-font">Our Services</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-face-smile"></i>
						</span>
						<h3>Happy People</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-thought"></i>
						</span>
						<h3>Creative Culinary</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-truck"></i>
						</span>
						<h3>Food Delivery</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-face-smile"></i>
						</span>
						<h3>Happy People</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-thought"></i>
						</span>
						<h3>Creative Culinary</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-truck"></i>
						</span>
						<h3>Food Delivery</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>

			</div>
		</div>
	</div>


	<div class="gtco-cover gtco-cover-sm" style="background-image: url(images/img_bg_1.jpg)"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container text-center">
			<div class="display-t">
				<div class="display-tc">
					<h1>&ldquo; Their high quality of service makes me back over and over again!&rdquo;</h1>
					<p>&mdash; John Doe, CEO of XYZ Co.</p>
				</div>
			</div>
		</div>
	</div>

	<div id="gtco-subscribe">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font">Subscribe</h2>
					<p>Be the first to know about the new templates.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Your Email">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<button type="submit" class="btn btn-default btn-block">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
-->
</div>
</div>
	<footer id="gtco-footer" role="contentinfo" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row row-pb-md">
<!--



				<div class="col-md-12 text-center">
					<div class="gtco-widget">
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
							<li><a href="#"><i class="icon-mail2"></i> info@GetTemplates.co</a></li>
							<li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
						</ul>
					</div>
					<div class="gtco-widget">
						<h3>Get Social</h3>
						<ul class="gtco-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
-->
				<div class="col-md-12 text-center copyright">
					<p><small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
						<small class="block">Designed by <a href="http://gettemplates.co/" target="_blank">GetTemplates.co</a> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small></p>
				</div>

			</div>



		</div>
	</footer>
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="../js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="../js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="../js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="../js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/magnific-popup-options.js"></script>

	<script src="../js/moment.min.js"></script>
	<script src="../js/bootstrap-datetimepicker.min.js"></script>


	<!-- Main -->
	<script src="../js/main.js"></script>

	</body>
</html>
