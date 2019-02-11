<!DOCTYPE html>
<html>
<head>
	<title>Donations and Offering</title>
	<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

		<style>
			.panel{
				border: 1px solid green;
				border-radius: 0;
				transition: 0.5s;
			}
			.panel:hover{
				box-shadow: 5px 0px 40px rgba(0,0,0, .2);
			}
			.panel-footer .btn:hover {
 			   	border: 1px solid #f4511e;
    			background-color: #fff !important;
    			color: green;
			}
			.panel-heading{
				background-color: green !important;
				color: #fff !important;
				padding: 25px;
				border-radius: 1px solid transparent;
				border-top-left-radius: 0px;
				border-top-right-radius: 0px;
				border-bottom-left-radius: 0px;
				border-bottom-right-radius: 0px;
			}
			.panel-footer {
 			   background-color: #fff !important;
			}

			.panel-footer h3 {
    			font-size: 32px;
			}

			.panel-footer h4 {
			    color: #aaa;
			    font-size: 14px;
			}

			.panel-footer .btn {
			    margin: 15px 0;
			    background-color: green;
			    color: #fff;
			}

		</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="navbar-header">
				<p class="navbar-brand">RCCG SOP</p>
			</div>
		<div class="container-fluid" >
			<div class="collapse navbar-collapse" id="myNavbar">
			
			<ul class="nav navbar-nav" style="color: white; margin-top: 14px;">
				<li><span class="glyphicon glyphicon-home"> </span><a href="frontpage.html" style="margin-top: -33px; color: white;"> Home</a></li>
			</ul>
			</div>
		</div>
	</div>
</nav><br><br><br><br>
		<div class="container-fluid text-center">
			<h2>RCCG SOP Parish Donations and Offering</h2>
		</div><br>
		<div class="container-fluid text-center col-sm-6">
		<div class="panel panel-default">
			<div class="panel-heading">Donations</div>
			<div class="panel-body">
				<form class="form-inline" role="form" style="padding: 5px;">
				<div class="form-group">
					<label for="name">Surname</label>
					<input type="name" class="form-control" id="name">
				</div>
				<div class="form-group">
					<label for="name">First Name:</label>
					<input type="text" class="form-control" id="name">
				</div><br><br>
				<div>
					<select type="dicpline" class="form-control" id="dicpline">
					<option>Donations for church buliding</option>
					<option>Donations for the need</option>
					<option>Donations for feeding</option>
					</select>
				</div><br>
				<div class="form-group">
					<label></label>
					<input type="number">
				</div>
				</form>
			</div>
			<div class="panel-footer"><button class="btn btn-lg">Submit</button></div>
		</div>
	</div>
			<div class="row">
			<div class="container-fluid text-center col-sm-6">
		<div class="panel panel-default">
			<div class="panel-heading">Offerings</div>
			<div class="panel-body">
				<form class="form-inline" role="form" style="padding: 5px;">
				<div class="form-group">
					<label for="name">Surname</label>
					<input type="name" class="form-control" id="name">
				</div>
				<div class="form-group">
					<label for="name">First Name:</label>
					<input type="text" class="form-control" id="name">
				</div><br><br>
				<div>
					<select type="dicpline" class="form-control" id="dicpline">
					<option>Offering</option>
					<option>Thanksgiving</option>
					<option></option>
					</select>
				</div><br>
				<div class="form-group">
					<label></label>
					<input type="number">
				</div>
				</form>
			</div>
			<div class="panel-footer"><button class="btn btn-lg">Submit</button></div>
		</div>
	</div>
	</div>

	<footer class="text-center" style="background-color: black; color: white; padding: 5px;">
		<p>© 2019 all rigths</p>
	</footer>

</body>
</html>