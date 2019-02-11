<?php
require_once("db.php");
$id = $_GET['id'];
$pdo_statement=$pdo_conn->prepare("delete from churchtable where id=" . $id);
$pdo_statement->execute();
header('location:admin_dashboard.php');
?>