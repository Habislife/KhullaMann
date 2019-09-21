 <!DOCTYPE html>
<html>
  <head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="src/css/index.css">
    <link rel="stylesheet" type="text/css" href="src/css/Login.css">
    <script type="text/javascript" src='src/js/LoginForm.js'></script>
  </head>
<body>

 <header>
    <div class="container">
      <div id="branding">
        <h1><span class="highlight">Khulla</span> Mann</h1>
      </div>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="Feedback.php">Contact Us</a></li>
          <li><a href="RegisterForm.php">Become a donor</a></li>
          <li><a href="DoneeRegForm.php">Sign Up</a></li>
          <li class="current"><a href="LoginForm.php">Login</a></li>
        </ul>
      </nav>
    </div>
  </header>

    
    
    <div class="box" align="center">
  <h1>Login</h1>
  <br>
  <form method="POST" onsubmit="return loginFormValidate()" action="src/db/loginServer.php" enctype="multipart/form-data">
    <div class="inputBox">
      <input type="email" placeholder="Enter your Email" name="email" id="email" autocomplete="on"
         onkeyup='return loginFormValidate()' value="" class="input-field">
                <span id="message"></span>
    </div>
    <br>
    <div class="inputBox">
      <div id="field">
            <input type="password" placeholder="Enter your Password" name="password" id="password" autocomplete="on" onkeyup='return loginFormValidate()' value="" class="input-field">
             
            <img src="src/images/show.png" id="image" onclick="show_hide()">
           </div>
          
            <span id="message1"></span>
    </div>
    <br>
        <label class="remember">
           <input type="checkbox"> Remember Me
        </label>

        <a href="ForgotPassword.php" class="forgot">Forgot password?</a>
        <br><br>

    <input type="submit" name="log-in" value="Log In">
    <br><br>

        <label>
          To create new account
        </label>
        <br>
        <a href="RegisterForm.php" id="link">Register </a>

  </form>
</div>

    

  </body>
</html>


