<?php
session_start();
	require_once("db.php");

	$surname = $_POST['surname'];
	$firstname = $_POST['firstname'];
$pdo_statement = $pdo_conn->prepare("SELECT * FROM churchtable where surname='$surname' and firstname='$firstname'");
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
	if ($result==true) {
		die('you have already register with us ');
		
		
	}else{
		header('location:add.php');
	}

?>