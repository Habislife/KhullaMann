 <!DOCTYPE html>
<html>
  <head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="src/css/NavBar.css">
   <link rel="stylesheet" type="text/css" href="src/css/FormStyle.css">
    <script type="text/javascript" src='src/js/LoginForm.js'></script>
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
      <a href="index.php">Home</a>
          <a href="about.php">About</a>
          <a href="Feedback.php">Contact Us</a>
          <a href="RegisterForm.php">Become a donor</a>
          <a href="DoneeRegForm.php">Sign Up</a>
          <a href="LoginForm.php" class="current">Login</a>
    </div>
  </div>
</header>

    
    
    <div class="box" align="center">
  <h1>Login</h1>
  <br>
  <form method="POST" onsubmit="return loginFormValidate()" action="src/db/loginServer.php" enctype="multipart/form-data">
    
      <input type="email" placeholder="Enter your Email" name="email" id="email" autocomplete="on"
         onkeyup='return loginFormValidate()' value="" class="input-field">
                <span id="message"></span>
    
    <br>
    
      <div id="field">
            <input type="password" placeholder="Enter your Password" name="password" id="password" autocomplete="on" onkeyup='return loginFormValidate()' value="" class="input-field">
             
            <img src="src/images/show.png" id="image" onclick="show_hide()">
           </div>
          
            <span id="message1"></span>
    
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

    
  <footer>
    <h3>Share this on </h3>
   <a href="https://www.facebook.com/"><img src="facebook1.png"></a> <a href="https://www.instagram.com/"><img src="instagram6.png"></a> <a href="https://twitter.com/"><img src="twitter3.png"></a> <br><br>   
   <button class="button_2"><a href="RegisterForm.php">Join Us</a></button>
    <br><br>
    <p>Khulla Mann, Copyright &copy; 2019</p>
  </footer>
  </body>
</html>


