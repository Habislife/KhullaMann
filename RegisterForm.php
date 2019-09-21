<!-- <?php
//session_start();
//if(isset($_SESSION['userid']))
{
  //if($_SESSION['role']="donor")
 {
  //header("Location:DonorPage.php");
 }
 //else if ($_SESSION['role']="donee")
  {
  //header("Location:DoneeMain.php"); 
 }
//else
{
  //header("Location:AdminPanel.php"); 
}

}
?>  --> 

<!DOCTYPE html>
<html>
  <head>
    <title>Register Form</title>
    <link rel="stylesheet" type="text/css" href="src/css/index.css">
    <link rel="stylesheet" type="text/css" href="src/css/Register.css">
    
     <script type="text/javascript" src="src/js/RegisterForm.js"></script>
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
          <li class="current"><a href="RegisterForm.php">Become a donor</a></li>
          <li><a href="DoneeRegForm.php">Sign Up</a></li>
          <li><a href="LoginForm.php">Login</a></li>
        </ul>
      </nav>
    </div>
  </header>


        
    <div class="box" align="center">
      <h1 align="center">Register</h1>

      <form name=registerForm method="POST"  onsubmit="return validateForm()" action="src/db/donorRegister.php" enctype="multipart/form-data">
      
      <div class="inputBox">
         <div class="image_container">
          <div id="upload">
            <img id="image">
          </div>
          <input type="file" name="image" accept="image/*" id="file" onchange="loadFile(event)">
         </div> 
      </div>
        
      <div class="inputBox">
         <input type="text" placeholder="Enter Username" name="username" id="username" onkeyup='return validateForm()'>   
      </div>
          
          <span id='message1'></span>

      <div class="inputBox">
           <input type="email" placeholder="Enter Email" name="email" id="email" onkeyup='return validateForm()'>
      </div>
        
          <span id='message2'></span>

        <div class="inputBox">
           <input type="password" placeholder="Enter Password" name="password" id="password" onkeyup='return validateForm()'>
        </div>
  
          <span id='message3'></span>
          
        <div class="inputBox">
           <input type="password" placeholder="Enter Re-Password" name="repassword" id="repassword" onkeyup='return validateForm()' >
        </div>
           
          <span id='message'></span>

        <div class="inputBox">
           <input type="text" placeholder="Enter Address" name="address" id="address" onkeyup='return validateForm()'>
        </div>
        
          <span id='message4'></span>
           
        <div class="inputBox">
           <input type="tel" placeholder="Enter Contact No." name="contact" id="contact" onkeyup='return validateForm()'>
        </div>
           
            <span id='message5'></span>

             <input type="submit" name="submit" class="register" value="Register" id="register">
             <br>
          
      
          <label>
            Want to Login?
            <a href="LoginForm.php">Login </a>
          </label>
        
        </form>
     </div>


  </body>
</html>