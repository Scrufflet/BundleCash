<?php
	session_start();

	include("php/variables.php");

	$page = "error";

	if(isset($_GET["page"]) AND file_exists("pages/".$_GET["page"].".php")) {

		$page = $_GET["page"];

	} elseif(!isset($_GET["page"])) {

		$page = "home";

	}
?>

<html>
	<head>
		<title>
			<?php echo $_SESSION["name"]; ?>
		</title>
		
		<link rel="stylesheet" href="css/main.php" type="text/css">
  		<link rel="stylesheet" href="css/header.php" type="text/css">
  		<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>

	</head>
	
	<body>

		<?php
			include('php/header.php');
		?>

		<?php
			include("pages/".$page.".php")
		?>

		<div id="footer">
			<div style="width: 800px;">
				<span style="display: inline-block;">
					<div><br>
						&copy; 2013 - Scrufflet - Copying 'the' or 'from the' source is strictly unlawful.
						<br><br>
					</div>
			    </span>
			</div>
		</div>

	</body>
</html>
