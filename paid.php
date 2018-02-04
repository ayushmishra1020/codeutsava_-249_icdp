<?php include "header_other.php";
if (!isset($_SESSION['username']))
  { header('location: login.php');}
?><br><br><br><br>


<?php

if (!isset($_SESSION['username']))
  { header('location: login.php');}
if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id= array_column($_SESSION["shopping_cart"],"item_id");
		if(!in_array($_GET["id"],$item_array_id))
		{
			$count= count($_SESSION["shopping_cart"]);
			$item_array= array(
			'item_id' => $_GET["id"],
			'item_name' => $_POST["hidden_name"],
			'item_price' => $_POST["hidden_price"],
			'item_quantity' => $_POST["quantity"],
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
			echo '<script>alert("Item Added To Cart")</script>';
			echo '<script>window.location="product.php"</script>';
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
			echo '<script>window.location="product.php"</script>';
		}
	}
	else
	{
		$item_array= array(
			'item_id' => $_GET["id"],
			'item_name' => $_POST["hidden_name"],
			'item_price' => $_POST["hidden_price"],
			'item_quantity' => $_POST["quantity"],
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}
if(isset($_POST["buy_now"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id= array_column($_SESSION["shopping_cart"],"item_id");
		if(!in_array($_GET["id"],$item_array_id))
		{
			$count= count($_SESSION["shopping_cart"]);
			$item_array= array(
			'item_id' => $_GET["id"],
			'item_name' => $_POST["hidden_name"],
			'item_price' => $_POST["hidden_price"],
			'item_quantity' => $_POST["quantity"],
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
			
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
			echo '<script>window.location="product.php"</script>';
		}
	}
	else
	{
		$item_array= array(
			'item_id' => $_GET["id"],
			'item_name' => $_POST["hidden_name"],
			'item_price' => $_POST["hidden_price"],
			'item_quantity' => $_POST["quantity"],
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}
if(isset($_GET["action"]))
{
	if($_GET["action"]=="delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $value)
		{
			if($value["item_id"]==$_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script> alert("Item Removed")</script>';
				echo '<script>window.location="addtocart.php"</script>';
			}
		}
	}
}
?>



<h1> <center>Thank you for shopping!!!!</center></h1>
<?php
function phpAlert($msg) {
  echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

include "connect.php";

    $user = $_SESSION['username'];



    $result = $con->prepare("SELECT * FROM login WHERE username ='$user'"); 
    $result->execute();
	$num= $result->rowCount();
    $row =  $result->fetch();
?>
<div class="container"><h2 >Shipping Address</h2>
<br>
<b><?php echo $row["name"];?></b>
<br>
<?php echo $row["address"];?>
</div>

<br><br>
<div class="container"><h2 >Product Summary</h2>
<br>
<table class="table table-bordered">
			<thead>
				<tr>
					
					<th width="40%">Item Name</th>
					<th width="10%">Quantity</th>
					<th width="20%">Price</th>
					<th width="15%">Total</th>
					
					
				</tr>
			</thead>
			<?php
			if(!empty($_SESSION["shopping_cart"]))
			{
				$total=0;
				foreach($_SESSION["shopping_cart"] as $keys => $values)
				{
			?>

			
				<tr>
					
					<td><?php echo $values["item_name"]; ?></td>
					<td><?php echo $values["item_quantity"]; ?></td>
					<td><?php echo $values["item_price"];?></td>
					<td><?php echo number_format($values["item_quantity"] * $values["item_price"],2); ?></td>
					</tr>
				<?php
				$total= $total + ($values["item_quantity"] * $values["item_price"]);
			}
			
			?>
			<tr>
			<td colspan="3" align="right">Total</td>
			<td align="right"><?php echo number_format($total,2);?></td>
				
			<?php }?>
			
		</table>
</div>
<br><br><br><br>
<?php include "footer.php";?>