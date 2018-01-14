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

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <link href="frontend/design/css/stylesheet.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<div class="wrapper">
			<?php require_once("frontend/templates/header.php"); ?>
			<div class="layer">
				<div class="content">
					<h1>Register</h1>
					<form role="form" action="backend/account/registration-handling.php" method="post">
            <div class="form-group">
              <label for="username">
								<input type="text" class="form-control" id="username" name="username" required>
								<div class="label-text">Username:</div>
							</label>
            </div>
            <div class="form-group">
              <label for="email">
								<input type="email" class="form-control" id="email" name="email" required>
								<div class="label-text">Email Address:</div>
							</label>
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-outline-primary my-2 my-sm-0">Submit</button>
          </form>
				</div>
			</div>
			<?php require_once("frontend/templates/footer.php"); ?>
		</div>
	</body>
</html>
