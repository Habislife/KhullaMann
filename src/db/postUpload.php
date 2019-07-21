<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "khullamann";
$conn = new mysqli($servername,$username,$password,$dbname);
if(isset($_POST['submit']))
{
    $bio = $_POST['bio'];
    $description = $_POST['description'];
    $today = date("Y/m/d");
    $time=date("h:i:s");  
     $sql = "INSERT INTO donation_post (bio,description,post_date,post_time,donee_id) VALUES ('$bio','$description','$today','$time','1')";
 $result = mysqli_query($conn,$sql);
 echo "give some data";
$conn->close();
   
    

}
?>
