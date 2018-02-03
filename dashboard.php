<?php include "header_dash.php" ?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-md-2 sidebar">
        <br>
        <br>
        <br>
        <div style="border:2px solid gray;height:150px;width:150px;border-radius: 50%;color:white;background-color: gray;"><center><h3>Welcome<br><br> <?php echo  $_SESSION['username'] ; ?></h3></center></div>
      </div>
      <div class="col-sm-3 col-md-2"></div>
      <br>

      <br>
      <div class="col-sm-6 col-md-7">
        <h1><u>Dashboard</u></h1>
        <br>
        <form  action="dashboard_upload.php" method="post" enctype="multipart/form-data">


          
         <div class="form-group">
          <label for="sel1">Product Category:</label>
          <select class="form-control" id="sel1" name="category" >
            <option value="Water Soluble Ferilizers">Water-Soluble Ferilizers</option>
            <option value="Agro chemicals">Agro-chemicals</option>
            <option value="Bio Fertilizers">Bio-Fertilizers</option>
            <option value="Seeds">Seeds</option>
            <option value="Plants Growth Promoters">Plants Growth Promoters</option>
            <option value="Micro Nutrients">Micro Nutrients</option>
            
          </select>
        </div>
        
        <div class="form-group">
          <label for="usr">Product Name:</label>
          <input type="text" class="form-control" id="usr" name="pname">
        </div>
        <div class="form-group">
          <label for="usr">Price:</label>
          <input type="text" class="form-control" id="pwd" name="price">
        </div>
		<div class="form-group">
          <label for="usr">Quantity:</label>
          <input type="text" class="form-control" id="pwd" name="quantity">
        </div>
        <div class="form-group">
          <label for="comment">Description</label>
          <textarea class="form-control" rows="5" id="comment" name="desp"></textarea>
        </div>
        <div class="form-group">
          <label>Image</label>
          <input type="file" class="form-control"  name="file"  >

        </div>
        <tr>
          <td>&nbsp;</td>
          <td> <input type="submit"></td>
        </tr>
      </form>
    </div>
  </div>



<?php include "footer_dash.php" ?>