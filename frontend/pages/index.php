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
    <link href="frontend/design/css/stylesheet.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<div class="card">
			<div class="card-header">
				<!-- Navbar goes here -->
			</div>

			<div class="card-body">
				<?php require_once("frontend/templates/header.php"); ?>
				<!--
				<div class="layer">
					<div class="content">
						<h1>Index</h1>
						<p>This is the index page</p>
						<?php
							if (isset($_GET['msg']))
							{
								$msg = $_GET['msg'];
								if ($msg == "loginsuccess")
								{
									$msg = "You sucessfully logged in!";
								}
								elseif ($msg == "logoutsuccess")
								{
									$msg = "You sucessfully logged out!";
								}
								elseif ($msg == "registrationsuccess")
								{
									$msg = "You sucessfully registered!";
								}
								?>
							<div class="alert alert-success"><?php echo $msg;?></div>
								<?php
							}
							if (isset($_SESSION['loggedin']))
							{
								?>
								<h3>Dashboard</h3>
								<?php
							}
						?>
					</div>
				</div>
			-->
				<?php //require_once("frontend/templates/footer.php"); ?>
			</div>
		</div>
	</body>
</html>
