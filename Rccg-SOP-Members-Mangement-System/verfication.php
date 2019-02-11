<?php
session_start();
	require_once("db.php");
	$username = $_POST['username'];
	$password = $_POST['password'];
$pdo_statement = $pdo_conn->prepare("SELECT * FROM admin where username='$username' and password='$password'");
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
	if ($result==true) {
		
		header('location:admin_dashboard.php');
	}else{
		 echo "You do not have access to this page please contact the admin";
		// <script>window.alert(Invalid username or password); </script>
	}
// 	$sql = "SELECT email, user FROM register";
// $result = $conn->query($sql);

// if ($result->num_row > 0) {
// 	# code...
// }
?>
