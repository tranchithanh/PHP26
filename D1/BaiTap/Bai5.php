<!DOCTYPE html>
<html>
	<head>
		<title>Bài 5</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			$tenhoa = "Hoa hồng đỏ";
			$giaban = 120000;
			$soluong = 4;
			$thanhtien = $giaban * $soluong;
			$donvi = "VNĐ";

			echo 'Tên hoa: <strong>'.$tenhoa.'</strong><br />';
			echo 'Giá bán: <strong>'.number_format($giaban,0,',','.').' '.$donvi.'</strong> - Số lượng : <strong>'.$soluong.'</strong><br />';
			echo 'Thành tiền: <strong>'.number_format($thanhtien,0,',','.').' '.$donvi.'</strong><br />';
		?>
	</body>
</html>