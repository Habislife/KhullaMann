<?php 
include 'src/db/connection.php';
include 'mail.php';
if (isset($_POST['submit'])) {
	$header=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['givefeedback'];
	$to_email="khullamann5660@gmail.com";
    $mail= new Mail($to_email,$subject,$message,$header);	
    $query = "INSERT INTO feedback(feedback_email,subject,feedback_content) VALUES('$header','$subject','$message')";
    
    $result = mysqli_query($conn,$query);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Give feedback</title>
</head>
<body>
	<form method="POST">
		<input type="email" name="email" placeholder="My email">
		<br><br>
		<input type="text" name="subject" placeholder="Subject">
		<br><br>
		<textarea rows="5" name="givefeedback" placeholder="Give feedback..."></textarea>
		<br><br>
		<button type="submit" name="submit" value="submit">Send</button>
	</form>

</body>
</html>