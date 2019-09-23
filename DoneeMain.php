<!-- <?php
//session_start();
//if(!isset($_SESSION['userid']))
{
  //header("Location: index.php");
}
?> -->

<!DOCTYPE html>
<html>
<head>
  <title>Donee Main Page</title>
  <link rel="stylesheet" type="text/css" href="src/css/NavBar.css">
  <link rel="stylesheet" type="text/css" href="src/css/doneeMain.css">
  
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

  <!-- <div class="container"> -->
    <h3 align="center" style="padding-top: 80px; font-size: 20px; font-family: sans-serif;"><u>Previous Projects</u></h3>

  <div class="content" align="center" style="margin-top: 30px; border: 2px solid black;">
    <?php
   include'show.php';
   session_start();
   showMyproject($_SESSION['userid']); 

?>
  </div>


  <div class="post" align="center">
    <h1>NEED DONATION?</h1>
    <button type="submit" name="submit" class="create"><a href="./doneePage.php"> Create New Post</a></button>
  </div>

  
  </div>

  <footer>
    <p>Khulla Mann, Copyright &copy; 2019</p>
  </footer>
  <script type="text/javascript" src="../js/index.js"></script>
</body>
</html>
