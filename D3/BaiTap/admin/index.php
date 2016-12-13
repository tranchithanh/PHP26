<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Welcome</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="../css/reset.css" />
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
	</head>
	<body>
		<div class="wrapper">
			<h2 class="title">Welcome</h2>
			<div class="cont">
				<?php
					if (isset($_SESSION['username'])) {
						echo "Chào, admin";
					}
				?>
			</div>
		</div>
	</body>
</html>