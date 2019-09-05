<?php
include 'connection.php';
    $today = date("Y/m/d");
    $time=date("h:i:sa");
    $id = $_GET['value_key'];
    session_start();
    $donor=$_SESSION['userid'];
 $sql = "INSERT INTO `donation` (`post_id`, `donor_id`, `donation_date`, `donation_time`, `Gotit`) VALUES ('$id', '$donor', '$today', '$time', '0')";
 $result = mysqli_query($conn,$sql);
header('Location:../../DonorPage.php');
$conn->close();  
?>
