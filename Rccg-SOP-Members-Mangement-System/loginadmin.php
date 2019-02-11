<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
	<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="conatiner-fluid center">
		<div class="head"  style="background-color: #12776e">
		<h2>Admin</h2>
		</div>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
  		
    <ul class="nav navbar-nav" style="float: right;">
      <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
    </ul>
  </div>
</nav>
<div class="col-lg-4"></div>
<div class="col-lg-4 container edge" style="margin-top: 100px; background-color: white;">
<form action="verfication.php" method="POST">
	<div class="col-lg-9 bg">
<div class="form-group ">
	<label for="name">Username</label>
	 <input type="text" class="form-control" name="username" placeholder="Enter">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="password" placeholder="Enter password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"><strong> Remember me</label>
    </div>
    
    <button type="submit" class="btn btn-default"> Log In</button>
    </div>
</form>
	
</div>
</div>
		
	</div>
</body>
</html>