<?php
function phpAlert($msg) {
  echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
if(!isset($_POST['submit'])){

  header('location:signup.php');}
  else{
  include "connect.php";

    $user = $_POST['username'];
    $pass = $_POST['password'];
	$name = $_POST['name'];
    $mobile = $_POST['mobile'];
	  $addr = $_POST['addr'];


 $result = $con->prepare("INSERT INTO login(username,name,password,mobile,address)VALUES('$user','$name','$pass','$mobile','$addr')"); 
 $result->execute();
   

   if($result)
 {
 phpAlert(   "Registered Successfully"   );
 
header( "refresh:0.1;url=index1.php" );
		
 }
 else
 {
	 phpAlert(   "Sorry you could not be registered"   ); 
 }
   }

