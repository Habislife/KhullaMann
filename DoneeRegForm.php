<!DOCTYPE html>
<html>
	<head>
		<title>Donee Register Form</title>
		<link rel="stylesheet" type="text/css" href="src/css/Donee.css">
	</head>

	<body>
    <?php include 'Nav.html' ?>
    
    <div class="box">
		  <form name="doneeForm" onsubmit="return checkform()"method="POST"  action="src/db/doneeRegister.php" enctype="multipart/form-data">
			
				<h1 align="center">Register</h1>

        <div class="image_container">
          <div id="upload">
            <img id="image">
          </div>
          <input type="file" name="image" accept="image/*" id="file" onchange="loadFile(event)">
          
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

   			<div align="center">
          <button type="submit" name="submit" class="register">Register</button>
          <br>
      
          <label> Want to Login?
            <a href="LoginForm.html">Login </a>
          </label>
        </div>
        
			</form>
    </div>

        <script type="text/javascript" src="src/js/DoneeReg.js"></script>
<script>
    var loadFile = function(event) {
      var image = document.getElementById('image');
      image.src = URL.createObjectURL(event.target.files[0]);
    };
  </script>
	</body>
</html>