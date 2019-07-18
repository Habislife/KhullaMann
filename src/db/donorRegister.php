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
    $cpassword=md5($password);
     $sql = "INSERT INTO donorprofile (username,email,password,address,contact_no) VALUES ('$username','$email','$cpassword','$address','$contact')";
 $result = mysqli_query($conn,$sql);
header('Location:../../LoginForm.php');
$conn->close();
   
    

}
?>
