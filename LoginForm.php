<!DOCTYPE html>
<html>
	<head>
		<title>Login Form</title>
		<link rel="stylesheet" type="text/css" href="src/css/Login.css">
	</head>
<body>

		<div class="box">
			<form  onsubmit="return checkForm()" align="center" method="POST"  action="src/db/loginServer.php">

				<h1 align="center">Login</h1>
				<br>

				<input type="email" placeholder="Enter your Email" name="email" value="" id="email" autocomplete="on"
				 onclick='checkform();'>
                <span id="message"></span>
				<br><br>

				<div id="field">
   				 	<input type="password" placeholder="Enter your Password" name="password" id="password" autocomplete="on" onclick='checkform();'>
   				 	<img src="src/images/show.png" id="image" onclick="show_hide()">
   				 </div>
   				  <span id="message1"></span>
   				 <br><br>

				<label class="remember">
					 <input type="checkbox"> Remember Me
				</label>

				<a href="" class="forgot">Forgot password?</a>
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