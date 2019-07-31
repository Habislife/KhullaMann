<?php
include 'connection.php';
if(isset($_POST['submit']))
{
 $email = $_POST['email'];
 $password = $_POST['password'];
 $email = mysqli_real_escape_string($conn,$email);
 $password = mysqli_real_escape_string($conn,$password);
 $cpassword=md5($password);
    
    if(!empty($_POST["remember"])) {
    setcookie ("email",$_POST["email"],time()+ 3600);
    setcookie ("password",$_POST["password"],time()+ 3600);
    echo "Cookies Set Successfuly";
} else {
    setcookie("email","");
    setcookie("password","");
    echo "Cookies Not Set";
}
 
    $query = "SELECT * FROM doneeprofile WHERE email = '{$email}' AND password ='{$cpassword}' ";

    $select_user_query = mysqli_query($conn,$query);
     if(!$select_user_query)
    {
        die("QUERY FAILED".mysqli_error($con));
    }

    $row = mysqli_fetch_array($select_user_query);
    if( $email == $row['email']  )
    {
    	  if($cpassword == $row['password'])
    	  {
            session_start();
            $_SESSION['userid']=$row['donee_id'];
            $_SESSION['email']=$row['email'];
             $_SESSION['role']="donee";
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
    if( $email == $row['email']  )
    {
          if($cpassword == $row['password'])
          {
            session_start();
             $_SESSION['userid']=$row['donor_id'];
             $_SESSION['email']=$row['email'];
               $_SESSION['role']="donor";
            header("Location: ../../DonorPage.php");
          }

    }

}

?>
 
<p><a href="LoginForm.php"> Go to Login Page </a> </p>

