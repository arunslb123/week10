<?php
	include 'database_info.php';
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$sql = "SELECT * FROM education";
	$result = $conn->query($sql);

	$json_result=array();

	while($row = $result->fetch_assoc()) {
		array_push($json_result, $row);
	}

	echo json_encode($json_result); 
	mysqli_close($conn);
?>