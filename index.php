<?php/*
session_start();
if(isset($_SESSION['userid']))
{
  if($_SESSION['role']="donor")
 {
   header("Location:DonorPage.php");
 }
 elseif ($_SESSION['role']="donee")
  {
  header("Location:DoneeMain.php"); 
 }
else
{
  header("Location:AdminPanel.php"); 
}

}*/
?>  
<!DOCTYPE html>
<html>
<head>
  <title>Khulla mann homepage</title>
  <link rel="stylesheet" type="text/css" href="src/css/homepage.css">
  
</head>
<body>
  
 <?php include 'indexNav.html' ?>
 
  <div style="margin-top: 50px;">
      <img  src="src/images/Khullamann.png" style="width: 100%;">
    </div>
    <br>

    <div class="content">

     <?php
     include'show.php';
     show();  ?>

    <script type="text/javascript" src="src/js/index.js"></script>
</body>
</html>