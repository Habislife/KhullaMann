<?php
include 'connection.php';
include 'mail.php';

if(isset($_POST['submit']))
{   $email = $_POST['email'];
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
    $target_dir =$_SERVER['DOCUMENT_ROOT']."/khullamann/upload/images/profile/document/";
    $target_file = $target_dir . basename($_FILES["document"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$target_file = $target_dir.$username.".".$imageFileType;
$document="/khullamann/upload/images/profile/document/".$username.".".$imageFileType;
$uploadOk = 1;

    $check = getimagesize($_FILES["document"]["tmp_name"]);
    if($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["document"]["tmp_name"], $target_file)) {
        

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
if (!empty($_FILES["image"]["name"]))
    {

$target_dir =$_SERVER['DOCUMENT_ROOT']."/khullamann/upload/images/profile/donee/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$target_file = $target_dir.$username.".".$imageFileType;
$uploadOk = 1;

    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
 $sql = "INSERT INTO doneeverify (profile_pic,username,email,password,address,contact_no,account_no,document,create_date,create_time) VALUES ('$target_file','$username','$email','$cpassword','$address','$contact', '$account','$document','$today','$time')";
 $result = mysqli_query($conn,$sql);
    }
    else{

     $sql = "INSERT INTO doneeverify (username,email,password,address,contact_no,account_no,document,create_date,create_time,role) VALUES ('$username','$email','$cpassword','$address','$contact', '$account','$document','$today','$time','donee')";

 $result = mysqli_query($conn,$sql);
}

$subject="Approval Pending";
     $message="Hi ".$username.","."<br>"."We are holding your account for verification"."<br>"."Please Wait for 24 hrs".
"Thank you for using KhullaMann!
"."<br>"."The KhullaMann Team";
$headers = 'From: noreply @ gmail . com';
$mail= new Mail($email,$subject,$message,$headers);
$conn->close();
}
?>
