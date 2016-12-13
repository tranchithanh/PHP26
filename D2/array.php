<!DOCTYPE html>
<html>
	<head>
		<title>ARRAY DAY DU KEY VA VALUE</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h2>ARRAY DAY DU KEY VA VALUE</h2>
		<?php
			// $n = 5;
			// $str = "PHP26";
			// var_dump($str);
			// var_dump($n);
			//tao mang gom 3 hoc vien
			$arrHocVien = array(
				'hv1' => 'Nguyễn Văn A',
				'hv2' => 'Trịnh Phước Đức',
				'hv3' => 'Võ Nhựt'
				);
			$arrHocVien['hv4']='themvao';//them
			$arrHocVien[] = 'themvao2';

			$soPhanTuArrHocVien = count($arrHocVien);
			echo 'Số phần tử của mảng : '.$soPhanTuArrHocVien;

			echo "<pre>";
			print_r($arrHocVien);
			echo "</pre>";

			//kiem tra mang rong
			if (!empty($arrHocVien)) {
				echo "mang khac rong";
			}else{
				echo "mang rong";
			}

			echo "<pre>";
			var_dump($arrHocVien);
			echo "<pre>";

			echo $arrHocVien['hv4'];
		?>
	</body>
</html>