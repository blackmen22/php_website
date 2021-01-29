<?php

include "config.php";   #database connectivity

$bulk=new MongoDB\Driver\BulkWrite;     

  $name    = $_POST['name'];
  $empid     = $_POST['empid'];
  $gender     = $_POST['gender'];
  $dob1     = $_POST['dob'];
  $email     = $_POST['email'];
  $address     = $_POST['address'];
  $qualification    = $_POST['qualification'];
  $shift     = implode(',',$_POST['shift']);
  $password     = $_POST['password'];
  $cpassword     = $_POST['cpassword']; 

  #changing date format from yyyy-mm-dd to dd-mm-yyyy
  $resdob=explode('-',$dob1);
  $date=$resdob[2];
  $month=$resdob[1];
  $year=$resdob[0];
  $dob=$date."-".$month."-".$year;

  if($password == $cpassword)   #password validation
  {
     #values stored in variable(data) in the form of array
      $data= [
               '_id'=>new MongoDB\BSON\ObjectID,
               'name'     => $name,
               'empid'     => $empid,
               'gender'     => $gender,
               'dob'     => $dob,
               'email'     => $email,
               'address'     => $address,
               'qualification'    => $qualification,
               'shift'     => $shift,
               'password'     => $password  
                ];
      $bulk->insert($data); #query for inserting
      $exe=$client->executeBulkWrite('sample.php_mongo_crud',$bulk);    #executing Query

      header("location:view.php");    #redirecting to view.php
    } 
    else
    {
       echo "passwords didn't match";    #if passwords doesn't matched
    }
?>