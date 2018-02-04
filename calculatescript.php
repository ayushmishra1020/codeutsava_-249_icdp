<!doctype html>
<?php 
include "header_other.php";
?>
<?php
 function phpAlert($msg) {
 echo '<script type="text/javascript">alert("' . $msg . '")</script>';}
include "connect.php" ;
	
	$category=strtolower($_POST['category']);
	$area=$_POST['area'];
	
	if($category=='wheat'){
		$seeding=$area * 7000;
		$cost=($seeding * 0.43);
	}
	if($category=='maize'){
		$seeding=$area * 650;
		$cost=($seeding * 0.43);
	}
	if($category=='rice'){
		$seeding=$area * 2250;
			$cost=($seeding * 0.43);
	}
	if($category=='sargam'){
		$seeding=$area * 2000;
		$cost=($seeding * 0.43);
	}
	if($category=='tomato'){
		$seeding=$area * 90;
			$cost=($seeding * 0.43);
	}
	
	

	
	?>
	
<div class="panel panel-primary" style="width:40%;margin:0 auto;border-color:#232f3e; box-shadow: 10px 10px 5px grey;">
  <div class="panel-heading" style="text-align:center;background-color:#232f3e;" ><h2>Calculator</h2></div>
  <div class="panel-body">
  <br>
<div class="container" style="width:60%;" >
		<p>Number of seeds required :<?php echo $seeding?></p><br>
		<p>Total Cost :<?php echo $cost?></p>
		<br>
		<a href="calculator.php" class="btn btn-success"> Calculate Again?Click</a>
    
               

<br><br>


</div>
</div>
<div class="panel-footer"></div>
</div><br><br>><br><br>
<?php include "footer.php";?>	