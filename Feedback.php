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
	<style type="text/css">
	html { 
   margin: 0;
    padding: 0; 
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
    <h3>Share this on </h3>
   <a href="https://www.facebook.com/"><img src="facebook1.png"></a> <a href="https://www.instagram.com/"><img src="instagram6.png"></a> <a href="https://twitter.com/"><img src="twitter3.png"></a> <br><br>   
   <button class="button_2"><a href="RegisterForm.php">Join Us</a></button>
    <br><br>
    <p>Khulla Mann, Copyright &copy; 2019</p>
  </footer>
</body>
</html>