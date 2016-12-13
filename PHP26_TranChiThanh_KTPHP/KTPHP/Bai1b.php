<!DOCTYPE html>
<html>
	<head>
		<title>Bài 1</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			$a = rand(1,3);
			
			if ($a % 2 == 0) {
				echo "{$a} là số chẵn";
			}else{
				echo "{$a} là số lẻ";
			}
		?>
	</body>
</html>