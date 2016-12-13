<?php session_start();?>
<html>
	<head>
		<title>VinaTAB EDU - LT PHP</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>SESSION</h1>
		<?php
		//Khởi tạo session: ten , tuoi
			$_SESSION['ten'] = "Chí Thành";
			$_SESSION['tuoi'] = 234;
			//cách sử dụng session
			if (isset($_SESSION['ten'])) {
				$ten = $_SESSION['ten'];
				echo "tên : {$ten}";
			}
			if (isset($_SESSION['tuoi'])) {
				$tuoi = $_SESSION['tuoi'];
				echo "<br />tuổi : {$tuoi}";
			}
		?>
	</body>
</html>
