<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "connect.php" ;
include "header_other.php" ;
$cat=$_GET['category'];
?>
<br>
	<!-- //banner --> 
	<div class="w3ls-heading">
				<h2 class="h-two"><?php echo $cat?></h2>
				<p class="sub two"></p>
			</div>
			
	<br>
<br>

<?php


    $categoryf=strip_tags($_GET['category']);
    $categorya=strtolower($categoryf);
  $cate="seeds";
          // fetch all records
          $sql = "SELECT * FROM product WHERE category='$categorya'";
         //$sql = "SELECT * FROM product WHERE category='$cate'";
         
            $stmt = $con->prepare($sql);
            $stmt->execute();
            
          
 
// to verify if a record is found
$num = $stmt->rowCount();
 


    
?>

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
$num=$num-1;
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
$row = $stmt->fetch();

if($num)
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

}
else
{}
$num=$num-1;
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
$row = $stmt->fetch();

if($num)
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

}
else
{}
$num=$num-1;
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
<?php
}
?>
</div>
<br>
<br>
	<br><br><br><br><br><br>
	<!-- //team -->
	<!-- //about -->
<?php include "footer.php";?>