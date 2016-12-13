<html>
	<head>
		<title>VinaTAB EDU - LT PHP</title>
	</head>
	<body>
	
	<h1>Thêm – Xóa 1 phần tử trong mảng</h1>
	<?php 
	$mangHocVien1 = array(
		"Nguyễn Văn An",
		"Trần Việt Anh",
		"Nguyễn Thị Hồng Hải"
	);

	$arHocVien = array(
				1 => array(
					'Ten_HocVien' => 'Nguyễn Văn Thảo',
					'DiemTrungBinh' => 95,
					'CapChungNhan' => 1
					),
				2 => array(
					'Ten_HocVien' => 'Huỳnh Thị Thanh Thủy',
					'DiemTrungBinh' => 85,
					'CapChungNhan' => 0
					),
				3 => array(
					'Ten_HocVien' => 'Ngô Việt Anh',
					'DiemTrungBinh' => 98,
					'CapChungNhan' => 1
					),
				4 => array(
					'Ten_HocVien' => 'Thái Hoàng Bảo Thy',
					'DiemTrungBinh' => 100,
					'CapChungNhan' => 1
					),
				);


	
	//thêm 1 phần tử vào mảng
	$mangHocVien1[3] = "Hồ Chí Tài";
	//xóa 1 phần tử mảng
	unset($mangHocVien1[2]);
	unset($arHocVien[3]);

	echo "<pre>";
	print_r($arHocVien);
	echo "</pre>";
	?>
	</body>
</html>
