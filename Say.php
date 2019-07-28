<?php
include 'src/db/connection.php';
include 'mail.php';
if (isset($_POST['submit'])) {
  $header= $_POST['email'];
  $email = mysqli_real_escape_string($conn,$header);
  $sql = "SELECT * FROM donorprofile WHERE email = '{$email}'";
    $select_user_query = mysqli_query($conn,$sql);
    if(!$select_user_query)
    {
        die("QUERY FAILED".mysqli_error($conn));
    }

    $row = mysqli_fetch_array($select_user_query);
    if( $email == $row['email'] )
    {
     $subject=$_POST['subject'];
     $message=$_POST['givefeedback']; 
      
      $mail= new Mail($to_email,$subject,$message,$header); 
      echo "Hey "; 
    }
    else{
      echo "Email unavailable";
    }

  $to_email="khullamann5660@gmail.com";
    
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
