<?php
include 'databaseCreation.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "khullamann";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    Creation();
}
$sql = "CREATE TABLE `khullamann`.`doneeprofile` ( `donee_id` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(10) NOT NULL , `email` VARCHAR(20) NOT NULL , `password` TEXT NOT NULL , `address` VARCHAR(5) NOT NULL , `contact_no` BIGINT NOT NULL , `account_no` BIGINT NOT NULL , `document` LONGBLOB NOT NULL , PRIMARY KEY (`donee_id`)) ENGINE = InnoDB;";

if ($conn->query($sql) === TRUE) {
    echo "Table doneeprofile created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$sql = "CREATE TABLE `khullamann`.`donorprofile` ( `donor_id` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(10) NOT NULL , `email` VARCHAR(20) NOT NULL , `password` TEXT NOT NULL , `address` VARCHAR(5) NOT NULL , `contact_no` BIGINT NOT NULL , PRIMARY KEY (`donor_id`)) ENGINE = InnoDB;";

if ($conn->query($sql) === TRUE) {
    echo "Table doneeprofile created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
 

// sql to create table
$conn->close();
?>