<?php
$bulk=new MongoDB\Driver\BulkWrite;

include "config.php";   #database connectivity

$id=$_GET['id'];

$bulk->delete(['_id'=>new MongoDB\BSON\ObjectID($id)]);  #Query

$result=$client->executeBulkWrite('sample.php_mongo_crud',$bulk); #executing Query

header("Location:view.php");
?>