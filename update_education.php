<?php
	include 'database_info.php';
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$stmt = $conn->prepare("UPDATE education SET degree=?, time=?, location=? WHERE education_id=?");
	$stmt->bind_param("sssi", $degree, $time, $location, $education_id);

	$degree = $_GET['degree'];
	$time = $_GET['time'];
	$location = $_GET['location'];
	$education_id = $_GET['education_id'];
	
	$stmt->execute();

	$stmt->close();
	mysqli_close($conn);

	echo "Education details for ID: " . $education_id . " is successfully updated.";
?>