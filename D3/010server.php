<?php session_start();?>
<html>
	<head>
		<title>VinaTAB EDU - LT PHP</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Sử dụng SERVER</h1>
		<?php
			echo "<pre>";
			print_r($_SERVER);
			echo "</pre>";

			echo $_SERVER['DOCUMENT_ROOT'];
		?>
	</body>
</html>
