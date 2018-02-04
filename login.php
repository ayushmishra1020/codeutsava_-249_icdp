<?php include "header_other.php"?>
<div class="panel panel-primary" style="width:40%;margin:0 auto;border-color:#232f3e; box-shadow: 10px 10px 5px grey;">
  <div class="panel-heading" style="text-align:center;background-color:#232f3e;" ><h2>Login</h2></div>
  <div class="panel-body">
  <br>
<div class="container" style="width:60%;" >

    
               <form action ="loginscript.php" method = "post">

    <div class="form-group" >
      <label for="usr">Username:</label>
   
	   <input type="text" class="form-control" id="usr" name="username">

    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="password">
    </div>
	
	
 	<tr>
      <td>&nbsp;</td>
      <td><input class="btn btn-primary" name="submit" type="submit" onclick="return validate();" style="background-color:#232f3e;border-color:#232f3e;" value="Login" class="button1"></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="signup.php">Not yet registered?Click Here</a></td>
      
   </tr>
  </form>

<br><br>


</div>
</div>
<div class="panel-footer"></div>
</div>

<br><br>
<br><br>
<?php include "footer.php";?>