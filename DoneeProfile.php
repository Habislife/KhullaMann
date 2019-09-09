<!-- <?php
//session_start();
//if($_SESSION['userid']==0)
{
  //header("Location: index.php");
}
  ?> -->
<!DOCTYPE html>
<html>
<head>
	<title>Donee Profile</title>
	<link rel="stylesheet" type="text/css" href="src/css/doneeProfile.css">
  <script type="text/javascript" src="src/js/doneeProfile.js"></script>
  

</head>
<body>
   <?php include 'Nav.html' ?>

    <div class="box">
			<form method="POST" onsubmit="return validateProfile()" action="" >
			
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
			    <input type="text" placeholder="Enter Username" name="username" id="username" onkeyup='return validateProfile()'>	
       </div>

				<span id='message1'></span><br>

			  <div class="inputBox">
   				<input type="email" placeholder="Enter Email" name="email" id="email" onkeyup='return validateProfile()'>
        </div>
   				<span id='message2'></span><br>

    		<div class="inputBox">
   				<input type="password" placeholder="Enter Password" name="password" id="password" onkeyup='return validateProfile()'>
        </div>
   				<span id='message3'></span><br>
    			
        <div class="inputBox">
   				 <input type="password" placeholder="Enter Re-Password" name="repassword" id="repassword" onkeyup='check();' onkeyup='return validateProfile()'>
        </div>
   				<span id='message'></span><br>

   			<div class="inputBox">
   				 <input type="text" placeholder="Enter Address" name="address" id="address" onkeyup='return validateProfile()'>
        </div>
   				<span id='message4'></span><br>
   				 
        <div class="inputBox">
   				 <input type="tel" placeholder="Enter Contact No." name="contact" id="contact" onkeyup='return validateProfile()'>
        </div>
   				<span id='message5'></span><br>

        <div class="inputBox">
            <input type="tel" placeholder="Enter Account No." name="account" id="account" onkeyup='return validateProfile()'>
        </div>
          <span id='message6'></span><br>

   				 <div align="center">
   					 <input type="submit" name="submit" class="register" value="save changes">
   					</div>
            
			</form>
		 </div>
</body>
</htmls