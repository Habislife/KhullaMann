<?php
include '../src/db/connection.php';
$perpage = 5;

if(isset($_GET['id'])){
	$start = $_GET['id'];
}else{
	$start = 0;
}
 
$count= mysqli_query($conn,"SELECT COUNT(post_id) FROM userprofile,donation_post Where role='Donee' AND userprofile.user_id=donation_post.donee_id AND donation_post.flag='1'");
$rows = mysqli_fetch_array($count);
$TotalRec=$rows['COUNT(post_id)'];
$sql = "SELECT  userprofile.user_id, userprofile.username, donation_post.title,donation_post.bio,donation_post.description FROM userprofile,donation_post Where role='Donee' AND userprofile.user_id=donation_post.donee_id AND donation_post.flag='1' order by donation_post.post_date asc,donation_post.post_time asc  LIMIT $start, $perpage";
$result = mysqli_query($conn,$sql);
if ($TotalRec > 0) {
	echo "<table border='1'>"."<tr>"."<td>"."Title"."</td>"."<td>"."Bio"."</td>"."<td>"."description"."</td>"."<td>"."Username"."</td>"."</tr>";
    // output data of each row
 while($row = $result->fetch_assoc()) {
        echo "<tr>"."</td>"."<td>".$row["title"]."</td>"."<td>".$row["bio"]."</td>" ."<td>".$row["description"]."</td>" ."</td>"."<td>"."<a href='userdata.php?value_key=".$row["user_id"]."'>".$row["username"]."</a>"."</td>"."</tr>";
    }
} else {
    echo "0 results";
}
if($start == 0){
	echo "&laquo Previous";
}else{
	echo "<a href=DonationPostinfo.php?id=" . ($start - $perpage) . ">&laquo Previous</a>";
}

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
if($start+$perpage>=$TotalRec){
	echo "Next &raquo";
}else{
	echo "<a href=DonationPostinfo.php?id=". ($start +$perpage) ." >Next &raquo</a>";
}

  ?>
