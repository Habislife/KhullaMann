<!-- <?php
/*session_start();
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
include 'src/db/connection.php';
include 'src/db/mail.php';
if (isset($_POST['submit'])) {
	$header=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['givefeedback'];
	//$to_email="khullamann5660@gmail.com";
    //$mail= new Mail($to_email,$subject,$message,$header);	
    $query = "INSERT INTO feedback(feedback_email,subject,feedback_content) VALUES('$header','$subject','$message')";
    
    $result = mysqli_query($conn,$query);
}
*/
?> -->

<!DOCTYPE html>
<html>
<head>
	<title>Give feedback</title>
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

    * {box-sizing: border-box}

.box {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -45%);
  width: 25rem;
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

.box .inputBox input ,textarea {
  width: 100%;
  padding: 0.625rem 0;
  font-size: 1rem;
  color:  #07558F;
  letter-spacing: 0.062rem;
  margin-bottom: 1.875rem;
  border: none;
  border-bottom: 0.065rem solid #07558F;
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



::placeholder {
  color:  #07558F;
}

.box input[type="submit"] {
  border: none;
  outline: none;
  color: #fff;
  background-color:   #1889B5;
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

	<?php include 'indexNav.html' ?>

	<div class="box" align="center">
		<h1>Feedback</h1>

		<form method="POST" align="center">
			<div class="inputBox">
				<input type="text" name="email" placeholder="My email">
			</div>
			<br><br>

			<div class="inputBox">
				<input type="text" name="subject" placeholder="Subject">
			</div>
			<br><br>

			<div class="inputBox">
				<textarea rows="5" id="text" name="givefeedback" placeholder="Give feedback..."></textarea>
			</div>
			<br><br>

			<input type="submit" name="submit" value="Send">
		</form>
	</div>
</body>
</html>