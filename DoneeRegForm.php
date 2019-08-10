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
  </head>

	<body>
    
    <?php include 'FormNav.html';?>

    <div class="box">
		  <form name="doneeForm" onsubmit="return checkform()"method="POST"  action="src/db/doneeRegister.php" enctype="multipart/form-data">
			
				<h1 align="center">Register</h1>

        <div class="image_container">
          <div id="upload">
            <img id="profilepic">
          </div>
          <input type="file" name="image" accept="image/*" id="file" onchange="loadImage(event)">
          
        </div>
				

				<input type="text" placeholder="Enter Username" name="username" autocomplete="on" id="username">
				  <br><br>

				
   			<input type="email" placeholder="Enter Email" name="email" autocomplete="on" id="email">
   				<br><br>

    			
   			<input type="password" placeholder="Enter Password" name="password" id="password" onkeyup='check();'>
   				<br><br>

   			<input type="password" placeholder="Enter Re-Password" name="repassword" id="repassword" onkeyup='check();'>
            <span id='message'></span>
   				<br><br>

   			<input type="text" placeholder="Enter Address" name="address" autocomplete="on" id="address">
   				<br><br>

   			<input type="tel" placeholder="Enter Contact No." name="contact" autocomplete="on" id="contact">
   				<br><br>

   			<input type="text" placeholder="Enter Account No." name="account" autocomplete="on" id="account">
   				<br><br>

          <div class="image_container">
          <div id="upload">
            <img id="document">
          </div>
          <input type="file" name="document" accept="image/*" id="file" onchange="loadFile(event)">
          
        </div>
        <br><br>

   			<div align="center">
          <button type="submit" name="submit" class="register">Register</button>
          <br>
      
          <label> Want to Login?
            <a href="LoginForm.php">Login </a>
          </label>
        </div>
        
			</form>
    </div>

        <script type="text/javascript" src="src/js/DoneeReg.js"></script>
<script>
    var loadImage = function(event) {
      var image = document.getElementById('profilepic');
      image.src = URL.createObjectURL(event.target.files[0]);
    };

     var loadFile = function(event) {
      var image = document.getElementById('document');
      image.src = URL.createObjectURL(event.target.files[0]);
    };
  </script>
	</body>
</html>