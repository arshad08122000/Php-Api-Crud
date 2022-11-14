
<?php

include 'db.php';

$conn=new mysqli($servername,$username,"",$db);

if($conn->connect_error)
{
 die("connection failed:".$conn->connect_error);
}


$id=$_POST['id'];

$query="DELETE FROM data WHERE id=$id";
$result=$conn->query($query);

if($result)
{
 $response=array("status"=>"Successfull","Message"=>"Data Delete Successfull");
}
else{
 $response=array("status"=>"Failed","Message"=>"Failed to Delete");
}


echo JSON_encode($response);
?>