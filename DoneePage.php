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

        <form method="POST" action="src/db/postUpload.php"  enctype="multipart/form-data">

          <div class="post_field" align="center" style="margin-top: 70px; height: 600px;">
            <div class="inputBox">
              <input type="file" name="image" accept="image/*" id="file" onchange="loadFile(event)">
            </div>
              <div id="upload">
                <img id="image2">
              </div>

              <label>
                <div class="inputBox">
                 <textarea rows="5" id="bio" placeholder="Write your bio here..." name="bio"></textarea>
               </div>
              </label>
              <br><br>

              <label>
                <div class="inputBox">
                <textarea rows="25" id="full" placeholder="Write full Description here..." name="description"></textarea>
              </div>
              </label>
              <br><br>

              <input type="submit" name="submit" class="register" vallue="Post">
          </div>
        </form>
      </div>
  
  <script>
    var loadFile = function(event) {
      var image = document.getElementById('image2');
      image.src = URL.createObjectURL(event.target.files[0]);
    };
  </script>

</body>
</html>