<?php

include 'db.php';

$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];
$id=$_POST['id'];

$query="UPDATE data SET name='$name',age='$age',email='$email' WHERE id='$id'";

$result=$conn->query($query);

if($result)
{
 $response=array("status"=>"success","message"=>"Data Updated Successfully");
}
else
{
 $response=array("status"=>"Failure","message"=>"failed to update Data");
}


echo JSON_encode($response);
?>