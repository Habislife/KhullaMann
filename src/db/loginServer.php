<?php 
include 'connection.php';
if (isset($_POST['log-in']))
 {
 $email = $_POST['email'];
 $password = $_POST['password'];
 $email = mysqli_real_escape_string($conn,$email);
 $password = mysqli_real_escape_string($conn,$password);
 $cpassword=md5($password);
 if(!empty($_POST["remember"])) {
    setcookie ("email",$_POST["email"],time()+ 3600);
    setcookie ("password",$_POST["password"],time()+ 3600);
} 
else
 {
    setcookie("email","");
    setcookie("password","");
}
  $query = "SELECT * FROM userprofile WHERE email = '{$email}' AND password ='{$cpassword}' ";

    $select_user_query = mysqli_query($conn,$query);
     if(!$select_user_query)
    {
        die("QUERY FAILED".mysqli_error($conn));
    }

    $row = mysqli_fetch_array($select_user_query);
    if( $email == $row['email'])
    {
      if($cpassword == $row['password'])
    {
      session_start();
       $_SESSION['userid']=$row['user_id'];
             $_SESSION['email']=$row['email'];
      if($row['role']=="donor")
        {
          $_SESSION['role']=$row['role'];
          header("Location: ../../DonorPage.php");


        }
        elseif($row['role']=="donee"){
          $_SESSION['role']=$row['role'];
          header("Location: ../../DoneeMain.php");
        }
        else{
         $_SESSION['role']=$row['role'];
          header("Location: ../../admin/AdminPanel.php"); 
        }

    }
    else
      {
        echo"Email or Password Not Match";
      }

    }
    else{
      echo"Email or Password Not Match";
    }

}
 ?>