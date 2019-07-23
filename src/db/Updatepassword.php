<<?php
include 'connection.php';
if (isset($_POST['submit'])) {
	$password=$_POST['password'];
	$cpassword=$_POST['Repassword'];
	if($password!=$cpassword)
	{
		echo "password not match";

	}
	else
		$password=md5($cpassword);
	{$sql = "UPDATE doneeprofile SET password=$password WHERE id=1";
 $result = mysqli_query($conn,$sql);
header('Location:../../LoginForm.php');

	}

 } 
 ?>