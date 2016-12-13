<?php session_start();?>
<html>
	<head>
		<title>VinaTAB EDU - LT PHP</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Sử dụng SESSION</h1>
		<?php
			//xóa tất cả session
			session_destroy();

			echo "<pre>";
			print_r($_SESSION);
			echo "</pre>";
		?>
	</body>
</html>
