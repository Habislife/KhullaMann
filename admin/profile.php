<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="src/Profile.css">
</head>
<body>
	<?php 
    include '../src/db/connection.php';
    if(isset($_GET['value_key'])){
    $var = $_GET['value_key'];
    $sql = "SELECT document,username FROM doneeinfo,userprofile where doneeinfo.donee_id = '{$var}' and userprofile.user_id= '{$var}' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    ?>

    <div class="container">
    	<div class="content">
    		<?php echo "<img src='".$row["document"]."' height='500' width='500'>";
            echo"<br>"; ?>
    	</div>
    	<?php 
    	echo $row['username'];
    	echo "<a href='transfer.php?value_key=".$var."'>"."Approve</a>";
        echo"<br>";
        echo "<a href='delete.php?value_key=".$var."'>"."Delete</a>"; 
        ?>    
    </div>
    <?php
   } 
   ?>

</body>
</html>