<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>VinaTAB EDU - Mon PHP</title>			
	</head>
	<body>
		<h1>Cấu trúc chọn lựa switch</h1>			
		<?php
		$thu = rand(2, 8);
		switch ($thu){
			case 2:
			echo "Thứ 2";
			break;
			
			case 3:
			echo "Thứ 3";
			break;
			
			case 4:
			echo "Thứ 4";
			break;
			
			case 5:
			echo "Thứ 5";
			break;
			
			case 6:
			echo "Thứ 6";
			break;
			
			case 7:
			echo "Thứ 7";
			break;
			
			default: 
			echo "Chủ nhật";
		}
		?>
	</body>
</html>