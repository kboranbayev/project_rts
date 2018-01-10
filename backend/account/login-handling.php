<?php
	session_start();
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

  // Assign variables  from Form
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Encrypt password
  $password = md5($password);

  // Check if user is unique
  $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  if ($result = mysqli_query($conn, $sql))
  {
    $rowcount = mysqli_num_rows($result);
  }

  if ($rowcount == 1)
  {
    $_SESSION['loggedin'] = $username;
		header("Location: ../../index.php?msg=loginsuccess");
		die();
  }
  else {
    echo "The details are not found.";
  }
?>
