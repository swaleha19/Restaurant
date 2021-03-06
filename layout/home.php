<?php require 'session.php'; ?>
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
	<title>RK Restaurant &mdash; Free Website Template, Free HTML5 Template by GetTemplates.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="" />

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
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<style media="screen">
	input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
	margin: 0;
}
.button7 {
    background: #f1bb4e;
    background-image: -webkit-linear-gradient(top, #f1bb4e, #efaa2e);
    background-image: -moz-linear-gradient(top, #f1bb4e, #efaa2e);
    background-image: -ms-linear-gradient(top, #f1bb4e, #efaa2e);
    background-image: -o-linear-gradient(top, #f1bb4e, #efaa2e);
    background-image: linear-gradient(top, #f1bb4e, #efaa2e);
    -webkit-border-radius: 28;
    -moz-border-radius: 28;
    border-radius: 28px;
    font-family: serif;
    color: #ffffff;
    border: 0px;
    padding: 4px 20px 4px 20px;
    text-decoration: none;
}


.button7:hover {
	background: #f59a25;
	background-image: -webkit-linear-gradient(top, #f59a25, #efaf45);
	background-image: -moz-linear-gradient(top, #f59a25, #efaf45);
	background-image: -ms-linear-gradient(top, #f59a25, #efaf45);
	background-image: -o-linear-gradient(top, #f59a25, #efaf45);
	background-image: linear-gradient(top, #f59a25, #efaf45);
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
        <div class="col-sm-1">
           <img src="logo.png" width="100%" style="">
        </div>
				<div class="col-sm-3 col-xs-12">
					<div id="gtco-logo"><a href="home.php">Chase the flavors<em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="cart.php">Cart</a></li>
						<li class="has-dropdown">
							<a href="#">Services</a>
							<ul class="dropdown">
								<li><a href="#">Food Catering</a></li>
								<li><a href="#">Wedding Celebration</a></li>
								<li><a href="#">Birthday's Celebration</a></li>
							</ul>
						</li>
						<li><a href="contact.html">Contact</a></li>
						<?php if (!isset($_SESSION['user_id'])) { ?>
						<li class="btn-cta"><a href="#login" data-toggle="modal"><span>Login</span></a></li>
						<li class="btn-cta"><a href="#register" data-toggle="modal"><span>Register</span></a></li>
					<?php }else{ ?>
						<li class="btn-cta"><a href="api/logout.php"><span>Logout</span></a></li>
						<?php } ?>
					</ul>
				</div>
			</div>

		</div>
	</nav>
<script>
function msg(){
	alert("A");
	var e=/^(?=.*?[A-Z])(?=(.*[a-z]){1,})(?=(.*[\d]){1,})(?=(.*[\W]){1,})(?!.*\s).{8,}$/
	var p=document.getElementById("u_pass").value;
	if(!e.test(p)){
	document.getElementById("pp").innerHTML="password must be 1 upper and 1 Lower case and 8 char";
	}
	else {

	document.getElementById("pp").innerHTML="valid";
	}

}



</script>

		<div id='login' class='modal fade' role='dialog'>
		<div class='modal-dialog'>

		<!-- Modal content-->
		<div class='modal-content'>
		<div class='modal-header'>
		<button type='button' class='close' data-dismiss='modal'>&times;</button>
		<h4 class='modal-title'>LOGIN</h4>
		</div>
		<div class='modal-body'>
		<p>
			<div class="container" style="width:100%">
				<form id="lgn_form">
				<p class='warning' id='invalid' hidden>Invalid Username or Password</p>
				<div class="row">
					Username or Email
				</div><br>
				<div class="row">
					<input type="text" id='u_login' class='form-control' name="uname" placeholder="Username or Email">
					<p id="loginmsg"></p>
				</div><br>
				<div class="row">
					Password
				</div><br>
				<div class="row">
					<input type="password" id="u_pass" class='form-control' name="pass"  onblur="msg()" placeholder="Password">
								<div id="pp">aa</div>
				</div><br>
				<div class="row">
					<div class="col-lg-2 col-sm-2">
						<button type="button" class="btn" id="lgn" name="button">Login</button>
					</div>
				</div>
			</form>
			</div>
		</p>
		</div>
		<div class='modal-footer'>
		<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
		</div>
		</div>

		</div>
		</div>

		<div id='register' class='modal fade' role='dialog'>
		<div class='modal-dialog'>

		<!-- Modal content-->
		<div class='modal-content'>
		<div class='modal-header'>
		<button type='button' class='close' data-dismiss='modal'>&times;</button>
		<h4 class='modal-title'>REGISTER</h4>
		</div>
		<div class='modal-body'>
			<form id="form">
				<p>
					<div class="container" style="width:100%">
						<div class="row">
							Name
						</div><br>
						<div class="row">
							<input type="text" class='form-control' id="name" name="name" value="">
						</div><br>
						<div class="row">
							Username
						</div><br>
						<div class="row">
							<input type="text" class='form-control' id="uname" name="uname" value=""><p id='unamenotexists' hidden class='warning'></p>
						</div><br>
						<div class="row">
							Email
						</div><br>
						<div class="row">
							<input type="text" class='form-control' name="email" id="email" value=""><p id='emailalreadyregisered' hidden class='warning'></p>
						</div><br>
						<div class="row">
							Password
						</div><br>
						<div class="row">
							<input type="password" class='form-control' name="pass" value="" id="pass">
						</div><br><div class="row">
							Confirm Password
						</div><br>
						<div class="row">
							<input type="password" class='form-control' name="cpass" value="" id="cpass"><p id='passnotmatch' hidden class='warning'></p>
						</div><br><div class="row">
							Mobile Number
						</div><br>
						<div class="row">
							<input type="number" class='form-control' name="mobile" id="mobile" value=""><p class='warning' id='mobileregistered' hidden></p>
						</div><br>
						<div class="row">
							<button type="button" id="reg" class="btn" name="button">Register</button>
						</div>
					</div>
			</form>
		</p>
		</div>
		<div class='modal-footer'>
		<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
		</div>
		</div>

		</div>
		 </div>


	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image:url('../FoodCatPic/sugary-restaurant-meals-ocharleys-babybackribs-500x375.jpg')">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Where the flavor inebriates you <a href="http://gettemplates.co" target="_blank"></a></span>
							<h1 class="cursive-font">RK Restaurant</h1>
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">

									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3 class="cursive-font">Table Reservation</h3>
											<form action="#">
												<div class="row form-group">
													<div class="col-md-12">
														<label for="activities">Persons</label>
														<select name="#" id="activities" class="form-control">
															<option value="">Persons</option>
															<option value="">1</option>
															<option value="">2</option>
															<option value="">3</option>
															<option value="">4</option>
															<option value="">5+</option>
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Date</label>
														<input type="text" id="date" class="form-control">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Time</label>
														<input type="text" id="time" class="form-control">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="Reserve Now">
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
			</div>
		</div>
	</header>



	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font primary-color">Popular Dishes</h2>
					<p></p>
				</div>
			</div>
			<div class="row"><?php
        include 'api/connection.php';
        $qr = "SELECT * FROM food_category";
        $res = mysqli_query($con,$qr);
        while($row=mysqli_fetch_assoc($res)){
         echo "<div class='col-lg-4 col-md-4 col-sm-6'><input type='text' class='cat_id' hidden value='$row[food_category_id]'>
          <a href='#$row[food_category_id]' data-toggle='modal' target='#$row[food_category_name]' class='fh5co-card-item'>
            <figure>
              <div class='overlay'><i class='ti-plus'></i></div><center>
              <img src='../FoodCatPic/$row[food_category_image]' alt='Image' class='img-responsive'></center>
            </figure>
            <div class='fh5co-text'>
              <h2>$row[food_category_name]</h2>
              <p></p>
              <p><span class='price cursive-font'></span></p>
            </div>
          </a>
        </div>
				<div id='$row[food_category_id]' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class='modal-title'>$row[food_category_name]</h4>
      </div>
      <div class='modal-body'>
        <p>
				";
				$query = "SELECT * FROM food_name WHERE food_category_id = $row[food_category_id]";
				$result2 = mysqli_query($con,$query);
				while ($rw=mysqli_fetch_assoc($result2)) {
					echo "<div class='container' style='width:100%'><div class='row' style='margin:10px 0px;font-family:cursive;'><div class='col-lg-6 col-sm-3'>$rw[food_name]</div><div class='col-lg-2 col-sm-1'>Rs. $rw[food_price]</div><div class='col-lg-2'><input type='number' class='form-control' style='height:30px;width:100%;' id='QF$rw[food_id]'></div><div class='col-lg-2'><button class='button7 add_product' id='F$rw[food_id]'>ADD</button></div></div></div>";
				}
				echo"</p>
      </div>
    	<div class='modal-footer'>
        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
      </div>
    </div>

  </div>
</div>";
      }
        ?>

			</div>
		</div>
	</div>

	<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2 class="cursive-font">Our Services</h2>
					<p></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-face-smile"></i>
						</span>
						<h3>Happy People</h3>
						<p></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-thought"></i>
						</span>
						<h3>Creative Culinary</h3>
						<p></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-truck"></i>
						</span>
						<h3>Food Delivery</h3>
						<p></p>
					</div>
				</div>


			</div>
		</div>
	</div>











	<footer id="gtco-footer" role="contentinfo" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row row-pb-md">




				<div class="col-md-12 text-center">
					<div class="gtco-widget">
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i>7587428786</a></li>
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
	<script type="text/javascript">
		$("#reg").click(function(){
			$.ajax({
				type:"POST",
				url:"api/register.php",
				data: new FormData(document.getElementById('form')),
				processData:false,
				cache:false,
				contentType:false,
				dataType:'json'
			}).done(function(data){
				if (data.status == 'success') {
					alert("Registered Successfully");
				}	else {
					alert("Error occured. Try again later.");
				}
			});
		});
		$("#lgn").click(function(){
			$("#invalid").hide();
			$.ajax({
				type:"POST",
				url:"api/login.php",
				data: new FormData(document.getElementById('lgn_form')),
				processData:false,
				cache:false,
				contentType:false,
				dataType:'json'
			}).done(function(data){
				if (data.status == 'success') {
					window.location="home.php";
				}	else {
					$("#invalid").show();
				}
			});
		});
		$(document).on("click",".add_product",function(){
			var id = this.id;
			var x=0;
			for (var i = 1; i < id.length; i++) {
				x=x*10+parseInt(id[i]);
			}
			var quan = $("#Q"+id).val();
			$.post("api/add_product_to_cart.php",{ id:x , quantity:quan },function(data){
					alert(data);
			});
		});
	</script>
</html>
