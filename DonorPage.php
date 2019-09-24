<!DOCTYPE html>
<html>
<head>
  <title>Donor Page</title>
  <link rel="stylesheet" type="text/css" href="src/css/NavBar.css">
  <link rel="stylesheet" type="text/css" href="src/css/donorPage.css">
  <style type="text/css">
  .container{
  height: 70px;
  width: 100%;
  padding: 10px 30px 0px 50px;
  border: 2px solid white;
}

  .content{
  position: relative;
  margin: 30px 5px 10px 40px;
  padding: 20px 10px 40px 10px; 
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

  <div class="content" align="center" style="margin-top: 80px;">
    <h1>Recent donations</h1>
     <?php
    include'show.php';
   showAllData();

    ?> 
  </div>

  <footer>   
    <p>Khulla Mann, Copyright &copy; 2019</p>
  </footer>
  
</body> 
</html>