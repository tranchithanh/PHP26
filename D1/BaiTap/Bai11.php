<!DOCTYPE html>
<html>
	<head>
		<title>Bài 11</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			$rand = rand(2,8);
			echo "rand = {$rand}<br />";//in ra cho dễ thấy rand
			$str = "Hôm nay thứ {$rand}<br />";

			switch ($rand) {
				case 8:
					echo "Hôm nay là chủ nhật<br />";
					break;
				default:
					echo $str;
					break;
			}

			if ($rand % 3 == 0) {
				echo "Số {$rand} chia hết cho 3<br />";
			}else{
				echo "Số {$rand} không chia hết cho 3<br />";
			}
		?>
	</body>
</html>