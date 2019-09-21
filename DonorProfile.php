<!-- <?php
//session_start();
//if(!isset($_SESSION['userid']))
{
  //header("Location: index.php");
}
  ?> -->
<!DOCTYPE html>
<html>
<head>
	<title>Donor Profile</title>
	<link rel="stylesheet" type="text/css" href="src/css/donorProfile.css">
  
</head>
<body>
   <?php include 'Nav.html' ?>

   <div class="box">
			<form method="POST" action="" >
			
				<h1 align="center">Profile</h1>

			 <div class="inputBox">
				<div class="image_container">
			        <div id="upload">
			            <img id="image">
			        </div>
			        <input type="file" name="image" accept="image/*" id="file" onchange="loadFile(event)">
       			 </div>
       </div>

       <div class="inputBox">
			   <input type="text" placeholder="Enter Username" name="username" id="username" onkeyup='fieldCheck();'>		
			 </div>
         <span id='message1'></span>
			
        <div class="inputBox">      
   				<input type="email" placeholder="Enter Email" name="email" id="email" onkeyup='fieldCheck();'>
        </div>
   			 <span id='message2'></span>

        <div class="inputBox">
   				<input type="password" placeholder="Enter Password" name="password" id="password" onkeyup='fieldCheck();'>
   			</div>
         <span id='message3'></span>
    			
        <div class="inputBox">
   			  <input type="password" placeholder="Enter Re-Password" name="repassword" id="repassword" onkeyup='check();' onkeyup='fieldCheck();'>
        </div>
   				<span id='message'></span>

   			<div class="inputBox">
   				 <input type="text" placeholder="Enter Address" name="address" id="address" onkeyup='fieldCheck();'>
        </div>
   				<span id='message4'></span>

        <div class="inputBox"> 
   				 <input type="tel" placeholder="Enter Contact No." name="contact" id="contact" onkeyup='fieldCheck();'>
        </div>
   				<span id='message5'></span>

   				 <div align="center">
   					 <input type="submit" name="submit" class="register" value="register" id="register">
   					</div>

			</form>
		 </div>
     <script type="text/javascript">
      var loadFile = function(event) {
      var image = document.getElementById('image');
      image.src = URL.createObjectURL(event.target.files[0]);
    };
     </script>
</body>
</html>