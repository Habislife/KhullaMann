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
include 'src/db/connection.php';
if (isset($_POST['submit'])) {
  $to_email="khullamann5660@gmail.com";
  session_start();
  $header = $_SESSION['email'];
  $user_id = $_SESSION['user_id'];
  $subject = $_POST['subject'];
  $message = $_POST['givefeedback']; 
  $query = "INSERT INTO feedback(subject,feedback_content, feedback_email,user_id) VALUES('$subject','$message','$header','$user_id')";
    
  $result = mysqli_query($conn,$query);
  header("location:DonorPage.php");
} 
?>

<!DOCTYPE html>
<html>
<head>
  <title> LogedIn Give feedback</title>
</head>
<body>
  <form method="POST">
    <input type="text" name="subject" placeholder="Subject">
    <br><br>
    <textarea rows="5" name="givefeedback" placeholder="Give feedback..."></textarea>
    <br><br>
    <button type="submit" name="submit">Send</button>
  </form>
</body>

</html>
