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
  <title>Donee Main Page</title>
  <link rel="stylesheet" type="text/css" href="src/css/DonorPage.css">
  
</head>
<body>

  <?php include 'Nav.html' ?>

  <!-- <div class="container"> -->
    <h3 align="center" style="padding-top: 80px; font-size: 20px; font-family: sans-serif;"><u>Previous Projects</u></h3>

  <div class="content" align="center" style="margin-top: 30px; border: 2px solid black;">
    <?php
   include'show.php';
   session_start();
   showMyproject($_SESSION['userid']); 

?>
  </div>


  <div class="post" align="center">
    <h1>NEED DONATION?</h1>
    <button type="submit" name="submit" class="create"><a href="./doneePage.php"> Create New Post</a></button>
  </div>

  
  </div>
  <script type="text/javascript" src="../js/index.js"></script>
</body>
</html>
