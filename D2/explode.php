<!DOCTYPE html>
<html>
	<head>
		<title>EXPLODE</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h2>EXPLODE</h2>
		<?php
			//thieu-nhi-nhi-dong.png
			//lấy ra đuôi file
			$str = "hinh-anh.thieu-nhi-nhi-dong.png";
			$arrTenHinhAnh = explode('.', $str);

			echo "<pre>";
				print_r($arrTenHinhAnh);
			echo "</pre>";

			$duoiHinhAnh = $arrTenHinhAnh[count($arrTenHinhAnh)-1];

			echo "Đuôi của tên hình '{$str}' là : {$duoiHinhAnh}";
		?>
	</body>
</html>