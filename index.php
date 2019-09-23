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
  <style type="text/css">
    .content{
 position: relative;
  margin: 30px 5%;
  width: 90%;
  height: auto;
  display: flex;
  flex-flow: row wrap;
  justify-content: space-between;
}
.card {
  float: left;
  position: relative;
  margin: 20px 1.5%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 30%;
  text-align: center;
  font-family: arial;
  max-height: inherit;
}

.card:hover {
   box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.image{
  height: 40%;
  overflow: hidden;
}
.title{
  height: 8ch;
  overflow: hidden;
}
.note{
  height:19ch;
  overflow: hidden;
  margin-bottom: 10px;
}
.link{
  height: 10%;
  margin-top: 4px;
}
.bio {
  display: block; 
  text-overflow: ellipsis;
  word-wrap: break-word;
  overflow: hidden;
  max-height: 8.6em;
  line-height: 1.8em;
  color: grey;
  font-size: 24px;
}
.card button {
  margin: 0px 5%;
  border: none;
  outline: 0;
  padding: 10px;
  color: white;
  background-color: #188224;
  text-align: center;
  cursor: pointer;
  width: 40%;
  font-size: 22px ;
  border-radius: 25px;
}

.card button:hover {
    background-color: 257543;
}

#viewbtn{
  float: left;
}

#donatebtn{
  float: left;
}

  </style>
   
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
  <?php include 'show.php';
  showAll(); ?>
  <!-- <div class="change">
    <a href="index.php" id="previous"> << Previous</a>
    <a href="index.php" id="next">Next >> </a>
  </div> -->



  <footer>
    <p>Khulla Mann, Copyright &copy; 2019</p>
  </footer>
</body>
</html>