<?php
include '../src/db/connection.php';
$perpage = 10;

if(isset($_GET['id'])){
	$start = $_GET['id'];
}else{
	$start = 0;
}
$count= mysqli_query($conn,"SELECT COUNT(user_id) FROM userprofile Where role='Donor' AND flag='1'");
$rows = mysqli_fetch_array($count);
$TotalRec=$rows['COUNT(user_id)'];
$sql = "SELECT * FROM userprofile Where role='Donor'order by username LIMIT $start, $perpage";
$result = $conn->query($sql);

if ($TotalRec > 0) {
	echo "<table border='1'>"."<tr>"."<td>"."Username"."</td>"."<td>"."Email"."</td>"."<td>"."Address"."</td>"."<td>"."Contact"."</td>"."</tr>";
    // output data of each row
 while($row = $result->fetch_assoc()) {
        echo "<tr>"."<td>".$row["username"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["address"]."</td>" ."<td>".$row["contact_no"]."</td>" ."</tr>";
    }
} else {
    echo "0 results";
}
if($start == 0){
	echo "&laquo Previous";
}else{
	echo "<a href=Donorinfo.php?id=" . ($start - $perpage) . ">&laquo Previous</a>";
}

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
if($start+$perpage>=$TotalRec){
	echo "Next &raquo";
}else{
	echo "<a href=Donorinfo.php?id=". ($start + $perpage) ." >Next &raquo</a>";
}

$conn->close();
?> 
