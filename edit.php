<?php 
#database connectivity
include "config.php";

$id=$_GET['id'];
$name=$_GET['name'];
$empid=$_GET['empid'];
$gender=$_GET['gender'];
$email=$_GET['email'];
$address=$_GET['address'];
$qualification=$_GET['qualification'];
$shift=explode(",",$_GET['shift']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>edit_data</title>
	<meta name="author" content="Tamilarasu">
</head>
<body>
<div class="reg">
	<center>
	<form method="post" action="update.php">
		<input type="hidden" name="id" value= "<?php echo $id; ?>" >
	<!-- name -->
	   <table>
	   <tr><th colspan="2">Edit User Data</th></tr>
	<tr><td><label for="name">Name : </label></td><td><input type="text" name="name" value="<?php echo $name; ?>"></td></tr>
	<!-- employee id -->
	<tr><td><label for="empid">Employee ID : </label></td><td><input type="number" name="empid" value="<?php echo $empid; ?>"></td></tr>
	<!-- gender -->
	<tr><td><label>Gender : </label></td>
		<td>
	<input type="radio" name="gender" value="male" <?php if($gender=='male'){echo 'checked';} else {'';}?>><label for="male">Male</label><br>
	<input type="radio" name="gender" value="female" <?php echo ($gender=='female')? 'checked':'';?>><label for="female" >Female</label><br>
	<input type="radio" name="gender" value="others" <?php echo ($gender=='others')? 'checked':'';?>><label for="others">Others</label></td></tr>
	<!-- email -->
	<tr><td><label for="email">Email : </label></td><td><input type="email" name="email" value="<?php echo $email; ?>"></td></tr>
	<!-- address -->
	<tr><td><label for="address">Address : </label></td>
	<td><textarea name="address" rows="4"><?php echo $address; ?></textarea></td></tr>
	<!-- Qualification -->
	<tr><td><label for="qualification">Qualification</label></td>
	<td><select name="qualification">
		<option selected="" hidden="" disabled=""></option>
		<option value="BE" <?php if($qualification=='BE'){echo 'selected'; }?>>BE</option>
		<option value="Btech" <?php if($qualification=='Btech'){echo 'selected'; }?>>Btech</option>
		<option value="BCA" <?php if($qualification=='BCA'){echo 'selected'; }?>>BCA</option>
		<option value="Bcom" <?php if($qualification=='Bcom'){echo 'selected'; }?>>Bcom</option>
		<option value="BBA" <?php if($qualification=='BBA'){echo 'selected'; }?>>BBA</option>
	</select></td></tr>
	<!-- shift preference -->
	<tr><td><label>Shift preferred : </label></td>
	<td><input type="checkbox" name="shift[]" value="morning"
		<?php
			if(in_array("morning", $shift))
			{
				echo "checked";
			}
		?>
		><label for="morning">Morning</label><br>
	<input type="checkbox" name="shift[]" value="afternoon"
		<?php
			if(in_array("afternoon", $shift))
			{
				echo "checked";
			}
		?>
	><label for="afternoon">Afternoon</label><br>
	<input type="checkbox" name="shift[]" value="night"
		<?php
			if(in_array("night", $shift))
			{
				echo "checked";
			}
		?>
	><label for="night">Night</label><br>
	<input type="checkbox" name="shift[]" value="general"
		<?php
			if(in_array("general", $shift))
			{
				echo "checked";
			}
		?>
	><label for="general">General</label></td></tr>
	</table>
       <input type="submit" name="update" value="update">
       </center>
</form>
</div>
</body>
</html>
