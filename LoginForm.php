 <!DOCTYPE html>
<html>
  <head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="src/css/LoginForm.css">
    <script type="text/javascript" src='src/js/LoginForm.js'></script>
  </head>
<body>

  <?php include 'indexNav.html';?>

    
    <span id="errorMessage" style="color: red;"></span>
    <div class="box" align="center">
  <h1>Login</h1>
  <br>
  <form method="POST" onsubmit="return formValidate()" action="src/db/loginServer.php" enctype="multipart/form-data">
    <div class="inputBox">
      <input type="email" placeholder="Enter your Email" name="email" id="email" autocomplete="on"
         onkeyup='checkform();' value="" class="input-field">
                <span id="message"></span>
    </div>
    <br>
    <div class="inputBox">
      <div id="field">
            <input type="password" placeholder="Enter your Password" name="password" id="password" autocomplete="on" onkeyup='checkform();' value="" class="input-field">
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


