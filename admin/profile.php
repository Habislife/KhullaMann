<?php 
include '../src/db/connection.php';
if(isset($_GET['value_key'])){
  $var = $_GET['value_key']; //some_value
$sql = "SELECT document,username FROM doneeverify where user_id = '{$var}'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "<img src='".$row["document"]."' height='500' width='500'>";
echo"<br>";
echo "<a href='transfer.php?value_key=".$var."'>"."Approve</a>";
echo"<br>";
echo "<a href='delete.php?value_key=".$var."'>"."Delete</a>";
}

 ?>