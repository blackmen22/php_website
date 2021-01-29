<?php 

$bulk=new MongoDB\Driver\BulkWrite;

include "config.php";       #database connectivity

    $id    =$_POST['id'];
    $name=$_POST['name'];
    $empid=$_POST['empid'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $qualification=$_POST['qualification'];
    $shift=implode(",",$_POST['shift']);

        try
        {
            #query for updating
            $bulk->update(['_id'=> new MongoDB\BSON\ObjectID($id)],
            [
            'name' => $name,  
            'empid'=> $empid,
            'gender'=>$gender,
            'email'=>$email,
            'address'=>$address,
            'qualification'=>$qualification,
            'shift'=>$shift
            ]); 

            $result = $client->executeBulkWrite('sample.php_mongo_crud',$bulk);   #executing query
            header("Location:view.php");    #redirecting to view.php
        }
        catch(Exception $e)
        {
            die("error encountered:".$e);
        }
?>