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

  // Assign variables  from Form
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];

  // Encrypt password
  $password = md5($password);

  // Check if values are okay

  // Check if user is unique
  $sql = "SELECT username FROM users WHERE username = '$username'";
  if ($result = mysqli_query($conn, $sql))
  {
    $rowcount = mysqli_num_rows($result);
  }

  if ($rowcount >= 1)
  {
    echo "Username with a name " . $username . " is already exists.";
  }
  else {
    // Insert data into db
    $sql = "INSERT INTO users (username, password, email)
    VALUES ('$username', '$password', '$email')";

    // Execute query
    if ($conn->query($sql) === TRUE) {
      echo "Account has been added sucessfully.";
      header("Location: ../../index.php?msg=registrationsuccess");
  		die();
    }
    else
    {
      echo "Error: " . $sql . "<br/>" . $conn->error;
    }
  }
?>
