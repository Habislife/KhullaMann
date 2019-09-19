<?php
include '../src/db/connection.php';
$perpage = 10;

if(isset($_GET['id'])){
	$start = $_GET['id'];
}else{
	$start = 0;
}
$count= mysqli_query($conn,"SELECT COUNT(feedback_id) FROM feedback Where flag='1'");
$rows = mysqli_fetch_array($count);
$TotalRec=$rows['COUNT(feedback_id)'];
$sql = "SELECT * FROM feedback Where flag='1' order by feedback_date,feedback_time LIMIT $start, $perpage";
$result = $conn->query($sql);

if ($TotalRec > 0) {
	echo "<table border='1'>"."<tr>"."<td>"."Email"."</td>"."<td>"."Subject"."</td>"."<td>"."Message"."</td>"."<td>"."Action"."</td>"."</tr>";
    // output data of each row
 while($row = $result->fetch_assoc()) {
        echo "<tr>"."<td>".$row["feedback_email"]."</td>"."<td>".$row["subject"]."</td>" ."<td>".$row["feedback_content"]."</td><td><a href='deletion.php'>Delete</a></td>" ."</tr>";
    }
} else {
    echo "0 results";
}
if($start == 0){
	echo "&laquo Previous";
}else{
	echo "<a href=Feedbackinfo.php?id=" . ($start - $perpage) . ">&laquo Previous</a>";
}

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
if($start+$perpage>=$TotalRec){
	echo "Next &raquo";
}else{
	echo "<a href=Feedbackinfo.php?id=". ($start + $perpage) ." >Next &raquo</a>";
}

$conn->close();
?> 
