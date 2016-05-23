<?php
	include 'database_info.php';

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$stmt = $conn->prepare("INSERT INTO education(degree, time, location) VALUES(?, ?, ?)");
	$stmt->bind_param("sss", $degree, $time, $location);

	$degree = $_GET['degree'];
	$time = $_GET['time'];
	$location = $_GET['location'];
	
	echo "degree" . $degree;
	echo "time" . $time;
	echo "location" . $location;
	
	$stmt->execute();

	$stmt->close();
	mysqli_close($conn);
	
	header("location: index.php");
	
?>