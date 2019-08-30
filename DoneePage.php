<!-- <?php
//session_start();
//if(isset(!$_SESSION['userid']))
{
  //header("Location: index.php");
}
  ?> -->
<!DOCTYPE html>
<html>
<head>
  <title>Donee Page</title>
  <link rel="stylesheet" type="text/css" href="src/css/Doneepage.css">
  
</head>
<body>
   <?php include 'Nav.html' ?>

   <div class="box">
    
     <h1>Write your Post</h1>

        <form method="POST" onsubmit="return validatePost()" action="src/db/postUpload.php"  enctype="multipart/form-data">

          <div class="post_field" align="center" style="margin-top: 70px; height: 600px;">
            <div class="inputBox">
              <input type="file" name="image" accept="image/*" id="file" onchange="loadFile(event)" onkeyup='return validatePost()'>
            </div>
              <div id="upload">
                <img id="image2">
              </div>
              <span id="msg1"></span>
              <label>
                <div class="inputBox">
                 <textarea rows="5"  placeholder="Title" name="title" id="title" onkeyup='return validatePost()'></textarea>
               </div>
               <span id='msg0'></span>
              </label>

              <label>
                <div class="inputBox">
                 <textarea rows="5" id="bio" placeholder="Write your bio here..." name="bio" id="bio" onkeyup='return validatePost()'></textarea>
               </div>
               <span id='msg2'></span>
              </label>
              <br><br>

              <label>
                <div class="inputBox">
                <textarea rows="20" id="full" placeholder="Write full Description here..." name="description" id="description" onkeyup='return validatePost()'></textarea>
              </div>
              <span id='msg3'></span>
              </label>
              <br><br>

              <input type="submit" name="submit" class="register" value="Post">
          </div>
        </form>
      </div>
  <script type="text/javascript" src="src/js/doneePage.js"></script>
  
</body>
</html>