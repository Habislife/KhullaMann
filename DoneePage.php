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
  <link rel="stylesheet" type="text/css" href="src/css/doneePage.css">
  
  <script type="text/javascript" src="src/js/doneePage.js"></script>
</head>
<body>
   <?php include 'Nav.html' ?>
   
   <br><br>
   <div class="box">
    
     <h1>Write your Post</h1>

        <form method="POST" onsubmit="return validatePost()" action="src/db/postUpload.php"  enctype="multipart/form-data">

          <div class="post_field" align="center" style="height: 600px;">
            <div class="inputBox">
              <input type="file" name="image" accept="image/*" id="file" onchange="loadFile(event)" onkeyup='return validatePost()'>
            </div>
              <div id="upload">
                <img id="image2">
              </div>
              <label>
                <span id="msg0"></span>
                <div class="inputBox">
                 <textarea rows="5"  placeholder="Title" name="title" id="title" onkeyup='return validatePost()'></textarea>
               </div>
              </label>
               <span id='msg1'></span>

              <label>
                <div class="inputBox">
                 <textarea rows="5" id="bio" placeholder="Write your bio here..." name="bio" onkeyup='return validatePost()'></textarea>
               </div>
              </label>
               <span id='msg2'></span>
              <br><br>

              <label>
                <div class="inputBox">
                <textarea rows="20" id="full" placeholder="Write full Description here..." name="description" onkeyup='return validatePost()'></textarea>
              </div>
              </label>
              <span id='msg3'></span>

              <input type="submit" name="submit" class="register" value="Post">
          </div>
        </form>
      </div>
  <script type="text/javascript" src="src/js/doneePage.js"></script>
  
</body>
</html>