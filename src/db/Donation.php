<?php
include 'connection.php';
include'mail.php';

    $today = date("Y/m/d");
    $time=date("h:i:sa");
    $id = $_GET['value_key'];
    session_start();
    $donor=$_SESSION['userid'];
 $sql = "INSERT INTO `donation` (`post_id`, `donor_id`, `donation_date`, `donation_time`, `Gotit`) VALUES ('$id', '$donor', '$today', '$time', '0')";
 $result = mysqli_query($conn,$sql);
 $sql="SELECT email,address,username,contact_no FROM `userprofile` WHERE user_id='$donor'";
 $result = mysqli_query($conn,$sql);
 $row = mysqli_fetch_array($result);
 $donormail=$row['email'];
 $donoraddress=$row['address'];
 $donorphone=$row['contact_no'];
 $donorusername=$row['username'];
 $sql="SELECT donee_id FROM `donation_post` WHERE post_id='$id'";
 $result = mysqli_query($conn,$sql);
 $row = mysqli_fetch_array($result);
 $doneeid=$row['donee_id'];
 $sql="SELECT email,address,username,contact_no,account_no FROM `userprofile`,doneeinfo WHERE user_id=$doneeid and donee_id=$doneeid ";
 $result = mysqli_query($conn,$sql);
 $row = mysqli_fetch_array($result);
 $doneemail=$row['email'];
 $doneeaddress=$row['address'];
 $doneephone=$row['contact_no'];
 $doneeusername=$row['username'];
 $doneeaccount=$row['account_no'];
 $message1 = "This (username, email, address, contact_no) user wants to donate in your (xyz) donation post";
 $message2 = "You are making your donation to (username,email, address, contact_no, account_no)";
$donormail= new Mail($donoremail,"Donee information",$message1,$headers);
$doneemail = new Mail($donoremail,"Donee information",$message2,$headers);
header('Location:../../DonorPage.php');
$conn->close();  
?>
