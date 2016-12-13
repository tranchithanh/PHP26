<!DOCTYPE html>
<html>
	<head>
		<title>Bài 10</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			$n = 8;
			$i = 1;
			$tong = 0;

			while ($i <= $n) {
				$tong += $i;
				$i++;
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