<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>

<meta charset="UTF-8"/>

<title>Mood Munchy</title>
<link rel="icon" type="image/png" href="img/logo_mood_munchy_brown.jpeg">

<meta name="google-site-verification" content="Riw77u0SvAJ0GoPTJ1FQlscTLTlQxP7h298DpD_YyL8" />

<meta property="og:image" content="http://www.moodmunchy.com/img/logo_mood_munchy.png">

<meta name="title" content="Mood Munchy">
<meta property="og:title" content="Mood Munchy">

<meta name="description" content="Mood ho munchy, khao crunchy.">
<meta property="og:description" content="Mood ho munchy, khao crunchy.">

<meta name="author" content="Varsha Mittal">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/theme.css">

<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>

</head>
<?php
$con=mysqli_connect("localhost","u6turj0Vi7","990uB!ukOne}","moodmunchy");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
 $ipaddress = getenv('HTTP_CLIENT_IP')?:
getenv('HTTP_X_FORWARDED_FOR')?:
getenv('HTTP_X_FORWARDED')?:
getenv('HTTP_FORWARDED_FOR')?:
getenv('HTTP_FORWARDED')?:
getenv('REMOTE_ADDR');
mysqli_query($con,"INSERT INTO mm_login (ip_address) VALUES ('$ipaddress')");

mysqli_close($con);
?>
<body>
<!--wrapper start-->
<div class="wrapper" id="wrapper">
	
	<!--header-->
	<header>
	<div class="banner row" id="banner">		
		<div class="parallax text-center" style="background-image: url(img/shakes.jpg);">
			<div class="parallax-pattern-overlay">
				<div class="container text-center" style="height:600px;padding-top:170px;">
					<a href="#"><img id="site-title" class=" wow fadeInDown" wow-data-delay="0.0s" wow-data-duration="0.9s" src="img/logo_mood_munchy_trans.png" alt="logo"/></a>
					<h2 class="intro wow zoomIn" wow-data-delay="0.4s" wow-data-duration="0.9s">Mood Munchy</h2>
					<h4 style="color:white">"One stop for premium snacks and bakes"</h4>
				</div>
			</div>
		</div>
	</div>	
	<div class="menu">
		<div class="navbar-wrapper">
			<div class="container">
				<div class="navwrapper">
					<div class="navbar navbar-inverse navbar-static-top">
						<div class="container">
							<div class="navArea">
								<div class="navbar-collapse collapse">
									<ul class="nav navbar-nav">
										<li class="menuItem active"><a href="#wrapper">Home</a></li>
										<li class="menuItem"><a href="#aboutus">About Us</a></li>
										<li class="menuItem"><a href="#specialties">Specialties</a></li>
										<li class="menuItem"><a href="#gallery">Menu Card</a></li>
										<li class="menuItem"><a href="#contact">Contact Us</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	</header>
		
	<!--about us-->
	<section class="aboutus" id="aboutus">
	<div class="container">
		<div class="heading text-center">
			<img class="dividerline" src="img/sep.png" alt="">
			<h2>About Mood Munchy</h2>
			<img class="dividerline" src="img/sep.png" alt="">
			<h3>Providing you the wide variety of namkeens, sweets, candies and expanding its boundaries over milkshakes, <b>Mood Munchy</b> is spreading its wings over Moradabad with desi and international flavors. So people out there having munchy mood, what are you waiting for?</h3> 
			<h4><span style="color:#cc580c">Mood ho munchy, khao crunchy.</span></h4>
		</div>			
		<div class="row">
			<div class="col-md-4">
				<div class="papers text-center">
					<h4 class="notopmarg nobotmarg">Namkeen</h4>
					<p>
						Namkeen is the Hindi word used to describe a savory flavor. Namkeen is also used as a generic term to describe savory snack foods. Variety in namkeen is worth a reason to give mood munchy a try, isn't it?

					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="papers text-center">
					<h4 class="notopmarg nobotmarg">Beverages</h4>
					<p>
						 There is nothing like a nice cold beverage on a hot summer day to cool off that too with the taste you desire, right? Why not give a try to our Swedesi beverages and blow the heat off these summers? 
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="papers text-center">
					<h4 class="notopmarg nobotmarg">Imported Items</h4>
					<p>
						 Candies, biscuits and chocolates are most beloved items for people of any age, right? How awesome would it be, if you get any of these imported eatables at one place when you are not planning to visit overseas?  
					</p>
				</div>
			</div>
		</div>
	</div>
	</section>
	
	<!--specialties-->
	<section class="specialties" id="specialties">
	<div class="container">
		<div class="heading text-center">
			<img class="dividerline" src="img/sep.png" alt="">
			<h2>Our Specialties</h2>
			<img class="dividerline" src="img/sep.png" alt="">
			<h3>What is good in having the same old flavors with everyday evening tea? There should be excitement, afterall you are going to have something munchy!!! Try out these!</h3>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="restmenuwrap">
					<h3 class="maincat notopmarg text-center">Namkeens</h3>
					<div class="restitem clearfix">
						<div class="rm-thumb" style="background-image: url(img/namkeen.jpg)">
						</div>
						<h5>Paneer Bhujia</h5>
						<h5>Ghatbat</h5>
						<h5>Sem Seeds</h5>
						<h5>Hing Sev</h5>
						<h5>Makka Sev</h5>
						<h5>Ratlami	 Sev</h5>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="restmenuwrap">
					<h3 class="maincat notopmarg text-center">Candies</h3>
					<div class="restitem clearfix">
						<div class="rm-thumb" style="background-image: url(img/candies.jpeg)">
						</div>
						<h5>Rum Ball</h5>
						<h5>Fizzy Cola Cable</h5>
						<h5>Extra Strong Mints</h5>
						<h5>Fruit Jellies</h5>
						<h5>Dark Chocolate Almond</h5>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="restmenuwrap">
					<h3 class="maincat notopmarg text-center">Beverages</h3>
					<div class="restitem clearfix">
						<div class="rm-thumb" style="background-image: url(img/mocktails.jpg)">
						</div>
						<h5>Juices</h5>
						<h5>Mocktails</h5>
						<h5>Milkshakes <font color="red"><blink>Coming Soon!</blink></font></h5>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	</section>
	
	<!--gallery-->
	<section class="gallery" id="gallery">
		<div class="container">
			<div class="heading text-center">
				<img class="dividerline" src="img/sep.png" alt="">
				<h2>Menu Card</h2>
				<img class="dividerline" src="img/sep.png" alt="">
			</div>
			<div class="col-md-12 col-s-6">
			<div id="grid-gallery" class="grid-gallery">

					<section class="grid-wrap">
						<ul class="grid">
							<li class="grid-sizer"></li><!-- for Masonry column width -->				
							<li id = "menuCardLI">
								<figure>
									<a href="docs/Mood Munchy.pdf" target="_blank"><img src="img/namkeenMenu.jpeg" alt=""/></a>
									<figcaption><h3>Namkeen Menu Card</h3></figcaption>
								</figure>
							</li>
							
						</ul>
					</section><!-- // end small images -->
					
					
				</div><!-- // grid-gallery -->
				</div>
			</div>
	</section>
	
	
	<section class="contact" id="contact">
	<div class="container">
		<div class="heading">
				<img class="dividerline" src="img/sep.png" alt="">
				<h2>Contact Us</h2>
				<img class="dividerline" src="img/sep.png" alt="">
				<h3><img id="site-title" class=" wow fadeInDown" wow-data-delay="0.0s" wow-data-duration="0.9s" src="img/logo_mood_munchy.png" alt="logo" width="20px" /> Mood Munchy, Near Sai Mandir Rd Moradabad, Uttar Pradesh 244001<br>
				<img id="site-title" src="img/whatsapp.jpeg" alt="logo" width="30px" style="margin-right: 5px;margin-left: 80px;" />+91-9555424749 
				<img id="site-title" src="img/phone.png" alt="logo" width="40px" style="margin-left: 80px;" />+91-7017348466
				 </h3>
		</div>
	</div>
	 <div class="container w960">
      <div class="row">
		<div class="done">
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">×</button>
				Your message has been sent. Thank you!
			</div>
		</div>
		<div id="map" style="height: 300px; margin-bottom: 10px;"></div>
       <form method="post" action="contact.php" id="contactform">
       <div class = "row">
          <input name="name" type="text" class="contact col-md-4" placeholder="Your Name *" >
          <input name="email" type="email" class="contact col-md-4" placeholder="E-mail address *">
          <input name="mobile" type="mobile" class="contact col-md-3" placeholder="Mobile Number *" required style = "width: 270px; margin-right : 0px;">
          </div>
          
       <div class = "row">
          <textarea name="comment" class="contact col-md-12" placeholder="Message *"></textarea>
          </div>
          <input type="submit" id="submit" class="contact submit" value="Send message">
        </form>
      </div>
    </div>
	</section>
  
	<!--footer-->
	<section class="footer" id="footer">
	<p class="text-center">
		<a href="#wrapper" class="gototop"><i class="fa fa-angle-double-up fa-2x"></i></a>
	</p>
	<div class="container">
		<p>
			&copy; Copyright 2018<br>
		</p>
	</div>
	</section>
	
</div><!--wrapper end-->

<!--Javascripts-->
<script src="js/jquery.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/menustick.js"></script>
<script src="js/parallax.js"></script>
<script src="js/easing.js"></script>
<script src="js/wow.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/masonry.js"></script>
<script src="js/imgloaded.js"></script>
<script src="js/classie.js"></script>
<script src="js/colorfinder.js"></script>
<!-- <script src="js/gridscroll.js"></script> -->
<script src="js/contact.js"></script>
<script src="js/common.js"></script>

<script type="text/javascript">
jQuery(function($) {
$(document).ready( function() {
  //enabling stickUp on the '.navbar-wrapper' class
	$('.navbar-wrapper').stickUp({
		parts: {
		  0: 'banner',
		  1: 'aboutus',
		  2: 'specialties',
		  3: 'gallery',
		  4: 'contact'
		},
		itemClass: 'menuItem',
		itemHover: 'active',
		topMargin: 'auto'
		});
	});
});
</script>
<script>
      function initMap() {
        var uluru = {lat:28.8678218, lng:78.7537218};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8fvN5Qh4vvx3W9Q9oexe4PnL61x83gug&callback=initMap">
    </script>
</body>
</html>