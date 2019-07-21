<?php
include 'connection.php';
$target_dir =$_SERVER['DOCUMENT_ROOT']."/khullamann/upload/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST['submit']))
{
	$check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    $bio = $_POST['bio'];
    $description = $_POST['description'];
    $today = date("Y/m/d");
    $time=date("h:m:s"); 
     $sql = "INSERT INTO donation_post (file_path,bio,description,post_date,post_time,donee_id) VALUES ('$target_file','$bio','$description','$today','$time','1')";
 $result = mysqli_query($conn,$sql);
 echo "give some data";
$conn->close();
}
?>