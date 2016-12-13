<!DOCTYPE html>
<html>
	<head>
		<title>Bài 8</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			$random = rand(0,100);

			echo 'random = '.$random.'<br />';//in ra cho dễ thấy random

			if ($random % 2 == 0) {
				echo "{$random} là số chẵn<br />";
			}

			if ($random % 3 == 0) {
				echo "Số {$random} chia hết cho 3<br />";
			}else{
				echo "Số {$random} không chia hết cho 3<br />";
			}

			if ($random >= 5 && $random <= 10) {
				echo "Số {$random} nằm trong khoảng từ 5 đến 10<br />";
			}else{
				echo "Số {$random} không nằm trong khoảng từ 5 đến 10<br />";
			}
		?>
	</body>
</html>