<?php
include '../src/db/connection.php';
$sql = "SELECT * FROM userprofile Where role='Donor'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<table border='1'>"."<tr>"."<td>"."Username"."</td>"."<td>"."Email"."</td>"."<td>"."Address"."</td>"."<td>"."Contact"."</td>"."</tr>";
    // output data of each row
 while($row = $result->fetch_assoc()) {
        echo "<tr>"."<td>".$row["username"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["address"]."</td>" ."<td>".$row["contact_no"]."</td>" ."</tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 
