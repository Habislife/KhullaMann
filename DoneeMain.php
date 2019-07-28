<?php
session_start();
if($_SESSION['userid']==0)
{
  header("Location: index.php");
}


  ?>
<!DOCTYPE html>
<html>
<head>
  <title>Donee Main Page</title>
  <link rel="stylesheet" type="text/css" href="src/css/doneeMain.css">
</head>
<body>
 <?php include 'Nav.html' ?>

  <div class="content" align="center">
    <h1 align="center"><u>Previous Projects</u></h1>
    <div class="article">
      <h1>ARTICLE 1</h1><br><img src="src/images/img2.jpg"><span>vbebjknrknerv</span>
    </div>
    <div class="article">
      <h1>ARTICLE 2</h1><br><img src="src/images/img2.jpg"><span>vvrbevgvbtbtrbtrb</span>
    </div>
    <div class="article">
      <h1>ARTICLE 3</h1><br><img src="src/images/img2.jpg"><span>bfdvehverhbhrttrr</span>
    </div>
  </div>

  <div class="post" align="center">
    <button type="submit" name="submit" class="create"><a href="./doneePage.php"> Create New Post</a></button>
  </div>

  <div class="footer"><h1>Footer</h1></div>

  <script type="text/javascript" src="../js/index.js"></script>
</body>
</html>