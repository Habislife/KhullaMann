<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard
	</title>
	<link rel="stylesheet" type="text/css" href="../src/css/NavBar.css">
	<style type="text/css">
		body{
		  font-family: Arial, Helvetica, sans-serif;
		  font-size: 15px;
		  line-height: 1.5;
		  padding: 0;
		  margin: 0;
		  text-align: center;
		}

		.box{
			border: 1px solid black;
			width : 450px;
			height: 450px;
			margin: 20px auto;
			padding: 20px 50px; 
			text-align: justify;
		}

		.box h1{
			color: #1889B5;
			text-decoration: underline;
		}

		.box a{
			text-decoration: none;
			color: #07558F;
		}

		label{
			color: #07558F;
			font-size: 32px;
		}
	</style>
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
      <a href="index.php">Home</a>
          <a href="about.php" class="current">About</a>
          <a href="Feedback.php">Contact Us</a>
          <a href="RegisterForm.php">Become a donor</a>
          <a href="DoneeRegForm.php">Sign Up</a>
          <a href="LoginForm.php">Login</a>
    </div>
  </div>
</header>


	 <?php include "admin.php"; ?>

	 <div class="box">

	  	<h1 align="center">STATISTICS</h1>
	  	<br><br>

	  	<label>
	  		<a href="Donorinfo.php" value="Donors">Donor : </a><?php echo $Donor ?>
	  	</label>
		<br><br>

		<label>
			<a href="Doneeinfo.php" value="Donees">Donee : </a><?php echo $Donee?>
		</label>
		<br><br>

		<label>
			<a href="DonationPostinfo.php" value="Donation Post">Total Donation Post : </a><?php echo $Donation ?>
		</label>
		<br><br>

		<label>
			<a href="DoneeVerifying.php" value="Verifying"> To Be Verify : </a><?php echo $Verification?>
		</label>
		<br><br>
		<label>
			<a href="Feedback.php" value="Feedback"> Feedback : </a><?php echo $Feedback?>
		</label>

	</div>

	<footer>
		<p>Khulla Mann, Copyright &copy; 2019</p>
	</footer>
</body>
</html>