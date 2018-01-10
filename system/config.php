<?php
	// Database connection
	$dbserver 			= "localhost";
	$dbusername 		= "root";
	$dbpassword 		= "";
	$db 						= "mmorts";

	// Create connection
	$conn = new mysqli($dbserver, $dbusername, $dbpassword, $db);

	// Check connection
	if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}
	else
	{
		// If connection is good, get data from db
		$query = "SELECT name, seperator, description, maintenance, logo FROM `configuration`";
		$result = mysqli_query($conn, $query);
		//$row = $result->fetch_assoc();
		$row = mysqli_fetch_assoc($result);
		// General Settings
		$title 					= $row['name'];
		$seperator 			= $row['seperator'];
		$description 		= $row['description'];
		$logo						= $row['logo'];

		// Technical Settings
		$maintenance 		= $row['maintenance'];
	}
?>
