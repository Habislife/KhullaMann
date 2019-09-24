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
	<link rel="stylesheet" type="text/css" href="src/css/NavBar.css">
   <link rel="stylesheet" type="text/css" href="src/css/FormsStyle.css">
  
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
        <a href="DonorPage.php">Home</a>
        <a href="about.php">About</a>
        <a href="UserFeedback.php">Feedback</a>
        <a href="DonorProfile.php" class="current">Profile</a>
        <a href="logout.php">Log Out</a>
    </div>
  </div>
</header>

   <div class="box">
			<form method="POST" action="" >
			
				<h1 align="center">Profile</h1>

			 
				<div class="image_container">
			        <div id="upload">
			            <img id="image" align="center" style="max-width: 50%;">
			        </div>
			        <input type="file" name="image" accept="image/*" id="file" onchange="loadFile(event)">
       			 </div>
       

       
			   <input type="text" placeholder="Enter Username" name="username" id="username" onkeyup='fieldCheck();'>		
			
         <span id='message1'></span>
			
            
   				<input type="email" placeholder="Enter Email" name="email" id="email" onkeyup='fieldCheck();'>
        
   			 <span id='message2'></span>

        
   				<input type="password" placeholder="Enter Password" name="password" id="password" onkeyup='fieldCheck();'>
   			
         <span id='message3'></span>
    			
        
   			  <input type="password" placeholder="Enter Re-Password" name="repassword" id="repassword" onkeyup='check();' onkeyup='fieldCheck();'>
        
   				<span id='message'></span>

   			
   				 <input type="text" placeholder="Enter Address" name="address" id="address" onkeyup='fieldCheck();'>
        
   				<span id='message4'></span>

        
   				 <input type="tel" placeholder="Enter Contact No." name="contact" id="contact" onkeyup='fieldCheck();'>
        
   				<span id='message5'></span>

   				 <div align="center">
   					 <input type="submit" name="submit" class="register" value="register" id="register">
   					</div>

			</form>
		 </div>

     <footer>
    <p>Khulla Mann, Copyright &copy; 2019</p>
  </footer>
     <script type="text/javascript">
      var loadFile = function(event) {
      var image = document.getElementById('image');
      image.src = URL.createObjectURL(event.target.files[0]);
    };
     </script>
</body>
</html>