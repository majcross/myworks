<!DOCTYPE html>
<html>
<head>
	<title>Members</title>
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
			.bg{
			color: #337ab7;
			padding: 25px;
			border: 1px solid #164f69;
				border-radius: 0;
				transition: 0.5s;
		}
		.bh{
			color: #fff;
			opacity: 2.0;
			font-size: 34px;
			background-color: #337ab7;
			padding: 25px;
			

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
		<div class="wells" style="margin-top: 20px;">
		<div class="pager-header bh">
			<p>Members registration Form</p>
		</div>
	</div>
	<form role="form">
		<div class="col-lg-12 bg";>
			<div class="form-group">
					<label for="name">Surname:</label>
					<input type="text" class="form-control" name="surname">
				</div>
				<div class="form-group">
					<label for="name">First Name:</label>
					<input type="text" class="form-control" name="firstname">
				</div>
				<div class="form-group">
					<label for="name">Email:</label>
					<input type="email" class="form-control" email="email">
				</div>
				<div class="form-group">
					<label for="dicpline">Dicpline</label>
					<select type="dicpline" class="form-control" id="dicpline">
					<option>Doctor</option>
					<option>Lawyer</option>
					</select>
				</div>
				<div class="form-group">
					<label for="num">Phone No:</label>
					<input type="num" class="form-control" name="number">
				</div>
				<div class="form-group">
					<label for="address">Address:</label>
					<select type="address" class="form-control" name="address"> 
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
				<div class="radio" required>
					<label class="radio-inline" >
						<input type="radio" name="relationship">single
					</label>
					<label class="radio-inline">
						<input type="radio" name="relationship"> Married
					</label>
				</div>
			
		</div>
	</form>
		
	</div>

</body>
</html>