<!DOCTYPE html>
<html>
	<head>
		<title>Register Form</title>
		<link rel="stylesheet" type="text/css" href="src/css/Register.css">
	</head>

	<body>
		<div class="box">
			<form method="POST"  onsubmit="fieldCheck();" action="src/db/donorRegister.php">
			
				<h1 align="center">Register</h1>
			
				<div class="image_container">
			        <div id="upload">
			            <img id="image">
			        </div>
			        <input type="file" name="image" accept="image/*" id="file" onchange="loadFile(event)">
          
       			 </div>

			 <input type="text" placeholder="Enter Username" name="username" id="username" onkeyup='fieldCheck();'>		
				<br><span id='message1'></span><br>

			
   				 <input type="email" placeholder="Enter Email" name="email" id="email" onkeyup='fieldCheck();'>
   				 <br><span id='message2'></span><br>

    		
   				 <input type="password" placeholder="Enter Password" name="password" id="password" onkeyup='fieldCheck();'>
   				 <br><span id='message3'></span><br>
    			
   				 <input type="password" placeholder="Enter Re-Password" name="repassword" id="repassword" onkeyup='check();' onkeyup='fieldCheck();'>
   				 <br><span id='message'></span><br>

   				
   				 <input type="text" placeholder="Enter Address" name="address" id="address" onkeyup='fieldCheck();'>
   				 <br><span id='message4'></span><br>
   				 
   				 <input type="tel" placeholder="Enter Contact No." name="contact" id="contact" onkeyup='fieldCheck();'>
   				  <br><span id='message5'></span><br>

   				 <div align="center">
   					 <button type="submit" name="submit" class="register">Register</button>
   					 <br>
			
					<label>
						Want to Login?
						<a href="LoginForm.php">Login </a>
					</label>
				</div>
			</form>
		 </div>

		 <script type="text/javascript" src="src/js/RegisterForm.js"></script>

		 <script>
    var loadFile = function(event) {
      var image = document.getElementById('image');
      image.src = URL.createObjectURL(event.target.files[0]);
    };
  </script>
		 
	</body>
</html>