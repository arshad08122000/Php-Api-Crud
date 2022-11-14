<?php

include 'db.php';

$response=array();

if($conn)
{
 $sql="select * from data";
 $result=$conn->query($sql);
 if($result)
 {
  $i=0;
  while($row=mysqli_fetch_assoc($result))
  {
   $response[$i]['id']=$row['id'];
   $response[$i]['name']=$row['name'];
   $response[$i]['email']=$row['email'];
   $response[$i]['age']=$row['age'];
   $i++;
  }
  echo json_encode($response);
 }
}
else
{
 echo "Database connection failed";
}

?>