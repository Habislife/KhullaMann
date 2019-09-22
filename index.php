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
  <link rel="stylesheet" type="text/css" href="src/css/indexpage.css">
   
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

   <div class="post-container">
    <div class='card'>
      <div class="c1">
        <a href='post.php'><img src='img3.jpeg' style='width:100%'></a>
      </div>
         <div class="c2"><h1>Title henjdd sdwwb shdhss shwe jehbebfbe</h1></div>
          <div class="c3">
            <p class='bio'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="c4">
            <a href='post.php'><button id='viewbtn'>View</button></a>
            <a href='LoginForm.php'><button id='donatebtn'>Donate</button></a>
          </div>
    </div>

    <div class='card'>
      <div class="c1">
        <a href='post.php'><img src='gg.jpg' style='width:100%'></a>
      </div>
         <div class="c2"><h1>Title</h1></div>
          <div class="c3">
            <p class='bio'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodt aliquip ex ea commodo
            consequat. Duis aute irure dolot mollit anim id est laborum.</p>
          </div>
          <div class="c4">
            <a href='post.php'><button id='viewbtn'>View</button></a>
            <a href='LoginForm.php'><button id='donatebtn'>Donate</button></a>
          </div>
    </div>

    <div class='card'>
      <div class="c1">
        <a href='post.php'><img src='img3.jpeg' style='width:100%'></a>
      </div>
         <div class="c2"><h1>Title</h1></div>
          <div class="c3">
            <p class='bio'>Lorem ipsum mollit anim id est laborum.</p>
          </div>
          <div class="c4">
            <a href='post.php'><button id='viewbtn'>View</button></a>
            <a href='LoginForm.php'><button id='donatebtn'>Donate</button></a>
          </div>
    </div>

  </div>

  <div class="change">
    <a href="index.php" id="previous"> << Previous</a>
    <a href="index.php" id="next">Next >> </a>
  </div>


  <footer>
    <p>Khulla Mann, Copyright &copy; 2019</p>
  </footer>

   <script type="text/javascript" src="src/js/index.js"></script>
</body>
</html>