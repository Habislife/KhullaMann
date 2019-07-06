<?php

if(isset($_POST['submit']))
{

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $role = $_POST['role'];
    $connection = mysqli_connect('localhost','root','','khullamann');

        //   $hashFormat="$2y$10$";
        // $salt = "ty12iu&oi3uilkm09#rep0";

        // $hash_salt = $hashFormat . $salt;

        $cpassword = md5($password);
        $query = "INSERT INTO userlogin(email,username,password,gender,role)VALUES('$email','$username','$cpassword','$gender','$role')";
        $result = mysqli_query($connection,$query);
            header('Location:Login.php');
        //        echo "matched";

        // $hashFormat="$2y$10$";
        // $salt = "ty12iu&oi3uilkm09#rep0";

        // $hash_salt = $hashFormat . $salt;

        // $password = md5($hash_salt);

      // echo $password;
}
else{
    header('Location: /FIRphire');
}
?>
