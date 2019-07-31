<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $address =$_POST['address'];
    $contact = $_POST['contact'];
    $account=$_POST['account'];
    $email = mysqli_real_escape_string($conn,$email);
    $username = mysqli_real_escape_string($conn,$username);
    $password = mysqli_real_escape_string($conn,$password);
    $address = mysqli_real_escape_string($conn,$address);
    $contact = mysqli_real_escape_string($conn,$contact);
    $account = mysqli_real_escape_string($conn,$account);
    $cpassword=md5($password);
    $today = date("Y/m/d");
    $time=date("h:m:s");
    date_default_timezone_set('Asia/Kathmandu'); 
 if (!empty($_FILES["image"]["name"]))
    {
     $target_dir =$_SERVER['DOCUMENT_ROOT']."/khullamann/upload/images/profile/donee/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$target_file = $target_dir.$username.".".$imageFileType;
$uploadOk = 1;

    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["image"]["size"] >2000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
 $sql = "INSERT INTO doneeprofile (profile_pic,username,email,password,address,contact_no,account_no,create_date,create_time) VALUES ('$target_file','$username','$email','$cpassword','$address','$contact','$account','$today','$time')";
 $result = mysqli_query($conn,$sql);
header('Location:../../LoginForm.php');
    }
    else{

     $sql = "INSERT INTO doneeprofile (username,email,password,address,contact_no,account_no,create_date,create_time) VALUES ('$username','$email','$cpassword','$address','$contact','$account','$today','$time')";
 $result = mysqli_query($conn,$sql);
header('Location:../../LoginForm.php');
}
$conn->close();
}
?>
