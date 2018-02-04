<?php include "header_other.php";?>
<div class="panel panel-primary" style="width:40%;margin:0 auto;border-color:#232f3e; box-shadow: 10px 10px 5px grey;">
  <div class="panel-heading" style="text-align:center;background-color:#232f3e;" ><h2>Calculator</h2></div>
  <div class="panel-body">
  <br>
<div class="container" style="width:60%;" >

    
               <form action ="calculatescript.php" method = "post">

     <div class="form-group">
          <label for="sel1">Crop:</label>
          <select class="form-control" id="sel1" name="category" >
            <option >wheat</option>
            <option >maize</option>
            <option >rice</option>
            <option >sargam</option>
            <option >tomato</option>
           
            
          </select>
        </div>
    <div class="form-group">
      <label for="pwd">Area</label>
      <input type="number" class="form-control" id="pwd" name="area" placeholder="area in acres" required/>
    </div>
	
	<div class="form-group">
 	<input class="btn btn-primary" name="submit" type="submit"  style="background-color:#232f3e;border-color:#232f3e;" value="Calculate" class="button1"></td>
	 </div>
      
   
  </form>

<br><br>


</div>
</div>
<div class="panel-footer"></div>
</div><br><br>><br><br>
<?php include "footer.php";?>