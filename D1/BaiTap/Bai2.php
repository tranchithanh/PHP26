<!DOCTYPE html>
<html>
	<head>
		<title>Bài 2</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			$tenhoa = "Hoa hồng";
			$giaban = 120000;
			$soluong = 4;
			$donvi = "VNĐ";
			$thanhtien = $giaban * $soluong;

			echo "Tên hoa: <strong>{$tenhoa}</strong><br />";
			echo "Giá bán: <strong>{$giaban} {$donvi}</strong> - Số lượng: <strong>{$soluong}</strong><br />";
			echo "Thành tiền: <strong>{$thanhtien} {$donvi}</strong><br /><br />";

			$donvimoi = str_replace("VNĐ", "đồng", $donvi);
			echo "Sau khi dùng str_replace:<br /><br />";

			echo 'Tên hoa: <strong>'.$tenhoa.'</strong><br />';
			echo 'Giá bán: <strong>'.$giaban.' '.$donvimoi.'</strong> - Số lượng: <strong>'.$soluong.'</strong><br />';
			echo 'Thành tiền: <strong>'.$thanhtien.' '.$donvimoi.'</strong><br />';
		?>
	</body>
</html>