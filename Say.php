<?php
include 'connection.php'  

if(isset($_POST['submit']))
{
  $sub = $_POST['sub'];
  $feedback = $_POST['feeback'];
  $email = $_POST['email'];
  $email = mysqli_real_escape_string($conn,$email);
  $query = "SELECT * FROM donorprofile WHERE email = '{$email}'";
    $select_user_query = mysqli_query($conn,$query);
    if(!$select_user_query)
    {
        die("QUERY FAILED".mysqli_error($conn));
    }

    $row = mysqli_fetch_array($select_user_query);
    if( $email == $row['email'] )
    {
     $subject="Feedback";
     $message="Hey ".$row['username'].","."<br>". $ 
      
    	$mail= new Mail($email,$subject,$message);
      echo "Hey "; 
    }
    else{
    	echo "Email unavailable";
    }
}
class Mail
{
public $to_email;
public $subject;
public $message;
public $headers = $email; /*'From: noreply @ gmail . com';*/
public function __construct($to_email,$subject,$message)
{ 

mail($to_email,$subject,$message,$this->headers);
 } 

}
?>

<!DOCTYPE html>
<html>
<head>
	<title> LogedIn Give feedback</title>
</head>
<body>
	<form>
		<input type="text" name="subject" placeholder="Subject" id="sub">
		<br><br>
		<textarea rows="5" name="givefeedback" placeholder="Give feedback..." id="feedback"></textarea>
		<br><br>
		<button type="submit" name="submit">Send</button>
	</form>
</body>

</html>

/*if(isset($_POST['submit']))
{
	//$sub = $_POST['sub'];
    //$email = $_POST['email'];
    $email = mysqli_real_escape_string($conn,$email);
    $query = "SELECT * FROM donorprofile WHERE email = '{$email}'";
    $select_user_query = mysqli_query($conn,$query);
    if(!$select_user_query)
    {
        die("QUERY FAILED".mysqli_error($conn));
    }

    $row = mysqli_fetch_array($select_user_query);
    if( $email == $row['email'] )
    {
     $subject="Feedback";
     $message="Hey ".$row['username'].","."<br>". 
      
    	$mail= new Mail($email,$subject,$message);
      echo "Hey "; 
    }
    else{
    	echo "Email unavailable";
    }
}*/
