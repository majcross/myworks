<?php
require_once("db.php");
if(isset($_POST["save_record"])) {
	$surname = $_POST['surname'];
	$firstname = $_POST['firstname'];
	$email = $_POST['email'];
	$dicpline = $_POST['dicpline'];
	$number = $_POST['number'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	$department = $_POST['department'];
	$relationship = $_POST['relationship'];
	$id = $_GET["id"];

	$pdo_statement=$pdo_conn->prepare("update churchtable set surname='" . $surname . "', firstname='" . $firstname . "', email='" . $email ."',dicpline='" . $dicpline . "',number='" . $number . "',address='" . $address . "',gender='" . $gender . "',department='" . $department . "',relationship='" . $relationship . "',  where id=" . $id);
	$result = $pdo_statement->execute();
	if($result) {
		header('location:admin_dashboard.php');
	}
}
require_once("db.php");
$id = $_GET["id"];
$pdo_statement = $pdo_conn->prepare("SELECT * FROM churchtable where id=" . $id);
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();

?>
<html>
<head>
<title>RCCG SOP - Edit Record</title>
<style>
body{width:615px;font-family:arial;letter-spacing:1px;line-height:20px;}
.button_link {color:#FFF;text-decoration:none; background-color:#428a8e;padding:10px;}
.frm-add {border: #c3bebe 1px solid;
    padding: 30px;}
.demo-form-heading {margin-top:0px;font-weight: 500;}	
.demo-form-row{margin-top:20px;}
.demo-form-field{width:300px;padding:10px;}
.demo-form-submit{color:#FFF;background-color:#414444;padding:10px 50px;border:0px;cursor:pointer;}
</style>
</head>
<body>
<div style="margin:20px 0px;text-align:right;"><a href="admin_dashboard.php" class="button_link">Back to List</a></div>
<div class="frm-add">
<h1 class="demo-form-heading">Edit Record</h1>
<form name="frmAdd" action="" method="POST">
  <div class="demo-form-row">
	  <label>Surname: </label><br>
	  <input type="text" name="surname" class="demo-form-field" value="<?php echo $result[0]['surname']; ?>" required  />
  </div>
  <div class="demo-form-row">
	  <label>First Name: </label><br>
	  <input type="text" name="firstname" class="demo-form-field" value="<?php echo $result[0]['firstname'];?>" required ></input>
  </div>
  <div class="demo-form-row">
	  <label>Email: </label><br>
	  <input type="email" name="email" class="demo-form-field" value="<?php echo $result[0]['email']; ?>" required />
  </div>
  <div class="demo-form-row">
	  <label>Dicpline: </label><br>
	  <select type="dicpline" name="dicpline" class="demo-form-field" value="<?php echo $result[0]['dicpline']; ?>" required  />
	  <option>Doctor</option>
					<option>Lawyer</option>
					</select>
  </div>
  <div class="demo-form-row">
	  <label>Phone no: </label><br>
	  <input type="num" name="number" class="demo-form-field" value="<?php echo $result[0]['number']; ?>" required  />
  </div>
  <div class="demo-form-row">
	  <label>Address: </label><br>
	  <select  type="address" name="address" class="demo-form-field" value="<?php echo $result[0]['address']; ?>" required  /> 
						<option>Basin</option>
						<option>Sabo Oke</option>
						<option>Others</option>
					</select><br>
  </div>
  <div class="demo-form-row">
	  <label>Sex: </label><br>
	  <select type="gender" name="gender" class="demo-form-field" value="<?php echo $result[0]['gender']; ?>" required  />
	  <option>male</option>
						<option>Female</option>
						</select>
  </div>
  <div class="demo-form-row">
	  <label>Department: </label><br>
	  <select type="department" name="department" class="demo-form-field" value="<?php echo $result[0]['department']; ?>" required  />
	  <option>Minister</option>
						<option>Usher</option>
						<option>Choir</option>
						</select>
  </div>
  <div class="demo-form-row radio ">
	 					<label class="radio-inline" >
						<input type="radio" name="relationship" value="Single" checked>Single
					</label>
					<label class="radio-inline">
						<input type="radio" name="relationship" value="Married"> Married
					</label>
  </div>
  <div class="demo-form-row">
	  <input name="save_record" type="submit" value="Save" class="demo-form-submit">
  </div>
  </form>
</div>
</body>
</html>