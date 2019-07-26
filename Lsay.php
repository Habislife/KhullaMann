<?php 
include '../connection.php';
include 'mail.php';
if (isset($_POST['submit'])) {
	$feedback_email = $_POST['email'];
    $
    $email = mysqli_real_escape_string($conn,$email);
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
	$email="khullamann5660@gmail.com";
$mail= new Mail($email,$subject,$message,$header);	
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