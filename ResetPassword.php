<?php
session_start();
if(isset($_SESSION['userid']))
{
  if($_SESSION['role']="donor")
 {
   header("Location:DonorPage.php");
 }
 elseif ($_SESSION['role']="donee")
  {
  header("Location:DoneeMain.php"); 
 }
else
{
  header("Location:AdminPanel.php"); 
}

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
</head>
<body>
<form action="updatePassword.php" method="POST">
	<input type="password" placeholder="Enter your Password" name="password" id="password" autocomplete="on">
	<br>
	<input type="password" placeholder="Enter your RePassword" name="Repassword" id="repassword" autocomplete="on">
	<br>
	<button type="submit" name="submit" class="login">Change</button>
</form>

</body>
</html>