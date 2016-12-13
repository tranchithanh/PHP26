<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h3>Các hàm thường dùng trong số</h3>
		<?php
			echo rand(1,10).'<br />';

			$n1 = 9.9;
			$n2 = 123456789.987654321;

			echo ceil($n1).'<br />';
			echo floor($n1).'<br />';
			echo number_format($n2,3,',','.');
		?>
	</body>
</html>