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
<!--   <link rel="stylesheet" type="text/css" href="src/css/NavBar.css"> -->
  <link rel="stylesheet" type="text/css" href="src/css/doneePage.css">
  <style type="text/css">
  header{
  background:#f3f3f3;
  color: black;
  min-height: 20px;
  border-bottom: #00b300 3px solid;
  z-index: 1;
}
header #branding{
  float: left;
}

header #branding h1{
  margin:0;
}

header .highlight,.navbar a.current{
  color: #188224;
  font-weight: bold;
}

.navbar
{
  display: flex;
  justify-content: flex-end;
}

.navbar a
{
  color: black;
  text-align: center;
  text-decoration: none;
  padding: 14px 28px;
}

.navbar a:hover
{
  color: #cccccc;
}

#toggle
{
  display: none;
}

.togglearea
{
  background-color: #f3f3f3;
  border-bottom: 2px solid white;
  color: white;
  padding-bottom: 10px;
  display: flex;
  justify-content: flex-end;
}

.togglearea label
{
  background-color: #cccccc;
  height: 45px;
  width: 50px;
  color: black;
  border-radius: 6px;
  cursor: pointer;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.togglearea label span
{
  background-color: black;
  height: 4px;
  width: 70%;
  margin: 2px 0px;
}

.togglearea
{
  display: none;
}


footer{
  height: 200px;
  margin-top: 20px;
  color: #ffffff;
  background-color: #1E4B28;
  text-align: center;
  z-index: 1;
  padding-top: 50px;
}

footer p{
  margin-left: 30px;
}

@media(max-width: 768px){
  header nav, header nav li{
    float: none;
    text-align: center;
    width: 100%;
  }
}

@media screen and (max-width: 1024px)
{
  .navbar
  {
    flex-direction: column;
    display: none;
  }

  .navbar a:hover, .navbar a.current:hover
  {
    background-color: #cccccc;
    color: black;
  }

  .navbar a.current{
    color:white;
    background-color: #188224;
  }

  header #branding{
    font-size: 14px;
  }

  .togglearea label
  {
    height: 35px;
    width: 40px;
  }

  #toggle:checked + .navbar
  {
    display: flex;
  }

  .togglearea
  { 
    display: flex;
  }
}

.button_2{
  height: 50px;
  background: #188224;
  border: 0;
  margin-top: 10px;
  padding-left: 20px;
  padding-right: 20px;
  color: #ffffff; 
  border-radius: 25px;
  cursor: pointer;
}

.button_2 a{
  text-decoration: none;
  color: white;
  font-size: 22px;
}

  .container{
  height: 70px;
  width: 100%;
  padding: 0px 20px 0px 40px;
  border: 2px solid white;
}

  .content{
  position: relative;
  margin: 50px 30px 30px 30px;
  width: 95%;
  height: auto;
  display: flex;
  flex-flow: row wrap;
  justify-content: space-between;
  border: 1px solid white;
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
          <a href="Feedback.php">Feedback</a>
          <a href="RegisterForm.php">Become a donor</a>
          <a href="DoneeRegForm.php">Sign Up</a>
          <a href="LoginForm.php">Login</a>
    </div>
  </div>
</header>

  <!-- <div class="container"> -->
    <h3 align="center" style="padding: 20px; font-size: 25px; font-family: sans-serif; "><u>Previous Projects</u></h3>
    <?php
   include'show.php';
   session_start();
   showMyproject($_SESSION['userid']); 


?>
  <div class="post" align="center">
    <h1>NEED DONATION?</h1>
    <button class="button_1"><a href="./doneePage.php">Create New Post</a></button>
  </div>

  
  

  <footer>
    <p>Khulla Mann, Copyright &copy; 2019</p>
  </footer>
</body>
</html>
