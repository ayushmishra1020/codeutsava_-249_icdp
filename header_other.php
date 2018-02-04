<?php session_start();?>
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
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" property="" />   
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
							<li><a href="index.php" class="w3ls-hover active">Home</a></li>
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
							<li><a href="news.php" class="btn w3ls-hover">News & Updates</a></li>   
							<li><a href="index.php#organic" class="btn w3ls-hover">Organic Farming</a></li>
						 <li>		<?php
                        if (!isset($_SESSION['username'])){
                        ?>
                        <a href="login.php" class="btn w3ls-hover">Login</a>
                        <?php }
                        else
                        {
                        ?>
						 <a href="logoutscript.php" class="btn w3ls-hover">Logout</a>
                        <?php }?></li>
							
							<li><div class="search-container" style="margin-top:-20px;">
										<form action="product1.php" method="post" id="labnol">
      <input id="transcript" type="text" placeholder="Search.." name="search" style="background: transparent;border-top:none;border-right:none;border-left:none;color:white;border-bottom-color: white;">
     <i class="fa fa-microphone" onclick="startDictation();"></i>
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
		
	</div><br>