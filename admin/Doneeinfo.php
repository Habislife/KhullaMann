<?php
include '../src/db/connection.php';
$perpage = 10;

if(isset($_GET['id'])){
	$start = $_GET['id'];
}else{
	$start = 0;
}
 
$count= mysqli_query($conn,"SELECT COUNT(user_id) FROM userprofile,doneeinfo Where role='Donee' AND userprofile.user_id=doneeinfo.donee_id AND flag='1' order by userprofile.username");
$rows = mysqli_fetch_array($count);
$TotalRec=$rows['COUNT(user_id)'];
$sql = "SELECT  user_id, username,email,address,contact_no,account_no FROM userprofile,doneeinfo Where role='Donee' AND userprofile.user_id=doneeinfo.donee_id AND flag='1' order by userprofile.username  LIMIT $start, $perpage";
$result = mysqli_query($conn,$sql);
if ($TotalRec > 0) {
	echo "<table border='1'>"."<tr>"."<td>"."Username"."</td>"."<td>"."Email"."</td>"."<td>"."Address"."</td>"."<td>"."Contact No."."</td>". "<td>"."Account No."."</td>"."</tr>";
    // output data of each row
 while($row = $result->fetch_assoc()) {
        echo "<tr>"."<td>".$row["username"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["address"]."</td>" ."<td>".$row["contact_no"]."</td>" ."<td>".$row["account_no"]."</td>"."</tr>";
    }
} else {
    echo "0 results";
}
if($start == 0){
	echo "&laquo Previous";
}else{
	echo "<a href=Doneeinfo.php?id=" . ($start - $perpage) . ">&laquo Previous</a>";
}

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
if($start+$perpage>=$TotalRec){
	echo "Next &raquo";
}else{
	echo "<a href=Doneeinfo.php?id=". ($start + $perpage) ." >Next &raquo</a>";
}

  ?>
