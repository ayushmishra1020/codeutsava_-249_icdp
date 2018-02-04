<?php include "header.php";?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "connect.php" ;
?>
		<!-- banner-text -->
		 <br><br>
			<div class="container" style="height:500px;">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="banner-w3lstext">
								<h3>SULPHUR BENTONITE </h3>
								<p>Sulphur is involved in metabolic function of plants and is a constituent of amino acids It leads to improvement in yield of crops and oil content Total sulphur (as S)% by weight  minimum</p>
							</div>
						</li>
						<li>
							<div class="banner-w3lstext">
								<h3>UREA PHOSPHATE  </h3>
								<p>Urea N % by weight minimum - 18 Water soluble phosphate(as P2O5)% by weight minimum - 18 Water soluble potash(asK2O)5 by weight minimum -18</p>
							</div>
						</li>
						<li>
							<div class="banner-w3lstext">
								<h3>LIQUID CONSORTIA</h3>
								<p> It is a consortium of Rhizobium, Azotobector and Acetobector,PSB and KMB is prepared for Nitrogen, Phosphorus and potassium to the crops</p>
							</div>
						</li>
					</ul> 
				</div> 	 
			</div>
		</div>
		<!-- //banner-text -->    
	<!-- //banner --> 
<!-- welcome -->
	<div class="features" >
		<div class="container">
			<div class="w3ls-heading">
				<h2 class="h-two">Best Offers</h2>
				<p class="sub two " style="margin-bottom:-10px;"></p>
			</div>
	 
	<div class="row" style="text-align:center;">

<div class="col-lg-4 ">
<?php
$cater="seeds";
	 $sql = "SELECT * FROM product WHERE category='$cater' and price=(SELECT min(price) from product where category='$cater')";
         
            $stmt = $con->prepare($sql);
            $stmt->execute();
$row = $stmt->fetch();

if($row)
{ ;
	?>

 <img  style="box-shadow: 10px 10px 5px grey;" src="<?php echo $row["image"]; ?>" alt="<?php echo $row["image"]; ?>" height="200px" width="200px">

<br>


<br>
<b><h4><?php
$var1=ucfirst($row['pname']) ;
echo $var1;
?></h4></b>

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

?>
<br>
<form method="post" action="addtocart.php?action=add&category=<?php echo $row["category"]?>&id=<?php echo $row["id"];?>">
<input type="hidden" name="hidden_name" value="<?php echo $row["pname"];?>"/>
<input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>"/>
Quantity:<center><input type="text" name="quantity" value="1" class="form-control"/ style="width:50px"></center><br>
<input type="submit" name="add_to_cart" value="Add to Cart" class="btn btn-primary"></button>
</form>
<br>
<form method="post" action="addtocart.php?action=add&category=<?php echo $row["category"]?>&id=<?php echo $row["id"];?>">
<input type="hidden" name="hidden_name" value="<?php echo $row["pname"];?>"/>
<input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>"/>
<input type="hidden" name="quantity" value="1" class="form-control" style="width:50px"></center>
<input type="submit" name="buy_now" value="Buy Now" class="btn btn-primary"></button>
</form>
</div>
<div class="col-lg-4 ">
<?php
$cater="water soluble ferilizers";
	 $sql = "SELECT * FROM product WHERE category='$cater' and price=(SELECT min(price) from product WHERE category='$cater')";
         
            $stmt = $con->prepare($sql);
            $stmt->execute();
$row = $stmt->fetch();

if($row)
{
	?>

 <img  style="box-shadow: 10px 10px 5px grey;" src="<?php echo $row["image"]; ?>" alt="<?php echo $row["image"]; ?>" height="200px" width="200px">

<br>


<br>
<b><h4><?php
$var1=ucfirst($row['pname']) ;
echo $var1;
?></h4></b>
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

?>
<br>
<form method="post" action="addtocart.php?action=add&id=<?php echo $row["id"];?>">
<input type="hidden" name="hidden_name" value="<?php echo $row["pname"];?>"/>
<input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>"/>
Quantity:<center><input type="text" name="quantity" value="1" class="form-control"/ style="width:50px"></center><br>
<input type="submit" name="add_to_cart" value="Add to Cart" class="btn btn-primary"></button>
</form>
<br>
<form method="post" action="addtocart.php?action=add&id=<?php echo $row["id"];?>">
<input type="hidden" name="hidden_name" value="<?php echo $row["pname"];?>"/>
<input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>"/>
<input type="hidden" name="quantity" value="1" class="form-control"/ style="width:50px"></center>
<input type="submit" name="buy_now" value="Buy Now" class="btn btn-primary"></button>
</form>
</div>
<div class="col-lg-4 ">
<?php
$cater="bio fertilizers";
	 $sql = "SELECT * FROM product WHERE category='$cater' and price=(SELECT min(price) from product WHERE category='$cater')";
         
            $stmt = $con->prepare($sql);
            $stmt->execute();
$row = $stmt->fetch();

if($row)
{
	?>

 <img  style="box-shadow: 10px 10px 5px grey;" src="<?php echo $row["image"]; ?>" alt="<?php echo $row["image"]; ?>" height="200px" width="200px">

<br>


<br>
<b><h4><?php
$var1=ucfirst($row['pname']) ;
echo $var1;
?></h4></b>
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

?>
<br>
<form method="post" action="addtocart.php?action=add&id=<?php echo $row["id"];?>">
<input type="hidden" name="hidden_name" value="<?php echo $row["pname"];?>"/>
<input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>"/>
Quantity:<center><input type="text" name="quantity" value="1" class="form-control"/ style="width:50px"></center><br>
<input type="submit" name="add_to_cart" value="Add to Cart" class="btn btn-primary"></button>
</form>
<br>
<form method="post" action="addtocart.php?action=add&id=<?php echo $row["id"];?>">
<input type="hidden" name="hidden_name" value="<?php echo $row["pname"];?>"/>
<input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>"/>
<input type="hidden" name="quantity" value="1" class="form-control"/ style="width:50px"></center>
<input type="submit" name="buy_now" value="Buy Now" class="btn btn-primary"></button>
</form>
</div>
</div><br>
	<div class="row" style="text-align:center;">

<div class="col-lg-4 ">
<?php
$cater="plants growth promoters";
	 $sql = "SELECT * FROM product WHERE category='$cater' and price=(SELECT min(price) from product WHERE category='$cater')";
         
            $stmt = $con->prepare($sql);
            $stmt->execute();
$row = $stmt->fetch();

if($row)
{
	?>

 <img  style="box-shadow: 10px 10px 5px grey;" src="<?php echo $row["image"]; ?>" alt="<?php echo $row["image"]; ?>" height="200px" width="200px">

<br>


<br>
<b><h4><?php
$var1=ucfirst($row['pname']) ;
echo $var1;
?></h4></b>
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

?>
<br>
<form method="post" action="addtocart.php?action=add&id=<?php echo $row["id"];?>">
<input type="hidden" name="hidden_name" value="<?php echo $row["pname"];?>"/>
<input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>"/>
Quantity:<center><input type="text" name="quantity" value="1" class="form-control"/ style="width:50px"></center><br>
<input type="submit" name="add_to_cart" value="Add to Cart" class="btn btn-primary"></button>
</form>
<br>
<form method="post" action="addtocart.php?action=add&id=<?php echo $row["id"];?>">
<input type="hidden" name="hidden_name" value="<?php echo $row["pname"];?>"/>
<input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>"/>
<input type="hidden" name="quantity" value="1" class="form-control"/ style="width:50px"></center>
<input type="submit" name="buy_now" value="Buy Now" class="btn btn-primary"></button>
</form>
</div>
<div class="col-lg-4 ">
<?php
$cater="agro chemicals";
	 $sql = "SELECT * FROM product WHERE category='$cater' and price=(SELECT min(price) from product WHERE category='$cater')";
         
            $stmt = $con->prepare($sql);
            $stmt->execute();
$row = $stmt->fetch();

if($row)
{
	?>

 <img  style="box-shadow: 10px 10px 5px grey;" src="<?php echo $row["image"]; ?>" alt="<?php echo $row["image"]; ?>" height="200px" width="200px">

<br>


<br>
<b><h4><?php
$var1=ucfirst($row['pname']) ;
echo $var1;
?></h4></b>
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

?>
<br>
<form method="post" action="addtocart.php?action=add&id=<?php echo $row["id"];?>">
<input type="hidden" name="hidden_name" value="<?php echo $row["pname"];?>"/>
<input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>"/>
Quantity:<center><input type="text" name="quantity" value="1" class="form-control"/ style="width:50px"></center><br>
<input type="submit" name="add_to_cart" value="Add to Cart" class="btn btn-primary"></button>
</form>
<br>
<form method="post" action="addtocart.php?action=add&id=<?php echo $row["id"];?>">
<input type="hidden" name="hidden_name" value="<?php echo $row["pname"];?>"/>
<input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>"/>
<input type="hidden" name="quantity" value="1" class="form-control"/ style="width:50px"></center>
<input type="submit" name="buy_now" value="Buy Now" class="btn btn-primary"></button>
</form>
</div>
<div class="col-lg-4 ">
<?php
$cater="micro nutrients";
	 $sql = "SELECT * FROM product WHERE category='$cater' and price=(SELECT min(price) from product WHERE category='$cater')";
         
            $stmt = $con->prepare($sql);
            $stmt->execute();
$row = $stmt->fetch();

if($row)
{
	?>

 <img  style="box-shadow: 10px 10px 5px grey;" src="<?php echo $row["image"]; ?>" alt="<?php echo $row["image"]; ?>" height="200px" width="200px">

<br>


<br>
<b><h4><?php
$var1=ucfirst($row['pname']) ;
echo $var1;
?></h4></b>
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

?>
<br>
<form method="post" action="addtocart.php?action=add&id=<?php echo $row["id"];?>">
<input type="hidden" name="hidden_name" value="<?php echo $row["pname"];?>"/>
<input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>"/>
Quantity:<center><input type="text" name="quantity" value="1" class="form-control"/ style="width:50px"></center><br>
<input type="submit" name="add_to_cart" value="Add to Cart" class="btn btn-primary"></button>
</form>
<br>
<form method="post" action="addtocart.php?action=add&id=<?php echo $row["id"];?>">
<input type="hidden" name="hidden_name" value="<?php echo $row["pname"];?>"/>
<input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>"/>
<input type="hidden" name="quantity" value="1" class="form-control"/ style="width:50px"></center>
<input type="submit" name="buy_now" value="Buy Now" class="btn btn-primary"></button>
</form>
</div>
</div>
	</div>
</div>
	<!-- //welcome -->
	<!-- testimonials -->
	<div class="testimonials" id="news">
	   <div class="test_agile_info">
		<div class="container">
			<ul id="flexiselDemo1">			
				<li>
					<div class="wthree_testimonials_grid_main">
						<div class="wthree_testimonials_grid">
							<h4>What Client say</h4>
							<p>It is an ecommerce site.</p>
								<h5>Ayush</h5>
							
						</div>
					
					</div>
				</li>
				<li>
					<div class="wthree_testimonials_grid_main">
						<div class="wthree_testimonials_grid">
							<h4>What Client say</h4>
							<p>It is an ecommerce best site.</p>
								<h5>Aashish</h5>
							
						</div>
					
					</div>
				</li>
				<li>
					<div class="wthree_testimonials_grid_main">
						<div class="wthree_testimonials_grid">
							<h4>What Client say</h4>
							<p>It is the best ecommerce site.</p>
								
								<h5>Aniket</h5>
						
						</div>
						
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- //testimonials -->

	<!-- newsletter -->
		<div class="features" >
		<div class="container">
			<div class="w3ls-heading">
				<h2 class="h-two">ORGANIC FARMING</h2><br>
				<p style="float:left; font-size: 26px; color: orange;"><b>BENEFITS</b></p>
			</div>
		<div class="w3-agile-top-info">	
			<div class="w3-welcome-grids">
				<div class="col-md-7 w3-welcome-left">
					<h5>Discourages environmental exposure to pesticides and chemicals</h5>
					<p>The Organic Trade Association notes that if every farmer in the U.S. converted to organic production, we could eliminate 500 million pounds of persistent and harmful pesticides from entering the environment annually.<br>Pesticide and chemical use results in many negative environmental issues:-<br>
						1. Pesticides allow disease resistance to build up in plants, weeds, plant-eating-insects, fungi and bacteria.Pesticides and chemicals sprayed on plants contaminate the soil, water supply, and air.<br>2. Sometimes these harmful pesticides stick around for decades (maybe longer).</p>
				</div>
				<div class="col-md-5 w3ls-welcome-img1">
					<img src="images/s1.jpg" alt="" />
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3-welcome-grids w3-welcome-bottom">
				<div class="col-md-5 w3ls-welcome-img1 w3ls-welcome-img2">
					<img src="images/s2.jpg" alt="" />
				</div>
				<div class="col-md-7 w3-welcome-left">
					<h5>Organic Farming Builds Healthy Soil</h5>
					<p>To grow healthy food, you must start with healthy soil. If you treat soil with harmful pesticides and chemicals, you may end up with soil that cannot thrive on its own.<span>Just one teaspoon of compost-rich organic soil may host as many as 600 million to 1 billion helpful bacteria from 15,000 species.Ingham notes that on the flip side, one teaspoon of soil treated with chemicals may carry as few as 100 helpful bacteria.</span></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<br>
			<div class="col-md-7 w3-welcome-left">
					<h5>Organic Farming Helps Combat Erosion</h5>
					<p>Not only does organic farming build healthy soil, but it helps combat serious soil and land issues, such as erosion. A major study comparing adjoining organic and chemically treated wheat fields showed that the organic field featured eight more inches of topsoil than the chemically treated field and also had only one-third the erosion loss.<span>If you aren't concerned about erosion,you should be. Erosion issues are extremely serious, affecting the land, food supply, and humans. However, organic farming practices do help discourage erosion from occurring.</span></p>
				</div>
				<div class="col-md-5 w3ls-welcome-img1">
					<img src="images/s3.jpg" alt="" />
				</div>
				<div class="clearfix"> </div>
			<br>
			<div class="w3-welcome-grids w3-welcome-bottom">
				<div class="col-md-5 w3ls-welcome-img1 w3ls-welcome-img2">
					<img src="images/s4.jpg" alt="" />
				</div>
				<div class="col-md-7 w3-welcome-left">
					<h5>Organic Farming Fights the Effects of Global Warming </h5>
					<p>Rodale Institute Farming Systems Trial is America’s longest running, side-by-side comparison of conventional and organic agriculture. The trial, running since 1981, has shown that a healthy organic agriculture system can actually reduce carbon dioxide and help slow climate change.<span>"If only 10,000 medium sized farms in the U.S. converted to organic production, they would store so much carbon in the soil that it would be equivalent to taking 1,174,400 cars off the road, or reducing car miles driven by 14.62 billion miles."</span></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
		</div>
	</div>
	<!-- //newsletter -->
<?php include "footer.php"?>