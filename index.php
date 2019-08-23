<?php
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

}
?>  
<!DOCTYPE html>
<html>
<head>
  <title>Khulla mann homepage</title>
  <link rel="stylesheet" type="text/css" href="src/css/homepage.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
<style>
  * {
    font-family: 'Raleway', sans-serif;
    margin: 0;
    padding : 0;
  }

nav {
  position: fixed; 
  top: 0; 
  width: 100%; 
  z-index: 1;
}

ul {
  height: 50px;
  list-style-type: none;
  overflow: hidden;
  border: 1px solid #e7e7e7;
  background-color: #f3f3f3;
}

li {
  float: left;
}

li a {
  display: block;
  color: #666;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #ddd;
}

li a.active {
  color: white;
  background-color: #4CAF50;
}

#search-container {
  float :right;
}

#search-container input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

 #search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

#menu{
  float: right;
}

</style>
</head>
<body>
  
  <nav>
    <ul>
      <li><a class="active" href="index.php">KhullaMann</a></li>
      <li><a  href="index.php">Home</a></li>
      <li><a  href="#">About</a></li>
      <li><a  href="UserFeedback.php">Contact</a></li>
    
      <form id="search-container">
        <input type="text" name="search" placeholder="Search....."> 
        <button><i class="fa fa-search"></i></button>
      </form>

      <div id="menu">
        <li><a href="RegisterForm.php">Become a Donor</a></li>
        <li><a href="DoneeRegForm.php">Sign Up</a></li>
        <li><a href="LoginForm.php">Log In</a></li>
      </div>  
    </ul>
  </nav>


  <div style="margin-top: 50px;">
      <img  src="src/images/khullamann.png" style="width: 100%;">
    </div>
    <br>

    <div class="content">

      <div class="card">
       <a href="#"><img src="src/images/anes-sabitovic-AyflGfRL9OA-unsplash.jpg" alt="Avatar" style="width:100%"></a>
        <h1>Refugee Campaign</h1>
        <p class="bio">Help the refugees.</p>
         <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem  Super slim and cfy um v.uper slim and cfy um vuper slim and cfy um upanv</p>
        <a href="post.php"><button id="viewbtn">View</button></a>
        <a href="LoginForm.php"><button id="donatebtn">Donate</button></a>
    </div>
      

      <div class="card">
       <a href="#"><img src="src/images/anes-sabitovic-AyflGfRL9OA-unsplash.jpg" alt="Avatar" style="width:100%"></a>
        <h1>Refugee Campaign</h1>
        <p class="bio">Help the refugees.</p>
         <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem  Super slim and cfy um v.uper slim and cfy um vuper slim and cfy um upanv</p>
        <a href="post.php"><button id="viewbtn">View</button></a>
        <a href="LoginForm.php"><button id="donatebtn">Donate</button></a>
    </div>
    
      <div class="card">
       <a href="#"><img src="src/images/anes-sabitovic-AyflGfRL9OA-unsplash.jpg" alt="Avatar" style="width:100%"></a>
        <h1>Refugee Campaign</h1>
        <p class="bio">Help the refugees.</p>
         <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem  Super slim and cfy um v.uper slim and cfy um vuper slim and cfy um upanv</p>
        <a href="post.php"><button id="viewbtn">View</button></a>
        <a href="LoginForm.php"><button id="donatebtn">Donate</button></a>
    </div>


    <script type="text/javascript" src="src/js/index.js"></script>
</body>
</html>