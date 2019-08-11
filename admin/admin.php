<?php
include '../src/db/connection.php';
$Donor=0;
$Donation=0;
$Donee=0;

//count Donor
$sql = "SELECT count(*) as total from userprofile WHERE role ='donor'";
$result = $conn->query($sql);
$data=mysqli_fetch_assoc($result);
$Donor= $data['total'];

//count Donee
$sql = "SELECT count(*) as total from userprofile WHERE role ='donee'";
$result = $conn->query($sql);
$data= mysqli_fetch_assoc($result);
$Donee = $data['total'];

//count Donation Post
$sql = "SELECT count(*) as total from donation_post";
$result = $conn->query($sql);
$data=mysqli_fetch_assoc($result);
$Donation = $data['total'];

$sql = "SELECT count(*) as total from doneeverify WHERE role ='donee'";
$result = $conn->query($sql);
$data=mysqli_fetch_assoc($result);
$Verification= $data['total'];
$conn->close();
?>
