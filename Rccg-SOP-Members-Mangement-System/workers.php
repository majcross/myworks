<!DOCTYPE html>
<html>
<head>
	<title>Workers</title>
	<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

		<style >
			body{
				background-color: #fff;
			}
			.details{
				border: 1px solid #164f69;
				border-radius: 0;
				transition: 0.5s;
				padding: 10px;
				color: #337ab7;
			}
			
		.bh{
			color: #fff;
			opacity: 2.0;
			font-size: 30px;
			background-color: #337ab7;
			padding: 25px;
			border: 1px solid #2e6da4;

		}
		</style>

</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<p class="navbar-brand">RCCG SOP</p>
			</div>
	</nav>

	<div class="container">
		<div class="wells" style="margin-top: 20px; box-shadow: 0 0 10px 5px;">
		<div class="pager-header bh">
			<p>Workers registration Form</p>
		</div>
	</div>
	<form action="add.php" method="post" style="font-size: 20px;">
		<div class="col-lg-12 details">
			<div class="form-group">
					<label for="name">Surname:</label>
					<input type="text" class="form-control" name="surname" required>
				</div>
				<div class="form-group">
					<label for="name">First Name:</label>
					<input type="text" class="form-control" name="firstname" required>
				</div>
				<div class="form-group">
					<label for="name">Email:</label>
					<input type="email" class="form-control" name="email" required>
				</div>
				<div class="form-group">
					<label for="dicpline">Dicpline</label>
					<select type="dicpline" class="form-control" name="dicpline" required>
					<option>Doctor</option>
					<option>Lawyer</option>
					</select>
				</div>
				<div class="form-group">
					<label for="num">Phone No:</label>
					<input type="num" class="form-control" name="number" required>
				</div>
				<div class="form-group">
					<label for="address">Address:</label>
					<select type="address" class="form-control" name="address" required> 
						<option>Basin</option>
						<option>Sabo Oke</option>
						<option>Others</option>
					</select><br>
				<div class="form-group">
					<label for="gender">Sex:</label>
					<select type="gender" class="form-control" name="gender" required>
						<option>male</option>
						<option>Female</option>
						</select>
				</div>
				<div class="form-group">
					<label for="department">Department in church:</label>
					<select type="department" class="form-control" name="department" required>
						<option>Minister</option>
						<option>Usher</option>
						<option>Choir</option>
						</select>
				</div>
				<div class="radio" >
					<label class="radio-inline" >
						<input type="radio" name="relationship" value="Single" checked>Single
					</label>
					<label class="radio-inline">
						<input type="radio" name="relationship" value="Married"> Married
					</label>
				</div>
				<div>
				<input type="Submit"  class="btn btn-default" value="Submit"></button>
				</div>
			
		</div>
	</form>
		
	</div>
</body>
</html>