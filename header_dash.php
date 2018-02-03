<?php
session_start();
/*if (!isset($_SESSION['username']))
  { header('location: login.php');}*/
?>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>


<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">ICDP</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="dashboard.php">Add Product</a></li>
          <li><a href="delete.php">Delete product</a></li>
          <li><a href="chpass.php">Change Password</a></li>
		  <li><a href="query.php">Queries</a></li>
          <li><a href="logoutscript.php">Logout</a></li>
          
          
        </ul>
        
      </div>
    </div>
  </nav>
