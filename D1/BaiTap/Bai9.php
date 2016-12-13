<!DOCTYPE html>
<html>
	<head>
		<title>Bài 9</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			$n = 8;
			$tong = 0;

			for ($i=1; $i <= $n; $i++) { 
				$tong += $i;
			}
			echo "Tổng các số từ 1 đến {$n} là : {$tong}<br />";

			if ($tong % 2 == 0) {
				echo "{$tong} chia hết cho 2<br />";
			}else{
				echo "{$tong} không chia hết cho 2<br />";
			}
		?>
	</body>
</html>