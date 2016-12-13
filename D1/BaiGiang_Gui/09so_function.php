<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>VinaTAB EDU - Mon PHP</title>			
	</head>
	<body>
		<h1>Các hàm thường dùng trong số</h1>			
		<?php
		$so = 12189000.478;
		
		echo rand(1, 100) . "<br />";
		echo ceil($so) . "<br />";
		echo floor($so) . "<br />";
		echo number_format($so, 2, "," , ".") . "<br />";
		?>
	</body>
</html>