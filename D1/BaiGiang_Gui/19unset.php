<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>VinaTAB EDU - Mon PHP</title>			
	</head>
	<body>
		<h1>Các hàm kiểm tra giá trị của biến</h1>			
		<?php
		$a = 5;
		unset($a);
		
		if (isset($a)){
			echo "Biến a = {$a}";
		} else {
			echo "Không tồn tại biến a";
		}
		?>
	</body>
</html>