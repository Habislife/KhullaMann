<!DOCTYPE html>
<html>
<head>
  <title>Post Page </title>
  <link rel="stylesheet" type="text/css" href="src/css/NavBar.css">

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

  <header>
    <div class="container">
      <div id="branding">
          <h1><span class="highlight">Khulla</span> Mann</h1>
      </div>

     <div class="togglearea">
      <label for="toggle">
        <span></span>
        <span></span>
        <span></span>
      </label>
     </div>
    
      <input type="checkbox" id="toggle">
        <div class="navbar">
          <a href="index.php" class="current">Home</a>
          <a href="about.php">About</a>
          <a href="Feedback.php">Contact Us</a>
          <a href="RegisterForm.php">Become a donor</a>
          <a href="DoneeRegForm.php">Sign Up</a>
          <a href="LoginForm.php">Login</a>
        </div>
    </div>
  </header>

<?php 
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

  <footer>
    <p>Khulla Mann, Copyright &copy; 2019</p>
  </footer>
</body>
</html> 
