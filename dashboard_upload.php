<!doctype html>
<?php 
session_start();
/*if (!isset($_SESSION['username']))
    header('location: login.php');*/
?>
<?php
 function phpAlert($msg) {
 echo '<script type="text/javascript">alert("' . $msg . '")</script>';}
include "connect.php" ;
	
	$category=strtolower($_POST['category']);
	
	$pname=strtolower($_POST['pname']);
	$price=$_POST['price'];
	$desp=$_POST['desp'];
	$quan=$_POST['quantity'];

	
	
	
	if(isset($_FILES['file'])){
	$file=$_FILES['file'];

$file_name= $file['name'];
$file_tmp= $file['tmp_name'];
$file_size= $file['size'];
$file_error=$file['error'];

$file_ext=explode('.',$file_name);
$file_ext=strtolower(end($file_ext));
 $allowed= array('jpg','doc','pdf');
 if(in_array($file_ext,$allowed))
 { if($file_error===0)
	 { if($file_size<=10485760)
		 {
			 $file_destination='uploads/'.$file_name;
			 if(move_uploaded_file($file_tmp,$file_destination))
			 { 
			
			 
			 }
		 }
		 
	 }
	 else
	 {
		 phpAlert(   "maximum size is 10 mb"   );
	 }
	 
	 
 }
 else
 {
	 phpAlert(   "Format not supported"   );
 }



}
else
{
 phpAlert(   "Error !"   );
}
		
		
$file_destination='uploads/'.$file_name;
 $result = $con->prepare("INSERT INTO product(category,pname,price,desp,image,quantity)VALUES('$category','$pname','$price','$desp','$file_destination','$quan')"); 
 $result->execute();
 if($result)
 {
 phpAlert(   "New record created Successfully"   );
 
header( "refresh:0.1;url=dashboard.php" );
		
 }
 else
 {
	 phpAlert(   "Record could not be registered"   ); 
 }
	
 ?>

	