<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "khullamann";
$conn = new mysqli($servername,$username,$password,$dbname);
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $address =$_POST['address'];
    $contact = $_POST['contact'];
    $account=$_POST['account'];
    $cpassword=md5($password);
     $sql = "INSERT INTO doneeprofile (username,email,password,address,contact_no,account_no) VALUES ('$username','$email','$cpassword','$address','$contact','$account')";
 $result = mysqli_query($conn,$sql);
header('Location:../html/LoginForm.html');
$conn->close();
   
    

}
?>
