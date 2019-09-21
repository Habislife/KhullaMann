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
  <title>Donor Page</title>
  <link rel="stylesheet" type="text/css" href="src/css/donorPage.css">
</head>
<body>
  <?php include 'Nav.html' ?>

  <div class="content" align="center" style="margin-top: 80px;">
    <h1>Recent donations</h1>
    <?php
    include'show.php';
   showAllData();

    ?>
  </div>

  <script type="text/javascript" src="js/index.js"></script>
</body>
</html>