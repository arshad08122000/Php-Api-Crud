<?php

include 'db.php';

$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];


$query="INSERT INTO data(name,age,email) VALUES('$name','$age','$email')";

$result=$conn->query($query);

if($result)
{
 $response=array("status"=>"success","message"=>"Data successfully inserted");
}
else
{
 $response=array("status"=>"Failure","message"=>"failed to Insert Data");
}


echo JSON_encode($response);
?>