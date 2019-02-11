<?php
require_once("db.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
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
    	table{
    		overflow-x: auto;
    		border-collapse: collapse;
    		width: 100%;
    	}
    	th.t-head{
    		padding: 10px;
    		text-align: left;
    	}
    	.table-row tr:nth-child(even){
    		background-color: #f2f2f2}
    	.table-row td 
    	{padding:10px;
    		background-color: #FDFDFD;
    		vertical-align:top;}

		</style>
</head>
<body>
	<?php	
	$pdo_statement = $pdo_conn->prepare("SELECT * FROM churchtable ORDER BY id ASC");
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
?>
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
				</ul>
			</div>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="row content">
			<div class="col-sm-3 sidenav">
					<h2>RCCG MEMBERS PORTAL</h2>
					<img src="image/rccg.gif" style="width: 50%;">
					<ul class="nav nav-pills nav-stacked"><br>
						<li class="active"><a href="">All Members</a></li>
<!-- 						<li><a href="">Edit</a></li> -->
						<li><a href="">Workers</a></li>
						<li><a href="">Members By Location</a></li>
						<li><a href="">Profession</a></li>
						<li><a href="">Members only</a></li>
					</ul><br>
				</div>
				<br>	
		<div class="col-sm-9">
					<div class="well">
						<h3>RCCG SOP</h3>
						<p>Contains all the details of the menbers from the church both Workers and Members</p>
					</div>
							
							<div class="well" style="overflow: auto;"> 
							<table>
								<thead>
									<tr>
										<th class="t-head" width="20%">Surname</th>
										<th class="t-head" width="20%">First Name</th>
										<th class="t-head" width="20%">Email</th>
										<th class="t-head" width="20%">Discpline</th>
										<th class="t-head" width="20%">Phone No:</th>
										<th class="t-head" width="20%">Address</th>
										<th class="t-head" width="20%">Sex</th>
										<th class="t-head" width="20%">Department</th>
										<th class="t-head" width="20%">Relationship</th>
										<th class="t-head" width="5%">Action</th>
									</tr>
								</thead>
									<tbody>
	<?php
	if(!empty($result)) { 
		foreach($result as $row) {
	?>
	  <tr class="table-row">
		<td><?php echo $row["surname"]; ?></td>
		<td><?php echo $row["firstname"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
		<td><?php echo $row["dicpline"]; ?></td>
		<td><?php echo $row["number"]; ?></td>
		<td><?php echo $row["address"]; ?></td>
		<td><?php echo $row["gender"]; ?></td>
		<td><?php echo $row["department"]; ?></td>
		<td><?php echo $row["relationship"]; ?></td>
		<td><a class="ajax-action-links" href='edit.php?id=<?php echo $row['id']; ?>'><img src="crud-icon/edit.png" title="Edit" /></a> <a class="ajax-action-links" href='delete.php?id=<?php echo $row['id']; ?>'><img src="crud-icon/delete.png" title="Delete" /></a></td>
	  </tr>
    <?php
		}
	}
	?>
								</tbody>
							</table>
							</div>
							</div>

	</div>
	<footer style="text-align: center;position: relative; margin-bottom: 30px;">&copy; 2010-<?php echo date("Y");?></footer>

</body>
</html>