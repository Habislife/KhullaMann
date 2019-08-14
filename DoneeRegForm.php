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
    <title>Register Form</title>
    <link rel="stylesheet" type="text/css" href="src/css/Donee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  <style>
  * {
    font-family: 'Raleway', sans-serif;
    margin: 0;
    padding : 0;
  }
  {box-sizing: border-box}

.box{
  margin: 10% 20% 10% 20%;
  border : 2px solid black;
  color: black;
  padding: 20px;
  height: 1000px;
  position: relative;
}

nav {
  position: fixed; 
  top: 0; 
  width: 100%;
  z-index: 1; 
}

ul {
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

.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px; 
  border: none;
  outline: none;
  padding: 14px 16px;
  background-color: inherit;
  color: #666;
}

.dropdown:hover {
  background-color: #ddd;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.content{
  background-image: url('photo.png');
}

.avatar {
  vertical-align: middle;
  width: 30px;
  height: 30px;
  border-radius: 30%;
}
</style>

     <script type="text/javascript" src="src/js/DoneeReg.js"></script>
  </head>

  <body>
    <nav>
    <ul>
      <li><a class="active" href="index.php">KhullaMann</a></li>
      <li><a  href="index.php">Home</a></li>
      <li><a  href="#">About</a></li>
      <li><a  href="#">Contact</a></li> 
    </ul>
  </nav>
    
    
         <span id="errorMessage" style="color: red;"></span>
    <div class="box">
      <form name=registerForm method="POST"  onsubmit="return validateForm()" action="src/db/doneeRegister.php" enctype="multipart/form-data">
      
        <h1 align="center">Register</h1>
      
         <div class="image_container">
          <div id="upload">
            <img id="profilepic">
          </div>
          <input type="file" name="image" accept="image/*" id="file" onchange="loadImage(event)">
          
        </div>
        

       <input type="text" placeholder="Enter Username" name="username" id="username" onkeyup='fieldCheck();'>   
        <br><span id='message1'></span><br>

      
           <input type="email" placeholder="Enter Email" name="email" id="email" onkeyup='fieldCheck();'>
           <br><span id='message2'></span><br>

        
           <input type="password" placeholder="Enter Password" name="password" id="password" onkeyup='fieldCheck();'>
           <br><span id='message3'></span><br>
          
           <input type="password" placeholder="Enter Re-Password" name="repassword" id="repassword" onkeyup='check();' onkeyup='fieldCheck();'>
           <br><span id='message'></span><br>

          
           <input type="text" placeholder="Enter Address" name="address" id="address" onkeyup='fieldCheck();'>
           <br><span id='message4'></span><br>
           
           <input type="tel" placeholder="Enter Contact No." name="contact" id="contact" onkeyup='fieldCheck();'>
            <br><span id='message5'></span><br>

          <input type="text" placeholder="Enter Account No." name="account" autocomplete="on" id="account" onkeyup='fieldCheck();'>
        <span id='message6'></span>
          <br><br>

          <div class="image_container">
          <div id="upload">
            <img id="document">
          </div>
          <input type="file" name="document" accept="image/*" id="file" onchange="loadFile(event)">
          
        </div>
        <br><br>

           <div align="center">
             <button type="submit" name="submit" class="register" value="submit" id="register">Register</button>
             <br>
      
          <label>
            Want to Login?
            <a href="LoginForm.php">Login </a>
          </label>
        </div>
      </form>
     </div>

  </body>
</html>