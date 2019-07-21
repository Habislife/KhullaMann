<?php
include 'connection.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
$sql = "CREATE DATABASE khullamann";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
}
else {
    echo "Error creating database: " . $conn->error;
}

}
$conn->close();


?>