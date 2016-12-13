<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h3>IF ELSE</h3>
		<?php
			//Tạo ra số ngẫu nhiên từ 1-5
			//Cho chọn 4 số từ 1-4
			//Không in ra 5
			$n = rand(2,8);
			echo $n;
			echo "====================";
			switch ($n) {
				case 2:
					echo "thứ 2";
					break;
				case 3:
					echo "thứ 3";
					break;
				case 4:
					echo "thứ 4";
					break;
				case 5:
					echo "thứ 5";
					break;
				case 6:
					echo "thứ 6";
					break;
				case 7:
					echo "thứ 7";
					break;
				default:
					echo "chủ nhật";
					break;
			}
		?>
	</body>
</html>