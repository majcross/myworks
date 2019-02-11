<?php
	require_once("db.php");
	$username = $_POST['username'];
	$password = $_POST['password'];

$sql = "INSERT INTO admin(username, password) VALUES (':username', ':password')";
$pdo_statement = $pdo_conn->prepare($sql );
		
	$result = $pdo_statement->execute( array( ':username'=>$username, ':password'=>$password, ) );
	
	if (!empty($result) ){
	  header('admin_dashboard.php');
	}

?>