<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="author" content="Tamilarasu">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>register_form</title>
</head>
<body>
<center>
	<div class="reg" >
	<!-- search -->
	<div class="search">
	<form action="find.php" method="get" align="right">
	<input type="search" name="keyword" placeholder="search here">
	<button name="submit" id="search"><i class="fa fa-search"></i></button>
	</form>
	</div>
	<!-- search -->
<form method="post" action="insert.php" autocomplete="">
	<table>
		<tr><th colspan="2"><center>Register</center></th></tr>
	<!-- name -->
	<tr><td><label for="name">Name : </label></td><td><input type="text" name="name"></td></tr>
	<!-- employee id -->
	<tr><td><label for="empid">Employee ID : </label></td><td><input type="number" name="empid"></td></tr>
	<!-- Date Of Birth -->
	<tr><td><label for="dob">DOB : </label></td><td><input type="date" name="dob" min="1990-01-01" max="1999-12-31"></td></tr>
	<!-- gender -->
	<tr><td><label>Gender : </label></td>
		<td>
	<input type="radio" name="gender" value="male"><label for="male">Male</label><br>
	<input type="radio" name="gender" value="female"><label for="female">Female</label><br>
	<input type="radio" name="gender" value="others"><label for="others">Others</label></td></tr>
	<!-- email -->
	<tr><td><label for="email">Email : </label></td><td><input type="email" name="email"></td></tr>
	<!-- address -->
	<tr><td><label for="address">Address : </label></td>
	<td><textarea name="address" rows="4"></textarea></td></tr>
	<!-- Qualification -->
	<tr><td><label for="qualification">Qualification</label></td>
	<td><select name="qualification">
		<option selected="" hidden="" disabled=""></option>
		<option value="BE">BE</option>
		<option value="Btech">Btech</option>
		<option value="BCA">BCA</option>
		<option value="Bcom">Bcom</option>
		<option value="BBA">BBA</option>
	</select></td></tr>
	<!-- shift preference -->
	<tr><td><label>Shift preferred : </label></td>
	<td><input type="checkbox" name="shift[]" value="morning"><label for="morning">Morning</label><br>
	<input type="checkbox" name="shift[]" value="afternoon"><label for="afternoon">Afternoon</label><br>
	<input type="checkbox" name="shift[]" value="night"><label for="night">Night</label><br>
	<input type="checkbox" name="shift[]" value="general"><label for="general">General</label></td></tr>
	<!-- password -->
	<tr><td><label for="password">Password : </label></td><td><input type="password" name="password"></td></tr>
	<tr><td><label for="cpassword">Confirm Password : </label></td><td><input type="password" name="cpassword"></td></tr>
	</table>
	<!-- terms -->
	<input type="checkbox" name="terms" required=""><label for="terms">I accept the terms and conditions</label><br>
	<input type="submit" name="submit" value="register">
</form>
</div>
</center>
</body>
</html>


