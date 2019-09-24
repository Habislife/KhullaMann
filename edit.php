<?php 
include'src/db/connection.php';
  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($conn, "SELECT * FROM donation_post WHERE post_id=$id");

    if (count($record) == 1 ) {
      $n = mysqli_fetch_array($record);
      $title = $n['title'];
      $description = $n['description'];
      $bio=$n['bio'];
    }  ?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit Page</title>
  <link rel="stylesheet" type="text/css" href="src/css/NavBar.css">
  <link rel="stylesheet" type="text/css" href="src/css/DoneePage.css">
  
  <script type="text/javascript" src="src/js/doneePage.js"></script>
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
      <a href="index.php" class="current">Home</a>
          <a href="about.php">About</a>
          <a href="Feedback.php">Contact Us</a>
          <a href="RegisterForm.php">Become a donor</a>
          <a href="DoneeRegForm.php">Sign Up</a>
          <a href="LoginForm.php">Login</a>
    </div>
  </div>
</header>
   
   <br><br>
   <div class="box">
    
     <h1>Write your Post</h1>

        <form method="POST" onsubmit="return validatePost()" action="src/db/postUpdate.php"  enctype="multipart/form-data">

          <div class="post_field" align="center" style="height: 600px;">
            
              <input type="file" name="image" accept="image/*" id="file" onchange="loadFile(event)" onkeyup='return validatePost()'>
            
              <div id="upload">
                <img id="image2">
              </div>
              <label>
                <span id="msg0"></span>
                
                 <input type="text" placeholder="Enter Title" name="title" id="title" onkeyup='return validatePost()' value="<?php echo $title ?>">
               
              </label>
               <span id='msg1'></span>

              <label>
                
                 <textarea rows="5" id="bio" placeholder="Write your bio here..." name="bio" onkeyup='return validatePost()' value="<?php echo $bio ?>"></textarea>
               
              </label>
               <span id='msg2'></span>
              <br>

              <label>
                
                <textarea rows="20" id="full" placeholder="Write full Description here..." name="description" onkeyup='return validatePost()' value="<?php echo $description ?>"></textarea>
              
              </label>
              <span id='msg3'></span>

              <input type="submit" name="submit" class="register" value="Update">
          
        </form>
      </div>

      <footer>
    <p>Khulla Mann, Copyright &copy; 2019</p>
  </footer>
  
  <script type="text/javascript" src="src/js/doneePage.js"></script>
  
</body>
</html>