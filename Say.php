<?php
include 'src/db/connection.php';
include 'src/db/mail.php';

if (isset($_POST['submit'])) {
  $to_email="khullamann5660@gmail.com";
  session_start();
  $header = $SESSION['email'];
  $subject = $_POST['subject'];
  $message = $_POST['givefeedback']; 
  $mail = new Mail($to_email,$subject,$message);
  $query = "INSERT INTO feedback(feedback_email,subject,feedback_content) VALUES('$header','$subject','$message')";
    
  $result = mysqli_query($conn,$query);

} 
?>

<!DOCTYPE html>
<html>
<head>
  <title> LogedIn Give feedback</title>
</head>
<body>
  <form>
    <input type="text" name="subject" placeholder="Subject">
    <br><br>
    <textarea rows="5" name="givefeedback" placeholder="Give feedback..."></textarea>
    <br><br>
    <button type="submit" name="submit">Send</button>
  </form>
</body>

</html>
