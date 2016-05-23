<?php
	include 'database_info.php';

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$stmt = $conn->prepare("DELETE FROM education WHERE education_id = ?");
	$stmt->bind_param("i", $education_id);

	$education_id = $_GET['education_id'];
	
	$stmt->execute();
	$stmt->close();
	
	echo "Education details for ID: " . $education_id . " has been deleted.";
?>