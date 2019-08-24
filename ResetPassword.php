<?php 
include 'src/db/connection.php';
if (isset($_POST['submit'])&&isset($_GET['value_key'])) {
	$password=$_POST['password'];
	$userid=$_GET['value_key'];
	$cpassword=md5($password);
	$sql="UPDATE userprofile SET `password` ='$cpassword' WHERE `user_id`='$userid'";
	$result = mysqli_query($conn,$sql);
header('Location:LoginForm.php');
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
</head>
<body>
<form method="POST">
	<input type="password" placeholder="Enter your Password" name="password" id="password" autocomplete="on">
	<br>
	<input type="password" placeholder="Enter your RePassword" name="Repassword" id="repassword" autocomplete="on">
	<br>
	<button type="submit" name="submit" class="login">Change</button>
</form>

</body>
</html>