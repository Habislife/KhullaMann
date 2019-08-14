<?php 
include '../src/db/connection.php';
if(isset($_GET['value_key'])){
  $var = $_GET['value_key']; //some_value
$sql="Delete FROM userprofile where user_id='$var'";
$result = mysqli_query($conn,$sql);
$sql="SELECT MAX(user_id) FROM userprofile";
$result = mysqli_query($conn,$sql);
$sql="ALTER TABLE `userprofile AUTO_INCREMENT =$result";
$result = mysqli_query($conn,$sql);
?>