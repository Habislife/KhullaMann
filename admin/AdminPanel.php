<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard
	</title>
</head>
<body>
	 <?php include "admin.php"; ?>
	  <h1>STATISTICS</h1>
<a href="DonorData.php" value="Donors">Donor:</a><?php echo $Donor ?>
<br>
<a href="DoneeData.php" value="Donees">Donee:</a><?php echo $Donee?>
<br>
<a href="DonationPost.php" value="Donation Post">Total Donation Post:</a><?php echo $Donation ?>
<br>
<a href="DoneeVerifying.php" value="Verifying"> To Be Verify:</a><?php echo $Verification?>
</body>
</html>