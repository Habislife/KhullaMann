<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard
	</title>
	<style type="text/css">
		html { 
	 margin: 0;
  	padding: 0;
  	background: url(../src//images/bg.png) no-repeat center center fixed; 
  	-webkit-background-size: cover;
 	-moz-background-size: cover;
 	-o-background-size: cover;
 	background-size: cover;
 	font-family: sans-serif;
}

		.box{
			border: 1px solid black;
			width : 350px;
			height: 350px;
			position: fixed;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			padding: 20px 50px; 
		}

		h1{
			color: #1889B5;
			text-decoration: underline;
		}
		a{
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

	 <?php include "admin.php"; ?>

	 <div class="box">
	  	<h1 align="center">STATISTICS</h1>
	  	<br><br>

	  	<label>
	  		<a href="DonorData.php" value="Donors">Donor : </a><?php echo $Donor ?>
	  	</label>
		<br><br>

		<label>
			<a href="DoneeData.php" value="Donees">Donee : </a><?php echo $Donee?>
		</label>
		<br><br>

		<label>
			<a href="DonationPost.php" value="Donation Post">Total Donation Post : </a><?php echo $Donation ?>
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
</body>
</html>