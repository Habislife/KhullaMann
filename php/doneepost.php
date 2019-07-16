<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "khullamann";

//connection creation 
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if($conn->connect_error)
{
    die("connection failed: ".$conn->connect_error);
}
/*else
{
    echo "connection successful";
}*/

//values that will be inserted

//$file_path = $_POST['file_path'];
$bio = $_POST['bio'];
$description = $_POST['description']; 


//insert datas in database
$data = "INSERT INTO donation_post(bio, description) VALUES ('$bio', '$description')";

if ($conn->query($data) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $data . "<br>" . $conn->connect_error;
}

$conn->close();
?>