<!DOCTYPE html>
<html>
<head>
	<title>RCCG SOP MANGEMENT SYSTEM</title>
	<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

		<style >
			.row content{
				height: 750px;
			}
			.sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    .table{
    	overflow-x: auto;
    }
    
   
		</style>

</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<button type="button" class="navbar-toggle" data-toggle="collaps" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="collaps navbar-collaps" id="#myNavbar">
				<ul class="nav navbar-nav">
					<li><a href="">Dashboard</a></li>
					<li><a href="">Members</a></li>
				</ul>
			</div>
		</div>
	</nav>

		<div class="container-fluid">
			<div class="row content">
				<div class="col-sm-3 sidenav">
					<h2>RCCG MEMBERS PORTAL</h2>
					<img src="image/rccg.gif" style="width: 50%;">
					<ul class="nav nav-pills nav-stacked nav-tabs"><br>
						<li class="active"><a href=""><span class="glyphicon glyphicon-plus " style="color: green"></span> Add New Members</a></li>
						<li><a href="">Edit</a></li>
						<li><a href="">All Members</a></li>
						<li><a href="">Workers</a></li>
						<li><a href="">Members By Location</a></li>
					</ul><br>
				</div>
				<br>
				<div class="col-sm-9">
					<div class="well">
						<h3>RCCG SOP</h3>
						<p>contains all the details of the menbers from the church</p>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="well">
								<table class="table">
									<thead>
										<tr>
											<th>Surname</th>
											<th>First Name</th>
											<th>Address</th>
											<th>Email</th>
											<th>Sex</th>
											<th>Relationship Status</th>
											<th>Worker/member</th>
										</tr>
									</thead>
									<tbody>
										<td><form class="form-inline">
			<input type="text" class="form-control" size="10">
		</form></td>
										<td><form class="form-inline">
			<input type="text" class="form-control" size="10">
		</form></td>
										<td><form class="form-inline" for="Address">
			<select class="form-control" id="Address" style="width: 140px;">
        <option>Basin</option>
        <option>Sabo Oke</option>
        <option>High Court</option>
        <option>Others</option>
      </select>
		</form></td>
		<td>
			<form class="form-inline">
			<input type="email" class="form-control" size="10">
		</form>
		</td>
		<td>
			<div class="radio">
  <label><input type="radio" name="gender">Male</label>
</div>
<div class="radio">
  <label><input type="radio" name="gender">Female</label>
</div>
		</td>
		<td>
			<div class="radio">
  <label><input type="radio" name="relationship">Married</label>
</div>
<div class="radio">
  <label><input type="radio" name="relationship">Single</label>
</div>
		</td>
		<td>
			<div class="radio">
  <label><input type="radio" name="worker">Worker</label>
</div>
<div class="radio">
  <label><input type="radio" name="worker">Meember</label>
</div>
		</td>
									</tbody>
								</table>
							</div>
						</div>
					</div>

				</div>
			</div>
			
		</div>
</body>
</html>