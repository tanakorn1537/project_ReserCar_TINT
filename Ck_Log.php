<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$conn = mysqli_connect("localhost","root","tanakorn1994","customer") or die ("ERROR :" . mysqli_error($conn));
	$query = "SELECT * FROM customer ";
	$result = mysqli_query($query);




  ?>
</body>
</html>