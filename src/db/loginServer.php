<?php
session_start();
if(isset($_POST['submit']))
{
 $email = $_POST['email'];
 $password = $_POST['password'];
 $conn = mysqli_connect("localhost","root","","khullamann");
 $email = mysqli_real_escape_string($conn,$email);
 $password = mysqli_real_escape_string($conn,$password);
 $cpassword=md5($password);
    

    $query = "SELECT * FROM doneeprofile WHERE email = '{$email}' AND password ='{$cpassword}' ";

    $select_user_query = mysqli_query($conn,$query);
     if(!$select_user_query)
    {
        die("QUERY FAILED".mysqli_error($con));
    }

    $row = mysqli_fetch_array($select_user_query);
    $_SESSION['userid']=$row['userid'];
    if( $email == $row['email']  )
    {
    	  if($cpassword == $row['password'])
    	  {
    	  	header("Location: ../../DoneeMain.php");
    	  }

    }

    $query = "SELECT * FROM donorprofile WHERE email = '{$email}' AND password ='{$cpassword}' ";

    $select_user_query = mysqli_query($conn,$query);
     if(!$select_user_query)
    {
        die("QUERY FAILED".mysqli_error($conn));
    }

    $row = mysqli_fetch_array($select_user_query);
    $_SESSION['userid']=$row['userid'];
    if( $email == $row['email']  )
    {
          if($cpassword == $row['password'])
          {
            header("Location: ../../DonorPage.php");
          }

    }

}
?>