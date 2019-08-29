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
  <link rel="stylesheet" type="text/css" href="src/css/DoneeMain.css">
  
</head>
<body>

  <?php include 'Nav.html' ?>

  <div class="container">
    <h3 align="center" style="padding-top: 80px; font-size: 20px; font-family: sans-serif;"><u>Previous Projects</u></h3>

  <div class="content" align="center" style="margin-top: 30px; border: 2px solid black;">
    <div class="card">
       <a href="#"><img src="src/images/anes-sabitovic-AyflGfRL9OA-unsplash.jpg" alt="Avatar" style="width:100%"></a>
        <h1>Refugee Campaign</h1>
        <p class="bio">Help the refugees.</p>
         <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem  Super slim and cfy um v.uper slim and cfy um vuper slim and cfy um upanv</p>
        <a href="post.php"><button id="viewbtn">View</button></a>
        <a href="LoginForm.php"><button id="donatebtn">Donate</button></a>
    </div>
      

      <div class="card">
       <a href="#"><img src="src/images/anes-sabitovic-AyflGfRL9OA-unsplash.jpg" alt="Avatar" style="width:100%"></a>
        <h1>Refugee Campaign</h1>
        <p class="bio">Help the refugees.</p>
         <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem  Super slim and cfy um v.uper slim and cfy um vuper slim and cfy um upanv</p>
        <a href="post.php"><button id="viewbtn">View</button></a>
        <a href="LoginForm.php"><button id="donatebtn">Donate</button></a>
    </div>
    
      <div class="card">
       <a href="#"><img src="src/images/anes-sabitovic-AyflGfRL9OA-unsplash.jpg" alt="Avatar" style="width:100%"></a>
        <h1>Refugee Campaign</h1>
        <p class="bio">Help the refugees.</p>
         <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem  Super slim and cfy um v.uper slim and cfy um vuper slim and cfy um upanv</p>
        <a href="post.php"><button id="viewbtn">View</button></a>
        <a href="LoginForm.php"><button id="donatebtn">Donate</button></a>
    </div>
  </div>

  <div class="post" align="center">
    <h1>NEED DONATION?</h1>
    <button type="submit" name="submit" class="create"><a href="./doneePage.php"> Create New Post</a></button>
  </div>

  
  </div>
  <script type="text/javascript" src="../js/index.js"></script>
</body>
</html>
