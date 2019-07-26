<?php 
include '../../connection.php';
include 'mail.php';
if (isset($_POST['submit'])) {
	$feedback_email = $_POST['feedback_email'];
	$subject = $_POST['subject'];
    $feedback_content = $_POST['feedback_content'];
    $email = mysqli_real_escape_string($conn,$feedback_email,$subject,$feedback_content);
    $query = "INSERT * INTO feedback";
    $select_user_query = mysqli_query($conn,$query);
    if(!$select_user_query)
    {
        die("QUERY FAILED".mysqli_error($conn));
    }

    $row = mysqli_fetch_array($select_user_query);

	$header=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['givefeedback'];
	$to_email="khullamann5660@gmail.com";
    $mail= new Mail($to_email,$subject,$message,$header);	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Give feedback</title>
</head>
<body>
	<form method="POST">
		<input type="email" name="email" placeholder="My email" id="feedback_email">
		<br><br>
		<input type="text" name="subject" placeholder="Subject" id="subject">
		<br><br>
		<textarea rows="5" name="givefeedback" placeholder="Give feedback..." id="feedback_content"></textarea>
		<br><br>
		<button type="submit" name="submit" value="submit">Send</button>
	</form>

</body>
</html>