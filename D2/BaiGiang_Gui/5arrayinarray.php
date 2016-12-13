<html>
	<head>
		<title>VinaTAB EDU - LT PHP</title>
	</head>
	<body>
	
	<h1>Mảng trong mảng</h1>
	<?php 
	//Tạo mảng chứa 3 học viên: $arStudent. 
    //- Mỗi học viên gồm các thông tin: Họ tên, điểm môn HTML, CSS, PHP

	$arStudent = array(
		"hv1" => array(
			"hoten" => "Nguyễn Văn A",
			"diemHTML" => 70,
			"diemCSS" => 90,
			"diemPHP" => 80,
		),
		"hv2" => array(
			"hoten" => "Nguyễn Văn B",
			"diemHTML" => 95,
			"diemCSS" => 100,
			"diemPHP" => 90,
		),
		"hv3" => array(
			"hoten" => "Nguyễn Văn C",
			"diemHTML" => 90,
			"diemCSS" => 100,
			"diemPHP" => 95,
		),
	);
	
	//2. In tên học viên thứ 1 và 3
	//tên học viên thứ 1
	$tenHV1 = $arStudent['hv1']['hoten'];
	echo "Tên học viên 1: {$tenHV1}";
	
	//tên học viên thứ 2
	$tenHV3 = $arStudent['hv3']['hoten'];
	echo "Tên học viên 3: {$tenHV3}";
	
	//3. In ra điểm các môn của học viên 2
	//lấy mảng học viên 2
	$arHV2 = $arStudent['hv2'];
	//lấy điểm các môn của học viên 2
	$diemHTML = $arHV2['diemHTML'];
	$diemCSS = $arHV2['diemCSS'];
	$diemPHP = $arHV2['diemPHP'];
	//in ra điểm các môn
	echo "<h2>Điểm các môn học viên 2 là: </h2>";
	echo "Điểm môn HTML {$diemHTML}<br />";
	echo "Điểm môn CSS {$diemCSS}<br />";
	echo "Điểm môn PHP {$diemPHP}<br />";
	
	//4. In tên và tính điểm trung bình các môn của học viên 2
	$tenHV2 = $arHV2['hoten'];
	$dtb2 = ($diemHTML + $diemCSS + $diemPHP) / 3;
	echo "<br />Tên học viên 2 là {$tenHV2}";
	echo "<br />ĐTB 3 môn của học viên 2 là {$dtb2}";
	?>
	</body>
</html>
