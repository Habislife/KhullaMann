<?php

if(isset($_POST['submit']))
{

//    print_r($_POST);
    //die();

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $address =$_POST['address'];
    $contact = $_POST['contact'];
    
    $connection = mysqli_connect('localhost','root','','khullamann');
        //   $hashFormat="$2y$10$";
        // $salt = "ty12iu&oi3uilkm09#rep0";

        // $hash_salt = $hashFormat . $salt;

        $cpassword = md5($password);
        $query = "INSERT INTO userlogin(email,username,password,address,contact_no)VALUES('$email','$username','$password','$address','$contact')";
        $result = mysqli_query($connection,$query);
            header('Location:../html/Login.html');
        //        echo "matched";

        // $hashFormat="$2y$10$";
        // $salt = "ty12iu&oi3uilkm09#rep0";

        // $hash_salt = $hashFormat . $salt;

        // $password = md5($hash_salt);

      // echo $password;
    }
    else{
    header('Location: ../../khullamann');
}
?>
