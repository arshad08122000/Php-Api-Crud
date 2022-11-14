<?php
include 'db.php';

$id=$_POST['id'];
$query="SELECT * FROM data WHERE id=$id";
$result=$conn->query($query);
$response=array();

if($result)
{
 while($row=mysqli_fetch_assoc($result))
 {
  echo 'Id found';
  echo " ";
  $i=0;
  $response[$i]['name']=$row['name'];
  $response[$i]['email']=$row['email'];
  $response[$i]['age']=$row['age'];
  echo json_encode($response);
 }
}
else
{
 echo 'Id Not found';
}

?>