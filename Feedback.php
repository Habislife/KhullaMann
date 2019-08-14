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
		* {box-sizing: border-box}

.box{
  margin: 10% 20% 0 20%;
	border : 2px solid black;
	color: black;
	padding: 10px;
	height: auto;
  position: relative;
}

input[type=email], input[type=text]{
  width: 100%;
  padding: 10px;
  margin: 5px  0 20px 0;
  background: #f1f1f1;
}

#text{
  width: 100%;
  padding: 10px;
  margin: 5px  0 20px 0;
  background: #f1f1f1;
}

button{
  font-size: 20px;
  margin: 20px 0px;
  width: 200px;
}

	</style>
</head>
<body>
	<div class="box" align="center">
		<h1>Feedback</h1>
		<form method="POST" align="center">
			<input type="text" name="email" placeholder="My email">
			<br><br>
			<input type="text" name="subject" placeholder="Subject">
			<br><br>
			<textarea rows="5" id="text" name="givefeedback" placeholder="Give feedback..."></textarea>
			<br><br>
			<button type="submit" name="submit" value="submit">Send</button>
		</form>
	</div>
</body>
</html>