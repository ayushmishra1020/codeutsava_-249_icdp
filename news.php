<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>ICDP</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Growing Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="scss/style.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style_news.css" type="text/css" rel="stylesheet" media="all">
<link href="css/lightcase.css" rel="stylesheet" type="text/css" />
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
  <link rel='stylesheet prefetch' href='https://codepen.io/ChynoDeluxe/pen/eJPeEL'>
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- //js -->
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts -->
</head>
<body>
<!-- banner -->
	<div class="banner-1">
			<div class="header agileinfo-header"><!-- header -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1 style="margin-left:30px;margin-top:5px;"><a href="index.php"><i class="fa fa-pagelines" aria-hidden="true"></i>ICDP</a></h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="topnav" style="float:right;margin-left:10px;">
						<ul class="nav navbar-nav navbar-left" style="margin-left:-20px;">
							<li><a href="index.html" class="w3ls-hover active">Home</a></li>
								<li><a href="#" class="dropdown-toggle btn w3ls-hover" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="product.php?category=Water Soluble Ferilizers">Water-Soluble Ferilizers</a></li>
									<li><a href="product.php?category=Agro chemicals">Agro-chemicals</a></li>
									<li><a href="product.php?category=Bio Fertilizers">Bio-Fertilizers</a></li>
									<li><a href="product.php?category=Seeds">Seeds</a></li>
									<li><a href="product.php?category=Plants Growth Promoters">Plants Growth Promoters</a></li>
									<li><a href="product.php?category=Micro Nutrients">Micro Nutrients</a></li>
								</ul>
							</li>
							<li><a href="#news" class="btn w3ls-hover">News & Updates</a></li>
							<li><a href="index.php#organic" class="btn w3ls-hover">Organic Farming</a></li>
						 <li>		<?php
                        if (!isset($_SESSION['username'])){
                        ?>
                        <a href="register.php" class="btn w3ls-hover">Login</a>
                        <?php }
                        else
                        {
                        ?>
						 <a href="logoutscript.php" class="btn w3ls-hover">Logout</a>
                        <?php }?></li>

							<li><div class="search-container" style="margin-top:-20px;">
							<form action="product1.php" method="post">
      <input type="text" placeholder="Search.." name="search" style="background: transparent;border-top:none;border-right:none;border-left:none;color:white;border-bottom-color: white;">
      <button type="submit"><i class="fa fa-search"></i></button>

	  </form>
  </div></li>
 <li><div id="google_translate_element" style="padding-top:0px;padding-left:100px;padding-right:-40px;"></div><script type="text/javascript">
       function googleTranslateElementInit() {
         new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,hi,bn,kn,te,ta,gu,ur', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 </li>
</ul>
						<div class="clearfix"> </div>
					</div>
				</div><!-- //container-fluid -->
			</nav>
		</div><!-- //header -->
</div>
<?php

$urlsources=file_get_contents("https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=6d7928cc479140359a9ec2445bc96418");
$urlsourcesarray= json_decode($urlsources,true);

$sources = $urlsourcesarray['articles'];
for($i=0;$i<count($sources);$i++){
}
?>
<div class="banner-bottom">
  <div class="container">
  <div class="w3ls-heading">
    <h2 class="h-two">News</h2>
    <p class="sub two">Stuff that keeps you updated</p>
  </div>
  <div class="blog-card">
	<div class="photo photo1"></div>
	<ul class="details">
	</ul>
	<div class="description">
		<h1>Price Hike</h1>
		<h2>Onion prices skyrocket to Rs 80/kg in Delhi</h2>
		<p class="summary"> Retail onion prices have touched Rs 80 per kg in the national capital owing to tight supply, while a similar spike is seen in other cities as well, as per the trade data.</p>
		<a href="https://timesofindia.indiatimes.com/business/india-business/onion-prices-skyrocket-to-rs-80/kg-in-delhi/articleshow/61832824.cms">Read More</a>
	</div>
</div>

<div class="blog-card alt ">
	<div class="photo photo2"></div>
	<ul class="details">
	</ul>
	<div class="description">
		<h1>Its time for profit</h1>
		<h2>MSP of rabi crops raised to boost production</h2>
		<p class="summary">The government on Tuesday increased the minimum support price (MSP) of six rabi (winter-sown) crops - wheat, mustard, barley, masoor (lentil), gram and safflower - for the crop year 2017-18.</p>
		<a href="https://timesofindia.indiatimes.com/business/india-business/government-hikes-msp-for-wheat-and-pulses/articleshow/61198578.cms">Read More</a>
	</div>
</div>

<div class="blog-card ">
<div class="photo photo3"></div>
<ul class="details">
</ul>
<div class="description">
  <h1>Production estimated to fall</h1>
  <h2>Kharif foodgrain output may fall 2.78%: Govt estimates</h2>
  <p class="summary"> India's summer-sown foodgrain production is likely to fall nearly 3 per cent , dashing hopes of higher farm income, because of erratic rainfall and farmers shifting to other remunerative crops.</p>
  <a href="https://timesofindia.indiatimes.com/business/india-business/kharif-foodgrain-output-may-fall-2-78-govt-estimates/articleshow/60837520.cms">Read More</a>
</div>
</div>

<div class="blog-card alt ">
	<div class="photo photo4"></div>
	<ul class="details">
	</ul>
	<div class="description">
		<h1>President reviews budget</h1>
		<h2>Addressing farm problems government's highest priority: President</h2>
		<p class="summary">In his address to the first day of the Budget session, Kovind said the government schemes were aimed at removing farmers' hardships and doubling their income.</p>
		<a href="https://timesofindia.indiatimes.com/business/india-business/addressing-farm-problems-governments-highest-priority-president/articleshow/62712171.cms">Read More</a>
	</div>
</div>
</div>
</div>

	<!-- //banner -->
<!-- portfolio -->


  <div class="banner-bottom">
    <div class="container">
    <div class="w3ls-heading">
      <h2 class="h-two">Schemes</h2>
      <p class="sub two"></p>
    </div>

				<div class="blog-card">
				<div class="photo photo5"></div>
				<ul class="details">
				</ul>
				<div class="description">
					<h1>NFSM</h1>
					<h2>National Food Security Mission</h2>
					<p class="summary">To increase the production of rice, wheat and pulses. The mission is made to produce 25 million tonnes of foodgrains comprising 10 million tonnes of rice, 8 million tonnes of wheat and 4 million tonnes of pulses and 3 million tonnes of coarse cereals.</p>
					<a href="http://nfsm.gov.in/">Read More</a>
				</div>
			</div>

			<div class="blog-card alt ">
				<div class="photo photo5"></div>
				<ul class="details">
				</ul>
				<div class="description">
					<h1>PMFBY</h1>
					<h2>Pradhan Mantri Fasal Bima Yojana</h2>
					<p class="summary">The farmers’ premium has been kept at a maximum of 2 per cent for foodgrains and oilseeds, and up to 5 per cent for horticulture and cotton crops.</p>
					<a href="http://agri-insurance.gov.in/pmfby.aspx">Read More</a>
				</div>
			</div>

			<div class="blog-card ">
			<div class="photo photo5"></div>
			<ul class="details">
			</ul>
			<div class="description">
			  <h1>MUDRA Bank</h1>
			  <h2>MUDRA Bank will refinance Micro-Finance Institutions through a Pradhan Mantri Mudra Yojana (PMMY)</h2>
			  <p class="summary">The Finance Minister has proposed to create a Micro Units Development Refinance Agency (MUDRA) Bank, with a corpus of Rs. 20,000 crore, and credit guarantee corpus of 3,000 crore, which will refinance Micro-Finance Institutions through a PMMY.</p>
			  <a href="https://www.mudra.org.in/">Read More</a>
			</div>
			</div>

      <div class="clearfix"> </div>
    </div>
  </div>
  </div>



<!-- portfolio -->
	<!-- footer start here -->
	<div class="footer-agile">
		<div class="container">
			<div class="footer-agileinfo">
				<div class="col-md-5 col-sm-5 footer-wthree-grid">
					<div class="agileits-w3layouts-tweets">
						<h5><a href="index.html"><i class="fa fa-pagelines" aria-hidden="true"></i>Growing</a></h5>
					</div>
					<p>Aenean vitae metus sit amet purus sodales blandit. Nullam ut dolor eu urna viverra semper. Mauris est odio, laoreet laoreet sapien non, sollicitudin bibendum nulla.</p>
				</div>
				<div class="col-md-3 col-sm-3 footer-wthree-grid">
					<h3>Quick Links</h3>
					<ul>
						<li><a href="index.html"><span class="glyphicon glyphicon-menu-right"></span> Home</a></li>
						<li><a href="about.html"><span class="glyphicon glyphicon-menu-right"></span> About</a></li>
						<li><a href="gallery.html"><span class="glyphicon glyphicon-menu-right"></span> Gallery</a></li>
						<li><a href="codes.html"><span class="glyphicon glyphicon-menu-right"></span> Short Codes</a></li>
						<li><a href="contact.html"><span class="glyphicon glyphicon-menu-right"></span> Contact</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-4 footer-wthree-grid">
					<h3>Contact Info</h3>
					<ul>
						<li>123 Broome St,2nd Block</li>
						<li>NY 10002, New York</li>
						<li>Phone: +01 111 222 3333</li>
						<li><a href="mailto:info@example.com"> mail@example.com</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="copy-right">
				<p>© 2017 Growing . All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank"> W3layouts.</a></p>
			</div>
		</div>
	</div>
	<!-- //footer end here -->
	<!-- light-case -->
	<script src="js/lightcase.js"></script>
	<script>
		$('.showcase').lightcase();
	</script>
	<!-- //light-case -->
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();

			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>
