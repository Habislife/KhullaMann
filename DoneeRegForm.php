<!-- <?php
//session_start();
//if(isset($_SESSION['userid']))
{
  //if($_SESSION['role']="donor")
 {
   //header("Location:DonorPage.php");
 }
 //elseif ($_SESSION['role']="donee")
  {
  //header("Location:DoneeMain.php"); 
 }
//else
{
  //header("Location:AdminPanel.php"); 
}

}
?> -->
 
<!DOCTYPE html>
<html>
  <head>
    <title>Donee Register Form</title>
    <link rel="stylesheet" type="text/css" href="src/css/Donee.css">
    
    <script type="text/javascript" src="src/js/doneeRegister.js"></script>
  </head>


  <body>
    
    <?php include 'indexNav.html';?>

    <div class="box" align="center">
       <h1 align="center">Register</h1>
       <br>
      <form name="doneeForm" onsubmit="return checkForm();" method="POST"  action="src/db/doneeRegister.php" enctype="multipart/form-data">
      
       
      <div class="inputBox">
        <div class="image_container">
          <div id="upload">
            <img id="profilepic">
          </div>
            <input type="file" name="image" accept="image/*" id="profilepic" onchange="loadImage(event)">
        </div>
      </div>
        
      <div class="inputBox">
        <input type="text" placeholder="Enter Username" name="username" autocomplete="on" id="username" onkeyup='return checkForm()'>
      </div>
        <span id='message1'></span>

      <div class="inputBox">
        <input type="email" placeholder="Enter Email" name="email" autocomplete="on" id="email" onkeyup='return checkForm()'>
      </div>
      <span id='message2'></span>  

      <div class="inputBox"> 
        <input type="password" placeholder="Enter Password" name="password" id="password" onkeyup='return checkForm()'>
      </div>
      <span id='message3'></span>
        

      <div class="inputBox">
        <input type="password" placeholder="Enter Re-Password" name="repassword" id="repassword" onkeyup='return checkForm()'>
      </div>
          <span id='message'></span>
          

      <div class="inputBox">
        <input type="text" placeholder="Enter Address" name="address" autocomplete="on" id="address" onkeyup='return checkForm()'>
      </div>
       <span id='message4'></span> 

      <div class="inputBox">
        <input type="tel" placeholder="Enter Contact No." name="contact" autocomplete="on" id="contact" onkeyup='return checkForm()'>
      </div>
        <span id='message5'></span>

      <div class="inputBox">
        <input type="text" placeholder="Enter Account No." name="account" autocomplete="on" id="account" onkeyup='return checkForm()'>
      </div>
        <span id='message6'></span>

      <div class="inputBox">
        <div class="image_container">
          <div id="upload">
            <img id="document">
          </div>
          <input type="file" name="document" accept="image/*" id="document" onchange="loadFile(event)">
          
        </div>
      </div>
        <br>

        <input type="submit" name="submit" class="register" value="Register" id="register">
          <br>
  
          <label> Want to Login?
            <a href="LoginForm.php">Login </a>
          </label>
        </div>
        
      </form>
    </div>

        

  </body>
</html>