<?php
include '../src/db/connection.php';
$sql = "SELECT document,username,user_id FROM doneeverify";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	echo "<table border='1'>"."<tr>"."<td>"."Username"."</td>"."</tr>";
    // output data of each row
 while($row = $result->fetch_assoc()) {
        echo "<tr>"."<td>"."<a href='profile.php?value_key=".$row["user_id"]."'>".$row["username"]."</a>"."</td>"."</tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 