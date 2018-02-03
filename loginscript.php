<?php
function phpAlert($msg) {
  echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
if(!isset($_POST['submit'])){

  header('location: login.php');}
  else{
    $host='localhost';
    $user='root';
    $pass='';
    $database='agriculture';

    $con= new PDO("mysql:host=$host;dbname=$database", $user, $pass);

    $user = $_POST['username'];
    $pass = $_POST['password'];



    $result = $con->prepare("SELECT * FROM login WHERE username ='$user' AND  password='$pass '"); 
    $result->execute();

    $num= $result->rowCount();
    $row =  $result->fetch();
    if ($num==1) 
     {	session_start();
     
       $_SESSION['username']=$row['username'];
       header('location: dashboard.php');	


     }
     else
     {      
       phpAlert(   "Invalid Login! Please Try Again."   );    
       header('location: login.php'); 
     }
   }

