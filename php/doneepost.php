<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "khullamann";

//connection created
$conn = new mysqli($servername, $username, $password, $dbname);

//connection checking
if ($conn->connection_error) {
    die("Connection failed: " . $conn->connection_error);
    Creation();
}