<?php session_start();?>
<html>
	<head>
		<title>VinaTAB EDU - LT PHP</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Sử dụng SESSION</h1>
		<?php
			//cách sử dụng session
			if (isset($_SESSION['ten'])) {
				$ten = $_SESSION['ten'];
				echo "tên : {$ten}";
			}
			if (isset($_SESSION['tuoi'])) {
				$tuoi = $_SESSION['tuoi'];
				echo "<br />tuổi : {$tuoi}";
				//xóa session
				unset($_SESSION['tuoi']);
			}

			echo "<pre>";
			print_r($_SESSION);
			echo "<pre>";
		?>
	</body>
</html>
