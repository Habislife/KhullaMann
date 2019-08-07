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
<a href="DoneeData.php" value="Donees">Donee:</a><?php echo $publishers?>
<a href="DonationPost.php" value="Donation Post">Total Donation Post:</a><?php echo $Donation ?>


</body>
</html>