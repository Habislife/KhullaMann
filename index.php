<?php/*
session_start();
if(isset($_SESSION['userid']))
{
  if($_SESSION['role']="donor")
 {
   header("Location:DonorPage.php");
 }
 elseif ($_SESSION['role']="donee")
  {
  header("Location:DoneeMain.php"); 
 }
else
{
  header("Location:AdminPanel.php"); 
}

}*/
?>

<!DOCTYPE html>
<html>
<head>
  <title>Khulla Mann | Welcome </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="src/css/index.css">
   
</head>
<body>
  <header>
    <div class="container">
      <div id="branding">
        <h1><span class="highlight">Khulla</span> Mann</h1>
      </div>
      <nav>
        <ul>
          <li class="current"><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="Feedback.php">Contact Us</a></li>
          <li><a href="RegisterForm.php">Become a donor</a></li>
          <li><a href="DoneeRegForm.php">Sign Up</a></li>
          <li><a href="LoginForm.php">Login</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="showcase">
    <div class="container">
      <h1>Khulla Mann</h1>
      <p>Join Us on our journey in making the world a better place.
      </p>
      <button class="button_2"><a href="RegisterForm.php">Join Us</a></button>
    </div>
  </section>

  <section id="banner">
    <div class="container">
      <h1>Search to Donate</h1>
      <form>
        <input type="text" placeholder="Search...">
        <button type="submit" class="button_1">Search</button>
      </form>
    </div>
  </section>

  <h1 align="center">Donation Posts</h1>

  <?php include'show.php'; 
    showAll();  ?>

  <footer>
    <p>Khulla Mann, Copyright &copy; 2019</p>
  </footer>

   <script type="text/javascript" src="src/js/index.js"></script>
</body>
</html>