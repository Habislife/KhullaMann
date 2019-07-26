<?php 
include 'connection.php';
include '../../mail.php';
if(isset($_POST['submit']))
{
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
     $subject="Forget Password";
     $message="Hi ".$row['username'].","."<br>".
"Reset your password"."<br>".", and we'll get you on your way"."<br>".
"To change your KhullaMann password, click the link below."."<br>"."<a href='localhost/KhullaMann'>.
Reset my password</a>"."<br>".
"This link will expire in 24 hours, so be sure to use it right away."."<br>"."<br>".
"Thank you for using KhullaMann!
"."<br>"."The KhullaMann Team";
$headers = 'From: noreply @ gmail . com';
    	$mail= new Mail($email,$subject,$message,$headers);
      echo "Hi "; 
    }
    else{
    	echo "Email unavailable";
    }
}
 ?>