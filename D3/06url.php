<html>
	<head>
		<title>VinaTAB EDU - LT PHP</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Lấy thông tin sv</h1>
		<?php
			echo "<pre>";
				print_r($_GET);//Lấy thông tin trên url
			echo "<pre>";

			$id = $_GET['mssv'];
			$name = $_GET['ten'];
			$age = $_GET['tuoi'];

			echo "MSSV : {$id}<br />Tên : {$name}<br />Tuổi : {$age}";
		?>
		<a href="06url.php?mssv=3&ten=Thành&tuoi=23">Lấy thông tin của Bạn</a>
	</body>
</html>
