<?php
include '../src/db/connection.php';
$perpage = 10;

if(isset($_GET['id'])){
	$start = $_GET['id'];
}else{
	$start = 0;
}
$count = mysqli_query($conn,"SELECT COUNT(id) FROM projects");
$rows = mysqli_fetch_array($count);
$TotalRec=$rows['COUNT(id)'];
$select = "SELECT * FROM projects LIMIT $start, $perpage";
$result = mysqli_query($conn,$select);
while($row = $result->fetch_assoc()) {
    echo $row['project_name'];
    echo "<br>";
}


if($start == 0){
	echo "Previous &laquo;";
}else{
	echo "<a href=prevnext.php?id=" . ($start - 1) . ">Previous &laquo;</a>";
}

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
if($start == $TotalRec-1){
	echo "Next &raquo;";
}else{
	echo "<a href=prevnext.php?id=". ($start + 1) ." >Next &raquo;</a>";
}
?>