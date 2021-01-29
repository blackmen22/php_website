<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="author" content="Tamilarasu">
	<title>viewing data</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php 
include "config.php";  	#database connectivity
$bulk=new MongoDB\Driver\Query([]); 	#query for selecting
?>
<br>
<center>
<div class="disp">
	<table>
	<tr>
		<th>Name</th>
		<th>Employee ID</th>
		<th>Gender</th>
		<th>Email</th>
		<th>Address</th>
		<th>Qualification</th>
		<th>Shift</th>
		<th>Task</th>
	</tr>
<?php
$result=$client->executeQuery('sample.php_mongo_crud',$bulk);   #executing Query
foreach ($result as $res) { 
		echo "<tr>".
		"<td>".$res->name."</td>".
		"<td>".$res->empid."</td>".
		"<td>".$res->gender."</td>".
		"<td>".$res->email."</td>".
		"<td>".$res->address."</td>".
		"<td>".$res->qualification."</td>".
		"<td>".$res->shift."</td>".
		"<td><a href='edit.php?id=".$res->_id.
		"&name=".$res->name.
		"&empid=".$res->empid.
		"&gender=".$res->gender.
		"&email=".$res->email.
		"&address=".$res->address.
		"&qualification=".$res->qualification.
		"&shift=".$res->shift."' class='update'>&nbsp;<i class='fa fa-pencil-square'></i>&nbsp;update&nbsp;</a>"."&nbsp;&nbsp;&nbsp;"."<a href='delete.php?id=".$res->_id."' class='delete'>&nbsp;<i class='fa fa-trash'></i>&nbsp;delete&nbsp;</a></td>".
		"<tr>";						
}
 ?>
 </table><br>
<a href="index.php" class="add-new">&nbsp;<i class="fa fa-user-plus"></i> add user&nbsp;</a>
</div>	
</center>
</body>
</html>
