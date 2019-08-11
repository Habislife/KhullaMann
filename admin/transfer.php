<?php 
include '../src/db/connection.php';
if(isset($_GET['value_key'])){
  $var = $_GET['value_key']; //some_value
$sql = "SELECT * FROM doneeverify where user_id = '{$var}'";
$result = mysqli_query($conn,$sql);
$row =mysqli_fetch_array($result);
$username= $row["username"];
$document=$row["document"];
$account=$row["account_no"];
$profilepic=$row["profile_pic"];
$email=$row["email"];
$password=$row['password'];
$address=$row["address"];
$contact=$row["contact_no"];
$date=$row["create_date"];
$time=$row["create_time"];
$role="donee";
if (!empty($row["profile_pic"])) {
$sql = "INSERT INTO userprofile (profile_pic,username,email,password,address,contact_no,create_date,create_time) VALUES ('$profilepic','$username','$email','$password','$address','$contact','$date','$time')";
 $result = mysqli_query($conn,$sql);
    }
    
    else{
     $sql = "INSERT INTO userprofile (username,email,password,address,contact_no,create_date,create_time,role) VALUES ('$username','$email','$password','$address','$contact','$date','$time','donor')";
    
 $result = mysqli_query($conn,$sql);
}
$sql= "SELECT user_id  FROM userprofile where username='$username'";
$result = mysqli_query($conn,$sql);
$row =mysqli_fetch_array($result);
$user_id=$row["user_id"];
$sql = "INSERT INTO doneeinfo (donee_id,account_no,document) VALUES ('$user_id','$account','$document')";
$result = mysqli_query($conn,$sql);
$sql="Delete FROM doneeverify where user_id='$user_id'";
$result = mysqli_query($conn,$sql);
}
?>
