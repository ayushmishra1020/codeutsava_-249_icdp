<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "connect.php" ;
include "header_other.php" ;
?>

	<!-- //banner --> 
	<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "connect.php";





 
    $categoryf=$_POST['search'];
 
  
          // fetch all records
          $sql = "SELECT * FROM product WHERE category='$categoryf' or pname='$categoryf'";
         
            $stmt = $con->prepare($sql);
            $stmt->execute();
            
          
 
// to verify if a record is found
$num = $stmt->rowCount();
 


    
?>

	<!--<div class="w3ls-heading">
				<h2 class="h-two"><?php //echo $cat?></h2>
				<p class="sub two"></p>
			</div>-->
			<div class="row" style="text-align:center;">
<?php
while($num>0)
{
?>
<div class="col-lg-4 ">
<?php
$row = $stmt->fetch();

if($num)
{
	?>

 <img  style="box-shadow: 10px 10px 5px grey;" src="<?php echo $row["image"]; ?>" alt="<?php echo $row["image"]; ?>" height="200px" width="200px">

<br>


<br>
<b><h3><?php
$var1=ucfirst($row['pname']) ;
echo $var1;
?></h3></b>
<br>
<b>Price &nbsp; Rs:</b>
<?php
echo $row['price'];
?>
<br>

<?php
if($row['quantity']==1)
	echo "Hurry Up..Just 1 Left!!";
else if($row['quantity']>1)
	echo "Available";
else
	echo "Unavailable";
}
else
{}
$num=$num-1;
?>
<br>
<form method="post" action="addtocart.php?action=add&id=<?php echo $row["id"];?>">
<input type="hidden" name="hidden_name" value="<?php echo $row["pname"];?>"/>
<input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>"/>
Quantity:<center><input type="text" name="quantity" value="1" class="form-control"/ style="width:50px"></center>
<input type="submit" name="add_to_cart" value="Add to Cart"></button>
</form>

<form method="post" action="addtocart.php?action=add&id=<?php echo $row["id"];?>">
<input type="hidden" name="hidden_name" value="<?php echo $row["pname"];?>"/>
<input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>"/>
<input type="hidden" name="quantity" value="1" class="form-control"/ style="width:50px"></center>
<input type="submit" name="buy_now" value="Buy Now"></button>
</form>
</div>
<div class="col-lg-4 ">
<?php
$row = $stmt->fetch();

if($num)
{
	?>

 <img  style="box-shadow: 10px 10px 5px grey;" src="<?php echo $row["image"]; ?>" alt="<?php echo $row["image"]; ?>" height="200px" width="200px">

<br>


<br>
<b><h3><?php
$var1=ucfirst($row['pname']) ;
echo $var1;
?></h3></b>
<br>
<b>Price &nbsp; Rs:</b>
<?php
echo $row['price'];
?>
<br>

<?php
if($row['quantity']==1)
	echo "Hurry Up..Just 1 Left!!";

}
else
{}
$num=$num-1;
?>
<br>
<form method="post" action="addtocart.php?action=add&id=<?php echo $row["id"];?>">
<input type="hidden" name="hidden_name" value="<?php echo $row["pname"];?>"/>
<input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>"/>
Quantity:<center><input type="text" name="quantity" value="1" class="form-control"/ style="width:50px"></center>
<input type="submit" name="add_to_cart" value="Add to Cart"></button>
</form>

<form method="post" action="addtocart.php?action=add&id=<?php echo $row["id"];?>">
<input type="hidden" name="hidden_name" value="<?php echo $row["pname"];?>"/>
<input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>"/>
<input type="hidden" name="quantity" value="1" class="form-control"/ style="width:50px"></center>
<input type="submit" name="buy_now" value="Buy Now"></button>
</form>
</div>
<div class="col-lg-4 ">
<?php
$row = $stmt->fetch();

if($num)
{
	?>

 <img  style="box-shadow: 10px 10px 5px grey;" src="<?php echo $row["image"]; ?>" alt="<?php echo $row["image"]; ?>" height="200px" width="200px">

<br>


<br>
<b><h3><?php
$var1=ucfirst($row['pname']) ;
echo $var1;
?></h3></b>
<br>
<b>Price &nbsp; Rs:</b>
<?php
echo $row['price'];
?>
<br>

<?php
if($row['quantity']==1)
	echo "Hurry Up..Just 1 Left!!";

}
else
{}
$num=$num-1;
?>
<br>
<form method="post" action="addtocart.php?action=add&id=<?php echo $row["id"];?>">
<input type="hidden" name="hidden_name" value="<?php echo $row["pname"];?>"/>
<input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>"/>
Quantity:<center><input type="text" name="quantity" value="1" class="form-control"/ style="width:50px"></center>
<input type="submit" name="add_to_cart" value="Add to Cart"></button>
</form>

<form method="post" action="addtocart.php?action=add&id=<?php echo $row["id"];?>">
<input type="hidden" name="hidden_name" value="<?php echo $row["pname"];?>"/>
<input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>"/>
<input type="hidden" name="quantity" value="1" class="form-control"/ style="width:50px"></center>
<input type="submit" name="buy_now" value="Buy Now"></button>
</form>
</div>
<?php
}
?>
</div>
			
	<br>
<br>
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<i class="fa fa-pagelines" aria-hidden="true"></i>Growing
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="images/s1.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
	<!-- footer start here --> 
	<div class="footer-agile">
		<div class="container">
			<div class="footer-agileinfo"> 
				<div class="col-md-5 col-sm-5 footer-wthree-grid"> 
					<div class="agileits-w3layouts-tweets">  
						<h5><a href="index.html"><i class="fa fa-pagelines" aria-hidden="true"></i>Growing</a></h5> 
						<div class="social-icon footerw3ls">
							<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
							<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a> 
							<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>  
						</div>
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
	<!-- FlexSlider --> 
	<script defer src="js/jquery.flexslider.js"></script>
		<script type="text/javascript">
		
			$(window).load(function(){
			  $('.flexslider').flexslider({
				animation: "slide",
				start: function(slider){
				  $('body').removeClass('loading');
				}
			  });
			});
		</script>
	<!-- End-slider-script --> 
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