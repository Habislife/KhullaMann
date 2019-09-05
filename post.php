<!DOCTYPE html>
<html>
<head>
  <title>Post Page </title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  color: white;
}

.split {
  height: 90%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  margin-top: 50px;
}

.left {
	left: 0;
  background-size: 100% 100%;
  background-repeat: no-repeat;
  
}

.right {
  right: 0;
  
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: black;
}


</style>
</head>
<body>

 <?php 
include 'Nav.html';
include 'src/db/connection.php';
$var = $_GET['value_key']; 
$sql = "SELECT * FROM donation_post where post_id = '{$var}'";
 $result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
echo "<div class='split right'>
  <div class='centered' >
    <h1>".$row['title']."</h1>
    <br>
    <p align='justify'>".$row['description']."</p>
    <br>
    <label>$100</label>
    <button>Donate</button>
    <div style='margin: 24px 0;'>
  </div>
  </div>
</div>

<div class='split left'>

  <div class='centered'>
    <img src='".$row['file_path']."'>
  </div>
</div>";    
?>
</body>
</html> 
