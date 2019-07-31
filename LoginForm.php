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
		<title>Login Form</title>
		<link rel="stylesheet" type="text/css" href="src/css/LoginForm.css">
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
	</head>
<body>
	<nav>
    <ul>
      <li><a class="active" href="#logo">KhullaMann</a></li>
      <li><a  href="#">Home</a></li>
      <li><a  href="#">About</a></li>
      <li><a  href="#">Contact</a></li> 
    </ul>
  </nav>

		<div class="box">
			<form  onsubmit="return checkForm()" align="center" method="POST"  action="src/db/loginServer.php">

				<h1 align="center">Login</h1>
				<br>

				<input type="email" placeholder="Enter your Email" name="email" id="email" autocomplete="on"
				 onclick='checkform();' value=" <?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>" class="input-field">
                <span id="message"></span>
				<br><br>

				<div id="field">
   				 	<input type="password" placeholder="Enter your Password" name="password" id="password" autocomplete="on" onclick='checkform();' value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" class="input-field">
   				 	<img src="src/images/show.png" id="image" onclick="show_hide()">
   				 </div>
          
   				  <span id="message1"></span>
   				 <br><br>

				<label class="remember">
					 <input type="checkbox"> Remember Me
				</label>

				<a href="ForgotPassword.php" class="forgot">Forgot password?</a>
				<br><br> 

				<button type="submit" name="submit" class="login">Login</button>
				<br>

				<label>
					To create new account
				</label>
				<br>
				<a href="RegisterForm.php">Register </a>

			</form>
		</div>

		<script type="text/javascript" src='src/js/LoginForm.js'></script>

	</body>
</html>


