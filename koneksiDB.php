<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h1> Demo Koneksi Database MySQL </h1>
	<?php
	$conn = mysqli_connect("localhost","root","","mydb");

	// Cek koneksi
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: ". mysqli_connect_error(); 
		exit(); 
	}
	?>
</body>
</html>
