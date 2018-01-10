<?php
	global $title;
	global $seperator;
	global $description;
	global $maintenance;
	global $logo;
?>
<html>
	<head>
		<title><?php echo $title . $seperator . $description; ?></title>

		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="frontend/design/css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="frontend/design/css/stylesheet.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<div class="wrapper">
			<?php require_once("frontend/templates/header.php"); ?>
			<div class="layer">
				<div class="content">
					<h1>Login</h1>
          <form role="form" action="backend/account/login-handling.php" method="post">
            <div class="form-group">
              <label for="username">Username:</label>
              <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
				</div>
			</div>
			<?php require_once("frontend/templates/footer.php"); ?>
		</div>
	</body>
</html>
