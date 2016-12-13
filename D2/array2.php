<!DOCTYPE html>
<html>
	<head>
		<title>ARRAY KHUYET KEY</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h2>ARRAY KHUYET KEY</h2>
		<?php
			$arrHocVien = array("Trần Chí Thành","Trương Thanh Nhật","Huỳnh Ngọc Rin");
			$arrHocVien[15]="Phạm Minh Tiệp";
			$arrHocVien[] = "Đoàn Văn Tư";

			unset($arrHocVien[2]);
			
			echo "<pre>";
			print_r($arrHocVien);
			echo "</pre>";

			echo $arrHocVien[15];
		?>
	</body>
</html>