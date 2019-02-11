<?php
session_start();
	require_once("db.php");
	$surname = $_POST['surname'];
	$firstname = $_POST['firstname'];
	$email = $_POST['email'];
	$dicpline = $_POST['dicpline'];
	$number = $_POST['number'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	$department = $_POST['department'];
	$relationship = $_POST['relationship'];

	$sql = "INSERT INTO churchtable ( surname, firstname, email, dicpline, number, address, gender, department, relationship ) VALUES ( :surname, :firstname, :email, :dicpline, :number, :address, :gender, :department, :relationship )";
	$pdo_statement = $pdo_conn->prepare($sql );
		
	$result = $pdo_statement->execute( array( ':surname'=>$surname, ':firstname'=>$firstname, ':email'=>$email, ':dicpline'=>$dicpline, ':number'=>$number, ':address'=>$address, ':gender'=>$gender, ':department'=>$department, ':relationship'=>$relationship, ) );
	
	if (!empty($result) ){
	  header('location:index.php');
	}

?>
