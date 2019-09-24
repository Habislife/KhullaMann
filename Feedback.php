<?php
//session_start();
/*if(isset($_SESSION['userid']))
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
}*/
include 'src/db/connection.php';
include 'src/db/mail.php';
if (isset($_POST['submit'])) {
	$header=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['givefeedback'];
   $today = date("Y/m/d");
    $time=date("h:i:sa");
	//$to_email="khullamann5660@gmail.com";
    //$mail= new Mail($to_email,$subject,$message,$header);	
    $query = "INSERT INTO feedback(feedback_email,subject,feedback_content,feedback_date,feedback_time,flag) VALUES('$header','$subject','$message','$today','$time','1')";
    
    $result = mysqli_query($conn,$query);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Give feedback</title>
	<link rel="stylesheet" type="text/css" href="src/css/NavBar.css">
   <link rel="stylesheet" type="text/css" href="src/css/FormStyle.css">

  <link rel="stylesheet" type="text/css" href="src/css/NavBar.css">
  <script type="text/javascript" src="src/js/validate.js"></script>
</head>
<body>

<header>
  <div class="container">
      <div id="branding">
          <h1><span class="highlight">Khulla</span> Mann</h1>
      </div>

    <div class="togglearea">
      <label for="toggle">
        <span></span>
        <span></span>
        <span></span>
      </label>
    </div>
    
    <input type="checkbox" id="toggle">
    <div class="navbar">
      <a href="index.php">Home</a>
          <a href="about.php">About</a>
          <a href="Feedback.php" class="current">Contact Us</a>
          <a href="RegisterForm.php">Become a donor</a>
          <a href="DoneeRegForm.php">Sign Up</a>
          <a href="LoginForm.php">Login</a>
    </div>
  </div>
</header>

	<div class="box" align="center">
		<h1>Feedback</h1>

		<form method="POST" onsubmit="return Validate()" align="center">
			<div class="inputBox">
				<input type="text" name="email" placeholder="My email" id="email" onkeyup='return Validate()'>
			</div>
      <span id='message'></span>
			<br><br>

			<div class="inputBox">
				<input type="text" name="subject" placeholder="Subject" id="subject" onkeyup='return Validate()'>
			</div>
      <span id='message1'></span>
			<br><br>

			<div class="inputBox">
				<textarea rows="5" id="text" name="givefeedback" placeholder="Give feedback..." onkeyup='return Validate()'></textarea>
			</div>
      <span id='message2'></span>
			<br><br>

			<input type="submit" name="submit" value="Send">
		</form>
	</div>

  <footer>
    <p>Khulla Mann, Copyright &copy; 2019</p>
  </footer>
</body>
</html>