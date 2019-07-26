<?php 
include 'connection.php';
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
     $subject="Feedback";
     $message="Hey ".$row['username'].","."<br>". 
      
    	$mail= new Mail($email,$subject,$message);
      echo "Hey "; 
    }
    else{
    	echo "Email unavailable";
    }
}
 ?>