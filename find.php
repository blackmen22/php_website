<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="author" content="Tamilarasu">
	<title>find_user</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
<body>
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

include "config.php";	#database connectivity

if(isset($_GET['submit']))
{
	$keyword=$_GET['keyword'];
	$query=new MongoDB\Driver\Query(['$or'=>[['name'=>$keyword],['gender'=>$keyword],['empid'=>$keyword],['email'=>$keyword],['shift'=>$keyword],['qualification'=>$keyword]]]); 	#Query
	$result=$client->executeQuery('sample.php_mongo_crud',$query);	#executing Query

 foreach ($result as $res) 
	 	{ 
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
		"&shift=".$res->shift."' class='update'>&nbsp;<i class='fa fa-pencil-square'></i> update</a>"."&nbsp;&nbsp;&nbsp;"."<a href='delete.php?id=".$res->_id."' class='delete'>&nbsp;<i class='fa fa-trash'></i> delete </a></td>".
		"</tr>";				
		}
}
 ?>
 </table>
 </div>
 <button onclick="goBack()" class="go-back">Go Back</button>
<script>
function goBack() {
  window.history.back();
}
</script>
</center>
</body>
</html>