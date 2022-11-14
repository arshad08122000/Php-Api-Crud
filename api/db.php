<?php


$servername="localhost";
$username="root";
$password="";
$db="api_data";

$conn=mysqli_connect($servername,$username,"",$db);

if($conn->connect_error)
{
 die("connection failed:".$conn->connect_error);
}
?>