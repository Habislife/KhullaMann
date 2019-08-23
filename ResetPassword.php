<?php 
include 'src/db/connection.php';
if (isset($_POST['submit'])&&isset($_GET['value_key'])) {
	$password=$_POST['password'];
	$userid=$_GET['value_key'];
	$cpassword=md5($password);
	$sql="UPDATE userprofile SET `password` ='$cpassword' WHERE `user_id`='$userid'";
	$result = mysqli_query($conn,$sql);
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
	<style type="text/css">
		html { 
	 margin: 0;
  	padding: 0;
  	background: url(src/images/bg.png) no-repeat center center fixed; 
  	-webkit-background-size: cover;
 	-moz-background-size: cover;
 	-o-background-size: cover;
 	background-size: cover;
 	font-family: sans-serif;
}

.box {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 30rem;
  padding: 2.5rem;
  box-sizing: border-box;
  background: rgba(211, 249, 232, 0.3);
  border-radius: 0.625rem;
}

.box h1 {
  margin: 0 0 1.875rem;
  padding: 0;
  color:  #07558F;
  text-align: center;
}

.box .inputBox {
  position: relative;
}

.box .inputBox input {
  width: 100%;
  padding: 0.625rem 0;
  font-size: 1rem;
  color: #07558F;
  letter-spacing: 0.062rem;
  margin-bottom: 1.875rem;
  border: none;
  border-bottom: 0.065rem solid  #1889B5;
  outline: none;
  background: transparent;
}

.box .inputBox label {
  position: absolute;
  top: 0;
  left: 0;
  padding: 0.625rem 0;
  font-size: 1rem;
  color: #07558F;
  pointer-events: none;
  transition: 0.5s;
}

.box .inputBox input:focus ~ label,
.box .inputBox input:valid ~ label,
.box .inputBox input:not([value=""]) ~ label {
  top: -1.125rem;
  left: 0;
  color: #07558F;
  font-size: 0.75rem;
}

::placeholder {
  color: #07558F;
}

.box input[type="submit"] {
  border: none;
  outline: none;
  color: #fff;
  background-color:  #1889B5 ; 
  padding: 0.625rem 1.25rem;
  cursor: pointer;
  border-radius: 0.312rem;
  font-size: 1rem;
}

.box input[type="submit"]:hover {
  background-color: #07558F;
}
	</style>
</head>
<body>
	<?php include'Nav.html' ?>

<div class="box" align="center">
	<h1>Reset Password</h1>

	<form method="POST" >
		<div class="inputBox">
		<input type="password" placeholder="Enter your Password" name="password" id="password" autocomplete="on">
		</div>
		<br>

		<div class="inputBox">
		<input type="password" placeholder="Enter your RePassword" name="Repassword" id="repassword" autocomplete="on">
		</div>
		<br>

		<input type="submit" name="submit" class="login" value=" Change">
	</form>
</div>

</body>
</html>