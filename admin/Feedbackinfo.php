<!DOCTYPE html>
<html>
<head>
	<title>feedback info</title>
	<style type="text/css">
		.container{
			width: 70%;
			height: 300px;
			border: 1px solid black;
			margin: 70px 30px 20px 150px;
		}
		.content{
			width: 90%;
			height: 80px;
			border: 1px solid black;
			margin: 10px 20px 10px 30px;
			float: left;
		}
	    .content h1{
			margin: 0px;
			padding: 5px;
			font-family: sans-serif;;
			font-size: 20px;
			padding-bottom: 20px;
			float: left;
		}
		.content h3{
			margin: 0px;
			padding: 5px;
			font-family: sans-serif;;
			font-size: 20px;
			padding-bottom: 20px;
			padding-left: 5px;
			float: left;
		}
		.msgBox{
			width: 90%;
			height: 150px;
			border: 1px solid black;
			margin: 10px 20px 10px 30px;
			float: left;
		}
		h2{
			padding-top: 10px;
			padding: 30px;
			font-family: sans-serif;;
			font-size: 20px;
			padding-bottom: 20px;
			float: left;
		}
		.msgBox a{
			text-decoration: none;
			padding-top: 20px;
			padding: 30px;
			float: right;
		}
	</style>
</head>
<body>
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
	//echo "<table border='1'>"."<tr>"."<td>"."Email"."</td>"."<td>"."Subject"."</td>"."<td>"."Message"."</td>"."<td>"."Action"."</td>"."</tr>";
    // output data of each row
 while($row = $result->fetch_assoc()) {
        //echo "<tr>"."<td>".$row["feedback_email"]."</td>"."<td>".$row["subject"]."</td>" ."<td>".$row["feedback_content"]."</td><td><a href='deletion.php'>Delete</a></td>" ."</tr>";
?>
    <div class="container" align="center">
		<div class="content">
			<?php echo "<tr>"."<br>"."<td>"."<h1>".'Email: '.$row["feedback_email"]."</h1>"."</td>"."<br>"."<td>"."<h3>".'Subject: '.$row["subject"]."</h3>"."</td>"."<br>"."</tr>"; ?>
		</div>
		<div class="msgBox">
			<?php echo "<td>"."<h2>".$row["feedback_content"]."</h2>"."</td>"."<br>"."<br>"."<td><a href='deletion.php'>Delete</a></td>"; ?>
		</div>
	</div>

<?php
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

</body>
</html>
    


