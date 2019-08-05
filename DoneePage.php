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
	<link rel="stylesheet" type="text/css" href="src/css/DoneePage.css">
</head>
<body>
   <?php include 'Nav.html' ?>

  <form method="POST" action="src/db/postUpload.php"  enctype="multipart/form-data">
    <div class="post_field" align="center" style="margin-top: 70px; height: 600px;">
        <input type="file" name="image" accept="image/*" id="file" onchange="loadFile(event)">
        <div id="upload">
          <img id="image2">
        </div>

        <label>
           <textarea rows="5" id="bio" placeholder="Write your bio here..." name="bio"></textarea>
        </label>
        <br><br>

        <label>
          <textarea rows="25" id="full" placeholder="Write full Description here..." name="description"></textarea>
        </label>
        <br><br>

        <button type="submit" name="submit" class="register">Post</button>
    </div>
  </form>
  <div class="footer" align="center"><h1>Footer</h1></div>

  <script>
    var loadFile = function(event) {
      var image = document.getElementById('image2');
      image.src = URL.createObjectURL(event.target.files[0]);
    };
  </script>

</body>
</html>