<?php
session_start();
if(isset($_POST['submit']))
{
 $username = $_POST['username'];
 $password = $_POST['password'];
 $conn = mysqli_connect("localhost","root","","firphire");
  $username = mysqli_real_escape_string($connection,$username);
    $password = mysqli_real_escape_string($connection,$password);
    $cpassword=md5($password);
    

    $query = "SELECT * FROM doneeprofile WHERE username  = '{$username}' AND password ='{$cpassword}' ";

    $select_user_query = mysqli_query($connection,$query);
     if(!$select_user_query)
    {
        die("QUERY FAILED".mysqli_error($connection));
    }

    $row = mysqli_fetch_array($select_user_query);
    $_SESSION['userid']=$row['userid'];
    if( $username == $row['username']  )
    {
    	  if($cpassword == $row['password'])
    	  {
    	  	header("Location: ../../DoneeMainPage.php");
    	  }

    }
       $query = "SELECT * FROM donorprofile WHERE username  = '{$username}' AND password ='{$cpassword}' ";

    $select_user_query = mysqli_query($connection,$query);
     if(!$select_user_query)
    {
        die("QUERY FAILED".mysqli_error($connection));
    }

    $row = mysqli_fetch_array($select_user_query);
    $_SESSION['userid']=$row['userid'];
    if( $username == $row['username']  )
    {
    	  if($cpassword == $row['password'])
    	  {
    	  	header("Location: ../../DonorHomePage.php");
    	  }

    }


}
?>