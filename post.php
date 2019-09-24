<!DOCTYPE html>
<html>
<head>
  <title>Donation Post Page </title>
  <link rel="stylesheet" type="text/css" href="src/css/NavigationBar.css">
  <link rel="stylesheet" type="text/css" href="src/css/PostStyle.css">

</head>
<body>

  <header>
  <div class="container">
      <div id="branding">
          <h1><a href="DonorPage.php"><span class="highlight">Khulla</span> Mann </a></h1>
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
        <a href="DonorPage.php">Home</a>
        <a href="about.php">About</a>
        <a href="DonorFeedback.php">Feedback</a>
        <a href="DonorProfile.php">Profile</a>
        <a href="logout.php">Log Out</a>
    </div>
  </div>
</header>


 <div class="post-container" align="center">
  <img src="src/css/img3.jpeg" class="post-image">
  <h1 class="post-title">Title</h1>
  <p class="post-content" align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <button class="donatebtn">Donate</button>
</div> 






<!--  <?php 
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
?>  -->


<footer>
    <p>Khulla Mann, Copyright &copy; 2019</p>
  </footer>
</body>
</html> 
