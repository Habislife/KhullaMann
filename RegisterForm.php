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
    <link rel="stylesheet" type="text/css" href="src/css/NavBar.css">
    <link rel="stylesheet" type="text/css" href="src/css/FormStyle.css">
    
     <script type="text/javascript" src="src/js/RegisterForm.js"></script>
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
          <a href="RegisterForm.php" class="current">Become a donor</a>
          <a href="DoneeRegForm.php">Sign Up</a>
          <a href="LoginForm.php">Login</a>
    </div>
  </div>
</header>

        
    <div class="box" align="center">
      <h1 align="center">Register</h1>

      <form name=registerForm method="POST"  onsubmit="return validateForm()" action="src/db/donorRegister.php" enctype="multipart/form-data">
      
         <div class="image_container">
          <div id="upload">
            <img id="image">
          </div>
          <input type="file" name="image" accept="image/*" id="file" onchange="loadFile(event)">
         </div> 
     
        
         <input type="text" placeholder="Enter Username" name="username" id="username" onkeyup='return validateForm()'>   
      
          
          <span id='message1'></span>

      
           <input type="email" placeholder="Enter Email" name="email" id="email" onkeyup='return validateForm()'>
      
        
          <span id='message2'></span>

        
           <input type="password" placeholder="Enter Password" name="password" id="password" onkeyup='return validateForm()'>
        
  
          <span id='message3'></span>
          
        
           <input type="password" placeholder="Enter Re-Password" name="repassword" id="repassword" onkeyup='return validateForm()' >
        
           
          <span id='message'></span>

        
           <input type="text" placeholder="Enter Address" name="address" id="address" onkeyup='return validateForm()'>
        
        
          <span id='message4'></span>
           
       
           <input type="tel" placeholder="Enter Contact No." name="contact" id="contact" onkeyup='return validateForm()'>
       
           
            <span id='message5'></span>

             <input type="submit" name="submit" class="register" value="Register" id="register">
             <br>
          
          <label>
            Want to Login?
            <a href="LoginForm.php">Login </a>
          </label>
        
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