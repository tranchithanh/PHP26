<html>
	<head>
		<title>VinaTAB EDU - LT PHP</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Truyền biến bằng phương thức $_GET</h1>
		<?php
			echo "<pre>";
				print_r($_GET);
			echo "</pre>";

			echo $_GET['age'].'<br />'.$_GET['fname'];
		?>
	</body>
</html>
